	<?php /* Template Name: Login2 */ ?>


<?php get_header(); ?>

	<style>
			.custom-login { 
				width: 370px; overflow: hidden; margin: 50px auto; padding: 10px;
				color: #333; font-size: 12px; line-height: 16px; 
				}
			ul.tabs_login { float: left; margin: 0; padding: 0; list-style-type: none; }
			ul.tabs_login li { float: left; overflow: hidden; margin: 0 5px 0 0; padding: 0; background-color: #fff; }
			ul.tabs_login li a { 
				height: 30px; display: block; padding: 0 15px; line-height: 30px; 
				text-decoration: none; color: #777; background-color: #ccc;
				}
			ul.tabs_login li a:hover { color: #999; background-color: #efefef; }
			ul.tabs_login li.active_login a { font-weight: bold; color: #333; background-color: #fff; }

			.tab_container_login { width: 100%; float: left; margin: 0 0 20px 0; background-color: #fff; }
			.tab_content_login { padding: 20px; box-shadow: 1px 2px 3px 0 rgba(0,0,0,0.7); }

			.custom-login h3 { margin: 0 0 10px 0; border: 0 none; font-size: 14px; line-height: 14px; }
			.custom-login p { margin: 20px 0; }

			.username, .password, .login_fields { width: 100%; overflow: hidden; margin: 7px 0 0 0; padding: 3px 0; }
			.username label, .password label { width: 80px; float: left; margin: 6px 0 0 0; color: #777; }
			.username label { margin: 0; }
			.username input, .password input { 
				font: 12px/18px "Lucida Grande", "Lucida Sans Unicode", Verdana, sans-serif; 
				float: left; width: 200px; margin: 0; padding: 3px 7px; color: #777;
				}
			.rememberme { float: right; margin: 0 20px 0 0; color: #777; font-size: 11px; }
			#rememberme { float: left; margin: 2px 7px 0 0; }
			.user-submit { float: left; margin: 0; }

			.user-logged-in { 
				width: 330px; overflow: hidden; padding: 20px; color: #333; background-color: #fff; 
				box-shadow: 1px 2px 3px 0 rgba(0,0,0,0.7); 
				}
			.user-info { float: left; width: 240px; }
			.user-info p { margin: 10px 0; }
			.user-info p:last-child { color: #777; }
			.user-info a { color: #777; text-decoration: none; }
			.user-info a:hover { color: #999; text-decoration: underline; }
			.user-icon { float: left; width: 80px; }
			.user-icon img { width: 60px; height: 60px; box-shadow: 1px 2px 3px 0 rgba(0,0,0,0.7); }
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				$(".tab_content_login").hide();
				$("ul.tabs_login li:first").addClass("active_login").show();
				$(".tab_content_login:first").show();
				$("ul.tabs_login li").click(function() {
					$("ul.tabs_login li").removeClass("active_login");
					$(this).addClass("active_login");
					$(".tab_content_login").hide();
					var activeTab = $(this).find("a").attr("href");
					$(activeTab).show();
					return false;
				});
			});
		</script>
	
		<div class="custom-login">
<?php if ( ! is_user_logged_in() ) { ?>

			<br><br><br><br><br>


<ul class="tabs_login">
				<li class="active_login"><a href="#tab1_login">Login</a></li>
				<li><a href="#tab2_login">Register</a></li>
				<li><a href="#tab3_login">Forgot Password?</a></li>
			</ul>
			<div class="tab_container_login">
				<div id="tab1_login" class="tab_content_login">
										<h3>Have an account?</h3>
					<p>Log in here. To register or recover your password use the tabs above.</em></p>
					
					<form method="post" action="http://sweetfields.org/wp-login.php">
						<div class="username">
							<label for="user_login">Username or email address: </label>
							<input type="text" name="log" value="">
						</div>
						<div class="password">
							<label for="user_pass">Password: </label>
							<input type="password" name="pwd" value="" autocomplete="off">
						</div>
						<div class="login_fields">
							<div class="rememberme">
								<label for="rememberme">
									<input type="checkbox" name="rememberme" value="forever" checked="checked" id="rememberme"> Remember me
								</label>
							</div>
														<input type="submit" name="user-submit" value="Login" class="user-submit">
							<input type="hidden" name="redirect_to" value="http://sweetfields.org/profile/">
							<input type="hidden" name="user-cookie" value="1">
						</div>
					</form>
				</div>
				<div id="tab2_login" class="tab_content_login" style="display:none;">
					<h3>Registering allows you to purchase CSA shares, sign up to attend events, and help us keep track of donations for IRS tax exemption.</h3>
					<p> Your password will be sent to you via email.</p>
					<form method="post" action="http://sweetfields.org/wp-login.php?action=register">
						<div class="username">
							<label for="user_login">Username: </label>
							<input type="text" name="user_login" value="">
						</div>
						<div class="email">
							<label for="user_email">Your Email: </label>
							<input type="text" name="user_email" value="">
						</div>

							<div class="password">
							<label for="user_pass">Password: </label>
							<input type="password" name="pwd" value="" autocomplete="off">
						</div>
						<div class="login_fields">
														<input type="submit" name="user-submit" value="Sign up!" class="user-submit">
							<input type="hidden" name="redirect_to" value="http://sweetfields.org/thanksforregistering">
							<input type="hidden" name="user-cookie" value="1">
						</div>
					</form>
				</div>
				<div id="tab3_login" class="tab_content_login" style="display:none;">
					<h3>No worries!</h3>
					<p>Enter your username or email to reset your password. If you can't remember or are still having trouble, email us at info@sweetfields.org. </p>
					<form method="post" action="http://sweetfields.org/wp-login.php?action=lostpassword">
						<div class="username">
							<label for="user_login">Username or Email: </label>
							<input type="text" name="user_login" value="">
						</div>
						<div class="login_fields">
														<input type="submit" name="user-submit" value="Reset my password" class="user-submit">
							<input type="hidden" name="redirect_to" value="http://sweetfields.org/password-reset-confirmation">
							<input type="hidden" name="user-cookie" value="1">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php } else { ?>
	</div>
	<div class="container">
	<h1> You are already logged in. </h1>
	<p><?php wp_loginout( home_url() );?> | <a href="http://sweetfields.org/profile/">View Your Profile</a>
		<br><br><br><br><br>
</div>

<?php }
?>

		<?php get_footer(); ?>