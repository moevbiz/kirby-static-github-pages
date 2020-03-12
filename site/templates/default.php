<h1><?= $page->title() ?></h1>

<?php foreach($site->pages()->listed() as $page): ?>
    <a href="<?= $page->url(); ?>">hello</a>
<?php endforeach; ?>
