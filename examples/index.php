<?php
$folders = array_filter(glob('*'), 'is_dir');
?>
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