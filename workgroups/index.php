<?php
/**
 * @global  \CMain $APPLICATION
 */

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
IncludeModuleLangFile($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/intranet/public/workgroups/index.php');
$APPLICATION->SetTitle(GetMessage('WORKGROUPS_TITLE'));

?><?php
$APPLICATION->IncludeComponent(
	'bitrix:socialnetwork_group',
	'.default',
	[
		'ITEM_DETAIL_COUNT' => '32',
		'ITEM_MAIN_COUNT' => '6',
		'DATE_TIME_FORMAT' => 'd.m.Y H:i:s',
		'NAME_TEMPLATE' => '',
		'PATH_TO_USER' => SITE_DIR.'company/personal/user/#user_id#/',
		'PATH_TO_SUBSCRIBE' => SITE_DIR.'company/personal/subscribe/',
		'PATH_TO_GROUP_CREATE' => SITE_DIR.'company/personal/user/#user_id#/groups/create/',
		'PATH_TO_SEARCH_EXTERNAL' => SITE_DIR.'company/index.php',
		'PATH_TO_CONPANY_DEPARTMENT' => SITE_DIR.'company/structure.php?set_filter_structure=Y&structure_UF_DEPARTMENT=#ID#',
		'PATH_TO_MESSAGES_CHAT' => SITE_DIR.'company/personal/messages/chat/#user_id#/',
		'PATH_TO_USER_CALENDAR' => SITE_DIR.'company/personal/user/#user_id#/calendar/',
		'PATH_TO_MESSAGE_FORM_MESS' => SITE_DIR.'company/personal/messages/form/#user_id#/#message_id#/',
		'PATH_TO_USER_LOG' => SITE_DIR.'company/personal/log/',
		'PATH_TO_VIDEO_CALL' => SITE_DIR.'company/personal/video/#user_id#/',
		'PATH_TO_BIZPROC_TASK_LIST' => SITE_DIR.'company/personal/user/#user_id#/bizproc/',
		'PATH_TO_BIZPROC_TASK' => SITE_DIR.'company/personal/user/#user_id#/bizproc/#id#/',
		'SEF_MODE' => 'Y',
		'SEF_FOLDER' => SITE_DIR.'workgroups/',
		'AJAX_MODE' => 'N',
		'AJAX_OPTION_SHADOW' => 'Y',
		'AJAX_OPTION_JUMP' => 'N',
		'AJAX_OPTION_STYLE' => 'Y',
		'AJAX_OPTION_HISTORY' => 'Y',
		'CACHE_TYPE' => 'A',
		'CACHE_TIME' => '3600',
		'CACHE_TIME_LONG' => '604800',
		'PATH_TO_SMILE' => '/bitrix/images/socialnetwork/smile/',
		'PATH_TO_BLOG_SMILE' => '/bitrix/images/blog/smile/',
		'PATH_TO_FORUM_SMILE' => '/bitrix/images/forum/smile/',
		'SONET_PATH_TO_FORUM_ICON' => '/bitrix/images/forum/icon/',
		'SET_TITLE' => 'Y',
		'SET_NAV_CHAIN' => 'Y',
		'HIDE_OWNER_IN_TITLE' => 'Y',
		'USER_PROPERTY_MAIN' => [
			0 => 'UF_1C',
			1 => '',
		],
		'USER_PROPERTY_CONTACT' => [
		],
		'USER_PROPERTY_PERSONAL' => [
		],
		'SET_NAVCHAIN' => 'Y',
		'AJAX_LONG_TIMEOUT' => '60',
		'BLOG_GROUP_ID' => '1',
		'BLOG_COMMENT_AJAX_POST' => 'Y',
		'FORUM_ID' => '3',
		'CALENDAR_IBLOCK_TYPE' => 'events',
		'CALENDAR_GROUP_IBLOCK_ID' => '0',
		'CALENDAR_WEEK_HOLIDAYS' => [
			0 => '5',
			1 => '6',
		],
		'CALENDAR_YEAR_HOLIDAYS' => (LANGUAGE_ID == 'en')
			? '1.01, 25.12'
			: ((LANGUAGE_ID == 'de') ? '1.01, 25.12'
				: '1.01, 2.01, 7.01, 23.02, 8.03, 1.05, 9.05, 12.06, 4.11'),
		'CALENDAR_WORK_TIME_START' => '9',
		'CALENDAR_WORK_TIME_END' => '19',
		'CALENDAR_USER_IBLOCK_ID' => '#CALENDAR_USERS_IBLOCK_ID#',
		'CALENDAR_ALLOW_SUPERPOSE' => 'Y',
		'CALENDAR_SUPERPOSE_CAL_IDS' => [
			0 => '#CALENDAR_COMPANY_IBLOCK_ID#',
		],
		'CALENDAR_SUPERPOSE_CUR_USER_CALS' => 'Y',
		'CALENDAR_SUPERPOSE_USERS_CALS' => 'Y',
		'CALENDAR_SUPERPOSE_GROUPS_CALS' => 'Y',
		'CALENDAR_ALLOW_RES_MEETING' => 'Y',
		'CALENDAR_RES_MEETING_IBLOCK_ID' => '#CALENDAR_RES_IBLOCK_ID#',
		'CALENDAR_PATH_TO_RES_MEETING' => SITE_DIR.'services/?page=meeting&meeting_id=#id#',
		'CALENDAR_RES_MEETING_USERGROUPS' => ['1'],
		'CALENDAR_ALLOW_VIDEO_MEETING' => 'Y',
		'CALENDAR_VIDEO_MEETING_IBLOCK_ID' => '#CALENDAR_RES_VIDEO_IBLOCK_ID#',
		'CALENDAR_PATH_TO_VIDEO_MEETING_DETAIL' => SITE_DIR.'services/video/detail.php?ID=#ID#',
		'CALENDAR_PATH_TO_VIDEO_MEETING' => SITE_DIR.'services/video/',
		'CALENDAR_VIDEO_MEETING_USERGROUPS' => ['1'],
		'TASK_FORUM_ID' => '8',
		'FILES_GROUP_IBLOCK_TYPE' => 'library',
		'FILES_GROUP_IBLOCK_ID' => '0',
		'FILES_USE_AUTH' => 'Y',
		'NAME_FILE_PROPERTY' => 'FILE',
		'FILES_UPLOAD_MAX_FILESIZE' => '1024',
		'FILES_UPLOAD_MAX_FILE' => '5',
		'FILES_USE_COMMENTS' => 'Y',
		'FILES_FORUM_ID' => '7',
		'PHOTO_GROUP_IBLOCK_TYPE' => 'photos',
		'PHOTO_GROUP_IBLOCK_ID' => '8',
		'PHOTO_UPLOAD_MAX_FILESIZE' => '64',
		'PHOTO_UPLOAD_MAX_FILE' => '4',
		'PHOTO_ORIGINAL_SIZE' => '1280',
		'PHOTO_UPLOADER_TYPE' => 'form',
		'PHOTO_USE_COMMENTS' => 'Y',
		'PHOTO_FORUM_ID' => '2',
		'PHOTO_USE_CAPTCHA' => 'Y',
		'PHOTO_GALLERY_AVATAR_SIZE' => '50',
		'PHOTO_ALBUM_PHOTO_THUMBS_SIZE' => '150',
		'PHOTO_ALBUM_PHOTO_SIZE' => '150',
		'PHOTO_THUMBS_SIZE' => '250',
		'PHOTO_PREVIEW_SIZE' => '700',
		'PHOTO_JPEG_QUALITY1' => '95',
		'PHOTO_JPEG_QUALITY2' => '95',
		'PHOTO_JPEG_QUALITY' => '90',
		'SHOW_RATING' => '',
		'RATING_TYPE' => '',
		'SEF_URL_TEMPLATES' => [
			'index' => 'index.php',
			'search' => 'search.php',
			'group' => 'group/#group_id#/',
			'group_search' => 'group/search/',
			'group_search_subject' => 'group/search/#subject_id#/',
			'group_edit' => 'group/#group_id#/edit/',
			'group_delete' => 'group/#group_id#/delete/',
			'group_request_search' => 'group/#group_id#/user_search/',
			'group_request_user' => 'group/#group_id#/user/#user_id#/request/',
			'user_request_group' => 'group/#group_id#/user_request/',
			'group_requests' => 'group/#group_id#/requests/',
			'group_mods' => 'group/#group_id#/moderators/',
			'group_users' => 'group/#group_id#/users/',
			'group_ban' => 'group/#group_id#/ban/',
			'user_leave_group' => 'group/#group_id#/user_leave/',
			'group_features' => 'group/#group_id#/features/',
			'group_photo' => 'group/#group_id#/photo/',
			'group_calendar' => 'group/#group_id#/calendar/',
			'group_files' => 'group/#group_id#/files/#path#',
			'group_blog' => 'group/#group_id#/blog/',
			'group_blog_post_edit' => 'group/#group_id#/blog/edit/#post_id#/',
			'group_blog_rss' => 'group/#group_id#/blog/rss/#type#/',
			'group_blog_draft' => 'group/#group_id#/blog/draft/',
			'group_blog_post' => 'group/#group_id#/blog/#post_id#/',
			'group_forum' => 'group/#group_id#/forum/',
			'group_forum_topic_edit' => 'group/#group_id#/forum/edit/#topic_id#/',
			'group_forum_topic' => 'group/#group_id#/forum/#topic_id#/',
		],
		'LOG_NEW_TEMPLATE' => 'Y',
	]
);
?><?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');