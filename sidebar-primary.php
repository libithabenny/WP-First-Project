
			<header>
					<span class="image avatar"><img src="<?php echo the_field('side_bar_image','option') ?>" alt="" /></span>
					<h1 id="logo"><a href="#"><?php echo the_field('side_bar_heading','option') ?></a></h1>
					<p><?php echo the_field('side_bar_description','option') ?><br />
					<?php echo the_field('side_bar_description_two','option') ?></p>
			</header>
			<nav id="nav">
					<div id="primary" class="sidebar">
    				<?php do_action( 'before_sidebar' ); ?>
    				<?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
		
					<ul>
						<li><?php
							wp_nav_menu( array( 
    						'theme_location' => 'my-custom-menu', 
    						'container_class' => 'custom-menu-class' ) ); 
						?></li>
					</ul>
				
   					<?php endif; ?>
					</div>
			</nav>

			<footer>
				<ul class="icons">
					<?php $twitter = get_field('twitter','option');
					if($twitter): ?>
					<li><a href="<?php echo $twitter?>" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<?php endif; ?>
					<?php $facebook = get_field('facebook','option');
					if($facebook): ?>
						<li><a href="<?php echo $facebook?>" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<?php endif; ?>
					<?php $instagram = get_field('instagram','option');
					if($instagram): ?>
						<li><a href="<?php echo $instagram?>" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<?php endif; ?>
					<?php $github = get_field('github','option');
					if($github): ?>
						<li><a href="<?php echo $github?>" class="icon brands fa-github"><span class="label">Github</span></a></li>
					<?php endif; ?>
					<?php $mail = get_field('mail','option');
					if($mail): ?>
						<li><a href="<?php echo $mail?>" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					<?php endif; ?>					
				</ul>
			</footer>

