<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $weight = $_POST['weight'];
     $set = $_POST['set'];
     $rep = $_POST['rep'];
     $bodypart = $_POST['bodypart'];
     $diffi = $_POST['difficult'];
     $warning = $_POST['warning'];
     $description = $_POST['description'];


     $sql = "INSERT INTO exercises (name,weight,sets,reps,bodypart,difficulty,warning,description)
     VALUES ('$name','$weight','$set','$rep','$bodypart','$diffi','$warning','$description')";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>