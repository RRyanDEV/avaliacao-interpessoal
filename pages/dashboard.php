<?php
include("../components/navbarComponent.php");
include("../components/accordionComponent.php");

$doc = new DOMDocument();

@$doc->loadHTML('<?xml encoding="utf-8" ?>' . navComponent() . accordComponent('Qualidade de Vida', 'Saúde', 'Diversão', 'Espiritualidade', rateComponent()));

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Property -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ryan Gomes" />
    <meta name="keywords" content="PHP, MySQL, HTML, TAILWIND" />
    <!-- Link's -->
    <link rel="stylesheet" href="/dist/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="/src/libs/flowbite/flowbite.min.js"></script>
    <!-- Fonts CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body class="bg-default-80">
    <?php
    echo $doc->saveHTML();
    ?>
</body>

</html>