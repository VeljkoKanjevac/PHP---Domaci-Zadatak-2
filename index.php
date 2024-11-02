<?php

$naslov = "Postani Programer";

$navBar = [
    "Glavna" => "home.php",
    "O nama" => "about_us.php",
    "Kontakt" => "contact.php"
];

$tekucaGodina = date("Y");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $naslov; ?> </title>
</head>
<body>
    <h1> <?= $naslov; ?> </h1>
    <nav>
        <a href="<?= $navBar["Glavna"] ?>">Glavna</a>
        <a href="<?= $navBar["O nama"] ?>">O nama</a>
        <a href="<?= $navBar["Kontakt"] ?>">Kontakt</a>
    </nav>

    <footer>
        <p>Copyright @ moj sajt <?php echo $tekucaGodina; ?> </p>
    </footer>
</body>
</html>