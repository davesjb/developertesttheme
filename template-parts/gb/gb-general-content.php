<?php
$content = get_field('content');
?>

<?php if ($content) { ?>
  <section class="section">
    <div class="container">
      <div class="gb__general-content__content">
        <?php echo $content; ?>
      </div>
    </div>
  </section>
<?php } ?>