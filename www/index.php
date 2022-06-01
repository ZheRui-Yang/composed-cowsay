<?php
$xml = file_get_contents("http://sageofcow:5000/say");
echo "<pre><code>";
echo $xml;
echo "</pre></code>";
?>
