<?php
// Set correct header for XML
header("Content-Type: application/xml; charset=utf-8");

// Example of dynamic URLs
$pages = [
    ['loc' => 'https://yourdomain.com/index.php', 'priority' => '1.0', 'lastmod' => '2024-12-08'],
    ['loc' => 'https://yourdomain.com/about.php', 'priority' => '0.8', 'lastmod' => '2024-12-01'],
    ['loc' => 'https://yourdomain.com/contact.php', 'priority' => '0.8', 'lastmod' => '2024-11-30']
];

// Begin XML structure
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($pages as $page): ?>
    <url>
        <loc><?php echo htmlspecialchars($page['loc']); ?></loc>
        <lastmod><?php echo $page['lastmod']; ?></lastmod>
        <priority><?php echo $page['priority']; ?></priority>
    </url>
    <?php endforeach; ?>
</urlset>
