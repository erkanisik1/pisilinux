<?php 

function category(){
	return DB::where('kat_ustid',0)->kategoriler()->result();
}
function content_category(){return DB::where('lang',LANG,'and')->where('parentId',0)->content_category()->result();}

function contentListAdmin(){
	return DB::orderBy('id','desc')->where('content_type','content')->get('content')->result();
}

/* Functions Content */
function pageList(){
	return DB::orderBy('title','asc')->where('content_type','page')->get('content')->result();
}

function pageEdit($id){
	return DB::where('id',$id)->get('content')->row();
}


function duyuru(){
	return DB::where('status','1')->duyuruRow();
}

function duyuruRow($id){
		return DB::Where('id',$id)->duyuruRow();
	}

function etiketler(){
  $par = DB::select('icerik_tag')->get('content')->result();
  $a = '';$b='';
  foreach ($par as $key ) {
    $a .= $key->icerik_tag.',';
  }

  $new =  explode(',',$a);
  return array_unique($new);

}


/* End Functions Content */

function telegram($messaggio) {
    echo "Mesaj Gönderiliyor.. -1001464176086\n";
    $url = "https://api.telegram.org/bot889222363:AAF-kRBifC2lt9Yvv6mUqEuu1h0f7vIYhhA/sendMessage?chat_id=-1001464176086";
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

function translate($data){echo ML::select($data);}

function lang($langFile, $langParam){
	return Lang::select($langFile, $langParam);
}


function loginControl($deg='Panel'){
	if(!Session::select('login')){
		redirect('home/login');
	}
}

function reCaptcha($response){
	$fileds = [
		'secret' 	=> "6Lc2qXwUAAAAAGfGK29-85EpV72saCoGwDUvwJv2",
		'response' 	=> $response
	];

	$ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
	curl_setopt_array($ch, [
		CURLOPT_POST 			=> true,
		CURLOPT_POSTFIELDS 		=> http_build_query($fileds),
		CURLOPT_RETURNTRANSFER 	=> true
	]);

	$result = curl_exec($ch);
	curl_close($ch);
	return json_decode($result,true);
}

function member_role($id){
	return DB::select('authority')->where('id',$id)->get('authority')->value();
	
}

function authority_list(){
	return DB::get('authority')->result();
}


function category_name($id){
	return DB::select('adi')->where('id',$id)->get('kategoriler')->value();
}

function galeryCategory(){
	return DB::get('galeryCategory')->result();
}

/* DOWNLOAD FUNCTIONS */

function downloadLast(){
	return DB::where('lang',LANG)->orderBy('id','desc')->limit('2')->download()->result();
}

function downloadEdit($id){
	return DB::where('id',$id)->download()->row();
}

/* END DOWNLOAD FUNCTIONS */


function languageList(){
	return DB::orderBy('sirala','asc')->language()->result();
}

function langRow($id){
	return DB::where('id',$id)->language()->row();
}

/* MENU FUNCTIONS */
function menuList($menuCatId=''){
	return DB::where('menuCatId',$menuCatId)->menuResult();
}

function menuListAdmin($subMenuId ='0'){
	return DB::where('subMenuId',$subMenuId)->menuResult();
}

function menuCatList(){
	return DB::menucat()->result();
}

function menuCatName($id){
	return DB::where('id',$id)->menucat()->value('name');
}


function menu($menuCatId){
	return DB::where('menuCatId', $menuCatId)->menu()->result();
}

function menu1($menuCatId){
	return DB::where('menuCatId', $menuCatId,'and')->where('lang',LANG)->menu()->result();
}

function menuRow($id){
	return DB::where('id',$id)->menu()->row();
}

/* END MENU FUNCTIONS */
function userRow($id){
	return DB::where('user_id',$id)->get('user')->row();
}

function activeUserCount(){
	return DB::where('status','1')->get('user')->totalRows();
}

function disableMemberCount(){
	return DB::where('status','2')->get('user')->totalRows();
}

function pendingMemberCount(){
	return DB::where('status','0')->get('user')->totalRows(); 
}

function username($id){
	return DB::select('username')->where('user_id',$id)->get('user')->value();
}

function userList(){
  return  DB::orderBy('username','asc')->where('status',1)->get('user')->limit('10')->result();
}



function contentStatus($id){
	return DB::select('status')->where('value',$id, 'and')->where('lang',LANG)->contentStatus()->value();
}



/* functions Meagges*/
function messsageCount($userid){
 	return  DB::where('userId',$userid,'and')->where('status','0')->messages()->totalRows('TRUE');
}

function messageList($userid){
	return  DB::where('userId',$userid)->messages()->result();	
}



function messageListAdmin(){
	return  DB::where('admin','1')->messages()->result();	
}

function messageRow($id){
	return DB::where('id',$id)->messages()->row();
}

function messageStatus($status){
	if ($status == 1) {
		echo '<i class="fa fa-envelope" title="'.lang('message','read').'"></i>';
	}else{
		echo '<i class="fa fa-envelope-o" title="'.lang('message','unread').'"></i>';
	}
}

/* End Functions Meagges*/
