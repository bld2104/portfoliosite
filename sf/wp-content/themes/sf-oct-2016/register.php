<?php
/**
 Template Name: Register
 */
 
get_header(); ?>
 
<div class="container">
      <?php if (!is_user_logged_in()) {?>
              <h3> Greetings: Create an account</h3>

          <div>
            <?php if(defined('REGISTRATION_ERROR')){
            foreach(unserialize(REGISTRATION_ERROR) as $error){
              echo '<p class="order_error">'.$error.'</p><br>';
            }
          }?>
          </div>

            <form id="my-registration-form" method="post" action="<?php echo add_query_arg('do', 'register', get_permalink( $post->ID )); ?>" class="form_comment">
                               <input value="<?php if(isset($_POST['user'])) echo $_POST['user'];?>" name="user" id="username" placeholder="User Name"  required="" type="text">
                <span class="toolTip" title="Enter your username">&nbsp;</span>
   <br><br>
                 <input value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" name="email" id="email" placeholder="Email"  required="" type="text">
                <span class="toolTip" title="Enter a valid email address. your order will delivered on this email box">&nbsp;</span>
    <br><br>

                <input value="" name="pass" id="password" placeholder="Password"  required="" type="Password">
                <span class="toolTip" title="Use atleast 6 characters">&nbsp;</span>
                   <br><br>
                <input value="" name="cpass" id="cpassword" placeholder="Confirm Password"  required="" type="Password">
                <span class="toolTip" title="Confirm your password">&nbsp;</span> </div>

   <br><br>
                  <input name="submit" type="submit" class="btn-ser" value="Sign Up" style="width:160px !important; padding-left:18px;">
<br><br>
</form>
      <?php } else {
      	echo "You are already logged in. Please use the menu above to navigate the site." ;
      } ?>
  <!-- #primary -->
</div>
<!-- #main-content -->
<?php
get_footer(); ?>