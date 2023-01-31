<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\FileUpload;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class Kernel extends ConsoleKernel
{
    
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Schedule for every mint task to add watermark to images
        $schedule->call(function () {
            // Retrieve files without watermark
            $files = FileUpload::where('watermark',0)->get();                
            foreach($files as $file)
            {
                // Load image using Image Intervention Library
                $img = Image::make(storage_path('app/public/' . $file->filename));            
                // Create watermark canvas
                $watermark = Image::canvas(100, 20);
                // Add date as watermark text
                $watermark->text(date('Y-m-d'), 10, 10,function($font) { 
                    $font->size(100);  
                    $font->color('#000000');   
                });
                // Resize watermark canvas to fit aspect ratio
                $watermark->resize(null, 100, function ($constraint) {
                    $constraint->aspectRatio();
                });        
                // Insert watermark on image
                $img->insert($watermark, 'top-right', 10, 10);
                // Save the watermarked image
                $img->save(storage_path('app/public/' .$file->filename));  
                // Log the successful watermark addition
                Log::info('watermark added successfully');
                // Update file record to indicate the addition of watermark
                $fileRecord = FileUpload::find($file->id);
                $fileRecord->watermark=1;
                $fileRecord->save();
            }   
        })->everyMinute();




    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
