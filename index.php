<?php
    require __DIR__ . '/classes/movies.php';

    $movies = [
        new Movie('Pulp Fiction', 'Quentin Tarantino', 'Crime', 5, 10),
        new Movie('Interstellar', 'Christopher Nolar', 'Sci-fi', 4, 12),
        new Movie('Top Gun: Maverick', 'Joseph Kosinski', 'Action', 3, 11),
        new Movie('The Conjuting', 'James Wan', 'Horror', 3, 8)
    ];
    var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Videoteca di Manuel</h1>
    <ul>
        <?php foreach($movies as $movie) { ?>
        <li>
            <h3><?php echo $movie->title ?></h3>
            <h4><?php echo $movie->genre ?></h4>
            <h5><?php echo $movie->director ?></h5>
            <h5><?php echo $movie->score ?></h5>
            <h4><?php echo $movie->price ?></h4>
            <?php
                $discount = $movie->getHalloweenPromo();
                if ($discount) {
            ?>
            <strong>Prezzo scontato: <?php echo $discount; ?></strong>
            <?php } ?>
        </li>
        <?php } ?>
    </ul>
</body>
</html>