<!DOCTYPE html>
<html>
  <head>
    <title>myEATS</title>
    <script type="text/javascript" src="index.js"></script>
    <link href="index.css" rel="stylesheet" type="text/css" />
    <? include "meals.php";
  </head>

  <body>
    <p><h1>myFitnessEATS</h1></p>

<?
if($_GET['calories']) {
  //do something
}
  $calories = $_GET['calories']; //do something with this
  ?>

  <p><a href="meals.php">Meals</a><br><br></p>

      <p>Choose how many calories you would like to eat today and I'll give you a suggestion that totals up to your desired calorie intake based on previous MyFitnessPal entries.</p><br><br>

          <form action="" method="get">
          How many calories would you like to eat today?<br><br>
          <input type="value" required="Required" name="calories">
          <br><br>
          <button type="submit" value="submit">Get my meals!</button>
        </form><br><br>


          <p id="meals"></p>

          <?print_r($_SESSION);?>



























</html>
