<?php

namespace App\Models;

use App\Core\Model;

class pelanggan extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_pelanggan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
      public function tampil_users()
      {
            $query = "SELECT * FROM tb_users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
      public function tampil_gol()
      {
            $query = "SELECT * FROM tb_golongan ";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function input()
      {
            $query = "INSERT * FROM tb_pelanggan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
      public function simpan()
      {
            $no = $_POST['pel_no'];
            $nama = $_POST['pel_nama'];
            $alamat = $_POST['pel_alamat'];
            $hp = $_POST['pel_hp'];
            $ktp = $_POST['pel_ktp'];
            $seri = $_POST['pel_seri'];
            $meteran = $_POST['pel_meteran'];
            $aktif = $_POST['pel_aktif'];
            $golongan = $_POST['pel_id_gol'];
            $user = $_POST['pel_id_user'];

            $sql = "INSERT INTO tb_pelanggan (pel_id_gol,pel_no,pel_nama,pel_alamat,pel_hp,pel_ktp,pel_seri,pel_meteran,pel_aktif,pel_id_user) VALUES (:pel_id_gol, :pel_no, :pel_nama, :pel_alamat, :pel_hp, :pel_ktp, :pel_seri, :pel_meteran, :pel_aktif, :pel_id_user)";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id_gol", $golongan);
            $stmt->bindParam(":pel_no", $no);
            $stmt->bindParam(":pel_nama", $nama);
            $stmt->bindParam(":pel_alamat", $alamat);
            $stmt->bindParam(":pel_hp", $hp);
            $stmt->bindParam(":pel_ktp", $ktp);
            $stmt->bindParam(":pel_seri", $seri);
            $stmt->bindParam(":pel_meteran", $meteran);
            $stmt->bindParam(":pel_aktif", $aktif);
            $stmt->bindParam(":pel_id_user", $user);
            $stmt->execute();
            return $this->selects($stmt);
      }
      public function edit($id){
            $sql = "SELECT * FROM tb_pelanggan WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id", $id);
            $stmt->execute();
            return $this->select($stmt);

      }
      public function update(){
            $user_nama = $_POST['user_nama'];
            $user_password = $_POST['user_password'];
            $user_alamat = $_POST['user_alamat'];
            $user_hp = $_POST['user_hp'];
            $user_email = $_POST['user_email'];
            $user_pos = $_POST['user_pos'];
            $user_role = $_POST['user_role'];
            $user_aktif = $_POST['user_aktif'];
            $user_id = $_POST['user_id'];

            $sql = "UPDATE tb_users SET user_email=:user_email, user_password=:user_password, user_nama=:user_nama, user_alamat=:user_alamat, user_hp=:user_hp, user_pos=:user_pos, user_role=:user_role, user_aktif=:user_aktif WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_email", $user_email);
            $stmt->bindParam(":user_password", $user_password);
            $stmt->bindParam(":user_nama", $user_nama);
            $stmt->bindParam(":user_alamat", $user_alamat);
            $stmt->bindParam(":user_hp", $user_hp);
            $stmt->bindParam(":user_pos", $user_pos);
            $stmt->bindParam(":user_role", $user_role);
            $stmt->bindParam(":user_aktif", $user_aktif);
            $stmt->bindParam(":user_id", $user_id);
            $stmt->execute();

      }
      public function delete($id)
      {
            $query = "DELETE FROM tb_pelanggan WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":pel_id", $id);
            $stmt->execute();
            return false;
      }
}
