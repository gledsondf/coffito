<!-- div id="contMenuAcessoRapido" class="contMenuLateral">
	<nav>
		<h1>Acesso Rápido</h1>
		<ul>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-acesso-rapido','items_wrap' => '%3$s','container' => '', ) ); ?>
		</ul>
	</nav>
</div -->

<div id="busca" class="row box barra">
	<?php get_search_form(); ?>

</div>	
<div id="contMenuServico" class="contMenuLateral box barra">
	<nav>
		<!-- <h1>Serviços</h1> -->
			<?php wp_nav_menu( array( 'theme_location' => 'menu-servicos','items_wrap' => '%3$s','container' => '', ) ); ?>
	</nav>
</div>
<div class="destaqueIconografico">
<!-- <a href="<?php bloginfo( 'url' ) ?>/?p=434" title="<?php bloginfo( 'name' ) ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/img/denuncie.png" /></a> -->
</div>
