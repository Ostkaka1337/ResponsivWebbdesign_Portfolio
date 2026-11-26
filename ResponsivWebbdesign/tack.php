<?php


$name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
$selection = htmlspecialchars($_POST['selection'] ?? '', ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tack – Beetlejuice</title>
  <meta name="description" content="Bekräftelse på skickat meddelande till Beetlejuice.">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <main>
    <h1>Tack för ditt meddelande<?= $name ? ", $name" : '' ?>!</h1>
    <?php if ($name && $email && $message): ?>
      <p><strong>E-post:</strong> <?= $email ?></p>
      <p><strong>Ärende:</strong> <?= $selection ?></p>
      <p><strong>Meddelande:</strong> <?= $message ?></p>
    <?php endif; ?>
    <p><a href="kontakt.html">Tillbaka till kontaktformuläret</a></p>
  </main>
</body>
</html>