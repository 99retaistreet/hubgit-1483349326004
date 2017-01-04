<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))

&& ($_FILES["file"]["size"] < 100000000))
{
if ($_FILES["file"]["error"] > 0)
{
echo "File Error : " . $_FILES["file"]["error"] . "<br />";
}else {
 $_FILES["file"]["name"] . "<br />";
 $_FILES["file"]["type"] . "<br />";
 ($_FILES["file"]["size"] / 1024) . " Kb<br />"; 


if (file_exists("images/".$_FILES["file"]["name"]))
{
echo "<b>".$_FILES["file"]["name"] . " already exists. </b>";
}else
{
move_uploaded_file($_FILES["file"]["tmp_name"],"images/". $_FILES["file"]["name"]);
"Stored in: " . "images/" . $_FILES["file"]["name"]."<br />";
?>

<img src="images/<?php echo $_FILES["file"]["name"]; ?>" alt="Image path Invalid" >
<?php
}
}
}else
{
echo "Invalid file detail ::<br> file type ::".$_FILES["file"]["type"]." , file size::: ".$_FILES["file"]["size"];
}
?>
