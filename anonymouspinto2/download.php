<?php
if(!empty($_GET['file']))
{
  filename= basename($_GET['file']);
  $filepath='destination/' .$filename;
  if(!empty($filname)&& file_exists($filepath)){


// define headers
  	    header("Cache-Control:public");
  	    header("Content-Description: File transfer");
  	    header("Content-Disposition: attachment; filename=$filename");
  	    header("Content-Type: application/zip");
  	    header("Content-Transfer-Emcoding: binary");

  	    readfile($filepath);
  	    exit;

  }
  else{
  		echo "this file Does not exist. ";
  }


}








?>