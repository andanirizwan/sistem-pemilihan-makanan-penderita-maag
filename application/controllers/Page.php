<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("page_model");
    }

	public function index()
	{
		$this->load->view('login');
	}

	public function beranda(){
		$this->load->view('beranda');	
	}

	public function datamakanan(){
		$data['makanan'] = $this->page_model->getallmakanan()->result();
		$this->load->view('datamakanan', $data);
	}
	public function tambahdatamakanan(){
		$this->load->view('tambahdatamakanan');
	}
	public function simpandatamakanan(){

		$nama_makanan = $this->input->post('nama_makanan');
		$karbohidrat = $this->input->post('karbohidrat');
		$protein = $this->input->post('protein');
		$lemak = $this->input->post('lemak');

		$hitung_karbohidrat = 0;
		$hitung_protein = $protein/0.6*100;
		$hitung_lemak = $lemak/0.1*100;
		$nilai_alternatif= $hitung_karbohidrat*0.51+$hitung_protein*0.33+$hitung_lemak*0.15;

		if ($karbohidrat == '0' ) {

			$data1 = array(
				'nama_makanan' => $nama_makanan,
				'karbohidrat' => $karbohidrat,
				'protein' => $protein,
				'lemak' => $lemak
				);

			$data2 = array(
				'nama_makanan' => $nama_makanan,
				'karbohidrat' => '100',
				'protein' => $hitung_protein,
				'lemak' => $hitung_lemak,
				'nilai_alternatif' => $nilai_alternatif
			);

			$this->page_model->savemakanan($data1,'data_makanan');
			$this->page_model->savetransformasi($data2,'matrik_transformasi');
			redirect('page/datamakanan');

		}elseif ($protein == '0.6') {

			$data1 = array(
				'nama_makanan' => $nama_makanan,
				'karbohidrat' => $karbohidrat,
				'protein' => $protein,
				'lemak' => $lemak
				);

			$data2 = array(
				'nama_makanan' => $nama_makanan,
				'karbohidrat' => $hitung_karbohidrat,
				'protein' => '100',
				'lemak' => $hitung_lemak,
				'nilai_alternatif' => $nilai_alternatif
			);

			$this->page_model->savemakanan($data1,'data_makanan');
			$this->page_model->savetransformasi($data2,'matrik_transformasi');
			redirect('page/datamakanan');

		}elseif ($lemak == '0.1') {

			$data1 = array(
				'nama_makanan' => $nama_makanan,
				'karbohidrat' => $karbohidrat,
				'protein' => $protein,
				'lemak' => $lemak
				);

			$data2 = array(
				'nama_makanan' => $nama_makanan,
				'karbohidrat' => $hitung_karbohidrat,
				'protein' => $hitung_protein,
				'lemak' => '100',
				'nilai_alternatif' => $nilai_alternatif
			);

			$this->page_model->savemakanan($data1,'data_makanan');
			$this->page_model->savetransformasi($data2,'matrik_transformasi');
			redirect('page/datamakanan');
		}
		
		else{
 
		$data1 = array(
			'nama_makanan' => $nama_makanan,
			'karbohidrat' => $karbohidrat,
			'protein' => $protein,
			'lemak' => $lemak
			);
		

		$data2 = array(
			'nama_makanan' => $nama_makanan,
			'karbohidrat' => $hitung_karbohidrat,
			'protein' => $hitung_protein,
			'lemak' => $hitung_lemak,
			'nilai_alternatif' => $nilai_alternatif
		);

		$this->page_model->savemakanan($data1,'data_makanan');
		$this->page_model->savetransformasi($data2,'matrik_transformasi');
		redirect('page/datamakanan');
		}
			
	}

	public function editdatamakanan($id){
		
		$data['makanan']= $this->page_model->getByIdmakanan($id)->result();
		$this->load->view('editdatamakanan',$data);
	}
	public function updatedatamakanan(){

		$nama_makanan = $this->input->post('nama_makanan');
		$karbohidrat = $this->input->post('karbohidrat');
		$protein = $this->input->post('protein');
		$lemak = $this->input->post('lemak');
		$id = $this->input->post('id');


		$hitung_karbohidrat = 0;
		$hitung_protein = $protein/0.6*100;
		$hitung_lemak = $lemak/0.1*100;
		$nilai_alternatif= $hitung_karbohidrat*0.51+$hitung_protein*0.33+$hitung_lemak*0.15;

		if ($karbohidrat == '0' ) {

			$data1 = array(
				'nama_makanan' => $nama_makanan,
				'karbohidrat' => $karbohidrat,
				'protein' => $protein,
				'lemak' => $lemak
				);

			$data2 = array(
				'nama_makanan' => $nama_makanan,
				'karbohidrat' => '100',
				'protein' => $hitung_protein,
				'lemak' => $hitung_lemak,
				'nilai_alternatif' => $nilai_alternatif
			);

			$this->page_model->updatemakanan($data1,$id);
			$this->page_model->updatetransformasi($data2,$id);
			redirect('page/datamakanan');

		}elseif ($protein == '0.6') {

			$data1 = array(
				'nama_makanan' => $nama_makanan,
				'karbohidrat' => $karbohidrat,
				'protein' => $protein,
				'lemak' => $lemak
				);

			$data2 = array(
				'nama_makanan' => $nama_makanan,
				'karbohidrat' => $hitung_karbohidrat,
				'protein' => '100',
				'lemak' => $hitung_lemak,
				'nilai_alternatif' => $nilai_alternatif
			);

			$this->page_model->updatemakanan($data1,$id);
			$this->page_model->updatetransformasi($data2,$id);
			redirect('page/datamakanan');

		}elseif ($lemak == '0.1') {

			$data1 = array(
				'nama_makanan' => $nama_makanan,
				'karbohidrat' => $karbohidrat,
				'protein' => $protein,
				'lemak' => $lemak
				);

			$data2 = array(
				'nama_makanan' => $nama_makanan,
				'karbohidrat' => $hitung_karbohidrat,
				'protein' => $hitung_protein,
				'lemak' => '100',
				'nilai_alternatif' => $nilai_alternatif
			);

			$this->page_model->updatemakanan($data1,$id);
			$this->page_model->updatetransformasi($data2,$id);
			redirect('page/datamakanan');
		}
		
		else{
 
		$data1 = array(
			'nama_makanan' => $nama_makanan,
			'karbohidrat' => $karbohidrat,
			'protein' => $protein,
			'lemak' => $lemak
			);
		

		$data2 = array(
			'nama_makanan' => $nama_makanan,
			'karbohidrat' => $hitung_karbohidrat,
			'protein' => $hitung_protein,
			'lemak' => $hitung_lemak,
			'nilai_alternatif' => $nilai_alternatif
		);

		$this->page_model->updatemakanan($data1,$id);
		$this->page_model->updatetransformasi($data2,$id);
		redirect('page/datamakanan');
		}
	}
	

	public function kriteria(){
		$data['kriteria'] = $this->page_model->getallkriteria()->result();
		$this->load->view('kriteria', $data);
	}

	public function tambahkriteria(){
		$this->load->view('tambahkriteria');
	}
	public function simpankriteria(){

		$nama_kriteria = $this->input->post('nama_kriteria');
		$bobot_kriteria = $this->input->post('bobot_kriteria');
 
		$data = array(
			'nama_kriteria' => $nama_kriteria,
			'bobot_kriteria' => $bobot_kriteria,
			);
		
		$this->page_model->savekriteria($data,'kriteria');
		redirect('page/kriteria');
	}
	public function editkriteria($id){
		
		$data['kriteria']= $this->page_model->getByIdkriteria($id)->result();
		$this->load->view('editkriteria',$data);
		
	}

	public function matriktransformasi(){
		$data['matrik'] = $this->page_model->getallmatrik()->result();
		$this->load->view('matriktransformasi', $data);
	}
	
	public function hasilrekomendasi(){
		$data['matrik'] = $this->page_model->getallrangking	()->result();
		$this->load->view('hasilrekomendasi', $data);
	}

	public function hapusmakanan($id){
		
		$this->page_model->hapusmakanan($id);
		redirect('page/datamakanan');
	}

	public function login(){
		$this->load->view('login');
	}
}
