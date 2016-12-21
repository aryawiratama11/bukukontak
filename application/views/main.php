<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html ng-app="bukukontak">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>public/materialize/css/materialize.min.css"/>
	<link rel="stylesheet" href="<?php base_url(); ?>public/materialize/icons/font-loader.css"/>
	<script src="<?php base_url(); ?>public/js/jquery.js"></script>
	<script src="<?php base_url(); ?>public/materialize/js/materialize.min.js"></script>
	<script src="<?php base_url(); ?>public/js/angular.js"></script>
	<script src="<?php base_url(); ?>public/js/angular-route.js"></script>
	<script src="<?php base_url(); ?>public/js/app/mainclr.js"></script>
	<title>Buku Kontak - Cingular</title>
</head>
<body ng-controller="mainclr">
	<div ng-view class="container view"></div>
</body>
</html>
