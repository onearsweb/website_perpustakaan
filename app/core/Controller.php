<?php

class Controller{

    // Method View
    public function view($view, $data = []){
    require_once '../app/views/'.$view.'.php';
  }

    // Method model
    public function model($model){
      require_once '../app/models/'.$model.'.php';
      return new $model;
    }
}