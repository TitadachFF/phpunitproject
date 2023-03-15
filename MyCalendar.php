<?php

class MyCalendar
{
public function checkDayNameOfDate($nday,$nmonth){

   $input_date = $nday."/".$nmonth."/"."2023";

    $datetime = DateTime::createFromFormat('d/m/Y',  $input_date);
    return $datetime->format('l');
}
}