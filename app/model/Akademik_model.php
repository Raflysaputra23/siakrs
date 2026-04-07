<?php

class Akademik_model {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function get_semua_mk() {
        try {
            $this->db->query("SELECT * FROM matakuliah ORDER BY nama_mk ASC");
            $this->db->execute();
            return $this->db->resultSet();
        } catch(PDOException $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function edit_mk($data) {
        $id_mk = htmlspecialchars($data['id_mk']);
        $nama_mk = htmlspecialchars($data['nama_mk']);
        $sks = htmlspecialchars($data['sks']);

        try {
            $this->db->query("CALL edit_mk(:id_mk, :nama_mk, :sks)");
            $this->db->bind("nama_mk", $nama_mk);
            $this->db->bind("sks", $sks);
            $this->db->bind("id_mk", $id_mk);
            $this->db->execute();
            return $this->db->rowCount();
        } catch(PDOException $e) {
            return false;
        }
    }

    public function hapus_mk($id_mk) {
        try {
            $this->db->query("CALL hapus_mk(:id_mk)");
            $this->db->bind("id_mk", $id_mk);
            $this->db->execute();
            return $this->db->rowCount();
        } catch(PDOException $e) {
            return false;
        }
    }

    public function get_semua_kelas() {
        try {
            $this->db->query("SELECT 
                mk.id_mk, mk.nama_mk, mk.sks,
                kls.id_kelas, kls.hari, kls.jam_mulai, kls.jam_selesai, kls.ruangan, kls.kuota, 
                kls.id_dosen_koor, kls.id_dosen_pendamping,
                d.nama_lengkap AS nama_dosen,
                d2.nama_lengkap AS nama_dosen_pendamping,
                (SELECT COUNT(*) FROM krs WHERE id_kelas = kls.id_kelas) AS kuota_terisi,
                (kls.kuota - (SELECT COUNT(*) FROM krs WHERE id_kelas = kls.id_kelas)) AS sisa_kuota
            FROM kelas kls
            JOIN matakuliah mk ON kls.id_mk = mk.id_mk
            LEFT JOIN dosen d ON kls.id_dosen_koor = d.nip
            LEFT JOIN dosen d2 ON kls.id_dosen_pendamping = d2.nip
            ORDER BY mk.nama_mk ASC, kls.id_kelas ASC");
            $this->db->execute();
            return $this->db->resultSet();
        } catch(PDOException $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function edit_kelas($data) {
        $id_kelas = htmlspecialchars($data['id_kelas']);
        $hari = htmlspecialchars($data['hari']);
        $jam_mulai = htmlspecialchars($data['jam_mulai']);
        $jam_selesai = htmlspecialchars($data['jam_selesai']);
        $ruangan = htmlspecialchars($data['ruangan']);
        $kuota = htmlspecialchars($data['kuota']);
        $id_dosen_koor = htmlspecialchars($data['id_dosen_koor']);
        
        $id_dosen_pendamping = isset($data['id_dosen_pendamping']) && $data['id_dosen_pendamping'] !== "" ? htmlspecialchars($data['id_dosen_pendamping']) : null;

        try {
            $this->db->query("UPDATE kelas SET 
                hari = :hari, 
                jam_mulai = :jam_mulai, 
                jam_selesai = :jam_selesai, 
                ruangan = :ruangan, 
                kuota = :kuota, 
                id_dosen_koor = :id_dosen_koor, 
                id_dosen_pendamping = :id_dosen_pendamping 
                WHERE id_kelas = :id_kelas");
            
            $this->db->bind('hari', $hari);
            $this->db->bind('jam_mulai', $jam_mulai);
            $this->db->bind('jam_selesai', $jam_selesai);
            $this->db->bind('ruangan', $ruangan);
            $this->db->bind('kuota', $kuota);
            $this->db->bind('id_dosen_koor', $id_dosen_koor);
            $this->db->bind('id_dosen_pendamping', $id_dosen_pendamping);
            $this->db->bind('id_kelas', $id_kelas);
            
            $this->db->execute();
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }

    public function hapus_kelas($id_kelas) {
        try {
            $this->db->query("DELETE FROM kelas WHERE id_kelas = :id_kelas");
            $this->db->bind("id_kelas", $id_kelas);
            $this->db->execute();
            return $this->db->rowCount();
        } catch(PDOException $e) {
            return false;
        }
    }
}
