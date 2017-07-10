 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Page Title</title>
</head>
<body>
    <?php foreach (($stories?:[]) as $story): ?>
        <ul>
            <li><?= $story[text] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html> 

