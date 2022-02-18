<?php import::view('header'); ?>
<div class="widget-box">
	<div class="widget-title"> <span class="icon"><i class="fa fa-check"></i></span>
		<h5>yFunc Fonksiyonları</h5>
	</div>
	<div class="widget-content nopadding">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="250">Adı</th>
					<th width="150">Kullanımı</th>
					<th>Açıklaması</th>
				</tr>
			</thead>		
			<tbody>
				<tr>
					<td>KategoriListesi</td>
					<td>yFunc::KategoriListesi()</td>
					<td></td>
				</tr>
				
				<tr>
					<td>KategoriTablosu</td>
					<td>yFunc::KategoriTablosu()</td>
					<td></td>
				</tr>

				<tr>
					<td>WikiKategoriTablosu</td>
					<td>yFunc::WikiKategoriTablosu()</td>
					<td></td>
				</tr>

				<tr>
					<td>ykat</td>
					<td>yFunc::ykat()</td>
					<td></td>
				</tr>

				<tr>
					<td>yonetimKategori</td>
					<td>yFunc::yonetimKategori()</td>
					<td></td>
				</tr>

				<tr>
					<td>wiki_kat</td>
					<td>yFunc::wiki_kat()</td>
					<td></td>
				</tr>

				<tr>
					<td>forum_kat</td>
					<td>yFunc::forum_kat()</td>
					<td></td>
				</tr>

				<tr>
					<td>seo</td>
					<td>yFunc::seo()</td>
					<td></td>
				</tr>

				<tr>
					<td>menuname</td>
					<td>yFunc::menuname()</td>
					<td></td>
				</tr>

				<tr>
					<td>yazilar</td>
					<td>yFunc::yazilar()</td>
					<td></td>
				</tr>

				<tr>
					<td>kategoriler</td>
					<td>yFunc::kategoriler()</td>
					<td></td>
				</tr>

				<tr>
					<td>tcevir</td>
					<td>yFunc::tcevir()</td>
					<td></td>
				</tr>

				<tr>
					<td>authority</td>
					<td>yFunc::authority()</td>
					<td></td>
				</tr>

				<tr>
					<td>Forum Kategori Tablosu </td>
					<td>yFunc::forumKategoriTablosu()</td>
					<td>Foruma ait kategorileri tablo düzeninde alt kategoriler dahil listeler.</td>
				</tr>

			</tbody>
		</table>  
	</div>
</div>

<div class="widget-box">
	<div class="widget-title"> <span class="icon"><i class="fa fa-check"></i></span>
		<h5>Myfunc Fonksiyonları</h5>
	</div>
	<div class="widget-content nopadding">
			<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="250">Adı</th>
					<th width="150">Kullanımı</th>
					<th>Açıklaması</th>
				</tr>
			</thead>		
			<tbody>
				<tr>
					<td>loginControl</td>
					<td>Myfunc::loginControl()</td>
					<td></td>
				</tr>
				
				<tr>
					<td>kelimebol</td>
					<td>Myfunc::kelimebol()</td>
					<td></td>
				</tr>

				<tr>
					<td>katmenu</td>
					<td>Myfunc::katmenu()</td>
					<td></td>
				</tr>

				<tr>
					<td>menu</td>
					<td>Myfunc::menu()</td>
					<td></td>
				</tr>

				<tr>
					<td>myalert</td>
					<td>Myfunc::myalert()</td>
					<td></td>
				</tr>

				<tr>
					<td>tcevir</td>
					<td>Myfunc::tcevir()</td>
					<td></td>
				</tr>

				<tr>
					<td>tarih</td>
					<td>Myfunc::tarih()</td>
					<td></td>
				</tr>

				<tr>
					<td>editor</td>
					<td>Myfunc::editor()</td>
					<td></td>
				</tr>

				<tr>
					<td>setting</td>
					<td>Myfunc::setting()</td>
					<td></td>
				</tr>
			
			</tbody>
		</table>
	</div>
</div>

<div class="widget-box">
	<div class="widget-title"> <span class="icon"><i class="fa fa-check"></i></span>
		<h5>Diğer Fonksiyonlar</h5>
	</div>
	<div class="widget-content nopadding">
			<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="250">Adı</th>
					<th width="150">Kullanımı</th>
					<th>Açıklaması</th>
				</tr>
			</thead>		
			<tbody>
				<tr>
					<td>tarih</td>
					<td>tarih()</td>
					<td>Üç parametre alır. işleme alacağı tarih, işleme aldığı tarihin ayraç şekli ( varsayılan noktadır ), sec parametresidir ( varsayılan boştur). <br> yaptığı işlem girilen tarihi ters çevirmektir, yada girilin tarihin ay, gün, yıl bilgilerini almaktır </td>
				</tr>
				
				<tr>
					<td>jalert</td>
					<td>jalert()</td>
					<td>popup pencerede mesaj gösterilmesini sağlar.</td>
				</tr>

				<tr>
					<td>ayar</td>
					<td>ayar()->sütun_adi</td>
					<td>mysql settings tablosundan veri çekilmesini sağlar örnek olarak ayar()->ayar_description</td>
				</tr>

				<tr>
					<td>tcevir</td>
					<td>tcevir()</td>
					<td>data olarak gönderilen tarih bilgisini ters çevirir. örnek tcevir(06-01-2018) 2018-01-06 çevirir, yada tcevir(2018-01-06) 01-06-01-2018 çevirir.</td>
				</tr>

				<tr>
					<td>editor</td>
					<td>editor()</td>
					<td>content tablosundan aldığınız editor id'sini data olarak girerseniz editorün ismini verir, örnek echo editor('15') çıkan sonuc Editorun adı.</td>
				</tr>

				<tr>
					<td>katname</td>
					<td>katname()</td>
					<td></td>
				</tr>

				<tr>
					<td>etiket</td>
					<td>etiket()</td>
					<td></td>
				</tr>

				<tr>
					<td>seo</td>
					<td>seo()</td>
					<td></td>
				</tr>

				<tr>
					<td>kategoriler</td>
					<td>kategoriler()</td>
					<td></td>
				</tr>

				<tr>
					<td>etiketler</td>
					<td>etiketler()</td>
					<td></td>
				</tr>

				<tr>
					<td>hataVarmi</td>
					<td>hataVarmi()</td>
					<td>Models klasöründeki fonksiyon içindeki veritabanı sorgularındaki hatayı yakalar, hata var ise popup pencere içinde hatayı gösterir, hata yoksa parametre olarak girilin sayfayı işleme alır.  </td>
				</tr>

				<tr>
					<td>KategoriListesi</td>
					<td>KategoriListesi()</td>
					<td></td>
				</tr>

				<tr>
					<td>Forum Kategorileri </td>
					<td>forum_kategori()</td>
					<td>Forum kategorisini listeler, üst kategori id parametresini alır, varsayılan parametre 0 dır</td>
				</tr>
			
			</tbody>
		</table>
	</div>
</div>
<?php import::view('footer'); ?>