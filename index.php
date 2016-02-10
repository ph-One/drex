<?php
    include_once('lib/registry.php');
    include_once('lib/curl.php');
    include_once('lib/db.php');
    include_once('lib/image.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Elwood</title>

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/bootstrap-3.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap-3.3.6/dist/css/bootstrap-theme.min.css">
    <script src="/bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <table style="border:2px solid #333;">
        <th>
            Image ID
        </th>
        <th>
            Image Name
        </th>
        <th>
            Image Tag
        </th>
        <?php
            \db\init();

            $registry = 'http://162.243.122.231:5000';
            $catalog = \registry\catalog($registry);
            $couch = \registry\getImage($registry, 'couchdb', '1.6.1');

            foreach ($catalog->repositories as $image) {
                $tags = \registry\getImageTags($registry, $image);
                foreach ($tags->tags as $tag) {
                    echo "<tr><td>N/A</td><td>$image</td><td>$tag</td></tr>";
                }
            }

            // print_r($catalog);
            // print_r($tags);
            // print_r($image);

            // $db = \db\init();
        ?>
    </table>

    <?php print_r($couch); ?>
</body>
</html>
