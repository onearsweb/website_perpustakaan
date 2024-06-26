<?php

class Buku extends Controller{
    public function index(){
        $data['title']="Data Buku";
        $data['buku']=$this->model('Buku_model')->getAllBuku();
        $this->view('templates/header', $data);
        $this->view('buku/index', $data);
    }

    public function detail($id){
        $data['title']="Data Buku";
        $data['buku']=$this->model('Buku_model')->getBukuById($id);
        $this->view('templates/header', $data);
        $this->view('buku/detail', $data);
    }
}