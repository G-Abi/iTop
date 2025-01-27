<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 *
 */
/**
 *
 */
Dict::Add('ZH CN', 'Chinese', '简体中文', [
	'Attachments:TabTitle_Count' => '附件 (%1$d)',
	'Attachments:EmptyTabTitle' => '附件',
	'Attachments:FieldsetTitle' => '附件',
	'Attachments:DeleteBtn' => '删除',
	'Attachments:History_File_Added' => '附件%1$s已添加.',
	'Attachments:History_File_Removed' => '附件%1$s已移除.',
	'Attachments:AddAttachment' => '添加附件: ',
	'Attachments:UploadNotAllowedOnThisSystem' => '本系统不支持文件上传.',
	'Attachment:Max_Go' => '(最大文件尺寸: %1$s GB)',
	'Attachment:Max_Ko' => '(最大文件尺寸: %1$s KB)',
	'Attachment:Max_Mo' => '(最大文件尺寸: %1$s MB)',
	'Attachments:NoAttachment' => '没有附件. ',
	'Attachments:PreviewNotAvailable' => '此附件类型不支持预览.',
	'Attachments:Error:FileTooLarge' => '上传的文件过大. %1$s',
	'Attachments:Error:UploadedFileEmpty' => '收到的文件为空, 无法添加.
可能是因为您发送的是空文件,
或者咨询 '.ITOP_APPLICATION_SHORT.' 管理员,检查 '.ITOP_APPLICATION_SHORT.' 服务器硬盘是否满了.',
	'Attachments:Render:Icons' => '显示为图标',
	'Attachments:Render:Table' => '显示为列表',
	'UI:Attachments:DropYourFileHint' => '将文件拖放到此区域的任意位置',
    'Class:TriggerOnAttachmentCreate'                         => 'Trigger (on object\'s attachment create)~~',
    'Class:TriggerOnAttachmentCreate+'                        => 'Trigger on object\'s attachment create~~',
	'Class:TriggerOnAttachmentCreate/Attribute:file_in_email' => 'Add file in email~~',
	'Class:TriggerOnAttachmentCreate/Attribute:file_in_email+' => 'If checked, the file will be automatically attached to the email when an email action is triggered~~',
	'Class:TriggerOnAttachmentDelete'                         => 'Trigger (on object\'s attachment delete)~~',
	'Class:TriggerOnAttachmentDelete+'                        => 'Trigger on object\'s attachment delete~~',
    'Class:TriggerOnObject:TriggerClassAttachment/ReadOnlyMessage' => 'Trigger on object is not allowed on class Attachment. Please use specific trigger~~',
]);

//
// Class: Attachment
//

Dict::Add('ZH CN', 'Chinese', '简体中文', [
	'Class:Attachment' => '附件',
	'Class:Attachment+' => '',
	'Class:Attachment/Attribute:expire' => '过期',
	'Class:Attachment/Attribute:expire+' => '',
	'Class:Attachment/Attribute:temp_id' => '临时编号',
	'Class:Attachment/Attribute:temp_id+' => '',
	'Class:Attachment/Attribute:item_class' => '项目类型',
	'Class:Attachment/Attribute:item_class+' => '',
	'Class:Attachment/Attribute:item_id' => '项目',
	'Class:Attachment/Attribute:item_id+' => '',
	'Class:Attachment/Attribute:item_org_id' => '项目组织',
	'Class:Attachment/Attribute:item_org_id+' => '',
	'Class:Attachment/Attribute:contents' => '内容',
	'Class:Attachment/Attribute:contents+' => '',
]);


Dict::Add('ZH CN', 'Chinese', '简体中文', [
	'Attachments:File:Thumbnail' => '图标',
	'Attachments:File:Name' => '文件名',
	'Attachments:File:Date' => '上传日期',
	'Attachments:File:Uploader' => '上传者',
	'Attachments:File:Size' => '大小',
	'Attachments:File:MimeType' => '类型',
	'Attachments:File:DownloadsCount' => '下载',
]);
//
// Class: Attachment
//

Dict::Add('ZH CN', 'Chinese', '简体中文', [
	'Class:Attachment/Attribute:creation_date' => '创建日期',
	'Class:Attachment/Attribute:creation_date+' => '~~',
	'Class:Attachment/Attribute:user_id' => '用户编号',
	'Class:Attachment/Attribute:user_id+' => '~~',
	'Class:Attachment/Attribute:contact_id' => '联系人编号',
	'Class:Attachment/Attribute:contact_id+' => '~~',
]);

//
// Class: TriggerOnAttachmentDownload
//

Dict::Add('ZH CN', 'Chinese', '简体中文', [
	'Class:TriggerOnAttachmentDownload' => '触发器 (于对象附件下载时)',
	'Class:TriggerOnAttachmentDownload+' => '触发器于指定类型 [子类型] 对象附件下载时',
]);
