<?php

class Admin extends CI_Controller{
 
 function index(){
     echo "selamat datang";
    }
 function user(){
    $this->load->view('V_user');
    }
 function petugas(){
     $this->load->view('P_petugas');
    }
 function pegawai(){
     $this->load->view('P_pegawai');
    }
 function pemilik(){
    $this->load->view('P_pemilik');
 
    }
 function pembeli(){
    $this->load->view('P_pembeli');
 
    }
}
?>