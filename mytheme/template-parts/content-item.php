<p>商品名</p>

<?php $price = get_post_meta(get_the_ID(), "price", true) ?>
<?php $author = get_post_meta(get_the_ID(), "author", true) ?>

<dl>
  <?php if ($price !== '') : ?>
    <dt>価格</dt>
    <dd><?php echo $price; ?>円</dd>
  <?php endif; ?>

  <?php if ($author !== '') : ?>
    <dt>作者</dt>
    <dd><?php echo $author; ?></dd>
  <?php endif; ?>
</dl>