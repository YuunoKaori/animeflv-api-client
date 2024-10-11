<div class="anime-list">
    <?php foreach ($animes['data'] as $anime): ?>
        <div class="anime-item">
            <h2><?php echo htmlspecialchars($anime['title']); ?></h2>
            <img src="<?php echo htmlspecialchars($anime['image']); ?>" alt="<?php echo htmlspecialchars($anime['title']); ?>" width="150">
            <p><a href="api/anime.php?slug=<?php echo urlencode($anime['slug']); ?>">Ver detalles</a></p>
        </div>
    <?php endforeach; ?>
</div>
