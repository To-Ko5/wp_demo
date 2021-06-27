<p>商品名</p>

<?php $price = get_post_meta(get_the_ID(), "price", true) ?>
<?php $author = get_post_meta(get_the_ID(), "author", true) ?>

<!-- 複数項目がある場合 -->
<?php $writer = get_post_meta(get_the_ID(), "writer", false) ?>

<dl>
  <?php if ($price !== '') : ?>
    <dt>価格</dt>
    <dd><?php echo $price; ?>円</dd>
  <?php endif; ?>

  <?php if ($author !== '') : ?>
    <dt>作者</dt>
    <dd><?php echo $author; ?></dd>
  <?php endif; ?>
  　
  <?php if ($writer !== '') : ?>
    <dt>編集者</dt>
    <?php foreach ($writer as $w) : ?>
      <dd><?php echo esc_html($w); ?></dd>
    <?php endforeach; ?>
  <?php endif; ?>
</dl>