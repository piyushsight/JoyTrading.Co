<?php
$ref= $_POST['ref'];

if (file_exists('certificates/'.$ref)) {

	//Open directory
	$dir = dir('certificates/'.$ref);

	//List files in directory
	$file = $dir->read();
	$file = $dir->read();
	echo "<ul>";
	while (($file = $dir->read()) !== false)
	{
		?> <li><a  href="certificates/<?php echo $ref."/".$file ?>" target="_blank"><img src="pdf.jpg" alt="pdf" style="margin:10px;"/> <?php echo $file ?></a></li>
	<?php }
	echo "</ul>";
	$dir->close();
}
else
	echo "<p style=\"color:red\" >Invalid Reference Number.</p>";
?>