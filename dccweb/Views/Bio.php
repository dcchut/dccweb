<div class="mheading">my bio</div>

<?php foreach ($posts as $post): ?>
<p class="lspace"><?php echo $post->content; ?></p>
<?php endforeach; ?>