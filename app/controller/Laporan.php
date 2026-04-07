<?php

class Laporan extends Controller {
    public function index() {
        Permission::izinLogout();
        $data["user"] = $this->model("Dashboard_model")->getMyData();
        $data["title"] = "Laporan View";
        $this->view("templates/header", $data);
        $this->view("templates/aside", $data);
        $this->view("laporan/index");
        $this->view("templates/footer");
    }
}
