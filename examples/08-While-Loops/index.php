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
    <title>Example 8 - While Loops</title>
</head>
<body>
<h2>Fruit</h2>
    <?php
    $fruit_count = count($fruit);
    $f = 0;
    ?>
    <ul>
        <?php
        while ($f < $fruit_count){
            echo '<li>' . $fruit[$f] . '</li>';
            $f++;
        }
        ?>
    </ul>
<h2>Meat</h2>
<?php
$meat_count = count($meat);
$m = 0;
?>
<ul>
    <?php
    while ($m < $meat_count){
        echo '<li>' . $meat[$m] . '</li>';
        $m++;
    }
    ?>
</ul>
</body>
</html>