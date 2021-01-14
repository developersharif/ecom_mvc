<?php
class SignupModel extends Database
{
    public function register($name, $email, $mobile, $pass, $cookie)
    {
        $check_user = $this->select("select * from customer where email='$email' or phone='$mobile'");
        $row_check = mysqli_num_rows($check_user);
        if ($row_check == 0) {
            $sql = "insert into customer (name,email,password,phone,role,cookie,status) values('$name','$email','$pass','$mobile','user','$cookie',1)";
            $query = $this->insert($sql);
            if ($query) {
                return 'success';
            } else {
                return false;
            }
        } else {
            return 'already registered ';
        }
    }
}