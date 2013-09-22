<?php
/*
 * DON'T DO THIS:
 *
$name = $_GET['name'];
 */

/* Do this instead: */
if(isset($_GET['name'])){
    $name = filter_var($_GET['name'],FILTER_SANITIZE_STRING);
}
?>
<html>
    <head>
        <title>Example 1 - Getting Started with PHP<</title>
    </head>
    <body>
        <p>Hello, <?php echo $name; ?></p>
    </body>
</html>