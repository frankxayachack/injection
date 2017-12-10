<p>Filename (try: cat.txt)</p>
<form method="get">
 <input type="text" name="filename">
 <input type="submit" value="Read">
</form>
<?php
print("<p>");
if(isset($_GET['filename'])){
$file=$_GET['filename'];
system("cat $file");
}
?>

