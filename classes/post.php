<?php
class Post{
 private $error="";

public function create_post($userid, $data, $files){
if (!empty($data['post']) || !empty($files['file'] ['name'] ))
{
    $myimage= "";
    $has_image= 0;
    if (!empty($files['file'] ['name'] ))
    {
        $folder="uploads/" . $user_id ."/";
        //create folder
        if(!file_exists($folder))
        {
          mkdir($folder, 0777, true);
        }
       $image_class = new Image;
        $myimage= $folder . $image_class->generate_filename(15) . ".jpg";

    move_uploaded_file($_FILES['file'] ['tmp_name'], $myimage);
    $image_class->resize_image($myimage, $filename, 1500, 1500);

        $has_image= 1;
    }
$post =addslashes($data['post']);
$postid=$this->create_postid();
$query="insert into posts (userid, postid, post, image, has_image) values ('$userid', '$postid', '$post', '$myimage', '$has_image')";
$DB = new Database();
$DB->save($query);
}else{
$this->error= "Please type in something. </br>";
}
return $this->error;
}

public function get_posts($id){
$query="select * from posts where userid ='$id' order by id desc limit 10";
$DB = new Database();
$result=$DB->read($query);
if ($result){
 return $result;
 // $ROW =$result[0];
 // return $ROW;
}else{
 return false;
}
}

 private function create_postid(){
        $length = rand(4, 19);
        $number = "";
        for ($i = 0; $i < $length; $i++) {
            $new_rand = rand(0, 9);
            $number = $number . $new_rand;
        }
        return $number;
    }
}
?>