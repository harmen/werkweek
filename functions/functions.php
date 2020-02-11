<?php 

  function daysArray() {
    return array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag");
  }

  function workedDays() {
    $array_minutes = handleForm();
    $worked_days = 0;
    if ($array_minutes) {
      foreach ($array_minutes as $min_day) {
        if ($min_day != 0) {
          $worked_days ++;
        }
      }
    }
    return $worked_days;
  }

  function totalTime() {
    $array_minutes = handleForm();
    $total_minutes = 0;
    if ($array_minutes) {
      foreach ($array_minutes as $min_day) {
        $total_minutes = $total_minutes + $min_day;
      }
    }
    $hours = floor($total_minutes / 60);
    $min = $total_minutes - ($hours * 60);
    echo $hours.":".$min;
  }

  function longestDay() {
    $array = handleForm();
    if ($array) {
      arsort($array);
      reset($array);
      echo key($array);
    }
  }
  
  function handleForm() {
    if (!empty($_GET) ) {
      $array = array();
      $array["maandag"] = $_GET["maandag_hours"] * 60 + $_GET["maandag_minutes"];
      $array["dinsdag"] = $_GET["dinsdag_hours"] * 60 + $_GET["dinsdag_minutes"];
      $array["woensdag"] = $_GET["woensdag_hours"] * 60 + $_GET["woensdag_minutes"];
      $array["donderdag"] = $_GET["donderdag_hours"] * 60 + $_GET["donderdag_minutes"];
      $array["vrijdag"] = $_GET["vrijdag_hours"] * 60 + $_GET["vrijdag_minutes"];
      return $array;
    }
  }

?>