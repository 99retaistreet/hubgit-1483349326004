<?php

//echo "Upload File Name: " . $_FILES["file"]["name"] . "<br />";
//echo "File Type: " . $_FILES["file"]["type"] . "<br />";
//echo "File Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />"; 
//echo "File Description:: ".$_POST['description']."<br />";


move_uploaded_file($_FILES["file"]["tmp_name"],"images/". $_FILES["file"]["name"]);
echo "Stored in: " . "images/" . $_FILES["file"]["name"]."<br />";
?>
Uploaded File:<br>
<img src="images/<?php echo $_FILES["file"]["name"]; ?>" alt="Image path Invalid" >
