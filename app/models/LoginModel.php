<?php
//Login Model
class LoginModel extends Database
{
    public function check_login($email, $pass)
    {
        $sql = "select * from customer where email='$email' and status=1";

        $query = $this->select($sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows) {
            $row = $query->fetch_assoc();
            $hashpass = $row['password'];
            if (password_verify($pass, $hashpass)) {
                return true;
            } else {
                false;
            }
        } else {
            return false;
        }
    }

    public function check_cookie($cookie)
    {
        if (isset($cookie)) {
            $sql = "select * from customer where cookie='$cookie' and status=1";
            $query = $this->select($sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows) {
                return true;
            } else {
                return false;
            }
        }
    }
}