<p>商品名</p>

<?php $price = get_post_meta(get_the_ID(), "price", true) ?>
<?php $author = get_post_meta(get_the_ID(), "author", true) ?>

<dl>
  <dt>価格</dt>
  <dd><?php echo $price; ?></dd>
  <dt>作者</dt>
  <dd><?php echo $author; ?></dd>
</dl>