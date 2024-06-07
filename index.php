<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Formulari amb Cookies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <?php
    function valorCookies($name) {
        if (isset($_COOKIE[$name])) {
            return htmlspecialchars($_COOKIE[$name]);
        }
        return null;
    }

    $nom = valorCookies('nom');
    $cognom = valorCookies('cognom');

    if ($nom && $cognom) {
        echo "<h2>DADES DEL FORMULARI</h2>";
        echo "<p>Nom: " . $nom . "</p>";
        echo "<p>Cognom: " . $cognom . "</p>";
    } else {
        echo "<p>No s'han trobat dades guardades a les cookies.</p>";
    }
    ?>
</body>
</html>