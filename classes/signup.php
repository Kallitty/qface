<?php

class Signup{
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
            

            if ($key == "first_name" && is_numeric($value)) {
                $this->error = $this->error . "First name can not be a number!</br>";
            }

            if ($key == "surname" && is_numeric($value)) {
                $this->error = $this->error . "Surname can not be a number!</br>";
            }
        }

        if ($this->error === "") {
            // No error
            $this->create_user($data);
        } else {
            return $this->error;
        }
    }

    public function create_user($data){
        $first_name = $data['first_name'];
        $surname = $data['surname'];
        $middle_name = $data['middle_name'];
        $gender = $data['gender'];
        $email_address_or_phone_number = $data['email_address_or_phone_number'];
        $password = $data['password'];

        // Create other variables as needed

        $url_address = strtolower($first_name) . "." . strtolower($surname);
        $userid = $this->create_userid();

        $query = "insert into users(userid, first_name, surname, gender, email_address_or_phone_number, password, url_address, middle_name) values('$userid', '$first_name', '$surname', '$gender', '$email_address_or_phone_number', '$password', '$url_address', '$middle_name')";

        // Execute your database query here
    }

    private function create_userid(){
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
