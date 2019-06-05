<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = array("Salad" , "Lentils" , "Tofu" , "Cheese");

/*
Print every array element in a new line.
*/

echo "$food[0]<br>";
echo "$food[1]<br>";
echo "$food[2]<br>";
echo "$food[3]<br>";

    
    




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>";
for ($i = 0; $i < sizeof($food); $i++) {  
echo "<li>$food[$i]</li>";
}
echo "<ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [
    "salad"=>"Greens",
    "lentils"=>"Pulses",
    "Tofu"=>"Protein",
    "Cheese Burger"=>"dairy",
];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach($food_assoc as $key => $value) {
    echo $key . " &nbsp; | &nbsp; " . $value . "<br>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$food_assoc = array
  (
  array("salad",Vegetable,Europe),
  array("Lentils",Pulses,Asia),
  array("Tofu",Protein,Asia),
  array("Cheese Burger",Fast food,USA),
  );

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo $food_assoc[0][0]." | ".$food_assoc[0][1]." | ".$food_assoc[0][2].".<br>";
echo $food_assoc[1][0]." | ".$food_assoc[1][1]." | ".$food_assoc[1][2].".<br>";
echo $food_assoc[2][0]." | ".$food_assoc[2][1]." | ".$food_assoc[2][2].".<br>";
echo $food_assoc[3][0]." | ".$food_assoc[3][1]." | ".$food_assoc[3][2].".<br>";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
?>