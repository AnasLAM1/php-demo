<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $foods = [
            [
                'name' => 'Shakshouka',
                'country' => 'Algeria',
                'occasion' => 'Breakfast',
                'continent' => 'Africa',
            ],
            [
                'name' => 'Shawarma',
                'country' => 'Syria',
                'occasion' => 'Lunch',
                'continent' => 'Asia',
            ],
            [
                'name' => 'Kabsa',
                'country' => 'Saudi Arabia',
                'occasion' => 'Dinner',
                'continent' => 'Asia',
            ],
            [
                'name' => 'Magalgal',
                'country' => 'Yemen',
                'occasion' => 'Lunch',
                'continent' => 'Asia',
            ],
            [
                'name' => 'Menemen',
                'country' => 'Turkey',
                'occasion' => 'Breakfast',
                'continent' => 'Asia',
            ],
            [
                'name' => 'Sushi',
                'country' => 'Japan',
                'occasion' => 'Lunch',
                'continent' => 'Asia',
            ],
            [
                'name' => 'Chicken Katsu',
                'country' => 'Japan',
                'occasion' => 'Dinner',
                'continent' => 'Asia'
            ],
        ];

    function filterByContinent($foods) {
        $filteredFoods = [];
    
    foreach($foods as $food) {
        if ($food['continent'] === 'Asia') {
        $filteredFoods[] = $food;
        }
    }

    return $filteredFoods;

    }

?>
<ul>
    <?php foreach (filterByContinent($foods) as $food) : ?>
        <li><?= $food['name'] ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>