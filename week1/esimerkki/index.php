<?php
global $media;
require_once('database/dummy.php');
require_once('inc/header.php');
?>
    <main>
        <h1>
            Media
        </h1>
        <?php foreach ($media as $media_item): ?>
            <article>
                <h2><?php echo $media_item['title']; ?></h2>
                <img src="<?php echo $media_item['image']; ?>" alt="<?php echo $media_item['title']; ?>">
                <p><?php echo $media_item['content']; ?></p>
                <button>View</button>
            </article>
        <?php endforeach; ?>
    </main>
</div>

</body>
</html>

<?php
require_once ('inc/footer.php');
?>