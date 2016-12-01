<?php
class Material {
	public static function pdf($title, $link){
		echo "<li><span class='pdf'><i class='fa fa-file-pdf-o'></i></span><a href='{$link}' target='_blank'> {$title} </a></li>";
	}
	
	public static function web($title, $link){
		echo "<li><span class='web'><i class='fa fa-chrome'></i></span><a href='{$link}' target='_blank'> {$title} </a></li>";
	}
	
	public static function ppt($title, $link){
		echo "<li><span class='ppt'><i class='fa fa-file-powerpoint-o'></i></span><a href='{$link}' target='_blank'> {$title} </a></li>";
	}
	
	public static function doc($title, $link){
		echo "<li><span class='doc'><i class='fa fa-file-word-o'></i></span><a href='{$link}' target='_blank'> {$title} </a></li>";
	}
	
	public static function youtube($title, $link){
		echo "<li><span class='yt'><i class='fa fa-youtube-play'></i></span><a href='{$link}' target='_blank'> {$title} </a></li>";
	}
	
	public static function home($title, $link){
		echo "<li><span class='hw'><i class='fa fa-home'></i></span><a href='{$link}' target='_blank'> {$title} </a></li>";
	}
	
	public static function quiz($title, $link){
		echo "<li><span class='quiz'><i class='fa fa-list'></i></span><a href='{$link}' target='_blank'> {$title} </a></li>";
	}
}
?>