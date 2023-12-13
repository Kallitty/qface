<?php

class Image {
public function crop_image($original_file_name, $cropped_file_name, $max_width, $max_height){

 if(file_exists($original_file_name)){
  $original_image= imagecreatefromjpeg($original_file_name); 
  $original_width =imagesx($original_image);
  $original_height =imagesy($original_image);
  if ($original_height>$original_width){
   //make width equal to max width
   $ratio= $max_width/$original_width;

   $new_width= $max_width;
   $new_height= $original_height* $ratio;
 

  }else{
    //make height equal to max height
   $ratio= $max_height/$original_height;

   $new_height= $max_height;
   $new_width= $original_width* $ratio;

  }
 }
$new_image= imagecreatetruecolor($new_width, $new_height);
 imagecopyresampled($new_image,  $original_image, 0, 0, 0,  0, $new_width, $new_height,  $original_width, $original_height);
 imagejpeg($cropped_file_name, 90);
 imagedestroy($original_image);
 if($new_height>$new_width){
  $diff =($new_height-$new_width);
  $y=round($diff/2);
  $x=0;
 }else{
  $diff =($new_width-$new_height);
  $x=round($diff/2);
  $y=0;
 }
 $new_cropped_image=imagecreatetruecolor($max_width, $max_height);
 imagecopyresampled($new_cropped_image, $new_image, 0, 0, $x, $y, $max_width, $max_height, $max_width, $max_height);
imagedestroy($new_image);
 imagejpeg($new_image, $cropped_file_name, 90);
 imagedestroy($new_cropped_image);
 if($new_height>$new_width){
  
 }
}
}
?>
