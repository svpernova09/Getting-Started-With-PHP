<html>
    <head>
        <title>Example 3 - Strings</title>
    </head>
    <body>
    <?php echo '<p>Hello World</p>'; ?>
    <p><?php echo 'PHP is my favorite language'; ?></p>
    <p><?php $variable =  'PHP is amazing'; ?></p>
    <p><?php echo $variable; ?></p>
    <p><?php echo "PHP! you'll be astonished"; ?></p>
    <p><?php echo 'PHP! you\'ll be astonished'; ?></p>
    <?php
    $prefix = 'Mr.';
    $name = 'Joe';
    echo "Hello, " . $prefix . " " . $name;
    echo 'Hello, ' . $prefix . ' ' . $name;
    ?>

    </body>
</html>