<?php 
// Ensure HTTPS
$baseUrl = BASE_URL;
$siteName = SITE_NAME;
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
    header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php'; ?>
    <title><?= "$pageTitle | $siteName" ?></title>
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/styles.css">
    <link rel="canonical" href="<?php echo "$baseUrl/$canonical"; ?>">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="<?php echo $baseUrl; ?>/index">Home</a></li>
            <li><a href="<?php echo $baseUrl; ?>/about">About</a></li>
            <li><a href="<?php echo $baseUrl; ?>/services/">Services</a>
            <ul>
                <li><a href="<?php echo $baseUrl; ?>/services/service-details">Service detail</a></li>
            </ul>
        </li>
            <li><a href="<?php echo $baseUrl; ?>/contact">Contact</a></li>
        </ul>
    </nav>
</header>
