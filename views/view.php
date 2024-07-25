

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<ul>
        <?php foreach ($filteredBooks as $book): ?>
            <li>
                <a href="<?=($book['purchaseUrl']) ?>">
                    <?= ($book['name']); ?> (<?= ($book['releaseYear']) ?>) - BY <?= ($book['author']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>
