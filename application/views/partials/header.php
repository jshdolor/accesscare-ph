<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joshua Dolor">
    <title><?=$title?></title>
    
    <?php 
        foreach($styles as $style):
    ?>
        <link rel="stylesheet" href="<?=$style?>" type='text/css'>
    <?php
        endforeach; 
    ?>
    
    <script src="<?=base_url()?>assets/js/modernizr.js"></script>
    <!--[if lt IE 9]>
      <script src="<?=base_url()?>assets/js/html5shiv.js"></script>
      <script src="<?=base_url()?>assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>