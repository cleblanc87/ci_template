<?php
  include "haml/HamlParser.php";
  
  function create_haml($output_path, $source_path, $file) {
    $haml = new HamlParser(array('style' => 'nested','escape_html' => false, 'ugly' => false));
    $html = $haml->parse($source_path."$file");
    $bare_file_name = substr($file, 0, strrpos($file, '.'));
    $outFile = $output_path."$bare_file_name.php"; 
    echo "creating $outFile\n";
    $file_handle = fopen($outFile, 'w');
    fwrite($file_handle, $html);
    fclose($file_handle);
  }

  function haml_watch() {
    //set our options, there are many to choose from
    //open the haml dir
    $HAML['source_path'] = 'haml_source/';
    $HAML['output_path'] = 'application/views/';

    if ($handle = opendir($HAML['source_path'])) {
      //while we have files in the dir
      while (false !== ($file = readdir($handle))) {
        if(is_dir($HAML['source_path']."$file") && $file != '.' && $file != '..') {
          $sub_handle = opendir($HAML['source_path']."$file");
          $sub_path = $file;

          while( false !== ($file = readdir($sub_handle))) {
            if(strstr($file, ".haml")) {
              create_haml($subpath."".$file);
            }
          } 
          closedir($HAML['output_path'], $HAML['source_path'],$sub_handle);
        }
        else if(strstr($file, ".haml")) {
          //create the haml
          create_haml($HAML['output_path'], $HAML['source_path'], $file);
        }
      }
    //fin
    closedir($handle);
    }
  }

?>
