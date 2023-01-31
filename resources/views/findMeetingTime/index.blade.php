<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>How to Upload Files with Drag 'n' Drop and Image preview in Laravel 8 using dropzone</title>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }

        body {
            background-color: #EDF7EF
        }

    </style>

</head>
<body>
    

    
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12 margin-tb ">
                <div class="text-center mt-2">
                    

                       <p>I gave a three-dimensional array as input to find the earliest time slot for a meeting and also give the meeting duration.</p>
                       <p>
                        $duration = 60;
                        $schedules = [
                                        [['09:00', '11:30'], ['13:30', '16:00'], ['16:00', '17:30'], ['17:45', '19:00']],
                                        [['09:15', '12:00'], ['14:00', '16:30'], ['17:00', '17:30']],
                                        [['11:30', '12:15'], ['15:00', '16:30'], ['17:45', '19:00']]
                                    ];
                       </p>
                        <button type="button" class="btn btn-success btn-lg mt-2">Output earliest Time Slot available at {{$earliest}}</button>                    
                   
                </div>
            </div>
        </div>
      
    </div>   
</body>
</html>