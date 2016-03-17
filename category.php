	
	<?php get_header(); ?>
	<div id="conteudo" class="col-3quarto row">
	<section>
		<?php /* O Ciclo — com comentários! */ ?>
		<?php while ( have_posts() ) : the_post() ?>
		<?php /* Criando uma div com um ID único graças ao the_ID() e classes semânticas com o post_class() */ ?>
				<div id="post-<?php the_ID(); ?>" class="artigo row">
					<article>
						<?php include "conteudoArtigo.php"; ?>

					</article>
				</div>
		<?php endwhile; ?>
	</section>
	</div><!--conteudo-->

	<div id="menuLateral" class="col-quarto container">
		<aside>
			<?php get_sidebar('categoria'); ?>
		</aside>
	</div><!--menuLateral-->
<?php get_footer(); ?>