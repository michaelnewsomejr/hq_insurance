<footer id="footer">
	<section class="container abovefooter">
		<section id="subscribe" class="col-md-9">
	<p class="subtext">Subscribe to newsletter</p>
	<form class="sub-form">
		<input placeholder="email address"></input>
		<button>Subscribe</button>
	</form>
</section>


<section id="social" class="col-md-3">
	<a href="#"><img src="<?php bloginfo('template_directory');?>/images/fb.png" class="littleright"></a>
	<a href="#"><img src="<?php bloginfo('template_directory');?>/images/tw.png" class="littleright"></a>
	<a href="#"><img src="<?php bloginfo('template_directory');?>/images/li.png"></a>
</section>
	</section>

	<section id="bottom-nav" class="container">
		<nav>
			<?php wp_nav_menu( array('menu' => 'footer_nav')); ?>
		</nav>
		<p>Copyright © 2013 High Quality Insurance Solutions. All rights reserved.</p>
	</section>
</footer>
</body>
</html>