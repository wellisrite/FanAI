<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Main_model'));
  }

  function index()
  {
    $this->load->view('home');
  }
  function test(){
    $this->load->view('fan');
  }
  function naivebayes(){
    $ucapan=$_REQUEST['ucapan'];
    $suhu=round($_REQUEST['suhu']);
    $jam=date("H");
    if($jam>=0 && $jam<11 ){
      $waktu="pagi";
    }
    else if($jam>=11 && $jam<16){
      $waktu="siang";
    }
    else if($jam>=16 && $jam<19){
      $waktu="sore";
    }
    else if($jam>=19 && $jam<24){
      $waktu="malam";
    }
    $jumlahucapan['nyala']=count($this->Main_model->getucapannyala($ucapan));
    $jumlahucapan['mati']=count($this->Main_model->getucapanmati($ucapan));

    $jumlahsuhu['nyala']=count($this->Main_model->getsuhunyala($suhu));
    $jumlahsuhu['mati']=count($this->Main_model->getsuhumati($suhu));

    $jumlahwaktu['nyala']=count($this->Main_model->getwaktunyala($waktu));
    $jumlahwaktu['mati']=count($this->Main_model->getwaktumati($waktu));

    $nyala=$this->Main_model->getjumlahnyala();
    $mati=$this->Main_model->getjumlahmati();

    $keputusannyala=($jumlahucapan['nyala']/$nyala)*($jumlahsuhu['nyala']/$nyala)*($jumlahwaktu['nyala']/$nyala);
    $keputusanmati=($jumlahucapan['mati']/$mati)*($jumlahsuhu['mati']/$mati)*($jumlahwaktu['mati']/$mati);
    $keputusan=3;
    if($keputusanmati>$keputusannyala){
      $keputusan=0;
    }
    else if($keputusanmati<$keputusannyala){
      $keputusan=1;
    }
    echo $keputusan;
  }
  function naivebayesbantuan(){
    $data['kata2']=$_REQUEST['ucapan'];
    $data['suhu']=round($_REQUEST['suhu']);
    $jam=date("H");
    if($jam>=0 && $jam<11 ){
      $waktu="pagi";
    }
    else if($jam>=11 && $jam<16){
      $waktu="siang";
    }
    else if($jam>=16 && $jam<19){
      $waktu="sore";
    }
    else if($jam>=19 && $jam<24){
      $waktu="malam";
    }
    $data['waktu']=$waktu;
    $data['keputusan']=$_REQUEST['keputusan'];
    $this->Main_model->insertdataset($data);
    echo "Makasih dah bantuin ya!";
  }

}
