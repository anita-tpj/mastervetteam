<?php get_header();
/*
Template name: Contact Page

* Template for Contact Page
*
* @package Mastervetteam WP Theme
*/
?>
    <section class="contact">

        <?php echo do_shortcode('[gmap-embed id="119"]');?>
        <div class="container">
            <h3>Kontaktirajte nas:</h3>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <?php echo do_shortcode('[contact-form-7 id="117" title="Contact form 1"]');?>
                </div>

                <div class="col-md-6 col-xs-12 contact-info">
                    <address>
                        <p>Veterinarska ambulanta - Master Vet Team</p>
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> Preradovićeva 11, Petrovaradin</span></br>
                        <span><i class="fa fa-phone-square" aria-hidden="true"></i> 065/89-89-107</span></br>
                        <span><i class="fa fa-envelope" aria-hidden="true"></i> mastervetteam@gmail.com</span></br>
                    </address>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();