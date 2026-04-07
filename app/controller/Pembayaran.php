<?php

class Pembayaran extends Controller {
    public function index() {
        Permission::izinLogout();
        $data["user"] = $this->model("Dashboard_model")->getMyData();
        $data["title"] = "Transaksi"; // Keep the sidebar active state on Transaksi
        $this->view("templates/header", $data);
        $this->view("templates/aside", $data);
        $this->view("pembayaran/index");
        $this->view("templates/footer");
    }
}
