<?php
$lib_path = LIB_PATH;
$document = `perl $lib_path/parser-opens.pl $path/$dir`;

$minDocLength = 79;

if (strlen($document) > $minDocLength){  
  echo "<div id='missing'><p><h3 class='subtitle2'>Open Completions (copy from here, paste into your document, and complete):</h3>";
  echo $document;}
 else {
   echo "Nothing to Show";

}
?>
