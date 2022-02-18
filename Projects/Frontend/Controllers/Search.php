<?php  namespace Project\Controllers;
use  Import, URI, DB, Method;

class Search extends Controller{
	
	function main(){
		$search = Method::post('search');

		Masterpage::title('Search | Pisi GNU/Linux');
		

		$blogsearch =blogSearch($search);

		$forumsearch = forumSearch($search);
		$wikisearch = wikiSearch($search);

		View::wikisearch($wikisearch)->blogsearch(blogsearch($search))->forumsearch(forumSearch($search))->search($search);

		//Import::view(THEMA_NAME.'Search/index',$data);
	} 

	function mesaj(){
		Masterpage::title('Forum Search | Pisi GNU/Linux');
		$id = Uri::mesaj();
		$acilankonu = DB::where('content_id','0','and')->where('user_id',$id)->forum()->result();
		view::konulistesi($acilankonu);
	}
}