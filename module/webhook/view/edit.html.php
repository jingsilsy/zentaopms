<?php
/**
 * The edit view file of webhook module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2017 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Gang Liu <liugang@cnezsoft.com>
 * @package     webhook
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include 'header.html.php';?>
<?php include '../../common/view/form.html.php';?>
<div id='mainContent' class='main-content'>
  <div class='center-block'>
    <div class='main-header'>
      <h2><?php echo $lang->webhook->edit;?></h2>
    </div>
    <form id='webhookForm' method='post' class='form-ajax'>
      <table class='table table-form'>
        <tr>
          <th><?php echo $lang->webhook->type;?></th>
          <td><?php echo html::select('type', $lang->webhook->typeList, $webhook->type, "class='form-control'");?></td>
          <td></td>
        </tr>
        <tr>
          <th><?php echo $lang->webhook->name;?></th>
          <td><?php echo html::input('name', $webhook->name, "class='form-control'");?></td>
          <td></td>
        </tr>
        <tr>
          <th><?php echo $lang->webhook->url;?></th>
          <td><?php echo html::input('url', $webhook->url, "class='form-control'");?></td>
          <td><?php echo zget($lang->webhook->note->typeList, $webhook->type);?></td>
        </tr>
        <tr>
          <th><?php echo $lang->webhook->domain;?></th>
          <td><?php echo html::input('domain', $webhook->domain, "class='form-control'");?></td>
          <td></td>
        </tr>
        <?php if($webhook->type != 'dingding'):?>
        <tr>
          <th><?php echo $lang->webhook->sendType;?></th>
          <td><?php echo html::select('sendType', $lang->webhook->sendTypeList, $webhook->sendType, "class='form-control'");?></td>
          <td><?php echo $lang->webhook->note->async;?></td>
        </tr>
        <?php endif;?>
        <tr>
          <th><?php echo $lang->webhook->product;?></th>
          <td><?php echo html::select('products[]', $products, $webhook->products, "class='form-control chosen' multiple");?></td>
          <td><?php echo $lang->webhook->note->product;?></td>
        </tr>
        <tr>
          <th><?php echo $lang->webhook->project;?></th>
          <td><?php echo html::select('projects[]', $projects, $webhook->projects, "class='form-control chosen' multiple");?></td>
          <td><?php echo $lang->webhook->note->project;?></td>
        </tr>
        <?php if(strpos(',bearychat,dingding,', ",$webhook->type,") === false):?>
        <tr id='paramsTR'>
          <th>
            <div class='checkbox-primary'>
              <input type='checkbox' id='allParams' name='allParams'>
              <label for='allParams'><?php echo $lang->webhook->params;?></label>
            </div>
          </th>
          <td class='labelWidth' colspan='2'><?php echo html::checkbox('params', $lang->webhook->paramsList, $webhook->params);?></td>
        </tr>
        <?php endif;?>
        <tr>
          <th><?php echo $lang->webhook->desc;?></th>
          <td colspan='2'><?php echo html::textarea('desc', $webhook->desc, "rows='3' class='form-control'");?></td>
        </tr>
        <tr>
          <th></th>
          <td colspan='2' class='text-center form-actions'>
            <?php echo html::submitButton();?>
            <?php echo html::backButton()?>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
