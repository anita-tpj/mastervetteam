<?php
/**
 * The template for displaying home page.
 *
 * Template Name: Custom Home Page
 *
 * @package Pet Animal Store
 */

get_header(); ?>


<section id="about-us">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
			<h3 class="title-line text-center mb-5">O nama</h3>
				<div class="border-image">
    				<img  src="<?php echo esc_url(get_theme_mod('pet_animal_store_border_image',get_template_directory_uri().'/images/line.png')); ?>" alt="">
    			</div>
				<p>
					Veterinarska ambulanta u Petrovaradinu – Master Vet Team, ambulanta koja je uvek otvorena za sve vlasnike kućnih ljubimaca 
					kojima je potrebna naša pomoć.
					Tokom godina uspešnog rada pomogli smo mnogim psima, mačkama, pticama, gušterima, iguanama, kunićima, zmijama
					i drugim životinjama. Naš veterinar tim je strpljiv, prijatan i što je najbitnije edukovan i sa dugogodišnjim iskustvom, 
					uvek spremni da pomognu i daju savet.
				</p>
				<p>	
					Posetite i Vi našu ambulantu sa svojim ljubimcem na adresi:
					Svetosavska 20, Petrovaradin

					i uverite se u našu stručnost i opremljenost ambulante.
				</p>
				<p>
					Radno vreme: svaki dan radni dan i vikendom 24h/7
				</p>
			</div>
			<div class="col-md-6 col-sm-12">
				<img class="double-border-img" src='<?php echo get_stylesheet_directory_uri(); ?>/images/master-vet-team.jpg'>
			</div>
		</div>
	</div>
	
</section>

<section id="our-services">
    <h3 class="title-line text-center mb-5">Naše usluge</h3>
    <div class="border-image">
            <img  src="<?php echo esc_url(get_theme_mod('pet_animal_store_border_image',get_template_directory_uri().'/images/line.png')); ?>" alt="">
    </div>
    <div class="row">

        <div class="col-sm-6 col-lg-3">
            <div class="text-center">
                <div class="home-blog-box">
                    <span><i class="fa fa-microchip"></i><i class="fa fa-syringe"></i></span>
                    <h4 class="team-batch">Vakcine i čipovanje</h4>
                    <p class="content">Uz svaku vakcinaciju bespaltan klinički pregled!</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="text-center">
                <div class="home-blog-box">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <h4 class="team-batch">Hirurgija</h4>
                    <p class="content">
                        Kod nas se sve hiruške intervencije vrše u posebnoj operacionoj sali!
                        U cenu svake hiruške intervencije je uključen postoperativni tretman Vašeg ljubimca i vađenje konaca.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="text-center">
                <div class="home-blog-box">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                    <h4 class="team-batch">Kućne posete</h4>
                    <p class="content">Ukoliko iz nekog razloga niste u mogućnosti da dovedete svog ljubimca, doći ćemo mi do vas!</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="text-center">
                <div class="home-blog-box">
                    <i class="fa fa-h-square"></i>
                    <h4 class="team-batch">Hitne Intervencije</h4>
                    <p class="content">
                        Bolest ne bira vreme. Zbog toga, naš dežurni veterinar je na raspolaganju Vama i vasim ljubimcima
                        0/24h na telefon 069/89-89-107
                    </p>
                </div>
            </div>
        </div>
    </div><!--- end row -->
    <div class="service-btn text-center"><a class="read_more" href="<?php echo get_permalink(); ?>">Saznaj više</a></div>

</section>



<section id="our-products">
	<div class="container">
        <?php if( get_theme_mod('pet_animal_store_sec1_title') != ''){ ?>     
            <h3><?php echo esc_html(get_theme_mod('pet_animal_store_sec1_title',__('PET SUPPLIES','pet-animal-store'))); ?></h3>
            <div class="border-image">
    			<img  src="<?php echo esc_url(get_theme_mod('pet_animal_store_border_image',get_template_directory_uri().'/images/line.png')); ?>" alt="">
    		</div>
        <?php }?>
		
		<?php $pages = array();
			for ( $count = 0; $count <= 0; $count++ ) {
				$mod = intval( get_theme_mod( 'pet_animal_store_product_page' . $count ));
				if ( 'page-none-selected' != $mod ) {
				  $pages[] = $mod;
				}
			}
			if( !empty($pages) ) :
			  $args = array(
			    'post_type' => 'page',
			    'post__in' => $pages,
			    'orderby' => 'post__in'
			  );
			  $query = new WP_Query( $args );
			  if ( $query->have_posts() ) :
			    $count = 0;
					while ( $query->have_posts() ) : $query->the_post(); ?>
					    <div class="box-image">
					        <p><?php the_content(); ?></p>
					        <div class="clearfix"></div>
					    </div>
					<?php $count++; endwhile; ?>
			  <?php else : ?>
			      <div class="no-postfound"></div>
			  <?php endif;
			endif;
			wp_reset_postdata(); 
		?>
		<div class="clearfix"></div>	
	</div>
</section>

<?php do_action( 'pet_animal_store_above_product_section' ); ?>



<section id="news">
	<div class="container">
		<h3 class="title-line text-center mb-5">Zanimljivosti i Saveti</h3>
		<div class="border-image">
    			<img  src="<?php echo esc_url(get_theme_mod('pet_animal_store_border_image',get_template_directory_uri().'/images/line.png')); ?>" alt="">
    	</div>

		<div class="row">

            <?php
            $the_query = new WP_Query( 'posts_per_page=3' );


            while ($the_query -> have_posts()) : $the_query -> the_post();
                get_template_part( 'template-parts/content', 'home' );

            endwhile;
            wp_reset_postdata();

            ?>
	</div><!--- end row -->
</div>

</section>




<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>