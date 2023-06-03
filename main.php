<?php
echo "\n";
/* NOTE: to see your output in the console,
   follow your output with a new line "\n"

   2nd NOTE: This is only for Repl.
   Do not make a habit of adding the new line character
   in your PHP projects.
*/

/* 01: Create a class named Vehicle that is initialized 
with a $type value passed to the constructor. Also, add 
a get_type method to the class.
*/
class Vehicle {
  public $type;
  function __construct($type){
    $this->type = $type;
  }
  function get_type() {
    return $this->type;
  }
}

/* 02: Create an instance of Vehicle named 
$myVehicle and pass in the value "electric" 
to the constructor. Call the get_type function on the 
instance and output the result. */ 
$myVehicle = new Vehicle("electric");
echo($myVehicle->get_type() . "\n");

/* 03: Decode the following $jsonObj and store it
in a $postObj variable. Output the title and body 
values from $postObj */
$jsonObj = '{
    "userId": 1,
    "id": 1,
    "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
    "body": "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
  }';
$postObj = json_decode($jsonObj);
echo($postObj->title . "\n" . $postObj->body . "\n");

/* 04: This line of code is reading the posts.json file: */
$postsJSON = file_get_contents('posts.json');
/* Decode $postsJSON and output the title from the
third element in the resulting array. */
$posts = json_decode($postsJSON); 
echo($posts[2]->title . "\n");
/* 05: This line of code is reading the users.json file: */
$usersJSON = file_get_contents('users.json');
/* Decode $usersJSON into an associative array.
Do you have one array or many?
Loop through the decode result and output the email of
each user on a new line. */
$result = json_decode($usersJSON);
foreach($result as $value) {
  echo($value->email . "\n"); 
}


/* 06: Create a new Vehicle instance named myTruck
from the Vehicle class you created in #01. Pass in the
value "gasoline" to the constructor. Output the
result of using json_encode on $myTruck  */
$myTruck = new Vehicle("gasoline");
echo(json_encode($myTruck) . "\n");

/* 07: Create a new class named Pet. 
The constructor should accept a $name 
and a $sound value. 
$sound should be a private property and 
$name can be a public property. 
There should also be a public property 
called $species.
Add a get_name method to the class. 
Also, add get and set species methods to the 
class. Finally, add a speak method that outputs 
the value of the $sound property.
*/
class Pet {
  public $name;
  public $species;
  private $sound;
  function __construct($name, $sound) {
    $this->name = $name;
    $this->sound = $sound;
  }
  function get_name() {
    return $this->name;
  }
  function set_species($species) {
    $this->species = $species;
  }
  function get_species() {
    return $this->species;
  }
  function speak() {
    return $this->sound;
  }
}

/* 08: Create three instances of the Pet 
class. $pet1, $pet2, and $pet3. 
$pet1 should be named "Spot" and makes the sound "Moo!" 
$pet2 should be named "Lucky" and makes the sound "Bark!" 
$pet3 should be named "Daisy" and makes the sound "Quack!" 
Call the speak method for each Pet instance and output 
the result.*/
$pet1 = new Pet("Spot", "Moo!");
$pet2 = new Pet("Lucky", "Bark!");
$pet3 = new Pet("Daisy", "Quack!");
echo($pet1->speak() . "\n");
echo($pet2->speak() . "\n");
echo($pet3->speak() . "\n");

/* 09: Use the set_species method on each pet 
instance from above. 
$pet1 is a "Cow"
$pet2 is a "Dog" 
$pet3 is a "Duck" 
Afterwards, create a $petArray that contains 
all 3 pet instances. 
Loop through the array in reverse order 
and output the name value for each pet 
object in the array on a new line. 
Not sure about the reverse? 
Look at the PHP docs.
*/
$pet1->set_species("Cow");
$pet2->set_species("Dog");
$pet3->set_species("Duck");
$petArray = array($pet1,$pet2,$pet3);
for($i = count($petArray) - 1;$i > -1;$i--) {
  echo($petArray[$i]->name . "\n");
}

/* 10: Take the $petArray from above 
(not the reverse one!), and encode it as JSON. 
Output the result. 
Now take the $myVehicle and $myTruck instances 
of the Vehicle class and create a $rides array. 
Encode the $rides array to JSON and output 
the result on a new line. */
echo(json_encode($petArray) . "\n");
$rides = array($myVehicle, $myTruck);
echo(json_encode($rides) . "\n");

