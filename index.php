<?php
 
get_header();
 
?>

 
<?php	if( have_rows('content_parts') ): while ( have_rows('content_parts') ) : the_row();?>
<?php $part = get_sub_field('content_parts'); ?>


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
		  
								<img src="<?php echo the_field('banner_image') ?>" alt="" />
		  						</div>

								<div class="container">
										<header class="major">
										<h2><?php echo the_sub_field('title') ?></h2>
										<p><?php echo the_sub_field('sub_title') ?> <br /><?php echo the_sub_field('sub_title_two') ?> </p>
										</header>
										<p><?php echo the_sub_field('title_description') ?></p>
								</div>
			</section>
						<!-- Two -->
								<!-- Two -->				
			<!-- Two -->
			<section id="two">
								<div class="container">
									<h3><?php echo the_sub_field('section_two_title') ?></h3>
									<p><?php echo the_sub_field('section_two_description') ?></p>
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
									<h3><?php echo the_sub_field('section_three_title') ?></h3>
									<p><?php echo the_sub_field('section_three_description') ?></p>
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
									<h3><?php echo the_sub_field('section_four_title') ?></h3>
									<p><?php echo the_sub_field('section_four_description') ?></p>
									<form method="post" action="#">
										<div class="row gtr-uniform">
										<?php echo the_field('contact_form') ?>
										
										</div>
									</form>
								</div>
			</section>

						

	</div>

	</div>

	

	<?php  endwhile;
	  endif;
	  ?>

<?php
 get_footer();
  
?>