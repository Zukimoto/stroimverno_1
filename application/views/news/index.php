<article id="work" class="panel">
								<header>
									<h2>Статьи</h2>
								</header>
								

<?php foreach ($news as $news_item): ?>
	<section class="5grid is-gallery">
	<div class="row">
        <h3><a href="<?php echo $news_item['slug'] ?>"><?php echo $news_item['title'] ?></a></h3>
 	</div> 

<?php endforeach ?>
</section>                                
						    </article>									

      