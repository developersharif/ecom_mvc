<?php
//Login Controller
class Login extends Controller
{
    public function check_cookie()
    {
        $cookie = $this->model("LoginModel");
        $cookie_status = $cookie->check_cookie($_COOKIE['cuser']);
    }
    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $model = $this->model('LoginModel');
            if (isset($_COOKIE['cuser'])) {
                $data['login'] = $model->check_cookie($_COOKIE['cuser']);
            } else {
                $data['login'] = false;
            }
            $login_check = $model->check_login($email, $pass);
            if ($login_check) {
                setcookie('cuser', sha1(md5($email . $pass)), time() + (86400 * 30), "/");
                $data['check_login'] = true;
                header("location: home");
                exit();
            } else {
                $data['check_login'] = false;
            }
            $this->view("header/index");
            $this->view("login", $data);
            $this->view("footer");
        } else {
            $model = $this->model("LoginModel");
            if (isset($_COOKIE['cuser'])) {
                $data['login'] = $model->check_cookie($_COOKIE['cuser']);
            } else {
                $data['login'] = false;
            }
            if (isset($_COOKIE['cuser'])) {
                $cookie_status = $model->check_cookie($_COOKIE['cuser']);
                if ($cookie_status) {
                    header("location: home");
                    exit();
                }
            }

            $data['check_login'] = null;
            $this->view("header/index");
            $this->view("login", $data);
            $this->view("footer");
        }
    }
}