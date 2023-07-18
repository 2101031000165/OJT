<?php 
include "Conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Feedback Form</title>
</head>
<body style="background-color: #BDEDFF;">
    <div class="form-container">
        <form action="">
            <h3>Give Your Feedback</h3>
            <label for="">Name</label>
            <input type="text" placeholder="Full Name" required name="Name">
            <label for="">E-mail</label>
            <input type="text" placeholder="Enter e-mail" required name="Email">
            <label for="">Contact No.</label>
            <input type="#" placeholder="Enter Contact No" required name="ContactNo">
            <label for="">Feedback</label>
            <textarea  id="" cols="20" rows="8" placeholder="Your Message" name="Message"></textarea>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <?php
    
        if (isset($_REQUEST['submit'])) {
            
            $ins="insert into feedback values('".$_REQUEST['Name']."','".$_REQUEST['Email']."','".$_REQUEST['ContactNo']."','".$_REQUEST['Message']."')";

            $ex=$conn->query($ins);

            if ($ex) {
                
                echo '<script>alert("Thanks For Your Feedback")</script>';
            }
            else{

                echo "Not";
            }
        }
    
    
    
    
    ?>
</body>
</html>