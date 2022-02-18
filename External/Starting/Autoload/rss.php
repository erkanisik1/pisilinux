<?php 
/**
* Created By  : Erkan IŞIK
* Created Date: 2021-07-27
* Update Date : 2021-07-27
*/

function rssForumSonKonular(){
	$rss = DB::orderBy('id','desc')->where('content_id','0')->limit('15')->forumResult();

		$rss1 = '<?xml version="1.0" encoding="UTF-8" ?>
	<rss version="2.0">
        <channel>
            <title>Pisi GNU/Linux forum rss</title>
	        <link>https://pisilinux.org</link>
	        <description>Pisi GNU/Linux forum rss içerikleri</description>
	        <language>turkish</language>
	        <image>
	            <title>Pisi GNU/Linux</title>
	            <url>'.URL::base('upload/pisilogo/pisilogo240x71.png').'</url>
			    <link>'.URL::base('upload/pisilogo/pisilogo240x71.png').'</link>
		        <width>240</width>
		        <height>71</height>
		    </image>';


		foreach ($rss as $key){
			$rss1 .='<item>
				   <title>'.$key->title.'</title>
				   <link>'.URL::base('/forum/subject/'.$key->id.'-'.$key->title).'</link>
				   <description>'.Limiter::word(html_entity_decode($key->content), 10).'</description>
				   <pubDate>'.$key->insertDate.'</pubDate>
				</item>';
		}

	$rss1 .= '					
	</channel>
	</rss>';
File::write('forum_son_konular_rss.xml', $rss1);
}
