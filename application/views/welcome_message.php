<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Basic Codeigniter API!</h1>

	<div id="body">
		<p>This project includes 4 main controllers (Users, Posts, Categories).</p>

		<p>Each controller has the same functionality (Get all - GET, Get one - GET, Create new entry - POST, Update entry - PUT, Delete entry - DELETE).</p>

		<br>
		<p>Installation by steps</p>
		<ol>
			<li>Configure your `base_url` here <b>application/config/config.php</b></li>
			<li>Create database and setup it here <b>application/config/database.php</b></li>
			<li>Install the tables in your phpmyadmin from here <b>your-app/database.sql</b></li>
			<li>Protect your API, set to specify method for logging in <b>application/config/rest.php</b></li>
			<li>Well done!</li>
		</ol>
		<br>
		<p>Urls available:</p>
		<ul>
			<li>GET: <a href="http://devskit.com/basic-codeigniter-api/api/history">http://devskit.com/basic-codeigniter-api/api/history</a></li>
			<li>GET: <a href="http://devskit.com/basic-codeigniter-api/api/users">http://devskit.com/basic-codeigniter-api/api/users</a></li>
			<li>GET (with: id'): <a href="http://devskit.com/basic-codeigniter-api/api/users/user">http://devskit.com/basic-codeigniter-api/api/users/user</a></li>
			<li>POST (with: name, email, password): <a href="http://devskit.com/basic-codeigniter-api/api/users/user">http://devskit.com/basic-codeigniter-api/api/users/user</a></li>
			<li>PUT (with: id, name, email, password): <a href="http://devskit.com/basic-codeigniter-api/api/users/user">http://devskit.com/basic-codeigniter-api/api/users/user</a></li>
			<li>DELETE (with id): <a href="http://devskit.com/basic-codeigniter-api/api/users/user">http://devskit.com/basic-codeigniter-api/api/users/user</a></li>
		</ul>

		<br>
		<p>The main files which you have to keep in mind:</p>
		<ul>
			<li><b>application/config/config.php</b> - Configure `base_url` and other things</li>
			<li><b>application/config/database.php</b> - Setup your database and insert the sql query from `your-app/database.sql</li>
			<li><b>application/config/autoload.php</b> - You don't have to change here anything for demo but keep in mind that here the libraries, models and other things are loaded</li>
			<li><b>application/config/rest.php</b> - Here you will improve the security for you API</li>
			<li><b>application/controllers/Api/Categories.php</b> - Controller for categories</li>
			<li><b>application/controllers/Api/Posts.php</b> - Controller for posts</li>
			<li><b>application/controllers/Api/Users.php</b> - Controller for users</li>
			<li><b>application/core/MY_Controller.php</b> - Base controller extended by all API Controllers, also the history is registered here</li>
			<li><b>application/helpers/devskit_helper.php</b> - Custom functions</li>
		</ul>
		<br>
		<p>At the moment the model classes are not used, but you if you will have a more powerful application using them would be a good option.</p>
		<ul>
			<li>application/models/Category_model.php</li>
			<li>application/models/History_model.php</li>
			<li>application/models/Post_model.php</li>
			<li>application/models/User_model.php</li>
		</ul>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>