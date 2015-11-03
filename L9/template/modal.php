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