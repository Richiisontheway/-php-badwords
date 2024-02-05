<?php
    $text = $_GET['user_text'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <a href="./form.php">
        vai alla pagina Form
    </a>
    <?php 
        echo $text;
    ?>
</body>
</html>