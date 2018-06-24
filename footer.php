<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pet Animal Store
 */
?>
    <div class="footertown">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-1');?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-2');?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-3');?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-4');?>
                </div>        
            </div>
        </div>
    </div>
    <div id="footer" class="copyright-wrapper">
    	<div class="container">
            <div class="copyright">
                <small><?php echo __('©2018 Master Vet Team. Sva prava zadržana.', 'pet-animal-store'); ?></small>
            </div><div class="clear"></div>  
        </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>