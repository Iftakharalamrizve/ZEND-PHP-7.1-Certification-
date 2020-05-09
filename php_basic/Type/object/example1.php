<?php

class User
{
  public $first_name;
  public $last_name;

  public function __construct($first, $last)    // Require first and last names when INSTANTIATING
  {
    $this->first_name = $first;                 // INITIALIZE $first_name;
    $this->last_name = $last;                   // INITIALIZE $last_name;
  }

//   public function __toString()
//   {
//       echo "Hello";
//     return "User [first='$this->first_name', last='$this->last_name']";
//   }
}

?>

<?php
$user_1 = new User('John', 'Doe');      // $user_i is an INSTANCE of User 
$user_2 = new User('Jane', 'Doe');      // $user_2 is an INSTANCE of User
// echo $user_1 . '<br>';                  // prints: User [first='John', last='Doe']
// echo $user_2 . '<br>';                  // prints: User [first='Jane', last='Doe']

echo $user_1;
?>