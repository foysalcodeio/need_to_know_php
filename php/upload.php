<?php

if(isset($_POST['submit'])){
    $file_name = $_FILES['filename']['name'];
    $file_type = $_FILES['filename']['type'];
    $file_size = $_FILES['filename']['size'];

    $tmp_loc = $_FILES['filename']['tmp_name'];

    $uploc = 'image/';

    #check extention
    
    $dotpos = strpos($file_name, '.') + 1;
    $ext = substr($file_name, $dotpos);

    echo "<br>";

    if(!empty($file_name)){
        if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png'){

            if($file_type === 'image/jpeg'){

                if($file_size <= 1200000){
                    move_uploaded_file($tmp_loc, $uploc.$file_name);
                    echo 'upload Successfull';
                }else{
                    echo 'file size is too large';
                }
            }
            else{
                echo 'select an image.';
            }
        }else{
            echo 'please upload jpeg or png file';
        }
        
    }else{
        echo "select a file !";
    }

}

?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    select Image
    <input type="file" name="filename"><br><br>
    <input type="submit" value="upload" name="submit">
</form>