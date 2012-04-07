<?php
/*
  $Id: orders.php,v 1.25 2003/06/20 00:28:44 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Đơn hàng');
define('HEADING_TITLE_SEARCH', 'ID:');
define('HEADING_TITLE_STATUS', 'Trạng thái:');

define('TABLE_HEADING_COMMENTS', 'Nội dung');
define('TABLE_HEADING_CUSTOMERS', 'Khách hàng');
define('TABLE_HEADING_ORDER_TOTAL', 'Tổng đơn hàng');
define('TABLE_HEADING_DATE_PURCHASED', 'Ngày thanh toán');
define('TABLE_HEADING_STATUS', 'Trạng thái');
define('TABLE_HEADING_ACTION', '');
define('TABLE_HEADING_QUANTITY', 'Số lượng');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Kiểu');
define('TABLE_HEADING_PRODUCTS', 'Sản phẩm');
define('TABLE_HEADING_TAX', 'Thuế');
define('TABLE_HEADING_TOTAL', 'Tổng');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Giá (trước thuế)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Giá (sau thuế)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Tổng (trước thuế)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Tổng (sau thuế)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Nhắc nhở cho khách hàng');
define('TABLE_HEADING_DATE_ADDED', 'Ngày thêm');

define('ENTRY_CUSTOMER', 'Khách hàng:');
define('ENTRY_SOLD_TO', 'Bán cho:');
define('ENTRY_DELIVERY_TO', 'Chuyển tới:');
define('ENTRY_SHIP_TO', 'Chuyển:');
define('ENTRY_SHIPPING_ADDRESS', 'Địa chỉ gửi:');
define('ENTRY_BILLING_ADDRESS', 'Địa chỉ nhận hóa đơn:');
define('ENTRY_PAYMENT_METHOD', 'Phương thức thanh toán:');
define('ENTRY_CREDIT_CARD_TYPE', 'Loại CC:');
define('ENTRY_CREDIT_CARD_OWNER', 'Chủ CC:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Số CC:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Hạn CC:');
define('ENTRY_SUB_TOTAL', 'tổng trước:');
define('ENTRY_TAX', 'Thuế:');
define('ENTRY_SHIPPING', 'Vận chuyển:');
define('ENTRY_TOTAL', 'Tổng:');
define('ENTRY_DATE_PURCHASED', 'Ngày mua:');
define('ENTRY_STATUS', 'Trạng thái:');
define('ENTRY_DATE_LAST_UPDATED', 'Ngày cập nhật cuối:');
define('ENTRY_NOTIFY_CUSTOMER', 'Nhắc nhở cho khách:');
define('ENTRY_NOTIFY_COMMENTS', 'Chú giải đi kèm:');
define('ENTRY_PRINTABLE', 'In hóa đơn');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Xóa đơn hàng');
define('TEXT_INFO_DELETE_INTRO', 'Bạn có chắc muốn xóa?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Đặt lại số lượng của hàng');
define('TEXT_DATE_ORDER_CREATED', 'Ngày tạo:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Thay đổi cuối:');
define('TEXT_INFO_PAYMENT_METHOD', 'Hình thức thanh toán:');

define('TEXT_ALL_ORDERS', 'Tất cả đơn hàng');
define('TEXT_NO_ORDER_HISTORY', 'Không có lưu trữ về các đơn hàng');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Thay đổi đơn hàng');
define('EMAIL_TEXT_ORDER_NUMBER', 'Số đơn hàng:');
define('EMAIL_TEXT_INVOICE_URL', 'Hóa đơn:');
define('EMAIL_TEXT_DATE_ORDERED', 'Ngày mua:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Đơn hàng đã được thay đổi.' . "\n\n" . 'Trạng thái mới: %s' . "\n\n" . 'Trả lời lại email này nếu còn có thắc mắc.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Chứ thích của đơn hàng' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Đơn hàng không tồn tại.');
define('SUCCESS_ORDER_UPDATED', 'Đơn hàng đã được thay đổi.');
define('WARNING_ORDER_NOT_UPDATED', 'Đơn hàng không có gì thay đổi.');
?>
