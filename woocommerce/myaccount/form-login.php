<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
 ?>
<div class="col-md-6 col-sm-12 col-12 mx-auto">
<div class="register-form-custom">


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Авторизация</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Регистрация</a>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">	<?php echo do_shortcode('[df-form-login]'); ?></div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><?php echo do_shortcode('[df-form-signup]'); ?></div>

</div>
</div>
</div>
<style media="screen">
.post-title{
	display: none;
}
.nav-item{
	width: 50%;


}
.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
	 	background: #9462ff!important;
				color: white;
 }

 .nav-tabs .nav-link, .nav-tabs .nav-item.show .nav-link{
 	 	background: #ff6a00!important;
 				color: white;
  }
 #dig_login_va_otp,.lighte {
	 	background: #9462ff!important;
		color: white;
		width: 100%;
		text-align: center;
 }
 .backtoLogin{
	 display: none!important;
 }
	.register-form-custom{
		/* border: 1px solid gray; */
border-radius: 32px;

    height: 350px;
		margin-top: 100px;
		margin-bottom: 100px;
}


</style>


<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
