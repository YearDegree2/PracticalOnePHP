<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h1><?php echo $city["country"] ?></h1>
        <h3>Cities:</h3>
        <ul>
        <?php foreach ($citiesInCountry as $cityId => $city) : ?>
            <li><a href="/tp1/city.php?id=<?= $cityId; ?>"><?= $city['name']; ?></a></li>
        <?php endforeach; ?>
        </ul>
        <footer>
            <a href="/tp1/cities.php">Back to list</a>
        </footer>
    </body>
</html>
