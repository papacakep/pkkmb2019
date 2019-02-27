<?php
class Outdoor extends CI_Controller{
	function download(){
		$data['title']='Download';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='active';
		$data['downloadsp']='<span class="sr-only">(current)</span>';
		$data['presensi']='';
		$data['presensisp']='';
		$this->load->view('outdoor/head',$data);
		$this->load->view('outdoor/download',$data);
		$this->load->view('foot',$data);		
	}
	function home(){
		$data['title']='Home';
		$data['home']='active';
		$data['homesp']='<span class="sr-only">(current)</span>';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['presensi']='';
		$data['presensisp']='';
		$this->load->view('outdoor/head',$data);
		$this->load->view('home',$data);
		$this->load->view('foot',$data);
	}
	function index(){
		$data['title']='Home';
		$data['home']='active';
		$data['homesp']='<span class="sr-only">(current)</span>';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['presensi']='';
		$data['presensisp']='';
		$this->load->view('outdoor/head',$data);
		$this->load->view('home',$data);
		$this->load->view('foot',$data);
	}
	function news(){
		$data['title']='News';
		$data['home']='';
		$data['homesp']='';
		$data['news']='active';
		$data['newssp']='<span class="sr-only">(current)</span>';
		$data['download']='';
		$data['downloadsp']='';
		$data['presensi']='';
		$data['presensisp']='';
		$this->load->view('outdoor/head',$data);
		$this->load->view('outdoor/news',$data);
		$this->load->view('foot',$data);		
	}
	function c_news(){
		$data['title']='News Detail';
		$data['home']='';
		$data['homesp']='';
		$data['news']='active';
		$data['newssp']='<span class="sr-only">(current)</span>';
		$data['download']='';
		$data['downloadsp']='';
		$data['presensi']='';
		$data['presensisp']='';
		$this->load->view('outdoor/head',$data);
		$this->load->view('outdoor/c-news',$data);
		$this->load->view('foot',$data);		
	}
	function e_news(){
		$data['title']='Edit News';
		$data['home']='';
		$data['homesp']='';
		$data['news']='active';
		$data['newssp']='<span class="sr-only">(current)</span>';
		$data['download']='';
		$data['downloadsp']='';
		$data['presensi']='';
		$data['presensisp']='';
		$this->load->view('outdoor/head',$data);
		$this->load->view('outdoor/e-news',$data);
		$this->load->view('foot',$data);		
	}
	function b_news(){
		$data['title']='New News';
		$data['home']='';
		$data['homesp']='';
		$data['news']='active';
		$data['newssp']='<span class="sr-only">(current)</span>';
		$data['download']='';
		$data['downloadsp']='';
		$data['presensi']='';
		$data['presensisp']='';
		$this->load->view('outdoor/head',$data);
		$this->load->view('outdoor/b-news',$data);
		$this->load->view('foot',$data);		
	}
	function lihat_mhs(){
		$data['title']='Lihat Data Mahasiswa';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='active';
		$data['downloadsp']='<span class="sr-only">(current)</span>';
		$data['presensi']='';
		$data['presensisp']='';
		$this->load->view('outdoor/head',$data);
		$this->load->view('outdoor/lihat_mhs',$data);
		$this->load->view('foot',$data);		
	}
	function tabel_mhs(){
		$data['title']='Tabel Data Mahasiswa';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='active';
		$data['downloadsp']='<span class="sr-only">(current)</span>';
		$data['presensi']='';
		$data['presensisp']='';
		$this->load->view('outdoor/head',$data);
		$this->load->view('outdoor/tabel_mhs',$data);
		$this->load->view('foot',$data);		
	}
	function profil(){
		$data['title']='Lihat Profil Diri';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['presensi']='';
		$data['presensisp']='';
		$this->load->view('outdoor/head',$data);
		$this->load->view('outdoor/profil',$data);
		$this->load->view('foot',$data);		
	}
	function edit_profil(){
		$data['title']='Edit Profil Diri';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['presensi']='';
		$data['presensisp']='';
		$this->load->view('outdoor/head',$data);
		$this->load->view('outdoor/profil_edit',$data);
		$this->load->view('foot',$data);		
	}
	function edit_foto(){
		$data['title']='Edit Foto Profil';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['presensi']='';
		$data['presensisp']='';
		$this->load->view('outdoor/head',$data);
		$this->load->view('outdoor/gambar',$data);
		$this->load->view('foot',$data);		
	}
	function presensi(){
		$data['title']='Presensi Kehadiran dalam Kegiatan';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['presensi']='active';
		$data['presensisp']='<span class="sr-only">(current)</span>';
		$this->load->view('outdoor/head',$data);
		$this->load->view('outdoor/presensi',$data);
		$this->load->view('foot',$data);		
	}
}
?>