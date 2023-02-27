<!--Task 3: Superglobal Variables in PHP-->
<!--Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 -->
<!--using the $_POST superglobal variable. Create a new instance of the Person class and use -->
<!--the setName() and setEmail() methods to set the name and email properties based on the form data.-->
<!--Use the getName() and getEmail() methods to display the properties on the webpage.-->

<?php
require_once 'person.php';
$name=$_POST['name'];
$email=$_POST['email'];

$person= new Person();
$person->setName($name);
$person->setEmail($email);

echo "<h2>User information</h2>";
echo "name:" .$person->getName()."<br>" ;
echo "email:" .$person->getEmail()."<br>";
