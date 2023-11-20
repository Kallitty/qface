<?php
class Login{ 
    private $error = "";


    public function evaluate($data){
        $email_address_or_phone_number = addslashes($data['email_address_or_phone_number']);
        $password = addslashes($data['password']);

        $query = "select * from users where email_address_or_phone_number ='$email_address_or_phone_number' limit 1";

        // Execute your database query here
        $DB = new Database();
$result = $DB->read($query);

// Check if the query was executed successfully
if ($result) {
    // Redirect or display a success message
    $row=$result[0];
    if($password==$row['password']){
//create session data
$_SESSION['qface_userid']=$row['userid'];
    }else
    {
     $this->error = $this->error ."Wrong password! <br>";
    }
     
} else {
    // Display an error message
    $this->error = $this->error."User not found for the details provided <br>";
}
    }

    private function create_userid() {
        $length = rand(4, 19);
        $number = "";
        for ($i = 0; $i < $length; $i++) {
            $new_rand = rand(0, 9);
            $number = $number . $new_rand;
        }
        return $number;
    }

    public function check_login($id){
      $query = "select userid from users where userid ='$id' limit 1";

       
        $DB = new Database();
$result = $DB->read($query);
 


if ($result) {
 return true;
}
return false;
    }
}
?>