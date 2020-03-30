<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
    //首页名称
    $IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, NULL, _t('首页的名称(必填)'), _t('输入你的首页显示的名称'));
    $form->addInput($IndexName);

    //首页名称后缀（必填）
    $Indexdict = new Typecho_Widget_Helper_Form_Element_Text('Indexdict', NULL, NULL, _t('首页的名称后缀(必填)'), _t('输入你的首页显示的名称后缀'));
    $form->addInput($Indexdict);

    //大logo
    $Biglogo = new Typecho_Widget_Helper_Form_Element_Text('Biglogo', NULL, '/usr/themes/WebStack/images/logo-big@2x.png', _t('大LOGO地址(必填)'), _t('大logo地址，尺寸178*40，默认 /usr/themes/WebStack/images/logo-big@2x.png'));
    $form->addInput($Biglogo);

    //大logo
    $Smalllogo = new Typecho_Widget_Helper_Form_Element_Text('Smalllogo', NULL, '/usr/themes/WebStack/images/logo-small@2x.png', _t('小LOGO地址(必填)'), _t('小logo地址，尺寸80*80，默认 /usr/themes/WebStack/images/logo-small@2x.png'));
    $form->addInput($Smalllogo);
    
    //关于我们
    $Isabout = new Typecho_Widget_Helper_Form_Element_Text('Isabout', NULL, '/about.html', _t('关于我们URL链接'), _t('默认 /about.html 请前往管理-独立页面设置页面并填入内容，并返回此处填写链接'));
	$form->addInput($Isabout);
    
    //搜索
    $isSearch = new Typecho_Widget_Helper_Form_Element_Radio('isSearch',
        array(
            '0' => _t('禁用'),
            '1' => _t('启用')
        ),
        '0',_t('搜索功能'),_t("是否启用搜索")
    );
    $form->addInput($isSearch);

    //直接跳转
    $isLink = new Typecho_Widget_Helper_Form_Element_Radio('isLink',
        array(
            '0' => _t('禁用'),
            '1' => _t('启用')
        ),
        '1',_t('跳转功能'),_t("是否启用直接跳转")
    );
    $form->addInput($isLink);
}

//输出导航
function themeFields($layout) {
    $url = new Typecho_Widget_Helper_Form_Element_Text('url', NULL, NULL, _t('跳转链接'), _t('请输入跳转URL'));
    $text = new Typecho_Widget_Helper_Form_Element_Text('text', NULL, NULL, _t('链接描述'), _t('请输入链接描述'));
    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('链接logo'), _t('请输入Logo URL链接，大小 40*40'));
    $layout->addItem($url);
    $layout->addItem($text);
    $layout->addItem($logo);
}