<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <h1>Recommended Books</h1>
    <?php
        $books = [
            [
                "name" => "How to plant a church",
                "author" => "Bishop Dag-heward Mills",
                "releaseYear" => 2002,
                "purchaseUrl" => "http://example.com"
                
            ],
            [
                "name" => "Offences",
                "author" => "Dr.Lawrence Tetteh",
                "releaseYear" => 1945,
                "purchaseUrl" => "http://example.com",
            ],
            [
                "name" => "The Martian",
                "author" => "Andy Weir",
                "releaseYear" => 2011,
                "purchaseUrl" => "http://example.com"
            ]
        ];

        function filter($items, $fn) {
            $filtered = [];

            foreach ($items as $items) {
                if($fn($items)) {
                    $filtered[] = $items;
                }
            }
            return $filtered;
        }
        $filteredBooks = array_filter($books, function ($book){
            return $book['author'] === 'Andy Weir';
        });
       
        
    ?>
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
