<?php
$posts = get_field('modules');

if( $posts ): ?>

<div class="bg-s300">
	<div class="pure-g">
		<div class="pure-u-1-2 l-box">
			<span class="strong">Moduler i fokus</span>
		</div>
		<div class="pure-u-1-2 l-box text-right">
			<a href="/moduler">Se alla moduler -></a>
		</div>
	</div>

	<div class="module-slides">
		<?php foreach( $posts as $p ):?>
			<div class="module-card">
				<div class="paper">
					<?php echo get_the_post_thumbnail( $p->ID, 'medium', array( 'class' => 'alignleft' ) ); ?>
					<h4><a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a></h4>
					<div class="text-small"><?php the_field('summary', $p->ID); ?></div>
					<p><a href="<?php echo get_permalink( $p->ID ); ?>">Läs mer -></a></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

</div>
<?php endif; ?>
