
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
            return $book['releaseYear'] > 1950 && $book['releaseYear'] < 2020;
        });
       
        
require "index.view.php";