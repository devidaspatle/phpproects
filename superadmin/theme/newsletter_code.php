 <?php
    include "includes/config.php";
    if(!empty($_POST['email']))
     {
        $name = '-';
        $email = $_POST['email'];
        $sql = "INSERT INTO newsletters(name, email, created_at, updated_at, status) VALUES ('$name', '$email', now(), now(), '1')";
        if (mysqli_query($conn, $sql)) {
           $message = "New record created successfully";
        } else {
           $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      mysqli_close($conn);
header("Location:index.php?msg=success");
     }
 
?>