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
<ul>
    <?php
    foreach($fruit AS $key => $value){
        echo '<li>' . $value . '</p>';
    }
    ?>
</ul>
<h2>Meat</h2>
<ul>
    <?php
    foreach($meat AS $key => $value){
        echo '<li>' . $value . '</p>';
    }
    ?>
</ul>
</body>
</html>