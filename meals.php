<?

$xml = simplexml_load_file("MFPdata.xml") or die("Error: Cannot create object");


$caloriesRemaining = 2000;

function random_meal($meals, $caloriesRemaining) {
  $filteredMeals = [];

  foreach($meals as $meal) {
    if(get_calories($meal) < $caloriesRemaining) {
      $filteredMeals[] = $breakfast; //appending to $filteredMeals
    }
  }

  $randomKey = array_rand($filteredMeals, 1);
  return $filteredMeals[$randomKey];
}

function get_calories($myRandomMeal){
    return (int) $myRandomMeal->xpath('Calories')[0];
}

$breakfasts = $xml->xpath('/data/Breakfast');

$myRandomBreakfast = random_meal($breakfasts, $caloriesRemaining);
// $carloriesRemaining =  $caloriesRemaining - get_calories($myRandomBreakfast);
echo $myRandomBreakfast;

// $lunches = $xml->xpath('/data/Lunch');
// $myRandomLunch = random_meal($lunches, $caloriesRemaining);
//
// $dinners = $xml->xpath('/data/Dinner');
// $myRandomDinner = random_meal($dinners, $caloriesRemaining);

// $lunches = $xml->xpath('/data/Snacks');
// $myRandomSnacks = random_meal($snacks, $caloriesRemaining);

$myMeal = [$myRandomBreakfast, $myRandomLunch, $myRandomDinner, $myRandomSnacks];
var_dump($myMeal);
