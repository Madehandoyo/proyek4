<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class M_login extends CI_Model
{
function cek_login($usr,$psw){
$this->db->where('username',$usr)->where('password',$psw);
return $this->db->get('users')->row_array();
}
}
?>