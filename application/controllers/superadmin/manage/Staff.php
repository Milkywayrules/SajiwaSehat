<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @chocobabana
 *
 * Semua view akan menuju ke 'view_hub' sebagai terminal selanjutnya,
 * setelahnya akan load file view yang akan menyesuaikan dengan module
 * yang sesuai untuk load file viewnya.
 *
 * Alur :
 * controller -> view_hub -> v_view
 *
 */

class Staff extends CI_Controller {

	function __construct(){
    parent::__construct();
		// nama module
		$this->modules 		= 'superadmin';
		$this->controller = 'manage/staff';
		$this->sidebarActive ='kelolaStaff';
		// load model
		// $this->load->model( "{$this->modules}/{$this->controller}_M" );
		$this->load->model( "M_staff" );
		$this->load->model( "M_department" );
  }

  /*
  | ----------------------------------------------------------------------
  |  I/II | VALIDATION
  | ----------------------------------------------------------------------
  | These are the methods in this section:
  |
  | 1. _mustLoginValidation()
  | 2. _adminPrivilegeValidation()
	| 3. _segmentValidation($segment)
  |
  |
  | ----------------------------------------------------------------------
  */

  /** (1/3)
   * ============================== VALIDASI LOGIN ==================
   * validasi status login, bahwa hanya user yang untuk user yang
   * sudah berhasil login,selain itu redirect ke home.
   * @return location redirect ke home
   */
  private function _mustLoginValidation(){
    ($this->session->userdata('isLogin') == 1) ?
			: (redirect(base_url(), 'refresh'));
	}

  /** (2/3)
   * ============================== VALIDASI PRIVILEGE ==============
   * validasi hak akses atau privilege atau permissions, bahwa hanya
   * untuk 'adminUser', selain itu redirect ke home.
   * @return location redirect ke home
   */
	private function _adminPrivilegeValidation(){
    ($this->session->userdata('privilege') == $this->modules) ?
			: (redirect(base_url(), 'refresh'));
	}

  /** (3/3)
   * ============================== VALIDASI SEGMENT ==============
   * validasi segment sebagai param data, cek apakah param ada
   * dan cek apakah param memiliki data pada db. Jika dua2nya
   * terpenuhi data akan tampil, jika tidak makan akan redirect
   * @return location redirect ke halaman list
   */
	private function _segmentValidation($segment){
		$user = $this->M_staff->get_staff_by_nip($segment);
		if (($segment == NULL) OR ($user == FALSE)) {
			redirect(base_url("{$this->modules}/{$this->controller}"));
		}else {
			return $user;
		}
	}


  /*
  | ----------------------------------------------------------------------
  |  II/II | EDIT HERE FO WHAT THIS SECTION GENERALLY DO
  | ----------------------------------------------------------------------
  | These are the methods in this section:
  |
  | 1. index()
	| 2. tambah()
  | 3. detail()
  | 4. edit()
  | 5. hapus()
  |
  | ----------------------------------------------------------------------
  */

	// ============================== LIST ALL DATA =========================
  public function index()
	{
		// set data untuk digunakan pada view
		$data['view_hub'] = (object)array(
			'modules' 				=> $this->modules, // must have (modules/folder name)
			'tabTitle'				=> 'List all staff', // must have (page title)
			'subTitle'				=> 'List semua staff yang terdaftar', // must have (sub title)
			'contentViewFile'	=> "{$this->controller}/v_all_staff", // must have (file name for content)
			'sidebarActive'		=> $this->sidebarActive, // must have (active status for leftnavbar)
			'dataTables'			=> 1,
			'totStaff'				=> $this->M_staff->get_all(),
		);
		$this->load->view('view_hub', $data);
	}

	// ============================== TAMBAH =========================
  public function tambah()
	{
		// set form rules
		$this->form_validation->set_rules('add-nip', 'nip', 										'required|trim|min_length[5]|max_length[15]|is_unique[tb_staff.nip]');
		$this->form_validation->set_rules('add-fullname', 'nama lengkap', 			'required|trim|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('add-phone', 'no telepon', 						'required|trim|min_length[10]|max_length[15]|is_unique[tb_staff.phone]');
		$this->form_validation->set_rules('add-gender', 'gender', 							'required');
		$this->form_validation->set_rules('add-privilege', 'privilege', 				'required');
		$this->form_validation->set_rules('add-department','department', 				'required');
		$this->form_validation->set_rules('add-username', 'username', 					'required|trim|min_length[5]|max_length[15]|is_unique[tb_staff.username]');
		$this->form_validation->set_rules('add-email', 'email', 								'required|trim|valid_email|min_length[5]|max_length[150]|is_unique[tb_staff.email]');
		$this->form_validation->set_rules('add-password', 'password', 					'required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('add-verPassword', 'ulangi password', 'required|matches[add-password]');
		$this->form_validation->set_error_delimiters('<sub class="form-text text-danger text-nowrap">', '</sub>');
		// run the form validation
		if ($this->form_validation->run() == FALSE) {
			// set data untuk digunakan pada view
			$data['view_hub'] = (object)array(
				'modules' 				=> $this->modules, // must have (modules/folder name)
				'tabTitle'				=> 'Tambah staff', // must have (page title)
				'subTitle'				=> 'Tambah staff', // must have (sub title)
				'contentViewFile'	=> "{$this->controller}/v_add_staff", // must have (file name for content)
				'sidebarActive'		=> $this->sidebarActive, // must have (active status for leftnavbar)
				'department'			=> $this->M_department->get_all(),
			);
			$this->load->view('view_hub', $data);

		}else {
			// insert data to db
			$post = $this->input->post();
			$query = $this->M_staff->set_new_staff($post);

			if ($query) {
				// flashdata untuk sweetalert
				$this->session->set_flashdata('success_message', 1);
				$this->session->set_flashdata('title', "Penambahan staff sukses!");
				$this->session->set_flashdata('text', 'Staff baru telah terdaftar dalam sistem !');
				redirect(current_url());

			}else {
				// flashdata untuk sweetalert
				$this->session->set_flashdata('failed_message', 1);
				$this->session->set_flashdata('title', "Penambahan staff gagal!");
				$this->session->set_flashdata('text', 'Mohon cek kembali data diri staff');
				redirect(current_url());
			} // end if($query): success or failed
		} // end form_validation->run()
	} // end method

	// ============================== EDIT =========================
	public function edit($nip = NULL)
	{
		// set form rules
		$this->form_validation->set_rules('edit-username', 'username', 			'required|trim|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('edit-fullname', 'nama lengkap', 	'required|trim|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('edit-email', 'email', 						'required|trim|valid_email|min_length[5]|max_length[150]');
		$this->form_validation->set_rules('edit-phone', 'no telepon', 			'required|trim|min_length[10]|max_length[15]');
		$this->form_validation->set_rules('edit-address','address', 				'required|trim|min_length[3]|max_length[300]');
		$this->form_validation->set_rules('edit-gender', 'gender', 					'required');
		$this->form_validation->set_rules('edit-privilege', 'privilege', 		'required');
		$this->form_validation->set_rules('edit-department','department', 	'required');
		// run the form validation
		if ($this->form_validation->run() == FALSE) {
			$user = $this->_segmentValidation($nip);
			// set data untuk digunakan pada view
			$data['view_hub'] = (object)array(
				'modules' 				=> $this->modules, // must have (modules/folder name)
				'tabTitle'				=> 'Edit data staff', // must have (page title)
				'subTitle'				=> 'Edit data staff ', // must have (sub title)
				'contentViewFile'	=> "{$this->controller}/v_edit_staff", // must have (file name for content)
				'sidebarActive'		=> $this->sidebarActive, // must have (active status for leftnavbar)
				'user'						=> $user,
				'department'			=> $this->M_department->get_all(),
			);
			$this->load->view('view_hub', $data);

		}else {
			// insert data to db
			$post = $this->input->post();
			$query = $this->M_staff->set_update_staff_by_nip($post['edit-nip'], $post);

			if ($query) {
				// flashdata untuk sweetalert
				$this->session->set_flashdata('success_message', 1);
				$this->session->set_flashdata('title', "Ubah data staff sukses!");
				$this->session->set_flashdata('text', 'Data staff telah terbarukan !');
				redirect(base_url("{$this->modules}/{$this->controller}/detail/{$nip}"));

			}else {
				// flashdata untuk sweetalert
				$this->session->set_flashdata('failed_message', 1);
				$this->session->set_flashdata('title', "Ubah data staff gagal!");
				$this->session->set_flashdata('text', 'Mohon cek kembali data diri staff');
				redirect(current_url());
			} // end if($query): success or failed
		} // end form_validation->run()
	} // end method

	// ============================== DETAL =========================
  public function detail($nip = NULL)
	{
		$user = $this->_segmentValidation($nip);
		// set data untuk digunakan pada view
		$data['view_hub'] = (object)array(
			'modules' 				=> $this->modules, // must have (modules/folder name)
			'tabTitle'				=> 'Detail staff', // must have (page title)
			'subTitle'				=> 'Detail staff', // must have (sub title)
			'contentViewFile'	=> "{$this->controller}/v_detail_staff", // must have (file name for content)
			'sidebarActive'		=> $this->sidebarActive, // must have (active status for leftnavbar)
			'user'						=> $user,
			'department'			=> $this->M_staff->get_department_by_nip($nip),
		);
		$this->load->view('view_hub', $data);
	} // end method

	// ============================== DETAL =========================
  public function hapus($nip = NULL)
	{
		// jika POST akan hapus data dan set SA
		if ($this->input->method(TRUE) == 'POST') {
			// hapus data melalui model
			$user = $this->M_staff->set_delete_staff_by_nip($nip);
			if ($user) {
				$this->session->set_flashdata('success_message', 1);
				$this->session->set_flashdata('title', 'Hapus staff sukses !');
				$this->session->set_flashdata('text', 'Staff telah berhasil dihapus !');
			}else {
				$this->session->set_flashdata('failed_message', 1);
				$this->session->set_flashdata('title', 'Hapus staff gagal !');
				$this->session->set_flashdata('text', 'Mohon hubungi admin website jika masih berlanjut !');
			}
		}
		// jika POST atau pun bukan, akan redirect ke 'modules/controller'
		redirect("{$this->modules}/{$this->controller}");
	} // end method

}
