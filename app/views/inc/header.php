<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $data['meta_data']['meta_title'] ? $data['meta_data']['meta_title'] : ''; ?>">
    <?php if ($data['meta_data']['robots']) { ?>
        <meta name="robots" content="<?php echo $data['meta_data']['robots']; ?>" />
    <?php } ?>
    <?php if ($data['meta_data']['keywords']) { ?>
        <meta name="keywords" content="<?php echo $data['meta_data']['keywords']; ?>" />
    <?php } ?>

    <title><?php echo $data['meta_data']['meta_title'] ? $data['meta_data']['meta_title'] . ' - ' . SITENAME : SITENAME; ?></title>

    <?php if ($data['meta_data']['cononical']) { ?>
        <link rel="canonical" href="<?php echo URLROOT . $data['meta_data']['cononical'] ?>" />
    <?php } ?>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>style.css">
</head>

<body>