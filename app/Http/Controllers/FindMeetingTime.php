<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindMeetingTime extends Controller
{
    public function index()
    {

        // Convert meeting schedules into a timeline array of occupied time slots
        $duration = 60;
        $schedules = [
                        [['09:00', '11:30'], ['13:30', '16:00'], ['16:00', '17:30'], ['17:45', '19:00']],
                        [['09:15', '12:00'], ['14:00', '16:30'], ['17:00', '17:30']],
                        [['11:30', '12:15'], ['15:00', '16:30'], ['17:45', '19:00']]
                    ];
            $start = strtotime("09:00");
            $end = strtotime("19:00");
            $timeline = [];
            foreach ($schedules as $person) {
                foreach ($person as $meeting) {
                    $startTime = strtotime($meeting[0]);
                    $endTime = strtotime($meeting[1]);
                    for ($i = $startTime; $i < $endTime; $i += 60) {
                        $timeline[date("H:i", $i)] = true;
                    }
                }
            }
            // Find earliest available time slot with specified duration
            $earliest = null;
            for ($i = $start; $i <= $end - $duration * 60; $i += 60) {
                $slotStart = date("H:i", $i);
                $slotEnd = date("H:i", $i + $duration * 60);
                if (!isset($timeline[$slotStart]) && !isset($timeline[$slotEnd])) {
                    $earliest = $slotStart;
                    break;
                }
            }        
        

            
          // Return earliest time slot
         return view('findMeetingTime.index',compact('earliest'));
    }
    
        
    
}
