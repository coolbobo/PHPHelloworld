<?php foreach ($news as $news_item): ?>

    <h3><?php echo $news_item['username']; ?></h3>
        <?php echo $news_item['mobile']; ?>

<?php endforeach; ?>