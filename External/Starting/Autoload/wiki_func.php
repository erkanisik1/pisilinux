<?php


/* Functions Wiki */
function wiki_katname($data){
  return DB::select('adi')->where('id',$data)->get('wiki_kat')->value();
} 

function wikiCategory($kat = '30') {
  return DB::where('kat_ustid',$kat)->get('wiki_kat')->result();
}

function wikicontent(){
    return DB::orderBy('id','desc')->where('durum','1','and')->where('lang', LANG)->limit('3')->get('wiki')->result();
}

function wikicontentAdmin(){
    return DB::orderBy('baslik','asc')->where('durum','1','and')->where('lang', LANG)->get('wiki')->result();
}


function wikiCategoryName($id){
	return DB::select('adi')->where('id',$id)->get('wiki_kat')->value();
}

function wiki_confirmation_content(){
	return DB::where('durum','3')->wiki()->result();
}

function wiki_update_content(){
	return DB::where('durum','3')->wiki()->result();
}

function wikiContentRow($id){
	 return DB::where('id',$id,'and')
	 ->where('durum','1','and')
	 ->wiki()
	 ->row();
}

function wikiContentRowAdmin($id){
	 return DB::where('id',$id)
	 ->wiki()
	 ->row();
}

function wikiUpdateRow($id){
	 return DB::where('id',$id)
	 ->wiki_update()
	 ->row();
}


function WikiCategoryList($id){
	return DB::orderBy('id','desc')
	->where('katid',$id,'and')
	->where('durum','1', 'and')
	->where('lang', LANG)
	->wikiResult();
	
}

function wikiStatus($value){
	return DB::select('status')->where('value',$value)->get('status')->value();
}

function wikiSearch($search){
	return DB::select('id','baslik','baslik_seo','detay')->orderBy('id','desc')->whereLike('baslik', $search,'or')->whereLike('detay', $search)->get('wiki')->result();
}

/* End Functions Wiki */