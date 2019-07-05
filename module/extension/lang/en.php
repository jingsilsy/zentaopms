<?php
/**
 * The extension module en file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     extension
 * @version     $Id$
 * @link        http://www.zentao.net
 */
$lang->extension->common        = 'Plug-in';
$lang->extension->browse        = 'Plug-ins';
$lang->extension->install       = 'Install';
$lang->extension->installAuto   = 'Auto Installation';
$lang->extension->installForce  = 'Force Installation';
$lang->extension->uninstall     = 'Uninstall';
$lang->extension->activate      = 'Activate';
$lang->extension->deactivate    = 'Deactivate';
$lang->extension->obtain        = 'Get Plug-in';
$lang->extension->view          = 'Details';
$lang->extension->downloadAB    = 'Download';
$lang->extension->upload        = 'Local Installation';
$lang->extension->erase         = 'Erase';
$lang->extension->upgrade       = 'Upgrade Plug-in';
$lang->extension->agreeLicense  = 'I agree with the license.';

$lang->extension->structure   = 'Structure';
$lang->extension->installed   = 'Installed';
$lang->extension->deactivated = 'Deactivated';
$lang->extension->available   = 'Downloaded';

$lang->extension->name        = 'Plug-in Name';
$lang->extension->code        = 'Alias';
$lang->extension->desc        = 'Description';
$lang->extension->type        = 'Type';
$lang->extension->dirs        = 'Installation Directory';
$lang->extension->files       = 'Installation Files';
$lang->extension->status      = 'Status';
$lang->extension->version     = 'Version';
$lang->extension->latest      = '<small>Latest:<strong><a href="%s" target="_blank" class="extension">%s</a></strong>，need zentao <a href="https://api.zentao.net/goto.php?item=latest" target="_blank"><strong>%s</strong></small>';
$lang->extension->author      = 'Author';
$lang->extension->license     = 'License';
$lang->extension->site        = 'Website';
$lang->extension->downloads   = 'Downloads';
$lang->extension->compatible  = 'Compatibility';
$lang->extension->grade       = 'Score';
$lang->extension->depends     = 'Dependency';
$lang->extension->expireDate  = 'Expire';
$lang->extension->zentaoCompatible  = 'Compatible Version';
$lang->extension->installedTime     = 'Installed Time';

$lang->extension->publicList[0] = 'Manual';
$lang->extension->publicList[1] = 'Auto';

$lang->extension->compatibleList[0] = 'Unknown';
$lang->extension->compatibleList[1] = 'Compatible';

$lang->extension->obtainOfficial[0] = 'Third-party';
$lang->extension->obtainOfficial[1] = 'Official';

$lang->extension->byDownloads   = 'Downloads';
$lang->extension->byAddedTime   = 'Latest Added';
$lang->extension->byUpdatedTime = 'Latest Update';
$lang->extension->bySearch      = 'Search';
$lang->extension->byCategory    = 'Category';

$lang->extension->installFailed            = '%s failed. Error:';
$lang->extension->uninstallFailed          = 'Uninstallation failed. Error:';
$lang->extension->confirmUninstall         = 'Uninstallation will delete or change related database. Do you want to uninstall it?';
$lang->extension->installFinished          = 'Congrats! The plug-in is %sed!';
$lang->extension->refreshPage              = 'Refresh';
$lang->extension->uninstallFinished        = 'This plug-in is uninstalled.';
$lang->extension->deactivateFinished       = 'This plug-in is deactivated.';
$lang->extension->activateFinished         = 'This plug-in is activated.';
$lang->extension->eraseFinished            = 'This plug-in is removed.';
$lang->extension->unremovedFiles           = 'File or direcroty cannot be deleted. You have to manually delete';
$lang->extension->executeCommands          = '<h3>Execute command lines below to fix the problem:</h3>';
$lang->extension->successDownloadedPackage = 'This plug-in is downloaded!';
$lang->extension->successCopiedFiles       = 'File is copied!';
$lang->extension->successInstallDB         = 'Database is installed!';
$lang->extension->viewInstalled            = 'Installed Plug-ins';
$lang->extension->viewAvailable            = 'Available Plug-ins';
$lang->extension->viewDeactivated          = 'Deactivated Plug-ins';
$lang->extension->backDBFile               = 'This plug-in data has been backed up to %s!';
$lang->extension->noticeOkFile             = '<h5>For security reasons, your Admin account has to be confirmed.</h5>
    <h5>Plese login your ZenTao server and create %s.</h5>
    <p>Note</p>
    <ol>
    <li>The file you will create is empty.</li>
    <li>If such file exists, delete it first, and then create one.</li>
    </ol>'; 

$lang->extension->upgradeExt     = 'Upgrade';
$lang->extension->installExt     = 'Install';
$lang->extension->upgradeVersion = '(Upgrade %s to %s.)';

$lang->extension->waring = 'Warning!';

$lang->extension->errorOccurs                  = 'Error:';
$lang->extension->errorGetModules              = 'Get Plug-in Category from www.zentao.net failed. It could be network error. Plase check your network and refresh it.';
$lang->extension->errorGetExtensions           = 'Get Plug-in from www.zentao.net failed. It could be network error. Please go to <a href="https://www.zentao.net/extension/" target="_blank" class="alert-link">www.zentao.net</a> and download the extension, and then upload it to install.';
$lang->extension->errorDownloadPathNotFound    = 'Plug-in download path <strong>%s</strong> is not found.<br /> Please run <strong>mkdir -p %s</strong> in Linux to fix it.';
$lang->extension->errorDownloadPathNotWritable = 'Plug-in download path <strong>%s</strong>is not writable. <br />Please run <strong>sudo chmod 777 %s</strong> in Linux to fix it.';
$lang->extension->errorPackageFileExists       = '<strong>%s</strong> exists in the download path.<h5> Please %s it again, <a href="%s" class="alert-link">CLICK HERE</a></h5>';
$lang->extension->errorDownloadFailed          = 'Download failed. Please try it again. If still not OK, try to download it manually and upload it to install.';
$lang->extension->errorMd5Checking             = 'Incomplete File. Please download it again. If still not OK, try to download it manually and upload it to install.';
$lang->extension->errorCheckIncompatible       = 'Incompatible with your ZenTao. It may not be used %s later.<h5>You can choose to <a href="%s" class="btn btn-sm">force%s</a> or <a href="#" onclick=parent.location.href="%s" class="btn btn-sm">cancel</a></h5>';
$lang->extension->errorFileConflicted          = '<br />%s <h5> is conflicted with others. Choose <a href="%s" class="btn btn-sm">Override</a> or <a href="#" onclick=parent.location.href="%s" class="btn btn-sm">Cancel</a></h5>';
$lang->extension->errorPackageNotFound         = '<strong>%s </strong> is not found. Downloading might be failed. Please download it again.';
$lang->extension->errorTargetPathNotWritable   = '<strong>%s </strong> is not writable.';
$lang->extension->errorTargetPathNotExists     = '<strong>%s </strong> is not found.';
$lang->extension->errorInstallDB               = 'Database report execution failed. Error: %s';
$lang->extension->errorConflicts               = 'Conflicted with “%s”!';
$lang->extension->errorDepends                 = 'Dependent Plug-in has not been installed or the version is incorrect:<br /><br /> %s';
$lang->extension->errorIncompatible            = 'Incompatible with your ZenTao.';
$lang->extension->errorUninstallDepends        = '“%s” is dependent on thiPlug-in. Please do not install it.';