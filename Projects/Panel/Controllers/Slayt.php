<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method, URI;
/*
 * Created By: Erkan IŞIK
 * Created Date: 2017-09-06
*/
class Slayt extends Controller{

	 function __construct(){if (!USERID) {redirect(URL::base('panel'));}}
	// slayt ana fonksiyonu
	function main(){	
		$data['breadcrumb'] = 'Slayt';
		$sql = DB::orderBy('sira','asc')->get('slider')->result();
		$sql1 = DB::max('sira')->get('slider')->value();
		View::slider_list($sql)
		->sira_max($sql1)
		;
		//import::view('slayt/slayt_view',$data);
	}

	// slayt ekleme fonksiyonu
	function new(){
		if(method::post()){$this->slider_model->new_slider_save(method::post());}
		import::view('slayt/new_slider');
	}
	
	// slayt sırasını bir yukarı alan fonksiyon
	function up($dt){
		$d = DB::select('sira')->where('id',$dt)->get('slider')->value();
		$r =  $d-1; //3 oldu surası 3 olanı 4 yapacağız
		DB::where('sira',$r)->update('slider',[
			'sira' => $r+1,
			]);

		DB::where('id',$dt)->update('slider',[
			'sira' => $r,
			]);
		redirect('slayt');

	}

	// slayt sırasını bir aşağı alan fonksiyon
	function down($dt){
		$d = DB::select('sira')->where('id',$dt)->get('slider')->value();
		$r =  $d+1; //3 oldu surası 3 olanı 4 yapacağız
		DB::where('sira',$r)->update('slider',[
			'sira' => $r-1,
			]);

		DB::where('id',$dt)->update('slider',[
			'sira' => $r,
			]);
		redirect('slayt');
	}
	// slaytı silen fonksiyon
	function delete($id){
		$this->slider_model->delete($id);		
	}

	function edit(){
		$id = Uri::get('edit');
		if(Method::post()){
			$this->slider_model->slider_update(Method::post());
		}
		$edit = DB::where('id',$id)->get('slider')->row();
		view::edit($edit);

		//import::view('slayt/edit_slider',$data);
	}

	function sliderStatusChange(){
		$status = Method::post('status');
		$id = Method::post('id');		
		if ($status == '0') {$stat = '1';}else{$stat = '0';}
		DB::where('id',$id)->update('slider',['durum' => $stat]);
		echo $id.'-'.$status;
		if (DB::error()) {echo DB::error();}else{echo 'başarılı';}
	}

	function sirala(){
		$sr = DB::sliderResult();
		$d = 1;
		foreach ($sr as $key ) {
			
		}
	}
}