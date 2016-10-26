<?php
    
$size = (int) $_GET['size'];
if(!$size){
    $size = 60;
}

$file = __DIR__.'/gravatar.' .$size. '.jpg';

if(!file_exists($file)){
    copy('https://www.gravatar.com/avatar/' . md5( strtolower( 'permanent.tourist@gmail.com' ) ) . '?s=' . $size, $file);
}

$mtime = filemtime($file);
$gmdate_mod = gmdate('D, d M Y H:i:s', $mtime) . ' GMT';

if ($if_modified_since == $gmdate_mod) {
  header('HTTP/1.0 304 Not Modified');
  exit;
}

header('Last-Modified: ' .$gmdate_mod);
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + (60*60*24*365)) . ' GMT');
header('Content-Type: image/jpeg');
header('Content-Length: ' . filesize($file));
readfile($file);