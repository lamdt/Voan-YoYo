<?php
/*
  $Id: currencies.php,v 1.12 2003/06/25 20:36:48 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Tiền tệ');

define('TABLE_HEADING_CURRENCY_NAME', 'Tiền tệ');
define('TABLE_HEADING_CURRENCY_CODES', 'Mã');
define('TABLE_HEADING_CURRENCY_VALUE', 'Hiện tại');
define('TABLE_HEADING_ACTION', '');

define('TEXT_INFO_EDIT_INTRO', 'Thực hiện các thay đổi cần thiết');
define('TEXT_INFO_CURRENCY_TITLE', 'Tiều đề:');
define('TEXT_INFO_CURRENCY_CODE', 'Mã:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Kí hiệu trái:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Kí hiệu phải:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Dấu phẩy:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Dấu hàng nghìn:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Vị trí dấu thập phân:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Lần thay đổi cuối:');
define('TEXT_INFO_CURRENCY_VALUE', 'Giá trị:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Ví dụ:');
define('TEXT_INFO_INSERT_INTRO', 'Điền loại tiền tệ mới và các thông tin cần thiết');
define('TEXT_INFO_DELETE_INTRO', 'Bạn có chắc muốn xóa loại tiền tệ này?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Thêm');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Sửa');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Xóa');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (cần cập nhật hàng ngày)');
define('TEXT_INFO_CURRENCY_UPDATED', 'Tỉ giá  %s (%s) đã được thay đổi %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Loại tiền tệ mặc định không thể xóa. Chuyển giá trị mặc định có loại tiền tệ khác trước khi thay đổi.');
define('ERROR_CURRENCY_INVALID', 'Tỉ giá %s (%s) không được thay đổi %s. Hãy kiểm tra lại!');
define('WARNING_PRIMARY_SERVER_FAILED', 'Server tỉ giá không thể kết nối');
?>
