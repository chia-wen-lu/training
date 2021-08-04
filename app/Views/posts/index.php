<?= $this->extend('templates\default') ?>
<?= $this->section('content') ?>

<h3>hello world!!</h3>
<br>
<?php
                
if (! empty($posts) && is_array($posts)) {

    foreach ($posts as $posts_item){ //對$posts陣列的每個都做一次
        echo '
            <tr id="publicpost">                           
            <a href="/PostController/show/'.$posts_item['id'].'">'.$posts_item['title'].'</a>
            </tr>';
     
	} 
}
?>
<?= $this->endSection() ?>
