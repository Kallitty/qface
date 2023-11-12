<?php
class Login{ 
    private $error = "";

    public function evaluate($data){
        foreach ($data as $key => $value) {
            // Check for empty fields
            if (empty($value)) {
                $this->error = $this->error . $key . " Kindly input field</br>";
            }

            if ($key == "email_address_or_phone_number") {
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->error = $this->error . "Invalid email address!</br>";
                }
            } 
        }

        if ($this->error == "") {
            // No error
            $this->create_user($data);
        } else {
            return $this->error;
        }
    }

    public function create_user($data){
        $email_address_or_phone_number = addslashes($data['email_address_or_phone_number']);
        $password =  addslashes($data['password']);

        // Create other variables as needed

        // $userid = $this->create_userid();

        $query = "insert * from users where email_address_or_phone_number ='$email_address_or_phone_number' limit 1";

        // Execute your database query here
        $DB = new Database();
$result = $DB->read($query);

// Check if the query was executed successfully
if ($result) {
    // Redirect or display a success message
    $row=$result[0];
    if($password==$row['password']){
    }else{
     $error .="wrong password! <br>";
    }
     
} else {
    // Display an error message
    $error.="User not found for the details provided <br>";
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
}



?>