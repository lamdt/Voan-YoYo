<?php
/*
  $Id: banner_manager.php,v 1.17 2002/08/18 18:54:47 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Quản lí banner');

define('TABLE_HEADING_BANNERS', 'Banner');
define('TABLE_HEADING_GROUPS', 'Nhóm');
define('TABLE_HEADING_STATISTICS', 'Hiển thị/Số lần click');
define('TABLE_HEADING_STATUS', 'Trạng thái');
define('TABLE_HEADING_ACTION', 'Lệnh');

define('TEXT_BANNERS_TITLE', 'Tiêu đề Banner:');
define('TEXT_BANNERS_URL', 'Địa chỉ URL của Banner:');
define('TEXT_BANNERS_GROUP', 'Nhóm Banner:');
define('TEXT_BANNERS_NEW_GROUP', ', hoặc điền tên nhóm mới ở dưới');
define('TEXT_BANNERS_IMAGE', 'Ảnh:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', hoặc điền tên file ở dưới');
define('TEXT_BANNERS_IMAGE_TARGET', 'Địa chỉ lưu:');
define('TEXT_BANNERS_HTML_TEXT', 'Văn bản HTML:');
define('TEXT_BANNERS_EXPIRES_ON', 'hết hạn ngày:');
define('TEXT_BANNERS_OR_AT', ', hoặc tại');
define('TEXT_BANNERS_IMPRESSIONS', 'số lần hiển thị.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Lên lịch:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Ghi chú:</b><ul><li>Chỉ sử dụng ảnh hoặc mã HTML.</li><li>Mã HTML sẽ được dùng nếu cả hai cùng được đặt</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Ghi chú:</b><ul><li>Thư mục tải ảnh lên phải có quyền ghi!</li><li>Không điền vào ô  \'Lưu\' nếu bạn không tải file lên máy chủ</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Ghi chú:</b><ul><li>Chỉ điền vào 1 trong 2 ô</li><li>Nếu banners không tự động xóa khi hết hạn thì bỏ trống</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Ghi chú:</b><ul><li>Nếu chế độ Lên lịch được bật thì banners sẽ tự động bật vào ngày đã định.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'Ngày thêm:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Lên lịch: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Hết hạn: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Hết hạn khi có: <b>%s</b> lần xem');
define('TEXT_BANNERS_STATUS_CHANGE', 'Thay đổi trạng thái: %s');

define('TEXT_BANNERS_DATA', 'D<br>A<br>T<br>A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Sau 3 ngày');
define('TEXT_BANNERS_BANNER_VIEWS', 'Số lần xem Banner');
define('TEXT_BANNERS_BANNER_CLICKS', 'Số lần click vào Banner');

define('TEXT_INFO_DELETE_INTRO', 'Bạn có chắc là xóa banner này?');
define('TEXT_INFO_DELETE_IMAGE', 'Xóa ảnh của banner?');

define('SUCCESS_BANNER_INSERTED', 'Banner đã được chèn.');
define('SUCCESS_BANNER_UPDATED', 'Banner đã được thay đổi.');
define('SUCCESS_BANNER_REMOVED', 'Banner đã bị gỡ bỏ.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Trạng thái của banner đã được thay đổi.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Cần tiêu đề banner.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Cần nhóm của banner.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Thưu mục không tồn tại: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Thự muc không ghi được: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Ảnh không tồn tại.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Ảnh không thể xóa.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Trạng thái không rõ.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Không tồn tại thư mục ảnh, hãy tạo một thư mục\'graphs\' trong thư mục \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Thư mục ảnh không ghi được.');
?>