
<?php 
function tarih($tarih, $ayrac = '.',$sec = '') {
  $bosluk = explode(' ', $tarih);
  $tr = explode($ayrac,$bosluk['0']);
  if ($sec=='gun') {return $tr['2'];}
  if ($sec=='ay') {return $tr['1'];}
  if ($sec=='yil') {return $tr['0'];}
  if ($sec=='') {return $tr['2']."-".$tr['1']."-".$tr['0'];}			
}

function timeConvert ( $zaman ){
  $zaman =  strtotime($zaman);
  $zaman_farki = time() - $zaman;
  $saniye = $zaman_farki;
  $dakika = round($zaman_farki/60);
  $saat = round($zaman_farki/3600);
  $gun = round($zaman_farki/86400);
  $hafta = round($zaman_farki/604800);
  $ay = round($zaman_farki/2419200);
  $yil = round($zaman_farki/29030400);
  if( $saniye < 60 ){
    if ($saniye == 0){
      return "az önce";
    } else {
      return $saniye .' saniye önce';
    }
  } else if ( $dakika < 60 ){
    return $dakika .' dakika önce';
  } else if ( $saat < 24 ){
    return $saat.' saat önce';
  } else if ( $gun < 7 ){
    return $gun .' gün önce';
  } else if ( $hafta < 4 ){
    return $hafta.' hafta önce';
  } else if ( $ay < 12 ){
    return $ay .' ay önce';
  } else {
    return $yil.' yıl önce';
  }
}

function status($status){
  $stat = '';
  if ($status === '0') {
    $stat = '<span class="badge badge-pill badge-danger text-white">'.lang('general','passive').'</span>';
  }elseif($status === '1'){
    $stat = '<span class="badge badge-pill badge-success">'.lang('general','active').'</span>';
  }elseif($status === '2'){
    $stat = '<span class="badge badge-pill badge-danger text-white">'.lang('general','banned').'</span>';
  }elseif($status === '3'){
    $stat = '<span class="badge badge-pill badge-primary">'.lang('general','waiting_for_approval').'</span>';
  }elseif($status === '4'){
    $stat = '<span class="badge badge-pill badge-primary">'.lang('general','solved').'</span>';
  }elseif($status === '5'){
    $stat = '<span class="badge badge-pill badge-primary">'.lang('general','solved').'</span>';
  }

  return $stat;
}

function statusAdmin($status){
  if ($status === '0') {
    $stat = '<span class="badge badge-pill badge-danger text-white">'.lang('Genel','passive').'</span>';
  }elseif($status === '1'){
    $stat = '<span class="badge badge-pill badge-success">'.lang('Genel','active').'</span>';
  }elseif($status === '2'){
    $stat = '<span class="badge badge-pill badge-danger text-white">'.lang('Genel','banned').'</span>';
  }elseif($status === '3'){
    $stat = '<span class="badge badge-pill badge-primary">'.lang('Genel','waiting_for_approval').'</span>';
  }elseif($status === '4'){
    $stat = '<span class="badge badge-pill badge-primary">'.lang('Genel','solved').'</span>';
  }

  return $stat;
}


function status1($status){
  if ($status === '1') {
    $stat = '<i class="fas fa-check"></i>';
  }elseif($status === '0'){
    $stat = '<i class="fas fa-times"></i>';
  }

  return $stat;
}


function tcevir($tarih,$saatvarmi = '') {
  $bosluk = explode(' ', $tarih);
  $tr = explode("-",$bosluk['0']);
  $saat = $bosluk['1']['0'].$bosluk['1']['1'].$bosluk['1']['2'].$bosluk['1']['3'].$bosluk['1']['4'];
  if ($saatvarmi) {
    $tarih1 = $tr['2']."-".$tr['1']."-".$tr['0'].' '.$saat;
  }else{
    $tarih1 = $tr['2']."-".$tr['1']."-".$tr['0'];
  }
  return $tarih1;
} 

function tarih1($tarih) {
  $bosluk = explode(' ', $tarih);
  $tr = explode('-',$bosluk['0']);
  return $bosluk[0];
} 

function jalert($p){echo '<script>alert("'.$p.'")</script>';}
function jsetitem($p,$a){echo '<script>localStorage.setItem("'.$p.'", "'.$a.'")</script>';}


function jswal($p, $r = 'error'){echo '<script>swal("","'.$p.'","'.$r.'")</script>';}

function jconfirm($p){echo '<script>confirm("'.$p.'")</script>';}

function ayar(){return DB::get('settings')->row();}

function editor($sec){
	return  DB::select('username')->where('user_id',$sec)->get('user')->value();
}



function katname($data){
	return DB::select('name')->where('id',$data)->content_category()->value();
} 

function etiket($data){
	$array = explode(',',$data);
	$a = '';
	foreach ($array as $key ) {
		$a .= '<a href="#" class="tags">'.$key.'</a> ';
	}
	return $a;
}

function git($link = ''){
  if($link){
    echo '<meta http-equiv="refresh" content="0; url='.URL::base($link).'">';
  }else{
    echo '<meta http-equiv="refresh" content="0; url='.URL::base().'">';
  }
}

function seo($s) {
  $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',','.');
  $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','-','-');
  $s = str_replace($tr,$eng,$s);
  $s = strtolower($s);
  $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
  $s = preg_replace('/\s+/', '-', $s);
  $s = preg_replace('|-+|', '-', $s);
  $s = preg_replace('/#/', '', $s);
  $s = str_replace('.', '', $s);
  $s = trim($s, '-');
  return $s;
}

function kategoriler($kat = '0',$table = 'kategoriler') {
  return DB::where('kat_ustid',$kat)->get($table)->result();
}

function hataVarmi($p){
 if (DB::affectedRows()) {
   redirect(URL::base($p));
 }else{
   jalert(DB::error());
 }
}

function  KategoriListesi($id = 0,$secim = 0,$tire = 0,$select = ''){
  $sorgu = DB::where('kat_ustid',$id)->get('kategoriler')->result();
  $se = '';
  foreach ($sorgu as $key) {
    if ($key->kat_ustid == 0) { 
      $tire = 0;
      $style = 'color:#000;font-weight:bolder;font-size:13px;';
    }

    if ($secim != $key->kat_ustid){
      $secim = $key->kat_ustid;
      $style = 'color:#000';
      $tire++;
    }

    if($key->id == $select){$sel = 'selected';}else{$sel='';}

    echo '<option value="'.$key->id.'" style="'.$style.'"'.$se.$sel.' >'.str_repeat('-&nbsp;',$tire).$key->adi."</option>";
    KategoriListesi($key->id,$secim,$tire,$select);       
  }
}

function post($method,$function){
  if (method::post()) {
    $this->$method->$function(method::post());      
  }
}

function  yonetimKategori($selected = 0, $id = 0,$secim = 0,$tire = 0){

  $sorgu = DB::where('kat_ustid',$id)->get('kategoriler')->result();

  foreach ($sorgu as $key) {

    if ($key->kat_ustid == 0) {$tire = 0;$style = 'color:#000;font-weight:bolder;font-size:13px;';}

    if ($secim != $key->kat_ustid){$secim = $key->kat_ustid;$style = 'color:#000';$tire++;}

    if ($key->id == $selected) { $selected = 'selected'; }  
    echo '<option value="'.$key->id.'" style="'.$style.'" '.$selected.'>'.str_repeat('-&nbsp;',$tire).$key->adi."</option>";

    yonetimKategori($key->id,$secim,$tire);
  }
}


function  KategoriTablosu($id = 0,$secim = 0,$tire = 0){
  $sorgu = DB::where('kat_ustid',$id)->get('kategoriler')->result();

  foreach ($sorgu as $key) {

    if ($key->kat_ustid == 0) {
      $tire = 0;
      $style = 'color:#000;font-weight:bolder;font-size:13px;';
    }

    if ($secim != $key->kat_ustid){
      $secim = $key->kat_ustid;
      $style = 'color:#000';
      $tire++;
    }

    $duzenle = URL::base('panel/category/edit/'.$key->id);
    $sil = URL::base('panel/category/delete/'.$key->id);

    echo '<tr>
    <td><img src="'.URL::base($key->img).'"></td>
    <td style="'.$style.'">'.str_repeat('-&nbsp;',$tire).$key->adi.'</td>
    <td>'.$key->aciklama.'</td>
    <td class="islemler" style="text-align: center;"> 
    <a href="'.$duzenle.'"><i class="fa fa-pencil"></i></a>
    <a href="'.$sil.'" onclick="return confirm(\'Bu kaydı silmek istediğinize eminmisiniz?\')"><i class="fa fa-remove"></i></a> 
    </td>
    </tr>';
    KategoriTablosu($key->id,$secim,$tire);
  }
}

function kelimebol($metin, $karaktersayisi){ 
  $icerik = htmlspecialchars_decode($metin);
  $icerik = strip_tags($icerik);
  $icerik = str_replace(array("\t","\r","\n"), ' ',$icerik);
      $icerik_bol = explode(' ', $icerik); // metini bosluklara gore bolduk
      $icerik = '';
      for($i = 0; $i < count($icerik_bol); $i++) {
        if ($icerik_bol[$i] != '') // veri yok mu? Atla, varsa ekle
        $icerik .= trim($icerik_bol[$i]).' ';
      }

      if( preg_match('/(.*?)\s/i', substr($icerik, $karaktersayisi), $dizi) )
        return $icerik = substr($icerik, 0, $karaktersayisi+strlen($dizi[0]));
} 



function authority($id){
    $user = DB::where('user_id',$id)->get('user')->row();

    return DB::where('id',$user->authority)->get('authority')->row();
}

function setting($row){
  return DB::select('value')->where('title',$row)->get('settings')->value();
}

function settings($key){
    return DB::select('value')->where('title',$key)->settings()->Value(); 
  }
/*
function view($deg = ''){
  return import::view($deg);
}
*/
function selected($id1, $id2){
  if ($id1 == $id2){echo 'selected';}
}

function checked($id1, $id2){
  if ($id1 == $id2){echo 'checked';}
}


function linkcleaner($text){
  return preg_replace('/<a(.*?)href=\"(.*?)\"(.*?)>(.*?)<\/a>/', "\\4", $text);
}

function theme_list(){
  return Folder::files('Projects/Frontend/Views/');
}

function decode($deger){ echo htmlspecialchars_decode($deger);}//decode
function decode1($deger){ return htmlspecialchars_decode($deger);}//decode