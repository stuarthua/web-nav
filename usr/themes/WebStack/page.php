<?php
/**
 * 关于
 * 
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php'); ?>
 <?php $this->need('sidebar.php'); ?>
         <div class="main-content" >
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <?php $this->content(); ?>
                    </div>
                </div>
            </div>
            <br>
            <!-- Main Footer -->
 <?php $this->need('footer.php'); ?>
   