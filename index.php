<?php
 
get_header();
 
?>

<!-- Header -->

		<section id="header">
				<?php get_sidebar( 'primary' ); ?>
		</section>
		
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="image main" data-position="center">
								<img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg">
										 
								</div>
								<div class="container">
									<header class="major">
										<h2>Read Only</h2>
										<p>Just an incredibly simple responsive site<br />
										template freebie by <a href="http://html5up.net">HTML5 UP</a>.</p>
									</header>
									<p>Faucibus sed lobortis aliquam lorem blandit. Lorem eu nunc metus col. Commodo id in arcu ante lorem ipsum sed accumsan erat praesent faucibus commodo ac mi lacus. Adipiscing mi ac commodo. Vis aliquet tortor ultricies non ante erat nunc integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum.</p>
								</div>
							</section>
						<!-- Two -->
							 <section id="two">
								<div class="container">
									<h3>Things I Can Do</h3>
									<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer lorem ipsum dolor sit amet.</p>
									<ul class="feature-icons">
											<?php if( have_rows('name') ): while( have_rows('name') ): the_row(); ?>
								  				<li class="icon solid <?php echo the_sub_field('icons') ?>">	
													<?php echo the_sub_field('name') ?> </li>
                                         	<?php endwhile;endif;?>
									</ul>
								</div>
							</section> 

						<!-- Three -->
							<section id="three">
								<div class="container">
									<h3>A </h3>
									<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
									<div class="features">
									<?php
											if( have_rows('section') ): while ( have_rows('section') ) : the_row();?>
													<?php  if( get_row_layout() == 'section_layout' ):
															$coloumns = get_sub_field('coloumn'); ?>
           														<?php foreach($coloumns as $coloumn): ?>
																	<article>
																		<a href="#" class="image"><img src="<?php echo $coloumn['image'];?>"/></a>
									      								<div class="inner">
																		<h4><?php echo $coloumn['heading'];?></h4>
																		<p><?php echo $coloumn['description'];?></p>
																		</div>

																	</article>	
																<?php endforeach; ?>
												
											
       												<?php endif;?>
											<?php endwhile ; endif;?>
							
									</div>
								</div>
							</section>
							<!-- Four -->
							<section id="four">
								<div class="container">
									<h3>Contact Me</h3>
									<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
									<form method="post" action="#">
										<div class="row gtr-uniform">
										
										<?php
											echo do_shortcode(
							 					'[contact-form-7 id="19" title="Contact"]'
															);
						  				?>
										</div>
									</form>
								</div>
							</section>

						

						</div>

	</div>

	</body>

<?php
 get_footer();
  
?>