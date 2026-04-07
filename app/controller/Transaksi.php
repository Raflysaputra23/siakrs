<?php

class Transaksi extends Controller {
    public function index() {
        Permission::izinLogout();
        $data["user"] = $this->model("Dashboard_model")->getMyData();
        $data["title"] = "Transaksi";
        $this->view("templates/header", $data);
        $this->view("templates/aside", $data);
        $this->view("transaksi/index");
        $this->view("templates/footer");
    }
}
