
<article id="work" class="panel">

<section class="5grid is-gallery">
<div class="row">
<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text']; ?>
</div>
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, width: "665", attach: "*"});
</script>

</script>
</section>
</article>
