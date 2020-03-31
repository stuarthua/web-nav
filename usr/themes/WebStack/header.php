<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="<?php $this->options->charset(); ?>">
  <title><?php $this->archiveTitle(array(
    'category'  =>  _t('分类 %s 下的文章'),
    'search'    =>  _t('包含关键字 %s 的文章'),
    'tag'       =>  _t('标签 %s 下的文章'),
    'author'    =>  _t('%s 发布的文章')
  ), '', ' - '); ?><?php $this->options->title(); ?><?php if ($this->is('index')): ?> - <?php $this->options->Indexdict(); ?><?php endif; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/icon.png">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('fonts/font.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/fonts/linecons/css/linecons.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/xenon-core.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/xenon-components.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/xenon-skins.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/nav.css'); ?>">
  <script src="<?php $this->options->themeUrl('js/jquery-1.11.1.min.js'); ?>"></script>
  <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
  <!-- 通过自有函数输出HTML头部信息 -->
  <?php $this->header(); ?>
</head> 
 <body class="page-body">
    <!-- skin-white -->
    <div class="page-container">
      