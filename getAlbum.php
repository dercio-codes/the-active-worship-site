<?php

  $album = $_POST['album'];

  $result = 'You want to listen to '.$album;
  $dir = 'stream/'.$album;
  $file_contents = array_diff(scandir($dir), array('..', '.'));
  $result ='';
  $count = 1 ;
  foreach ($file_contents as $src) {
      $track_name = str_replace(".mp3", "",$src);
      if($src != 'album_art')
      {
        $result .=  '<div class="audio-block">
                     <div class="audio-block-left">'.$count.'</div>
                     <div class="audio-block-middle">
                        '.$track_name.'
                     </div>
                     <div class="audio-block-right">
                        <audio controls>
                            <source src="'.$dir.'/'.$src.'" type="audio/mp3">
                        Your browser does not support the audio element.
                        </audio>
                     </div>
                     </div>';
      }
      $count++;
  }
//   $result .= '</div>';
  echo $result;
//   echo json_encode($file_contents);
//   echo print_r($file_contents);
  
?>