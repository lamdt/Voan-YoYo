<?php
/*
  $Id: backup.php,v 1.16 2002/03/16 21:30:02 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Sao lưu cơ sở dữ liệu');

define('TABLE_HEADING_TITLE', 'Tiêu đề');
define('TABLE_HEADING_FILE_DATE', 'Ngày');
define('TABLE_HEADING_FILE_SIZE', 'Kích thước');
define('TABLE_HEADING_ACTION', 'Thực hiện');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Sao lưu bản mới');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Khôi phục');
define('TEXT_INFO_NEW_BACKUP', 'Không dừng quá trình sao lưu, quá trình này có thể diễn ra trong vòng vài phút.');
define('TEXT_INFO_UNPACK', '<br><br>(sau khi giải nén file)');
define('TEXT_INFO_RESTORE', 'Không dừng quá trình khôi phục.<br><br>Nếu CSDL càng lớn thì càng tốn nhiều thời gian!<br><br>');
define('TEXT_INFO_RESTORE_LOCAL', 'Không dừng quá trình khôi phục.<br><br>Nếu CSDL càng lớn thì càng tốn nhiều thời gian!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'File tải lên phải là file sql.');
define('TEXT_INFO_DATE', 'Ngày:');
define('TEXT_INFO_SIZE', 'Kích thước:');
define('TEXT_INFO_COMPRESSION', 'Nén:');
define('TEXT_INFO_USE_GZIP', 'Dùng GZIP');
define('TEXT_INFO_USE_ZIP', 'Dùng ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Không nén');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Chỉ tải về');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Tốt nhất qua giao thức HTTPS');
define('TEXT_DELETE_INTRO', 'Bạn có chắc là xóa file này chứ?');
define('TEXT_NO_EXTENSION', 'Không');
define('TEXT_BACKUP_DIRECTORY', 'Thư mục sao lưu:');
define('TEXT_LAST_RESTORATION', 'Lần khôi phục trước:');
define('TEXT_FORGET', '(<u>forget</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Thư mục backups không tồn tại. Thay đổi trong file  configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Thư mục backups không thể ghi.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Link tải xuống không hợp lệ.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Ngày khôi phục trước đã bị xóa.');
define('SUCCESS_DATABASE_SAVED', 'CSDL đã ghi.');
define('SUCCESS_DATABASE_RESTORED', 'CSDL đã khôi phục.');
define('SUCCESS_BACKUP_DELETED', 'CSDL đã xóa.');
?>