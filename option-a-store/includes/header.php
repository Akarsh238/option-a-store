<?php
  // Set a default title if not provided
  if (!isset($pageTitle)) { $pageTitle = "My Online Store"; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <!-- Google Fonts: Headings + Body (two different fonts as required) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- External stylesheet (single CSS file, as required) -->
  <link rel="stylesheet" href="/css/style.css" />
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a class="logo" href="/index.php">MyStore</a>
      <nav class="nav">
        <a href="/index.php">Home</a>
        <a href="/about.php">About</a>
        <a href="/shop.php">Shop</a>
        <a href="/contact.php">Contact</a>
        <a class="btn" href="/register.php">Register</a>
        <a class="btn ghost" href="/login.php">Login</a>
      </nav>
    </div>
  </header>
  <main class="container page">
