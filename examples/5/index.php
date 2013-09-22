<?php
$food = array();
$food['fruit'] = array();
$food['fruit'][] = 'apple';
$food['fruit'][] = 'pear';
$food['fruit'][] = 'orange';
$food['fruit'][] = 'lemon';
$food['fruit'][] = 'pineapple';
$food['meat'] = array();
$food['meat'][] = 'bacon';
$food['meat'][] = 'steak';
$food['meat'][] = 'chicken';
$food['meat'][] = 'fish';
?>
<html>
    <head>
        <title>Example 5 - Multidimensional Arrays</title>
    </head>
    <body>
        <h2>Food</h2>
            <pre>
            <?php var_dump($food); ?>
            </pre>
    </body>
</html>