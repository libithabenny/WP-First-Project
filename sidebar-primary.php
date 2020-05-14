
<?php
$facebook = get_field('facebook');
$twitter = get_field('instagram');
$instagram = get_field('twitter');
$github = get_field('github');
$mail = get_field('mail');

?>
<header>
					<span class="image avatar"><img src="<?php bloginfo('template_directory');?>/images/avatar.jpg" alt="" /></span>
					<h1 id="logo"><a href="#">Willis Corto</a></h1>
					<p>I got reprogrammed by a rogue AI<br />
					and now I'm totally cray</p>
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
					<?php if($twitter): ?>
					<li><a href="<?php echo $twitter?>" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<?php endif; ?>
					<?php if($facebook): ?>
						<li><a href="<?php echo $facebook?>" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<?php endif; ?>
					<?php if($instagram): ?>
						<li><a href="<?php echo $instagram?>" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<?php endif; ?>
					<?php if($github): ?>
						<li><a href="<?php echo $github?>" class="icon brands fa-github"><span class="label">Github</span></a></li>
					<?php endif; ?>
					<?php if($mail): ?>
						<li><a href="<?php echo $mail?>" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					<?php endif; ?>					
				</ul>
				</footer>

