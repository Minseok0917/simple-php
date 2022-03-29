<?php 


function script($t){
	echo "<script>$t</script>";
}

function alert($t=""){
	script("alert('$t')");
}

function move($path,$t=""){
	$t && alert($t);
	script("location.replace('$path')");
	exit;
}

function back($t=""){
	$t && alert($t);
	script("history.back()");
	exit;
}

function view($file){
	if( _url[0] == 'actions' ){
		extract($_GET);
		extract($_POST);
	}
    require "../views/$file.php";
}


function isView($file){
	return file_exists("../views/$file.php");
}