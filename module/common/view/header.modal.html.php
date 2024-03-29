<?php
/**
 * The header.modal view of common module of XXB.
 *
 * @copyright   Copyright 2009-2018 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     common 
 * @version     $Id$
 * @link        http://xuan.im
 */
?>
<?php if(helper::isAjaxRequest()):?>
<?php
$webRoot   = $config->webRoot;
$jsRoot    = $webRoot . "js/";
$themeRoot = $webRoot . "theme/";
$modalSizeList = array('lg' => '900px', 'sm' => '300px');
if(!isset($modalWidth)) $modalWidth = 700;
if(is_numeric($modalWidth))
{
    $modalWidth .= 'px';
}
else if(isset($modalSizeList[$modalWidth]))
{
    $modalWidth = $modalSizeList[$modalWidth];
}
if(isset($pageCSS)) css::internal($pageCSS);

/* set requiredField. */
if(isset($config->$moduleName->require->$methodName)) 
{
    $requiredFields = str_replace(' ', '', $config->$moduleName->require->$methodName);
}
?>
<div class="modal-dialog" style="width:<?php echo $modalWidth;?>;">
  <div class="modal-content">
    <div class="modal-header">
      <?php echo html::closeButton();?>
      <strong class="modal-title"><?php if(!empty($title)) echo $title; ?></strong>
      <?php if(!empty($subtitle)) echo "<label class='text-important'>" . $subtitle . '</label>'; ?>
    </div>
    <div class="modal-body">
<?php else:?>
<?php include $this->app->getAppRoot() . '/common/view/header.html.php';?>
<?php endif;?>
