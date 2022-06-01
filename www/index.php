<?php
if (array_key_exists("char", $_GET)) {
  $char = $_GET["char"];
  $url = "http://sageofcow:5000/say" . "?" . "char" . "=" . $char;
} else {
  $url = "http://sageofcow:5000/say";
}

$res = file_get_contents($url);

echo "<pre><code>";
echo $res;
echo "</pre></code>";
?>
