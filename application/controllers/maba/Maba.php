<?php
class Maba extends CI_Controller{
    function admin(){
		$data['title']='Admin';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['quis']='';
		$data['quissp']='';
		$data['admin']='active';
		$data['adminsp']='<span class="sr-only">(current)</span>';
		$this->load->view('maba/head',$data);
		$this->load->view('maba/admin',$data);
		$this->load->view('foot',$data);		
	}
	function download(){
		$data['title']='Download';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='active';
		$data['downloadsp']='<span class="sr-only">(current)</span>';
		$data['quis']='';
		$data['quissp']='';
		$data['admin']='';
		$data['adminsp']='';
		$this->load->view('maba/head',$data);
		$this->load->view('maba/download',$data);
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
		$data['quis']='';
		$data['quissp']='';
		$data['admin']='';
		$data['adminsp']='';
		$this->load->view('maba/head',$data);
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
		$data['quis']='';
		$data['quissp']='';
		$data['admin']='';
		$data['adminsp']='';
		$this->load->view('maba/head',$data);
		$this->load->view('maba/news',$data);
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
		$data['quis']='';
		$data['quissp']='';
		$data['admin']='';
		$data['adminsp']='';
		$this->load->view('maba/head',$data);
		$this->load->view('maba/c-news',$data);
		$this->load->view('foot',$data);		
	}
	function quesioner(){
		$data['title']='Quesioner';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['quis']='active';
		$data['quissp']='<span class="sr-only">(current)</span>';
		$data['admin']='';
		$data['adminsp']='';
		$this->load->view('maba/head',$data);
		$this->load->view('maba/quesioner',$data);
		$this->load->view('foot',$data);		
	}
	function index(){
		$data['title']='PKKMB';
		$this->load->view('pkkmb',$data);
		$this->load->view('home',$data);
		$this->load->view('foot',$data);		
	}
}
?>