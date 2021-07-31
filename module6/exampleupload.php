<?php
if(isset($_POST['up'])){
    var_dump($_FILES);
    die();
}

?>

<html>
<body>
<form action="exampleupload.php" enctype="multipart/form-data" method="post">
    Name: <input type="file" name="file"/>
    <input type="submit" name="up" value="value"/>
</form>
</body>
</html>