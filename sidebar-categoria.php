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
<?php
$idCategoria = get_category_by_slug("evento")->cat_ID;
$idCategoria2 = get_category_by_slug("empauta")->cat_ID;
$idCategoria3 = get_category_by_slug("sem-categoria")->cat_ID;
if(is_category('evento') || is_category('empauta')  ){

echo '<div id="contMenuServico" class="contMenuLateral box barra">
	<nav>
		<!-- <h1>Serviços</h1> -->
		<div class="menu"><ul>';


 wp_list_categories('include=' . $idCategoria . ','. $idCategoria2.'&title_li=');

echo '</ul></div>
	</nav>
</div>';
}else {
echo '<h1>Categorias</h1><div id="contMenuServico" class="contMenuLateral box barra">
	<nav>
		<!-- <h1>Serviços</h1> -->
		<div class="menu"><ul>';


 wp_list_categories('exclude=' . $idCategoria . ','. $idCategoria2.','.$idCategoria3.'&title_li=');

echo '</ul></div>
	</nav>
</div>';
};


 ?>
<div class="destaqueIconografico">
<!-- <a href="<?php bloginfo( 'url' ) ?>/?p=434" title="<?php bloginfo( 'name' ) ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/img/denuncie.png" /></a> -->
</div>
