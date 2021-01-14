<?php
//profile controller
class Profile extends Controller
{


    public function __construct()
    {
        if (isset($_COOKIE['cuser'])) {
            if (isset($_POST['submit']) & $_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = $this->validate($_POST['name']);
                $phone = $this->validate($_POST['mobile']);
                $region = $this->validate($_POST['region']);
                $city = $this->validate($_POST['city']);
                $updata = array(
                    'name' => $name,
                    'phone' => $phone,
                    'region' => $region,
                    'city' => $city
                );
                $profileModel = $this->model('ProfileModel');
                $primaryKey = 'id=' . $profileModel->userId();
                $data["update_status"] = $profileModel->updateprofile($updata, $primaryKey);
                $data["userData"] = $profileModel->userData();
                $this->view("header/index");
                $this->view("profile", $data);
                $this->view("footer");
            } else {
                $profileModel = $this->model('ProfileModel');
                $data["userData"] = $profileModel->userData();
                $this->view("header/index");
                $this->view("profile", $data);
                $this->view("footer");
            }
        } else {
            header("location: home");
            exit();
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