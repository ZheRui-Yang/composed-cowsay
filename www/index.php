<?php
$url_base = "http://sageofcow:5000/say";

if (array_key_exists("char", $_GET)) {
  $url = $url_base . "?char=" . $_GET["char"];
} else {
  $url = $url_base;
}

$res = file_get_contents($url);

echo "<pre><code>";
echo $res;
echo "</pre></code>";
?>
