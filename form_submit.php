<?php
include("dbconn.php");
$emptyErr="";
$nameErr = "";
$auth_nameErr="";
$error = array();
$upfile ="";
$filetypErr="";
$qtyErr="";


//Author collection
$qry = "SELECT * FROM `author_data`";
$result = mysqli_query($con, $qry);
//mysqli_close($con);



if(isset($_POST["submit"])){
    $bookname = $_REQUEST["name"];
    $pubdate = $_REQUEST["date"];
    $price = $_REQUEST["price"];
    $quantity = $_REQUEST["quantity"];
    $author = $_REQUEST["author"];
    $image = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./uploads/" . $image;
    $file_type = pathinfo($folder, PATHINFO_EXTENSION);


    if(empty($bookname) && empty($pubdate) && empty($price) && empty($quantity)){
       
        array_push($error, $emptyErr = '<span class="badge bg-danger">Warning!</span>Fields cannot be left blank-Check it out!');

    }
    elseif(!preg_match("/^[a-zA-Z ]*$/", $bookname)){
        array_push($error, $nameErr = "*Please enter a valid name");
    }
    elseif(!preg_match ("/^[0-9]*$/", $quantity)){
        array_push($error, $qtyErr = "*Please enter a valid quantity");

    }
    if($file_type == "jpg" || $file_type == "jpeg" || $file_type == "png"){
        if(move_uploaded_file($tempname, $folder)){
            $upfile = "File uploaded.";
        }
    }
    else{
        array_push($error, $filetypErr = "*jpg, jpeg, png files only supported."); 
    }
    if(!preg_match("/^[a-zA-Z ]*$/", $author) && !empty($author)){
        array_push($error, $auth_nameErr = "*Please select an author");
    }

    if(count($error) == 0){
        $sql = "INSERT INTO `book_data` (`name`,`publishdate`,`price`,`quantity`,`Image`,`Author`) VALUES ('$bookname','$pubdate','$price','$quantity','$image','$author')";
        mysqli_query($con, $sql);
        header("Location: table_books.php");
    }
    mysqli_close($con);
}

?>