<?php
$folders = array_filter(glob('*'), 'is_dir');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Getting Started with PHP</title>
</head>
<body>
<h1>Getting Started with PHP!</h1>
<ul>
    <?php
    foreach($folders as $folder){
        $title = str_replace('-',' ',$folder);
        ?>
        <li><a href="<?php echo $folder; ?>"><?php echo $title; ?></a></li>
    <?php
    }
    ?>
</ul>
</body>
</html>