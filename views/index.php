<?php include("../functions/functions.php") ?>
<html>
  <head>
    <link rel="stylesheet" href="../assets/css/style.css"> 
    <title>Werkweek Uren</title>
  </head>

  <body>
    <h1>Overzicht werkweek</h1>
  </body>

  <form action="<?php handleForm();  ?>" method="get">
    <table>
      <tr>
        <th>Dag</th>
        <th>Uren</th>
        <th>Minuten</th>
      </tr>

        <?php $days = daysArray(); ?>
        <?php foreach ($days as $day) { ?>
          <tr>
            <td><?php echo $day; ?></td>
            <td><input name="<?php echo $day ?>_hours" type="number" value="0" ></td>
            <td><input name="<?php echo $day ?>_minutes" type="number" value="0" ></td>
          </tr> 
        <?php } ?>
      </table>    
      <input type="submit">
    </form>

  <p>Aantal werkdagen: <?php echo workedDays(); ?></p>
  <p>Totale werktijd: <?php echo totalTime(); ?></p>
  <p>Langste werkdag <?php echo longestDay(); ?></p>


</html>