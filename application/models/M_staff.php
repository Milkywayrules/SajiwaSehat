<?php

/**
 *
 */
class M_staff extends CI_Model
{

  var $tb_staff = 'tb_staff';
  var $tb_department = 'tb_department';

//  ===============================================SETTER===============================================
  // daftar staff baru
  /**
   * setter untuk membuat user baru, yang bisa diakses melalui
   * halaman register atau dibuat manual oleh admin/superadmin
   * @param array $data [berisi 8 data]
   */
  public function set_new_staff($data){
    // echo "<pre>";
    // print_r($data);
    $createdAt = unix_to_human(now(), true, 'europe');
		$data = array(
		  "username"    => $data['add-username'],
		  "email"       => $data['add-email'],
      "password"    => $this->bcrypt->hash_password($data['add-password']),
      "privilege"   => $data['add-privilege'],
      "nip"         => $data['add-nip'],
      "fullname"    => $data['add-fullname'],
      "phone"       => $data['add-phone'],
      "gender"      => $data['add-gender'],
      // "address"     => $data['add-address'],
      "avatar"      => 'avatar-'.mt_rand(0,6).'.png',
		  "deptId"      => $data['add-department'],
      "createdAt"   => $createdAt,
      "isActive"    => '1',
      "isDeleted"   => '0',
		);
		return $this->db->insert($this->tb_staff, $data);
  }
  // update staff by nip
  public function set_update_staff_by_nip($nip, $data){
    $data = array(
      "username"    => $data['edit-username'],
      "email"       => $data['edit-email'],
      "fullname"    => $data['edit-fullname'],
      "phone"       => $data['edit-phone'],
      "address"     => $data['edit-address'],
      "gender"      => $data['edit-gender'],
      "privilege"   => $data['edit-privilege'],
      "deptId"      => $data['edit-department'],
      "isActive"    => $data['edit-statusAktif'],
    );
    $this->db->where('nip', $nip);
		return $this->db->update($this->tb_staff, $data);
  }
  // hapus staff by nip (set isDeleted = 1)
  public function set_delete_staff_by_nip($nip){
		$data = array(
		  "isDeleted"  => 1,
		);
    $this->db->where('nip', $nip);
		return $this->db->update($this->tb_staff, $data);
  }



//  ===============================================GETTER===============================================
//  echo "<pre>";print_r();die();
  // get total
  public function get_total_staff(){
    // get from tb_department
    $this->db->select('count(id) AS total');
    $this->db->from($this->tb_staff);
    $query = $this->db->get();
    if ( $query->num_rows() == 1) {
      return $query->row();
    }
    return FALSE;
  }
  // get total
  public function get_total_pengurus(){
    // get from tb_department
    $this->db->select('count(id) AS total');
    $this->db->from($this->tb_staff);
    $this->db->where('privilege', 'pengurus');
    $query = $this->db->get();
    if ( $query->num_rows() == 1) {
      return $query->row();
    }
    return FALSE;
  }
  // get total
  public function get_total_pelatih(){
    // get from tb_department
    $this->db->select('count(id) AS total');
    $this->db->from($this->tb_staff);
    $this->db->where('privilege', 'pelatih');
    $query = $this->db->get();
    if ( $query->num_rows() == 1) {
      return $query->row();
    }
    return FALSE;
  }
  // get total
  public function get_total_pengajar(){
    // get from tb_department
    $this->db->select('count(id) AS total');
    $this->db->from($this->tb_staff);
    $this->db->where('privilege', 'pengajar');
    $query = $this->db->get();
    if ( $query->num_rows() == 1) {
      return $query->row();
    }
    return FALSE;
  }
  // get all staff
  // masukkan parameter kedua sebagai nama kolom pada database, untuk select kolom
  public function get_all($select = '*'){
    // get from tb_staff
    $this->db->select($select);
    $this->db->from($this->tb_staff);
    $this->db->order_by('id', 'DESC');
    $this->db->where('isDeleted =', 0);
    $query = $this->db->get();
    if ( $query->num_rows() > 0) {
      return $query->result();
    }
    return FALSE;
  }
  // get 1 staff berdasarkan nip
  // masukkan parameter kedua sebagai nama kolom pada database, untuk select kolom
  public function get_staff_by_nip($nip, $select = '*'){
    // get from tb_staff
    $this->db->select($select);
    $this->db->from($this->tb_staff);
    $this->db->where('nip', $nip);
    $this->db->where('isDeleted =', 0);
    $query = $this->db->get();
    if ( $query->num_rows() == 1) {
      return $query->row();
    }
    return FALSE;
  }
  // get 1 department berdasarkan id
  // masukkan parameter kedua sebagai nama kolom pada database, untuk select kolom
  public function get_department_by_nip($nip, $select = '*'){
    // get from tb_department
    $this->db->select($select);
    $this->db->from($this->tb_staff);
    $this->db->join($this->tb_department, "{$this->tb_department}.id={$this->tb_staff}.deptId");
    $this->db->where('tb_staff.nip', $nip);
    $query = $this->db->get();
    if ( $query->num_rows() == 1) {
      return $query->row();
    }
    return FALSE;
  }

}

// $this->db->trans_start();
// $this->db->query('AN SQL QUERY...');
// $this->db->query('ANOTHER QUERY...');
// $this->db->trans_complete();
//
// if ($this->db->trans_status() === FALSE)
// {
//         // generate an error... or use the log_message() function to log your error
// }

?>
