<?php
function replaceString($inputString) {
  $result = str_replace("Python", "PHP", $inputString);
  $result = str_replace("Python ", " PHP ", $result);
  return $result;
}

?>
