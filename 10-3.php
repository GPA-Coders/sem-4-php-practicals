<?php
    if(isset($_POST["submit"])){
        $file = $_FILES["file"]["tmp_name"];
        $name = $_FILES["file"]["name"];
        if(move_uploaded_file($file, "uploads/$name")){
            echo "FIle has been uploaded!";
        }
        else{
            echo "Problem uploading file!";
        }
    }
?>

<html>
<head>
    <title>PHP FIle Upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <br>
        <input type="submit" value="Upload" name="submit">
    </form>
</body>
</html>

<!-- ------------Output lakhta pehla puchjo------------ 
File has been uploaded
Choose File No file choosen
Upload
-->