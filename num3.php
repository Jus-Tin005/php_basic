<?php

// php date() & time() function

// date() syntax
// date() = y-m-d / d/m/Y
/*
! format = d = 03 or 17  - day of the month
!        = j = 3 0r 17   - day of the month
!        = D = Mon       - day of the week as a three-letter abbreviation
!        = l = Monday    - full day of the week
!        = m = 09 0r 12  - month as a number
!        = n = 9 or 12   - month as a number
!        = M = Sep       - month  as a three-letter abbreviation
!        = F = September - full month
!        = y = 18        - two digit year
!        = Y = 2018      - full year
*/








// echo date('Y'); // 2022
// echo date('Y'); // 2022
// echo date('M'); // Aug
// echo date('m'); // 08
// echo date('D'); // Sun
// echo date('d'); // 21 (day)
// echo date('Y/m/d'); // 2022/08/21 ( most used)
// echo date('Y.m.d'); // 2022.08.21
// echo date('Y-m-d'); // 2022-08-21

// echo date('Y-m-d H:i:s'); // 2022-08-21 11:49:17
// echo "<br><br>";




// timeStamp  = 1rst january 1970 00:00:00 Greenwich Mean Time(GMP)

// echo time();  // 1661075729 (GMT code)
echo "<br><br>";




// mktime() function
                                             // optional = is_dst
// mktime(hour,minute,second,month,day,year, is_dst);


// echo date("Y/m/d",mktime(0,0,0,8,21,2022)) . "<br>"; // 2022/08/21
// echo "Dec 11, 2021 was on a ".date("l", mktime(0,0,0,10,3,2021)); // Dec 11, 2021 was on a Sunday ( l = L)

// echo "<br>";

// echo "Time & Date : " . date("d-m-Y h:i:sa") . "<br><br>";
echo date("l",mktime(0,0,0,8,21,2022)) . "<br>"; // Sunday
echo date("d-m-Y",mktime(0,0,0,8,21,2022)) . "<br>";  // 21-08-2022
echo date("h:i:sa",mktime(0,0,0,8,21,2022)) . "<br>";  // 12:00:00am
echo date("d-m-Y h:i:sa",mktime(0,0,0,8,21,2022)) . "<br>";  // 21-08-2022 12:00:00am



// gmmktime() function
echo date("d-m-Y h:i:sa",gmmktime(0,0,0,8,21,2022)) . "<br>";  // 21-08-2022 02:00:00am






// date(format,timestamp) = current Date & Time
// mktime(hour,minute,second,month,day,year) =
// gmmtime(hour,minute,second,month,day,year) = GMT date.






?>