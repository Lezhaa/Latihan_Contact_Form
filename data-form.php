<?php include("config/database.php");
      echo '<link href="assets/css/style.css" rel="stylesheet">'; ?>

<?php

//Memasukkan data ke form
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
if(empty($name) || empty($email) || empty($message)) {

    //Menampilkan pesan bahwa berhasil mengisi form 
    echo "All fields need to be completed!";
    } else {
        echo "Thank you for submitting the form!";
        $sql = "INSERT INTO `form-data`(`name`, `email`, `message`) VALUES ('".$name."','".$email."','".$message."')";
        $result = $conn->query($sql);
        $conn->close();
    }
?>
<?php