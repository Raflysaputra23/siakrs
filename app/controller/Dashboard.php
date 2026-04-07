<?php

class Dashboard extends Controller {
    public function index() {
        Permission::izinLogout();
        $data["hari"] = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
        $data["user"] = $this->model("Dashboard_model")->getMyData();
        $data["dosen"] = $this->model("Dashboard_model")->getDataDosen();
        $data["jadwal"] = $this->model("Dashboard_model")->getMyJadwal();
        $data['admin'] = $this->model("Dashboard_model")->getDataAdmin();
        $data['jadwalDosen'] = $this->model("Dashboard_model")->getJadwalDosen();
        $data["users"] = $this->model("Dashboard_model")->getMahasiswaDosen();
        $data["title"] = "Dashboard";
        $this->view("templates/header", $data);
        $this->view("templates/aside", $data);
        $this->view("dashboard/index", $data);
        $this->view("templates/footer");
    }

    public function logout() {
        session_destroy();
        unset($_SESSION);
        header("Location: " . CONSTANT::DIRNAME . "login");
    }
}