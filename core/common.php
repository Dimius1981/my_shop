<?php
	// http://myshop/?page=about
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = '';
	}

	if (isset($_GET['group'])) {
		$group = $_GET['group'];
	} else {
		$group = 0;
	}

	$path = './templates/';

//Главная страница
//============================================================================
	if ($page == '') {
		$content = "{include file='content/products_view.tpl'}";












//Страница О магазине...
//============================================================================
   } elseif ($page == 'products') {
		$content = "{include file='content/products_view.tpl'}";





//Страница О магазине...
//============================================================================
	} elseif ($page == 'about') {
		include('./templates/content/about.php');
		$content = $content_about;





//Страница Акции
//============================================================================
	} elseif ($page == 'act_page') {
		$content = '<h3>Action page</h3>';









//Страница Корзина
//============================================================================
	} elseif ($page == 'cart') {
		$content = '<h3>Cart page</h3>';




//404
//=============================================================================
	} else {
		$content = '<h3>404 page</h3>';


	}

?>