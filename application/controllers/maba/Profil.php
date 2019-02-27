<?php
class Profil extends CI_Controller{
    function profil_diri(){
		$data['title']='Profil';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['quis']='';
		$data['quissp']='';
		$data['admin']='';
		$data['adminsp']='';
        $this->load->view('maba/head',$data);
		$this->load->view('maba/profil/profil_diri',$data);
		$this->load->view('foot',$data);		
	}
	function profil_gambar(){
		$data['title']='Edit Gambar';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['quis']='';
		$data['quissp']='';
		$data['admin']='';
		$data['adminsp']='';
        $this->load->view('maba/head',$data);
		$this->load->view('maba/profil/gambar',$data);
		$this->load->view('foot',$data);		
    }    
    function profil_id(){
		$data['title']='Edit Identitas Diri';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['quis']='';
		$data['quissp']='';
		$data['admin']='';
		$data['adminsp']='';
        $this->load->view('maba/head',$data);
		$this->load->view('maba/profil/id',$data);
		$this->load->view('foot',$data);		
    }
    function profil_alamat(){
		$data['title']='Edit Alamat';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['quis']='';
		$data['quissp']='';
		$data['admin']='';
		$data['adminsp']='';
        $this->load->view('maba/head',$data);
		$this->load->view('maba/profil/alamat',$data);
		$this->load->view('foot',$data);		
    }
    function profil_ortu(){
		$data['title']='Edit Identitas Orang Tua';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['quis']='';
		$data['quissp']='';
		$data['admin']='';
		$data['adminsp']='';
        $this->load->view('maba/head',$data);
		$this->load->view('maba/profil/id_ortu',$data);
		$this->load->view('foot',$data);		
    }
    function profil_sekolah(){
		$data['title']='Edit Identitas Sekolah Asal';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['quis']='';
		$data['quissp']='';
		$data['admin']='';
		$data['adminsp']='';
        $this->load->view('maba/head',$data);
		$this->load->view('maba/profil/id_sekolah',$data);
		$this->load->view('foot',$data);		
    }
    function profil_fisik(){
		$data['title']='Edit Kondisi Fisik';
		$data['home']='';
		$data['homesp']='';
		$data['news']='';
		$data['newssp']='';
		$data['download']='';
		$data['downloadsp']='';
		$data['quis']='';
		$data['quissp']='';
		$data['admin']='';
		$data['adminsp']='';
        $this->load->view('maba/head',$data);
		$this->load->view('maba/profil/fisik',$data);
		$this->load->view('foot',$data);		
    }

}
?>