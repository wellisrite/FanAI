<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function getDataset(){
    $data=$this->db->get('dataset');
    return $data->result();
  }
  function getjumlahnyala(){
      $data=count($this->db->get_where("dataset",array("keputusan"=>1))->result());
      return $data;
  }
  function getjumlahmati(){
      $data=count($this->db->get_where("dataset",array("keputusan"=>0))->result());
      return $data;
  }
  function getucapannyala($ucapan){
    $data=$this->db->get_where("dataset",array("kata2"=>$ucapan,"keputusan"=>1))->result();
    return $data;
  }
  function getucapanmati($ucapan){
    $data=$this->db->get_where("dataset",array("kata2"=>$ucapan,"keputusan"=>0))->result();
    return $data;
  }
  function getsuhunyala($suhu){
    $data=$this->db->get_where("dataset",array("suhu"=>$suhu,"keputusan"=>1))->result();
    return $data;
  }
  function getsuhumati($suhu){
    $data=$this->db->get_where("dataset",array("suhu"=>$suhu,"keputusan"=>0))->result();
    return $data;
  }
  function getwaktunyala($waktu){
    $data=$this->db->get_where("dataset",array("waktu"=>$waktu,"keputusan"=>1))->result();
    return $data;
  }
  function getwaktumati($waktu){
    $data=$this->db->get_where("dataset",array("waktu"=>$waktu,"keputusan"=>0))->result();
    return $data;
  }
  function insertdataset($data){
    $this->db->insert('dataset', $data);
  }
  // function getjamnyala($jam){
  //   $data=$this->db->get_where("dataset",array("jam"=>$jam,"keputusan"=>1))->result();
  //   return $data;
  // }
  // function getjammati($jam){
  //   $data=$this->db->get_where("dataset",array("jam"=>$jam,"keputusan"=>0))->result();
  //   return $data;
  // }

}
