<?php
//signup controller
class Signup extends Controller
{
    public function __construct()
    {
        $loginModel = $this->model('LoginModel');
        if (isset($_COOKIE['cuser'])) {
            $cookie_status = $loginModel->check_cookie($_COOKIE['cuser']);
            if ($cookie_status) {
                header("location: home");
                exit();
            }
        }
        if (isset($_POST['submit']) & $_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $this->validate($_POST['name']);
            $email = $this->validate($_POST['email']);
            $phone = $this->validate($_POST['mobile']);
            $pass = $_POST['pass'];
            $cpass = $_POST['cpass'];


            if ($pass != $cpass) {
                $data['signup_msg'] = "Verify Password does't matched";
            } elseif ($cpass < 6) {
                $data['signup_msg'] = "minimum password length 6 characters long";
            } elseif (empty($name) || empty($email) || empty($phone)) {
                $data['signup_msg'] = "Field must not be empty.";
            } else {
                $cpass = password_hash($pass, PASSWORD_DEFAULT);
                $cookie = sha1(md5($email . $pass));
                $registerModel = $this->model("SignupModel");
                $return = $registerModel->register($name, $email, $phone, $cpass, $cookie);
                if ($return == 'success') {
                    setcookie('cuser', sha1(md5($email . $pass)), time() + (86400 * 30), "/");
                    $data['signup_msg'] = true;
                } else {
                    $data['signup_msg'] = $return;
                }
            }
            $this->view("header/index");
            $this->view("signup", $data);
            $this->view("footer");
        } else {
            $data['signup_msg'] = null;
            $this->view("header/index");
            $this->view("signup", $data);
            $this->view("footer");
        }
    }

    public function validate($data)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
}