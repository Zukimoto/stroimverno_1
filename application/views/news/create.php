<div id="auth">
<article id="work" class="panel">
<section class="5grid is-gallery">
<div class="row">
<h2>Создание новости</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	<label for="title">Загдавие</label>
    <input type="input" name="title" /><br />
	
	<label for="slug">Заглавие, только на англ</label>
    <input type="input" name="slug" /><br />

    <label for="text">Текст</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Создать новость" />


</div>
</section>
</article>
</div>