<?php

class Image {
public function crop_image($original_file_name, $cropped_file_name, $max_width, $max_height){

 if(file_exists($original_file_name)){
  $original_image= imagecreatefromjpeg($original_file_name); 
  $original_width =imagesx($original_image);
  $original_height =imagesy($original_image);
  
 }

 imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x,  $src_y, $dst_width, $dst_height,  $src_width, $src_height);
}
}

?>