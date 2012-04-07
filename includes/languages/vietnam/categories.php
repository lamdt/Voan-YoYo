<?php
/*
  $Id: categories.php,v 1.26 2003/07/11 14:40:28 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Trương mục / Sản phẩm');
define('HEADING_TITLE_SEARCH', 'Tìm:');
define('HEADING_TITLE_GOTO', 'Đi tới:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Trương mục / Sản phẩm');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_STATUS', 'Trạng thái');

define('TEXT_NEW_PRODUCT', 'Sản phẩm mới trong &quot;%s&quot;');
define('TEXT_CATEGORIES', 'Trương mục:');
define('TEXT_SUBCATEGORIES', 'Mục nhỏ:');
define('TEXT_PRODUCTS', 'Sản phẩm:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Giá:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Loại thuế:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Xếp hạng:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Số lượng:');
define('TEXT_DATE_ADDED', 'Ngày thêm:');
define('TEXT_DATE_AVAILABLE', 'Ngày tồn tại:');
define('TEXT_LAST_MODIFIED', 'Thay đổi cuối:');
define('TEXT_IMAGE_NONEXISTENT', 'Không thấy ảnh');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Vui lòng thêm trương mục hoặc sản phẩm.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Để có thêm thông tin vui lòng tới <a href="http://%s" target="blank"><u>website</u></a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Sản phẩm này được thêm vào tại %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Sản phẩm này có trong kho từ %s.');

define('TEXT_EDIT_INTRO', 'Vui lòng điền đủ thông tin cần thiết');
define('TEXT_EDIT_CATEGORIES_ID', 'ID của trương mục:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Tên trương mục:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Ảnh trương mục:');
define('TEXT_EDIT_SORT_ORDER', 'Thứ tự sắp xếp:');

define('TEXT_INFO_COPY_TO_INTRO', 'Chọn thư mục bạn muốn copy sản phẩm tới');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Trương mục hiện tại:');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Trương mục mới');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Sửa trương mục');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Xóa trương mục');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Chuyển trương mục');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Xóa sản phẩm');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Chuyển sản phẩm');
define('TEXT_INFO_HEADING_COPY_TO', 'Copy tới');

define('TEXT_DELETE_CATEGORY_INTRO', 'Bạn có chắc là muốn xóa trương mục này không?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Bạn có chắc xóa hoàn toàn sản phẩm này không?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>Cảnh báo:</b> Có %s trương mục nhỏ đang liên kết đến trương mục này!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>Cảnh báo:</b> Có %s sản phẩm liên kết đến trương mục này!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Chọn trương mục  <b>%s</b> muốn chuyển tới');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Chọn trương mục <b>%s</b> muốn chuyển tới');
define('TEXT_MOVE', 'Chuyển <b>%s</b> tới:');

define('TEXT_NEW_CATEGORY_INTRO', 'Điền đủ các thông tin cho trương mục này');
define('TEXT_CATEGORIES_NAME', 'Tên trương mục:');
define('TEXT_CATEGORIES_IMAGE', 'Ảnh trương mục:');
define('TEXT_SORT_ORDER', 'Thứ tự sắp xếp:');

define('TEXT_PRODUCTS_STATUS', 'Trạng thái của sản phẩm:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Ngày tồn tại:');
define('TEXT_PRODUCT_AVAILABLE', 'Trong kho');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Hết hàng');
define('TEXT_PRODUCTS_MANUFACTURER', 'Nhà sản xuất:');
define('TEXT_PRODUCTS_NAME', 'Tên sản phẩm:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Miêu tả sản phẩm:');
define('TEXT_PRODUCTS_QUANTITY', 'Số lượng sản phẩm:');
define('TEXT_PRODUCTS_MODEL', 'Kiểu:');
define('TEXT_PRODUCTS_IMAGE', 'Ảnh sản phẩm:');
define('TEXT_PRODUCTS_URL', 'URL:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(không có http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Giá(bán lẻ):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Giá (bán sỉ):');
define('TEXT_PRODUCTS_WEIGHT', 'Trọng lượng:');

define('EMPTY_CATEGORY', 'Trương mục trống');

define('TEXT_HOW_TO_COPY', 'Hình thức copy:');
define('TEXT_COPY_AS_LINK', 'Liên kết sản phẩm');
define('TEXT_COPY_AS_DUPLICATE', 'Sao chép sản phẩm');

define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Không liên kết các sản phẩm cùng trương mục.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Thư mục images không thể ghi: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Thư mục images không tồn tại: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Thư mục không thể chuyển vào thư mục còn của nó.');
?>
