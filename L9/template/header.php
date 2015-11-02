<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="/template/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/template/js/jssor.slider.mini.js"></script>
    
    

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="/template/css/style.css">
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div class="logo">
				<a href="/"><img src="/images/logo.png"/></a>
			</div>	
			<div class="menu">
				<?
				echo Lib_Menu::getInstance()->getMenu();
				?>
			</div>	
			<div id="modal" class="popupContainer" style="display:none;">
				<header class="popupHeader">
						<span class="header_title">Login</span>
						<span class="modal_close"><i class="fa fa-times"></i></span>
				</header>

				<section class="popupBody">
						
						<!-- Username & Password Login form -->
						<div class="user_login">
								<form action="/enter" method="POST">
										<label>Username</label>
										<input type="text" name="login" value="<?=$login?>"/>
										<br />

										<label>Password</label>
										<input type="password" name="pass" value="<?=$pass?>"/>
										<br />


										<div class="action_btns">
												<div class="one_half"><a href="" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
												<div class="one_half last"><input type="submit" class="btn btn_red" value="Вхід"></div>
										</div>
								</form>

								
						</div>

				</section>
		</div>
		</div>
		<div class="hrr">
		<hr size="5" color="#000000">
		</div>
		<div id="content">
		
			
	