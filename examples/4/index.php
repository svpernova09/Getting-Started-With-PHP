<?php
$fruit = array();
$fruit[] = 'apple';
$fruit[] = 'pear';
$fruit[] = 'orange';
$fruit[] = 'lemon';
$fruit[] = 'pineapple';
$meat = array();
$meat[] = 'bacon';
$meat[] = 'steak';
$meat[] = 'chicken';
$meat[] = 'fish';

?>
<html>
    <head>
        <title>Example 4 - Simple Arrays</title>
    </head>
    <body>
        <h2>Fruit</h2>
            <pre>
            <?php var_dump($fruit); ?>
            </pre>
        <h2>Meat</h2>
            <pre>
            <?php var_dump($meat); ?>
            </pre>
    </body>
</html>