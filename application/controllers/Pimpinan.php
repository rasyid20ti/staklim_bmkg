<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Pimpinan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Menu_model');
        $this->load->model('Rapat_model');
        $this->load->model('User_model');
        $this->load->model('Instansi_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Umum_model');
        $this->load->model('Alat_model');
        $this->load->model('Bukutamu_model');
    }

    //DASHBOARD PIMPINAN
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['instansi_ajuan'] = $this->Instansi_model->getNot();
        $data['mahasiswa_ajuan'] = $this->Mahasiswa_model->getNot();
        $data['all'] = $this->Umum_model->getNot();
        $data['usertotal'] = $this->User_model->getNumber();
        $data['getYangBelumProses'] = $this->Instansi_model->getYangBelumProses();
        $data['getYangBelumProsesUmum'] = $this->Umum_model->getYangBelumProsesUmum();
        $data['getYangBelumProsesMahasiswa'] = $this->Mahasiswa_model->getNot();
        $data['getTotalAlat'] = $this->Alat_model->getTotalAlat();
        $data['getTamu'] = $this->Bukutamu_model->getTamu();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pimpinan/index', $data);
        $this->load->view('templates/footer');
    }

    //MENU MANAGEMENT
    public function menu()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Added</div>');
            redirect('menu');
        }
    }

    public function addMenu()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Added</div>');
            redirect('pimpinan/menu');
        }
    }

    public function deleteMenu($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Deleted</div>');
        redirect('pimpinan/menu');
    }
    //END MENU

    //SUB MENU
    public function submenu()
    {
        $data['title'] = 'Sub Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Sub Menu Added</div>');
            redirect('pimpinan/submenu');
        }
    }

    public function editSubMenu($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('menu_id', 'Menu Id', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        $menu_id = $this->input->post('menu_id');
        $title = $this->input->post('title');
        $url = $this->input->post('url');
        $icon = $this->input->post('icon');

        $data = array(
            'menu_id' => $menu_id,
            'title' => $title,
            'url' => $url,
            'icon' => $icon
        );
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub Menu has been updated!</div>');
        redirect('pimpinan/submenu');
    }

    public function deleteSubMenu($id)
    {
        $this->db->delete('user_sub_menu', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub Menu Deleted</div>');
        redirect('pimpinan/submenu');
    }
    //END SUB MENU


    //ROLE
    public function role()
    {
        $data['title'] = 'Halaman Pengaturan Akses';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pimpinan/role', $data);
        $this->load->view('templates/footer');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pimpinan/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    public function addRole()
    {
        $data['title'] = 'Role Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pimpinan/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Role Added</div>');
            redirect('pimpinan/role');
        }
    }
    public function deleterole($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Deleted</div>');
        redirect('pimpinan/role');
    }
    //END ROLE

    //PEGAWAI
    public function pegawai()
    {
        $data['title'] = 'Halaman Pegawai';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['userdb'] = $this->db->get('user')->result_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['maha_ins'] = $this->Mahasiswa_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pimpinan/pegawai', $data);
        $this->load->view('templates/footer');
    }
    public function deleteUser($id)
    {
        $data['userdb'] = $this->db->get('user')->result_array();
        $this->db->delete('user', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil dihapus</div>');
        redirect('pimpinan/pegawai');
    }

    public function addUser()
    {
        $data['title'] = 'Tambah User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $email = $this->input->post('email', true);
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($email),
            'image' => 'https://lh3.googleusercontent.com/d/1cwv5kcVkKlp2Inp3QtK8GPqmA2vWWLxS',
            'password' => password_hash($this->input->post('email'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'date_created' => time()
        ];

        $this->db->insert('user', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil dibuat</div>');
        redirect('pimpinan/pegawai');
    }

    public function resetUser($id) //DONE
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = array(
            'password' => password_hash(('staklimkampar96107'), PASSWORD_DEFAULT)
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil direset dengan password staklimkampar96107, silahkan akses kembali.</div>');
        redirect('pimpinan/pegawai');
    }
    //END PEGAWAI

    //RAPAT
    public function rapat()
    {
        $data['title'] = 'Halaman Rapat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rapat'] = $this->db->get('rapat')->result_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('title', 'Judul Rapat', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pimpinan/rapat', $data);
        $this->load->view('templates/footer');
    }

    public function addRapat()
    {
        $data['title'] = 'Tambah Data Rapat Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $data['rapat'] = $this->db->get('rapat')->result_array();

        $this->form_validation->set_rules('rapat', 'Judul Berita', 'required', ['required' => 'Judul Rapat wajib di isi']);
        $this->form_validation->set_rules('isi', 'Badan Berita', 'required', ['required' => 'Isi Rapat wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pimpinan/rapatadd', $data);
            $this->load->view('templates/footer');
        } else {
            $rapat = $this->input->post('rapat', TRUE);
            $isi   = $this->input->post('isi', TRUE);

            $data = array(
                'rapat' => $rapat,
                'isi' => $isi,
                'tanggal' => time()
            );

            $this->Rapat_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Rapat Berhasil Ditambahkan</div>');
            redirect('pimpinan/rapat');
        }
    }

    public function rapatEdit($id)
    {
        $data['title'] = 'Edit Data Rapat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rapat'] = $this->Rapat_model->getById($id);
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('rapat', 'Judul Berita', 'required', ['required' => 'Judul Rapat wajib di isi']);
        $this->form_validation->set_rules('isi', 'Badan Berita', 'required', ['required' => 'Isi Rapat wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pimpinan/rapatedit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'rapat' => $this->input->post('rapat'),
                'isi' => $this->input->post('isi'),
            ];
            $upload_image = $_FILES['dokumentasi']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = '4096';
                $config['upload_path'] = './assets/img/rapat/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('dokumentasi')) {
                    $old_image = $data['rapat']['dokumentasi'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/rapat/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('dokumentasi', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Rapat_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Rapat Berhasil Diubah!</div>');
            redirect('pimpinan/rapat');
        }
    }

    public function rapatDelete($id)
    {
        $this->Rapat_model->delete($id);
        $error = $this->db->error();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Rapat Berhasil Dihapus!</div>');
        redirect('pimpinan/rapat');
    }

    public function rapatDetail($id)
    {
        $data['title'] = 'Edit Data Rapat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rapat'] = $this->Rapat_model->getById($id);
        $data['nof_ins'] = $this->Instansi_model->get();
        $data['jlh'] = $this->Instansi_model->jumlah();
        $this->form_validation->set_rules('rapat', 'Judul Berita', 'required', ['required' => 'Judul Rapat wajib di isi']);
        $this->form_validation->set_rules('isi', 'Badan Berita', 'required', ['required' => 'Isi Rapat wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pimpinan/rapatdetail', $data);
            $this->load->view('templates/footer');
        }
    }

    public function export($id)
    {
        $dompdf = new Dompdf();
        $this->data['rapat'] = $this->Rapat_model->getById($id);
        $this->data['title'] = '<center>Notulensi Rapat BMKG - Tanggal Cetak : ' . date('d F Y') . '</center>';
        $this->data['no'] = 1;
        $dompdf->setPaper('A4', 'Portrait');
        $html = $this->load->view('pimpinan/rapatreport', $this->data, true);
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('Laporan Notulen BMKG Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
}
