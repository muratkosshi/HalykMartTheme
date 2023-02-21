<footer>
  <div class="container">
	  <div class="logo col-md-3">
		    		<!-- <div class="logo-image">
		    						    	</div> -->
					<a href="/">	<img class="custom-logo-link" src="/wp-content/uploads/2023/01/logo_s_ornamentom_v_dlinn_belyj.png" alt=""></a>
			    	<div class="logo-content">
				    	<!-- <a href="https://halykmart.kz/registracziya-forma-lending/" title="Онлайн гипермаркет в твоем смартфоне!">Онлайн гипермаркет в твоем смартфоне!</a> -->
					</div>
				</div>
<!--     <?php
      if ( is_active_sidebar('mega-store-woocommerce-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('mega-store-woocommerce-footer-sidebar');
        echo '</div>';
      }
    ?> -->
      <!-- <div class="row">
       <div class="col-md-12">
     <p class="mb-0 py-3 text-center text-md-left">
          <?php
              if (!get_theme_mod('mega_store_woocommerce_footer_text') ) { ?>
                <a href="<?php echo esc_url('https://www.misbahwp.com/themes/free-woocommerce-wordpress-theme/'); ?>" target="_blank">
                <?php esc_html_e('Mega Store WordPress Theme','mega-store-woocommerce'); ?></a>
              <?php } else {
                echo esc_html(get_theme_mod('mega_store_woocommerce_footer_text'));
              }
            ?>
          <?php if ( get_theme_mod('mega_store_woocommerce_copyright_enable', true) == true ) : ?>
            <?php
            /* translators: %s: Misbah WP */
            printf( esc_html__( 'by %s', 'mega-store-woocommerce' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url('https://wordpress.org'); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'mega-store-woocommerce' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
    </div> -->
    <?php if ( get_theme_mod('mega_store_woocommerce_scroll_enable_setting', true) == true ) : ?>
      <div class="scroll-up">
        <a href="#tobottom"><i class="fa fa-arrow-up"></i></a>
      </div>
    <?php endif; ?>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
