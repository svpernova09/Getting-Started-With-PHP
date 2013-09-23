<html>
    <head>
        <title>Example 6 - Conditions</title>
    </head>
    <body>
        <?php
        $name = 'Joe';
        //$name = 'Bill the pony';
        if($name == 'Joe'){
            echo '<p>Hello Joe, welcome back</p>';
        } else {
            echo '<p>Hello ' . $name . '</p>';
        }
        ?>
    </body>
</html>