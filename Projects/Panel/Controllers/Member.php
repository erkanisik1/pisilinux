<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method, CDN; 

  class Member extends Controller  {
    function __construct(){if (!USERID) {redirect(URL::base('panel'));}}
    
    function main(){
      $data['active_member'] = $this->member_model->active_member();
      $data['pending_member'] = $this->member_model->pending_member();
      import::view('user/active_member_list',$data);
    }
	
	function usernew()	{
		$data['authority'] = DB::orderBy('id','desc')->get('authority')->result();
		import::view('user/user_new',$data);
	}

  function mail(){
    import::view('user/mail');
  }

  function delete($id){
      DB::where('user_id',$id)->delete('user');
      redirect('member');
    }

    function edit($id){
      if (method::post()) {$this->member_model->update(method::post());}
      $data['edit'] = $this->member_model->edit($id);
      import::view('user/user_edit',$data);

    }

  function pending_member(){
    $data['pending_member'] = $this->member_model->pending_member();
      import::view('user/pending_member_list',$data);
  }

  function disable_member(){
    $data['disable_member'] = $this->member_model->disable_member();
      import::view('user/disable_member_list',$data);
  }

  
  }// class sonu