<?= $this->extend('templates\default') ?>
<?= $this->section('content') ?>

<div class="container">
    <h3><?php echo $post['title']; ?></h3>
    <?php echo $post['content']; ?>
</div>
<?= $this->endSection() ?>