<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method; 

class Home extends Controller{	
    function main(){ 
        //$data['mesaj'] = DB::get('iletisim')->result();
       //Import::view('index');
       if (method::post()) {$this->login_model->userControl(method::post());}
     
    }

   
    function logout(){
        Session::deleteAll();
        redirect();
    }
	
}