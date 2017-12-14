<?php
	// Exit if accessed directly
	if( !defined( 'ABSPATH' ) ) exit;
?>

<p id="wpforo-title"><?php wpforo_phrase('Forum - Login') ?></p>
 
<form name="wpflogin" action="" method="POST">
  <div class="wpforo-login-wrap">
    <div class="wpforo-login-content">
        <div class="wpforo-table wpforo-login-table wpfbg-9">
          <div class="wpf-tr row-0">
            <div class="wpf-td wpfw-1 row_0-col_0" style="padding-top:10px;">
              <div class="wpf-field wpf-field-type-text">
                <div class="wpf-label-wrap">
                  <p class="wpf-label wpfcl-1"><?php wpforo_phrase('Username') ?></p>
                </div>
                <div class="wpf-field-wrap">
                	<i class="fa fa-user wpf-field-icon"></i>
                    <input autofocus required="TRUE" type="text" name="log" class="wpf-login-text" />
                </div>
                <div class="wpf-field-cl"></div>
              </div>
              <div class="wpf-field wpf-field-type-password">
                <div class="wpf-label-wrap">
                  <p class="wpf-label wpfcl-1"><?php wpforo_phrase('Password') ?></p>
                </div>
                <div class="wpf-field-wrap"> 
                	<i class="fa fa-key wpf-field-icon"></i>
                  	<input required="TRUE" type="password" name="pwd" class="wpf-login-text" />
                  	<i class="fa fa-eye-slash wpf-show-password"></i> 
                </div>
                <div class="wpf-field-cl"></div>
              </div>
              <div>
                <?php do_action('login_form') ?>
                <div class="wpf-field-cl"></div>
              </div>
              <div></div>
              <div class="wpf-field">
                <div class="wpf-field-wrap" style="text-align:center; width:100%;">
                    <p class="wpf-extra wpfcl-1">
                    <input type="checkbox" value="1" name="rememberme" id="wpf-login-remember"> 
                    <label for="wpf-login-remember"><?php wpforo_phrase('Remember Me') ?> | </label>
                    <a href="<?php echo wpforo_lostpass_url(); ?>" class="wpf-forgot-pass"><?php wpforo_phrase('Lost your password?') ?></a> 
                    </p>
                    <input type="submit" name="wpforologin" value="<?php wpforo_phrase('Sign In') ?>" />
                </div>
                <div class="wpf-field-cl"></div>
              </div>
              <div class="wpf-field wpf-extra-field-end">
              	<div class="wpf-field-wrap" style="text-align:center; width:100%;">
              		<?php do_action('wpforo_login_form_end') ?>
                    <div class="wpf-field-cl"></div>
                </div>
              </div>
              <div class="wpf-cl"></div>
            </div>
          </div>
        </div>
  	</div>
  </div>
</form>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>