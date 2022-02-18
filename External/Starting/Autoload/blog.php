<?php 

function content_list(){
	return DB::orderBy('id','desc')->where('content_type','content','and')->where('lang',LANG)->get('content')->result();
}

function user_content_list($editor){
	return DB::orderBy('id','desc')->where('content_type','content','and')->where('editor',$editor)->get('content')->result();
}


function content_edit($id){
	return DB::where('id',$id)->get('content')->row();
}

function blog($id=null){
	if ($id) {
		return DB::orderBy('id','desc')->where('content_type','content','and')->where('status','1','and')->where('category_id',$id)->get('content')->result();
	}else{
		return DB::orderBy('id','desc')->where('content_type','content','and')->where('status','1')->get('content')->result();
	}
}

function content($limit = '3'){
	return DB::orderBy('id','desc')->where('content_type','content','and')->where('status','1')->limit($limit)->get('content')->result();
}

function content_confirmation(){
	return DB::orderBy('id','desc')->where('content_type','content','and')->where('status','0')->limit('3')->get('content')->result();
}


function contentCategory(){
	return DB::content_category()->result();
}

function contentCategoryRow($id){
	return DB::where('id',$id)->content_category()->row();
}

function contentRow($id){
	return DB::where('id',$id)->contentRow();
}

function content_image($icerik) {
  $resimbir = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', htmlspecialchars_decode($icerik), $matches);
  if($output){$resimbir = $matches['1']['0'];}
  if(empty($resimbir)){ //Eğer resim eklememişseniz
    $resimbir = URL::base('upload/pisilinux_pisi.png');
  }
  return $resimbir;
}

function slider(){
	return DB::where('durum','1')->orderBy('sira','asc')->get('slider')->result();
}

function blogSearch($search){
	return DB::select('id','title','title_seo','content')->orderBy('id','desc')->whereLike('title', $search,'or')->whereLike('content', $search)->get('content')->result();
}

