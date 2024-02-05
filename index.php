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
    <div>
        <a href="./form.php">
            vai alla pagina Form
        </a>
    </div>
    <div>
    <?php 
        echo $text;
        echo '<br>';
        echo strlen($text);
        echo '<br>';
        echo str_replace('domenico','***',$text);
        echo '<br>';
        echo strlen(str_replace('domenico','***',$text));
    ?>
    </div>
</body>
</html>