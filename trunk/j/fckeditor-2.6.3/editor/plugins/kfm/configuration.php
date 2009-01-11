<?php
# see docs/license.txt for licensing

# user access details. all users may use get.php without logging in, but
#   if the following details are filled in, then login will be required
#   for the main KFM application
# for more details, see http://kfm.verens.com/security
$kfm_username='';
$kfm_password='';

# what type of database to use
$kfm_db_type='sqlitepdo'; # values allowed: mysql, pgsql, sqlite, sqlitepdo

# the following options should only be filled if you are not using sqlite/sqlitepdo as the database
$kfm_db_prefix='kfm_';
$kfm_db_host='localhost';
$kfm_db_name='kfm';
$kfm_db_username='username';
$kfm_db_password='password';
$kfm_db_port=''; # leave blank if using default port

# where are the files located on the hard-drive, relative to the website's root directory?
# In the default example, the user-files are at http://kfm.verens.com/sandbox/UserFiles/
# Note that this is the actual file-system location of the files.
# This value must begin and end in '/'.
$kfm_userfiles_address=$_SERVER['DOCUMENT_ROOT'].'/f/';

# what should be added to the server's root URL to find the URL of the user files?
# Note that this is usually the same as $kfm_userfiles, but could be different in the case
#   that the server uses mod_rewrite or personal web-sites, etc
# Use the value 'get.php' if you want to use the KFM file handler script to manager file downloads.
# If you are not using get.php, this value must end in '/'.
# Examples:
#   $kfm_userfiles_output='http://thisdomain.com/files/';
#   $kfm_userfiles_output='/files/';
#   $kfm_userfiles_output='http://thisdomain.com/kfm/get.php';
#   $kfm_userfiles_output='/kfm/get.php';
$kfm_userfiles_output='/f/';

# if you want to hide any panels, add them here as a comma-delimited string
# for example, $kfm_hidden_panels='logs,file_details,file_upload,search,directory_properties';
$kfm_hidden_panels='logs,file_details';

# what happens if someone double-clicks a file or presses enter on one?
$kfm_file_handler='fckeditor'; # values allowed: download, fckeditor

# directory in which KFM keeps its database and generated files
# if this starts with '/', then the address is absolute. otherwise, it is relative to $kfm_userfiles.
# $kfm_workdirectory='.files';
# $kfm_workdirectory='/home/kae/files_cache';
# warning: if you use the '/' method, then you must use the get.php method for $kfm_userfiles_output.
$kfm_workdirectory = '.files';

# maximum length of filenames displayed. use 0 to turn this off, or enter the number of letters.
$kfm_files_name_length_displayed=20;

# 1 = users are allowed to delete directories
# 0 = users are not allowed to delete directories
$kfm_allow_directory_delete=1;

# 1 = users are allowed to edit directories
# 0 = users are not allowed to edit directories
$kfm_allow_directory_edit=1;

# 1 = users are allowed to move directories
# 0 = users are not allowed to move directories
$kfm_allow_directory_move=1;

# 1 = users are allowed to create directories
# 0 = user are not allowed create directories
$kfm_allow_directory_create=1;

# 1 = users are allowed to create files
# 0 = users are not allowed to create files
$kfm_allow_file_create=1;

# 1 = users are allowed to delete files
# 0 = users are not allowed to delete files
$kfm_allow_file_delete=1;

# 1 = users are allowed to edit files
# 0 = users are not allowed to edit files
$kfm_allow_file_edit=1;

# 1 = users are allowed to move files
# 0 = users are not allowed to move files
$kfm_allow_file_move=1;

# 1 = users are allowed to upload files
# 0 = user are not allowed upload files
$kfm_allow_file_upload=1;

# use this array to ban dangerous files from being uploaded.
$kfm_banned_extensions=array('asp','cfm','cgi','php','php3','php4','phtm','pl','sh','shtm','shtml');

# this array tells KFM what extensions indicate files which may be edited online.
$kfm_editable_extensions=array('css','html','js','txt','xhtml','xml');

# this array tells KFM what extensions indicate files which may be viewed online.
# the contents of $kfm_editable_extensions will be added automatically.
$kfm_viewable_extensions=array('sql','php');

# 1 = users can only upload images
# 0 = don't restrict the types of uploadable file
$kfm_only_allow_image_upload=0;

# 0 = only errors will be logged
# 1 = everything will be logged
$kfm_log_level=0;

# use this array to show the order in which language files will be checked for
$kfm_preferred_languages=array('en','de','da','es','fr','nl','ga');

# themes are located in ./themes/
# to use a different theme, replace 'default' with the name of the theme's directory.
$kfm_theme='webworks';

# use ImageMagick's 'convert' program?
$kfm_use_imagemagick=1;

# where is the 'convert' program kept, if you have it installed?
$kfm_imagemagick_path='/usr/bin/convert';

# show files in groups of 'n', where 'n' is a number (helps speed up files display - use low numbers for slow machines)
$kfm_show_files_in_groups_of=10;

# what directory is KFM in? this is very important for CMS's that use KFM's API functions,
#   but probably not important at all to the casual user.
$kfm_base_path=$_SERVER['DOCUMENT_ROOT'].'/j/fckeditor-2.6.3/editor/plugins/kfm/';

# should disabled links be shown (but grayed out and unclickable), or completely hidden?
# you might use this if you want your users to not know what it is that's been disabled, for example.
$kfm_show_disabled_contextmenu_links=1;

# multiple file uploads are handled through the external SWFUpload flash application.
# this can cause difficulties on some systems, so if you have problems uploading, then disable this.
$kfm_use_multiple_file_upload=0;

# seconds between slides in a slideshow
$kfm_slideshow_delay=4;

# allow users to resize/rotate images
$kfm_allow_image_manipulation=1;

# set root folder name
$kfm_root_folder_name='root';

# we would like to keep track of installations, to see how many there are, and what versions are in use.
# if you do not want us to have this information, then set the following variable to '1'.
$kfm_dont_send_metrics=1;
$kfm_default_upload_permission='777';
$kfm_return_file_id_to_cms=0;
$kfm_listview=0;
$kfm_allow_multiple_file_returns=0;
$kfm_banned_files=array('thumbs.db','/^\./');
$kfm_date_format='%Y-%M-%d';

define('ERROR_LOG_LEVEL',1); # 0=none, 1=errors, 2=1+warnings, 3=2+notices, 4=3+unknown
// require_once(dirname(__FILE__).'/initialise.php');