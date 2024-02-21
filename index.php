<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    
</head>
<body>

<!-- Headeris -->
<?php include 'header.php'; ?>

<!-- Main turinys -->
<div id="main">
    <!-- Pagrindinis turinys landing page -->
    <?php
    // PHP kodas, kuris nukreips vartotoją į registracijos/login puslapį
    header("Location: registracija_login.php");
    exit;
    ?>
</div>

<!-- Footeris -->
<div id="footer">
    <p>&copy; 2024 Landing Page. Visos teisės saugomos.</p>
</div>

</body>
</html>
