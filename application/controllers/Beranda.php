<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_crud');
  }

  public function index()
  {
    $data['berita'] = $this->m_crud->customQuery("SELECT * FROM detail_berita WHERE status=" . berita_valid . " ORDER BY tgl_berita DESC LIMIT 3");
    $data['pengaduan'] = $this->m_crud->customQuery("SELECT * FROM detail_pengaduan WHERE status<>" . pengaduan_ditolak . " ORDER BY tgl_pengaduan DESC LIMIT 3");

    $title['judul'] = 'Desa Siluman';
    $this->load->view('includes/v_header', $title);
    $this->load->view('includes/v_banner');
    $this->load->view('v_home', $data);
    $this->load->view('includes/v_footer');
  }
}
