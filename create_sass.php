<?php
  include "sass/SassParser.php";

  function sass_watch() {
    $sass = new SassParser(array('style' => 'nested'));

    if ($handle = opendir('stylesheets/sass')) {
      while (false !== ($file = readdir($handle))) {
        if(strstr($file, ".sass")) {
          $css = $sass->toCss("stylesheets/sass/$file");
          $css_file_name = substr($file, 0, strrpos($file, '.'));
          $myFile = "stylesheets/$css_file_name.css";
          echo "creating $myFile \n";
          $file_handle = fopen($myFile, 'w');
          fwrite($file_handle, $css);
        }
      }
    closedir($handle);
    }
  }
?>
