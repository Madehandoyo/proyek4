<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Penjualan extends CI_Controller{
    function __construct(){
    parent::__construct();
    }
//untuk get data
function index(){
    $result=$this->db->get('tb_penjualan')->result();
    echo json_encode($result);
}
//untuk save data
function save(){
    $data=array(
        'nama'=>$_POST['nama'],
        'jeni_vape'=>$_POST['jenis_vape'],
        'jumlah'=>$_POST['jumlah'],
        'harga'=>$_POST['harga'],
        'tanggal'=>$_POST['tanggal']
    );
    $this->db->insert('tb_penjualan',$data);
}
//untuk update data
function save_update(){
    $data=array(
        'nama'=>$_POST['nama'],
        'jeni_vape'=>$_POST['jenis_vape'],
        'jumlah'=>$_POST['jumlah'],
        'harga'=>$_POST['harga'],
        'tanggal'=>$_POST['tanggal']
    );
    $this->db->where('id',$_POST['id'])->update('tb_penjualan',$data);
}
//untuk delete data
function delete($id){
    $this->db->where('id',$id)->delete('tb_penjualan');
    }
}

