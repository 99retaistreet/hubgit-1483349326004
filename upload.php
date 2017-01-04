<?php
move_uploaded_file($_FILES["file"]["tmp_name"],"images/". $_FILES["file"]["name"]);
//echo "Stored in: " . "images/" . $_FILES["file"]["name"]."<br />";

echo '<img src="images/<?php echo $_FILES["file"]["name"]; ?>" alt="Image path Invalid" >';

?>
