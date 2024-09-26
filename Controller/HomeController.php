<?php

namespace Controller;

class HomeController extends Controller {

   public function __construct()
   {
       parent::__construct();
   }

    public function index() {

       //$this->loadModel("Product");

      // $products = $this->product->getAll();

       $this->data("a", 10);

       $this->display("home");
    }

    public function demo($id) {
        
        $this->data("id", $id);
        
        $this->display("demo");
    }
}