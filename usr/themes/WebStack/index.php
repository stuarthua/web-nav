<?php

/**
 * 
 * @package WebStack
 * @author SEOGO运营狗、ZMKI
 * @version 4.0 _钻芒二开优化版0.2.29 +
 * @link https://www.seogo.me/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<?php $this->need('sidebar.php'); ?>

<div class="main-content">
	<nav class="navbar user-info-navbar" role="navigation">
		<ul class="user-info-menu left-links list-inline list-unstyled">
			<li class="hidden-sm hidden-xs" style="min-height: 75px;">
				<a href="#" data-toggle="sidebar">
					<i class="fa-bars"></i>
				</a>
			</li>
		</ul>
	</nav>
	<?php if ($this->options->isSearch == '1') : ?>
		<?php $this->need('search.php'); ?>
	<?php endif; ?>
	<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
	<?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
	<?php while ($categories->next()) : ?>
		<?php if (count($categories->children) === 0) : ?>
			<?php $this->widget('Widget_Archive@category-' . $categories->mid, 'order=order&pageSize=10000&type=category', 'mid=' . $categories->mid)->to($posts); ?>
			<h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="<?php $categories->name(); ?>"></i><?php $categories->name(); ?></h4>
			<div class="row">
				<?php while ($posts->next()) : ?>
					<div class="col-sm-3">
						<?php if ($this->options->isLink == '1') : ?>
							<div class="xe-widget xe-conversations box2 label-info" onclick="window.open('<?php echo $posts->fields->url; ?>', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php echo $posts->fields->url; ?>">
								<div class="xe-comment-entry">
									<a class="xe-user-img">
										<img src="<?php echo $posts->fields->logo; ?>" class="img-circle" width="40">
									</a>
									<div class="xe-comment">
										<a href="#" class="xe-user-name overflowClip_1">
											<strong><?php $posts->title(); ?></strong>
										</a>
										<p class="overflowClip_2"><?php echo $posts->fields->text; ?></p>
									</div>
								</div>
							</div>
						<?php endif; ?>
						<?php if ($this->options->isLink == '0') : ?>
							<div class="xe-widget xe-conversations box2 label-info">
								<div class="xe-user-img">
									<div class="xe-comment-entry">
										<a href="<?php $posts->permalink() ?>"><img src="<?php echo $posts->fields->logo; ?>" class="img-circle" width="40">
											<div class="xe-comment" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php echo $posts->fields->url; ?>">
												<strong><?php $posts->title(); ?></strong>
												<p class="overflowClip_2"><?php echo $posts->fields->text; ?></p>
											</div>
										</a>
									</div>
								</div>
							</div>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
			<br />
		<?php else : ?>
		<?php endif; ?>
	<?php endwhile; ?>
	
	<?php $this->need('footer.php'); ?>
