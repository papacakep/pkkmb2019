<?php
class Download extends CI_Controller{
    function kartu(){
        $data['nama']='nama';
        $data['id']='KARTU PESERTA';
        $this->load->view('download/kartu',$data);
    }
    function bekal_indoor(){
        $data['nama']='nama';
        $data['id']='PEMBEKALAN INDOOR';
        $this->load->view('download/bekal_indoor',$data);
    }
    function rundown_indoor(){
        $data['nama']='nama';
        $data['id']='RUNDOWN KEGIATAN INDOOR';
        $this->load->view('download/rundown_indoor',$data);
    }
    function rekap_indoor(){
        $data['nama']='nama';
        $data['id']='REKAPITULASI KEGIATAN INDOOR';
        $this->load->view('download/rekap_indoor',$data);
    }
    function rekap_outdoor(){
        $data['nama']='nama';
        $data['id']='REKAPITULASI KEGIATAN OUTDOOR';
        $this->load->view('download/rekap_outdoor',$data);
    }
    function bekal_outdoor(){
        $data['nama']='nama';
        $data['id']='PEMBEKALAN OUTDOOR';
        $this->load->view('download/bekal_outdoor',$data);
    }
    function rundown_outdoor(){
        $data['nama']='nama';
        $data['id']='RUNDOWN KEGIATAN OUTDOOR';
        $this->load->view('download/rundown_outdoor',$data);
    }
    function sertifikat(){
        $data['nama']='nama';
        $data['id']='SERTIFIKAT PKKMB';
        $this->load->view('download/sertifikat',$data);
    }
    function sk(){
        $data['nama']='nama';
        $data['id']='SK PANITIA';
        $this->load->view('download/sk_panitia',$data);
    }
    function data(){
        $data['nama']='nama';
        $data['id']='DATA MAHASISWA';
        $this->load->view('download/data_mahasiswa',$data);
    }
    function detil_data(){
        $data['nama']='nama';
        $data['id']='DATA MAHASISWA';
        $this->load->view('download/detil_data_mahasiswa',$data);
    }
    function materi_indoor(){
        $data['nama']='nama';
        $data['id']='MATERI INDOOR';
        $this->load->view('download/materi_indoor',$data);
    }
}
