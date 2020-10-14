<?php 

require 'vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

require('./application/third_party/phpoffice/vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class sistem extends CI_Controller
{
    public function __construct(){
        parent ::__construct();
        $this->load->model('modelSistem');
    }

    public function base(){
        $data['title'] = "base";

        $data['user'] = $this->modelsistem->get_user();
        $data['c_user'] = $this->modelsistem->count_user();
    }

    public function login(){
        $judul['title'] = "Login";
        $this->load->view("user/hom's", $judul);
    }

    public function index(){
        $this->load->view('index');
    }

    public function masuk(){
        $this->load->view("hom's");
    }

    public function daftar(){
        $this->load->view('User/register');
    }

    public function coba(){
        $this->load->view('Admin/dashboard');
    }

    public function laporan(){
        $data['title'] = "Auction";
        $data['user'] = $this->modelSistem->get_p2();
        // $data['c_user'] = $this->modelSistem->count_p();

        $this->load->view('Admin/pengaduan', $data);
    }


    // load data
    public function datauser(){
        $data['title'] = "Auction";
        $data['user'] = $this->modelSistem->get_user();
        $data['c_user'] = $this->modelSistem->count_user();

        $this->load->view('Admin/dashboard', $data);
    }

    public function dataAdmin(){
        $data['title'] = "Auction";
        $data['user'] = $this->modelSistem->get_p();
        $data['c_user'] = $this->modelSistem->count_p();

        $this->load->view('Admin/pengaduan', $data);
    }


    // login_user
    public function loginUser(){
        $usernames = $this->input->post('username');
        $passwords = $this->input->post('password');
        $where = array(
            'username' => $usernames,
            'password' => md5($passwords),
        );
        $cek = $this->modelSistem->cek_login("masyarakat", $where)->num_rows();

        if ($cek > 0) {
        $cek_roel = $this->modelSistem->cek_login("masyarakat", $where)->row(0)->level;
            $data_session = array(
                'usernama' => $usernames,
                'level' => $cek_roel,
            );

            $this->session->set_userdata($data_session);

            if ($this->session->userdata('level') == '1') {
                $this->load->view("user/hom's");
            }else if($this->session->userdata('level') == '2'){
                $data['title'] = "Auction";
                $data['user'] = $this->modelSistem->get_p();
                $data['c_user'] = $this->modelSistem->count_p();
                $data['user'] = $this->modelSistem->get_user();
                $data['c_user'] = $this->modelSistem->count_user();
                $this->load->view("Admin/dashboard", $data);
            }
        }else {
            echo "data tidak temukan";
        }
    }

    // export to pdf
    public function cetak(){
        ob_start();

       $data['c_user'] = $this->modelSistem->count_user();
       $data['user'] = $this->modelSistem->get_user();
       $this->load->view('Admin/export/v_pdf_preview',$data);

       $html = ob_get_contents();
            ob_get_clean();

        $pdf = new Html2pdf('P','A4','en');
        $pdf->writeHTML($html);
        $pdf->output('Data_Admin_'.date('d-m-y').'.pdf','D');
    }

    public function pdf_preview(){
        $data['c_user'] = $this->modelSistem->get_user_admin();
        $this->load->view('Admin/export/v_pdf_preview',$data);
    }


    // export to pdf 2
    public function cetak2(){
        ob_start();

       $data['c_user'] = $this->modelSistem->count_p();
       $data['user'] = $this->modelSistem->get_p2();
       $this->load->view('Admin/export/x_pdf_preview',$data);

       $html = ob_get_contents();
            ob_get_clean();

        $pdf = new Html2pdf('P','A4','en');
        $pdf->writeHTML($html);
        $pdf->output('Data_Admin_'.date('d-m-y').'.pdf','D');
    }

    public function pdf_preview2(){
        $data['c_user2'] = $this->modelSistem->get_user_admin();
        $this->load->view('Admin/export/x_pdf_preview',$data);
    }


    // export to exel
    public function export()
    {
        ob_start();

        $data['c_user'] = $this->modelSistem->count_user();
        $data['user'] = $this->modelSistem->get_user();
        $this->load->view('Admin/dashboard',$data);

         $user = $this->modelSistem->getAll()->result();

         $spreadsheet = new Spreadsheet;

         $spreadsheet->setActiveSheetIndex(0)
                     ->setCellValue('A1', 'NIK')
                     ->setCellValue('B1', 'Nama')
                     ->setCellValue('C1', 'Email')
                     ->setCellValue('D1', 'Username')
                     ->setCellValue('E1', 'No-Telp');

         $kolom = 2;
         $nomor = 1;
         foreach($user as $masyarakat) {

              $spreadsheet->setActiveSheetIndex(0)
                          ->setCellValue('A' . $kolom, $masyarakat->nik)
                          ->setCellValue('B' . $kolom, $masyarakat->nama)
                          ->setCellValue('C' . $kolom, $masyarakat->email)
                          ->setCellValue('D' . $kolom, $masyarakat->username)
                          ->setCellValue('E' . $kolom, $masyarakat->telp);

              $kolom++;
              $nomor++;

         }

        $writer =  new Xlsx($spreadsheet);
        ob_end_clean();
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Latihan.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    // export to exel2
    public function export2()
    {
        ob_start();

        $data['c_user'] = $this->modelSistem->count_p();
        $data['user'] = $this->modelSistem->get_p();
        $this->load->view('Admin/pengaduan',$data);

         $user = $this->modelSistem->getAll2()->result();

         $spreadsheet = new Spreadsheet;

         $spreadsheet->setActiveSheetIndex(0)
                     ->setCellValue('A1', 'ID')
                     ->setCellValue('B1', 'Judul')
                     ->setCellValue('C1', 'Isi')
                     ->setCellValue('D1', 'Tanggal')
                     ->setCellValue('E1', 'Lokasi')
                     ->setCellValue('F1', 'Instansi')
                     ->setCellValue('G1', 'Kategori')
                     ->setCellValue('H1', 'File');

         $kolom = 2;
         $nomor = 1;
         foreach($user as $masyarakat) {

              $spreadsheet->setActiveSheetIndex(0)
                          ->setCellValue('A' . $kolom, $masyarakat->id_p)
                          ->setCellValue('B' . $kolom, $masyarakat->judul_p)
                          ->setCellValue('C' . $kolom, $masyarakat->isi_p)
                          ->setCellValue('D' . $kolom, $masyarakat->tgl_p)
                          ->setCellValue('E' . $kolom, $masyarakat->lokasi_p)
                          ->setCellValue('F' . $kolom, $masyarakat->instansi_p)
                          ->setCellValue('G' . $kolom, $masyarakat->kategori_p)
                          ->setCellValue('H' . $kolom, $masyarakat->file_p);

              $kolom++;
              $nomor++;

         }

        $writer =  new Xlsx($spreadsheet);
        ob_end_clean();
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Latihan.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }


    function logout(){
        $this->session->sess_destroy();
        redirect('sistem/index');
    }



    // ajax datables

    public function datamahasiswa()
    {
        
        $datamahasiswa = $this->modelSistem->getdatauser();
        $no =1;
        foreach ($datamahasiswa as  $value) {
            $tbody = array();
            $tbody[] = $no++;
            $tbody[] = $value['nama'];
            $tbody[] = $value['email'];
            $tbody[] = $value['username'];
            $tbody[] = $value['password'];
            $tbody[] = $value['telp'];
            // $aksi= "<button class='btn btn-success ubah-mahasiswa' data-toggle='modal' data-id=".$value['id'].">Ubah</button>".' '."<button class='btn btn-danger hapus-mahasiswa' id='id' data-toggle='modal' data-id=".$value['id'].">Hapus</button>";
            // $tbody[] = $aksi;
            $data[] = $tbody; 
        }

        if ($datamahasiswa) {
            echo json_encode(array('data'=> $data));
        }else{
            echo json_encode(array('data'=>0));
        }
    }

   // add goods
	public function addData2()
	{
		if ($_POST["action"] == "Add") {
			$data = array(
				'nik' => "",
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'telp' => $this->input->post('telp'),
                'level' => '1',
			);
			$this->db->insert('masyarakat', $data);
			echo 'Data Inserted';
		}
    }

    public function addData()
	{
		if ($_POST["action"] == "Add") {
			$data = array(
				'id_p' => "",
				'judul_p' => $this->input->post('judul'),
				'isi_p' => $this->input->post('isi'),
				'tgl_p' => $this->input->post('tgl'),
                'lokasi_p' => $this->input->post('lok'),
                'instansi_p' => $this->input->post('instansi'),
                'kategori_P' => $this->input->post('kategori'),
				'file_p' => $this->upload_image(),
			);
			$this->db->insert('pengaduan', $data);
			echo 'Data Inserted';
		}
    }

    public function dataBarang()
	{
		$databarang = $this->modelSistem->get_p();
		foreach ($databarang as $value) {
			$tbody = array();
			$tbody[] = $value['id_p'];
			$tbody[] = $value['judul_p'];
			$tbody[] = $value['isi_p'];
			$tbody[] = $value['tgl_p'];
            $tbody[] = $value['lokasi_p'];
            $tbody[] = $value['instansi_p'];
            $tbody[] = $value['kategori_p'];
			$img = "<img style='width: 100%;' src='http://localhost/pengaduan_masyarakat/assets/gambar/" . $value['file_p'] . "' ?>";
			$tbody[] = $img;
			$btn = "<button type='button' class='btn btn-primary btn-icon-split editbtn' name='editbtn' data-toggle='modal' id=" . $value['id_p'] . " 	style='padding-right: 7%;'>
						<span class='icon text-white'>
							<i class='fas fa-edit'></i>
						</span>
						<span class='text'>Edit Data</span>
						</button>
						<button type='button' data-toggle='modal' name='deletebtn' id=" . $value['id_p'] . " class='btn btn-danger btn-icon-split mt-2 deletebtn'>
							<span class='icon text-white'>
								<i class='fas fa-trash'></i>
							</span>
							<span class='text'>Delete Data</span>
						</button>";
			$tbody[] = $btn;
			$data[] = $tbody;
		}
		if ($databarang) {
			echo json_encode(array('data' => $data));
		} else {
			echo json_encode(array('data' => 0));
		}
	}
    
    // Delete Barang
	public function deleteBarang()
	{
		$idbarang = $_POST['id_p'];
		$where = array(
			'id_p' => $idbarang
		);

		$this->modelSistem->hapus_data($where, 'pengaduan');
    }
    
    public function editData()
	{
		if ($_POST["action"] == "Edit") {
			$idbarang = $this->input->post('id_barang');
            $data = array(
				'judul_p' => $this->input->post('judul'),
				'isi_p' => $this->input->post('isi'),
				'tgl_p' => $this->input->post('tgl'),
                'lokasi_p' => $this->input->post('lokasi'),
                'instansi_p' => $this->input->post('instansi'),
                'kategori_P' => $this->input->post('kategori'),
				'file_p' => $this->upload_image(),
			);

			$where = array(
				'id_p' => $idbarang
			);

			$this->modelSistem->update_data($where, $data, 'pengaduan');
			echo 'Data Updated';
		}
	}

    // function edit data
	public function getIdBarang()
	{
		$output = array();
		$data = $this->modelSistem->getIdBarang($_POST["id_p"]);
		foreach ($data as $row) {

            $output['idp'] = $row->id_p;
			$output['judul_p'] = $row->judul_p;
			$output['isi_p'] = $row->isi_p;
			$output['tgl_p'] = $row->tgl_p;
            $output['lokasi_p'] = $row->lokasi_p;
            $output['instansi_p'] = $row->instansi_p;
            $output['kategori_p'] = $row->kategori_p;
            // $output['file_p'] = '<input type="hidden" name="hidden_barang_image" value=""/>';
			// if ($row->file_p != '') {
			// 	$output['file_p'] = '<img style="width: 100%;" src="' . base_url() . 'assets/gambar/' . $row->file_p . '" /><input type="hidden" name="hidden_barang_image" value="' . $row->file_p  . '"/>';
			// } else {
			// 	$output['file_p'] = '<input type="hidden" name="hidden_barang_image" value=""/>';
			// }
		}
		echo json_encode($output);
    }
    


    // function upload image
	public function upload_image()
	{
		if (isset($_FILES['file'])) {
			$extension = explode('.', $_FILES['file']['name']);
			$new_name = rand() . '.' . $extension[1];
			$destination = './assets/gambar/' . $new_name;
			move_uploaded_file($_FILES['file']['tmp_name'], $destination);
			return $new_name;
		}
    }
    

       }


       