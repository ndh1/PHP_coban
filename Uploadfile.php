<?php
    if(isset($_POST["upload"]))
    {
        if(isset($_FILES["file"]) && !$_FILES["file"]["error"])
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], './upload/'.$_FILES["file"]["name"]);
            echo "Upload thanh cong";
        }
        else
            echo "error";
    }
?>

<html>
    <body>
        <form action="Uploadfile.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="upload" value="Upload" >
    </form>
    </body>
</html>