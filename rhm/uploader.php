<?php
$server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "rhm";
$connect = mysqli_connect($server,$db_username,$db_password,$db_name);

if(!$connect){
    echo "Failed to connect to Database".mysqli_error($connect);
}
else{
    $FullName = $_POST['FullName'];
    $UserName = $_POST['UserName'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Location = $_POST['Location'];
    $Password = $_POST['Password'];

    function uploader($FullName,$UserName, $Email,$PhoneNumber,$Location,$Password){
        $server = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "rhm";
        $connect = mysqli_connect($server,$db_username,$db_password,$db_name);
        $rhmsql = "INSERT INTO Rentals VALUES('FullName','UserName','Email','PhoneNumber','Location','Password');";
        if(mysqli_query($connect,$rhmsql)){
            echo "User Sign up Successful".mysqli_error($connect);
        }else{
            echo "User Upload Failed".mysqli_error($connect);
        }
    }
    uploader($FullName,$UserName, $Email,$PhoneNumber,$Location,$Password);
}
?>