<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Moataz's blog</title>
    <!--    <link rel="stylesheet" href="-->
    <?php //echo base_url('assets/bootstrap/dist/css/bootstrap.css'); ?><!--">-->
    <link rel="stylesheet" href="<?php echo base_url("node_modules/bootstrap/dist/css/bootstrap.min.css"); ?>"/>
</head>
<body>

<div class="container">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal"><a class="p-2 text-dark"
                                                          href="<?php echo base_url('index.php/posts') ?>">Moataz's
                blog</a>
        </h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="<?php echo base_url('index.php/posts') ?>">Posts</a>
        </nav>
        <a class="btn btn-outline-primary" href="<?php echo base_url('index.php/posts/create') ?>">New Post ? </a>
    </div>