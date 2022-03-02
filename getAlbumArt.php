<?php
  $album = $_POST['album'];
  $result = 'You want to listen to '.$album;
  $path = 'stream/'.$album.'/album_art';
  $files = preg_grep('~\.(jpeg|jpg|png)$~', scandir($path));
  echo json_encode($files);

?>