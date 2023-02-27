<!--Task 1: HTML Basics-->
<!--Create an HTML form that allows users to input their name and email address. -->
<!--The form should have two fields: one for name and one for email. Use appropriate -->
<!--HTML tags to structure the form.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>project</title>
</head>


<form method="post" action="superglobal.php">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <button type="submit">Submit</button>
</form>
</html>

