<?php namespace Project\Controllers;
use DB, URI;


class Messages extends Controller
{
	public function main(){		
    	//Import::view('messages/index');
    }

    function content($id){
    	
    	DB::where('id',$id)->update('messages',['status'=>'1']);
    	view::id($id);
    }

    function delete(){
    	DB::where('id',Uri::get('delete'))->delete('messages');
    	redirect('messages');
    }


}