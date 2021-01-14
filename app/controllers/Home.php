<?php
class Home extends Controller
{

    public function productsList()
    {
        $model = $this->model("ProductsModel");
        return $model->getAllProducts();
    }

    public function __construct()
    {
        $model = $this->model("HomeModel");
        $loginModel = $this->model("LoginModel");
        if (isset($_COOKIE['cuser'])) {
            $data['login'] = $loginModel->check_cookie($_COOKIE['cuser']);
        } else {
            $data['login'] = false;
        }

        $data["producs_data"] = $this->productsList();
        $data["slider"] = "slider";
        $data["footer"] = 'footer';
        $this->view("header/index", $data);
        $this->view("header/slider", $data);
        $this->view("index", $data);
        $this->view("footer", $data);
    }
    public function index()
    {
        $model = $this->model("HomeModel");
        $data["producs_data"] = $this->productsList();
        $data["slider"] = "slider";
        $data["footer"] = 'footer';
        $this->view("header/index", $data);
        $this->view("header/slider", $data);
        $this->view("index", $data);
        $this->view("footer", $data);
    }
}