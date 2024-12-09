<?php 
// Ensure HTTPS
$baseUrl = BASE_URL;
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
    header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php'; ?>
    <title><?php echo $pageTitle; ?> | MyWebsite</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="canonical" href="<?php echo "$baseUrl/$canonical"; ?>">
    <script src="assets/js/scripts.js" defer></script>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
        </ul>
    </nav>
</header>
