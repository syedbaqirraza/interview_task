# interview_task
In that repository, I worked on two different tasks: the first was to drag and drop a file, and also use a cron job to add a watermark to an image. The second is about finding an early time slot for a meeting.

To run this project, first run the command "composer update || composer install."
then generate a key by running this command: "php artisan generate:key".
Then, change the.evn file to connect to the database.
then run the migration command "php artisan migrate."
then run project by running command "php artisan serve"


Task Details:

1) "Drag and Drop Image Uploading and add Watermark"

The purpose of this task was to create a software for uploading images and adding a watermark to them. The software is designed to accept image uploads via drag and drop and to add the watermark using a cron job. The watermark is added to the top-center  o the image and displays the date in the format of "YYYY-MM-DD". The software also logs the successful addition of the watermark for each image. The uploaded images are stored in the local storage, and the watermark status for each image is recorded in the database. The software has been developed using the Laravel framework, and the images are processed using the Intervention Image library. The cron job runsdaily and adds the watermark to all the images that have not been watermarked yet.


1) "Find Earliest Solt For Meeting"

Given a set of schedules and a meeting duration, this code should find the earliest available time slot for a meeting.It starts by converting the start and end times of the schedules into unix timestamps using strtotime(). It then creates an array of occupied time slots by iterating through each schedule and marking the corresponding time slots in the timeline array as "occupied."

Finally, it scans through the timeline, starting from the earliest time of the day, and checks if there is a gap of the specified duration. If a gap is found, the start time of that gap is stored in the variable "earliesty," which then checks if there is a gap of the specified duration. If a gap is found, the start time of that gap is stored in the variable "earliest." The code then returns the earliest time.
