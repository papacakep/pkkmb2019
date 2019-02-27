<?php
class Sekretaris extends CI_Controller{
	function download(){
		$data['title']='Download';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='active';
		$data['downloadsp']='<span class="sr-only">(current)</span>';
		$data['upload']='';
		$data['uploadsp']='';
		$this->load->view('sekretaris/head',$data);
		$this->load->view('sekretaris/download',$data);
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
		$data['upload']='';
		$data['uploadsp']='';
		$this->load->view('sekretaris/head',$data);
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
		$data['upload']='';
		$data['uploadsp']='';
		$this->load->view('sekretaris/head',$data);
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
		$data['upload']='';
		$data['uploadsp']='';
		$this->load->view('sekretaris/head',$data);
		$this->load->view('sekretaris/news',$data);
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
		$data['upload']='';
		$data['uploadsp']='';
		$this->load->view('sekretaris/head',$data);
		$this->load->view('sekretaris/c-news',$data);
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
		$data['upload']='';
		$data['uploadsp']='';
		$this->load->view('sekretaris/head',$data);
		$this->load->view('sekretaris/e-news',$data);
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
		$data['upload']='';
		$data['uploadsp']='';
		$this->load->view('sekretaris/head',$data);
		$this->load->view('sekretaris/b-news',$data);
		$this->load->view('foot',$data);		
	}
	function upload(){
		$data['title']='Upload Data Mahasiswa';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['upload']='active';
		$data['uploadsp']='<span class="sr-only">(current)</span>';
		$this->load->view('sekretaris/head',$data);
		$this->load->view('sekretaris/upload',$data);
		$this->load->view('foot',$data);		
	}
	function import(){
		$data['title']='Import Data Mahasiswa';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['upload']='active';
		$data['uploadsp']='<span class="sr-only">(current)</span>';
		$this->load->view('sekretaris/head',$data);
		$this->load->view('sekretaris/import',$data);
		$this->load->view('foot',$data);		
	}
	function lihat_mhs(){
		$data['title']='Lihat Data Mahasiswa';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['upload']='active';
		$data['uploadsp']='<span class="sr-only">(current)</span>';
		$this->load->view('sekretaris/head',$data);
		$this->load->view('sekretaris/lihat_mhs',$data);
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
		$data['upload']='';
		$data['uploadsp']='';
		$this->load->view('sekretaris/head',$data);
		$this->load->view('sekretaris/profil',$data);
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
		$data['upload']='';
		$data['uploadsp']='';
		$this->load->view('sekretaris/head',$data);
		$this->load->view('sekretaris/profil_edit',$data);
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
		$data['upload']='';
		$data['uploadsp']='';
		$this->load->view('sekretaris/head',$data);
		$this->load->view('sekretaris/gambar',$data);
		$this->load->view('foot',$data);		
	}
}
?>