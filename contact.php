<?php
require_once './config/config.php';
$pageTitle = "Contact Us";
$canonical = 'contact';
$description = '';
$keywords = '';
include 'includes/header.php'; 
?>
<main>
    <section>
        <h1>Contact Us</h1>
        <p>Feel free to reach out to us using the contact form below:</p>

        <form action="contact-submit.php" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Send</button>
        </form>
    </section>
</main>
<?php include 'includes/footer.php'; ?>
