<?php
/*
  $Id: english.php,v 1.106 2003/06/20 00:18:31 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'en_US.ISO_8859-1');
define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'm/d/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="en"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', 'osCommerce');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administration');
define('HEADER_TITLE_SUPPORT_SITE', 'Support Site');
define('HEADER_TITLE_ONLINE_CATALOG', 'Online Catalog');
define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// text for gender
define('MALE', 'Male');
define('FEMALE', 'Female');

// text for date of birth example
define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Cấu hình');
define('BOX_CONFIGURATION_MYSTORE', 'Cửa hàng');
define('BOX_CONFIGURATION_LOGGING', 'Bản lưu');
define('BOX_CONFIGURATION_CACHE', 'Tạm');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Thành phần');
define('BOX_MODULES_PAYMENT', 'Thanh toán');
define('BOX_MODULES_SHIPPING', 'Chuyển hàng');
define('BOX_MODULES_ORDER_TOTAL', 'Tổng số đơn hàng');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Catalog');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Danh mục/Sản phẩm');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Đặc tính sản phẩm');
define('BOX_CATALOG_MANUFACTURERS', 'Nhà sản xuất');
define('BOX_CATALOG_REVIEWS', 'Nhận xét');
define('BOX_CATALOG_SPECIALS', 'Specials');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Sản phẩm mong đợi');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Khách hàng');
define('BOX_CUSTOMERS_CUSTOMERS', 'Khách hàng');
define('BOX_CUSTOMERS_ORDERS', 'Đơn đặt hàng');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Khu vực/Thuế');
define('BOX_TAXES_COUNTRIES', 'Nước');
define('BOX_TAXES_ZONES', 'Vùng');
define('BOX_TAXES_GEO_ZONES', 'Thuế vùng');
define('BOX_TAXES_TAX_CLASSES', 'Loại thuế');
define('BOX_TAXES_TAX_RATES', 'Thuế suất');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Báo cáo');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Sản phẩm được xem');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Sản phẩm được mua');
define('BOX_REPORTS_ORDERS_TOTAL', 'Tổng số đơn đặt hàng');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Công cụ');
define('BOX_TOOLS_BACKUP', 'Sao lưu cơ sở dữ liệu');
define('BOX_TOOLS_BANNER_MANAGER', 'Quản lý banner');
define('BOX_TOOLS_CACHE', 'Quản lý cache');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Định nghĩa ngôn ngứ');
define('BOX_TOOLS_FILE_MANAGER', 'Quản lý file');
define('BOX_TOOLS_MAIL', 'Gửi email');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Quản lý hệ thống gửi tin');
define('BOX_TOOLS_SERVER_INFO', 'Tin tức máy chủ');
define('BOX_TOOLS_WHOS_ONLINE', 'Ai đang online');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Địa phương');
define('BOX_LOCALIZATION_CURRENCIES', 'Tiền tệ');
define('BOX_LOCALIZATION_LANGUAGES', 'Ngôn ngữ');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Trạng thái đơn hàng');

// javascript messages
define('JS_ERROR', 'Có lỗi xảy ra với những gì bạn vừa điền vào!\nXin vui lòng sửa cho chính xác:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Cần điền giá\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Cần điền giá\n');

define('JS_PRODUCTS_NAME', '* Cần điền tên\n');
define('JS_PRODUCTS_DESCRIPTION', '* Cần điền giới thiệu về mặt hàng\n');
define('JS_PRODUCTS_PRICE', '* Cần điền giá\n');
define('JS_PRODUCTS_WEIGHT', '* Cần điền trọng lượng\n');
define('JS_PRODUCTS_QUANTITY', '* Cần điền số lượng\n');
define('JS_PRODUCTS_MODEL', '* Cần điền kiểu\n');
define('JS_PRODUCTS_IMAGE', '* Cần chọn ảnh\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Giá mới của mặt hàng này cần được đặt\n');

define('JS_GENDER', '* \'Giới tính\' cần được chọn.\n');
define('JS_FIRST_NAME', '* \'Họ\' cần có ít nhất ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' ký tự.\n');
define('JS_LAST_NAME', '*  \'Tên\' cần có ít nhất ' . ENTRY_LAST_NAME_MIN_LENGTH . ' ký tự.\n');
define('JS_DOB', '*  \'Ngày sinh\' cần điền theo định dạng: xx/xx/xxxx (tháng/ngày/năm).\n');
define('JS_EMAIL_ADDRESS', '* \'Địa chỉ E-Mail\' cần có ít nhất ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' ký tự.\n');
define('JS_ADDRESS', '* \'Địa chỉ\' cần có ít nhất ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' ký tự.\n');
define('JS_POST_CODE', '*  \'Mã vùng\' cần có ít nhất ' . ENTRY_POSTCODE_MIN_LENGTH . ' ký tự.\n');
define('JS_CITY', '* \'Thành phố\' cần có ít nhất ' . ENTRY_CITY_MIN_LENGTH . ' ký tự.\n');
define('JS_STATE', '* \'Vùng\' cần được chọn.\n');
define('JS_STATE_SELECT', '-- Chọn ở dưới --');
define('JS_ZONE', '* \'Vùng\' cần được chọn.\n');
define('JS_COUNTRY', '* * \'Quốc gia\' cần được chọn.\n');
define('JS_TELEPHONE', '* \'Số điện thoại\' cần có ít nhất ' . ENTRY_TELEPHONE_MIN_LENGTH . ' ký tự.\n');
define('JS_PASSWORD', '* The \'Mật khẩu\' và \'Xác nhận\' phải trùng nhau và cần có ít nhất ' . ENTRY_PASSWORD_MIN_LENGTH . ' ký tự.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Đơn hàng số %s không tồn tại!');

define('CATEGORY_PERSONAL', 'Cá nhân');
define('CATEGORY_ADDRESS', 'Địa chỉ');
define('CATEGORY_CONTACT', 'Liên hệ');
define('CATEGORY_COMPANY', 'Công ty');
define('CATEGORY_OPTIONS', 'Tùy chọn');

define('ENTRY_GENDER', 'Giới tính:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">cần điền</span>');
define('ENTRY_FIRST_NAME', 'Họ:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">ít nhất ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' ký tự</span>');
define('ENTRY_LAST_NAME', 'Họ:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">ít nhất ' . ENTRY_LAST_NAME_MIN_LENGTH . ' ký tự</span>');
define('ENTRY_DATE_OF_BIRTH', 'Ngày sinh:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(ví dụ 05/21/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Địa chỉ E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">ít nhất ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' ký tự</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Địa chỉ email không đúng dạng!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Địa chỉ email này đã tồn tại!</span>');
define('ENTRY_COMPANY', 'Tên công ty:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_STREET_ADDRESS', 'Địa chỉ:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">ít nhất ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' ký tự</span>');
define('ENTRY_SUBURB', 'Ngoại thành:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Mã vùng:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">ít nhất ' . ENTRY_POSTCODE_MIN_LENGTH . ' ký tự</span>');
define('ENTRY_CITY', 'Tỉnh/Thành phố:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">ít nhất ' . ENTRY_CITY_MIN_LENGTH . ' ký tự</span>');
define('ENTRY_STATE', 'Quận/Huyện:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">required</span>');
define('ENTRY_COUNTRY', 'Quốc gia:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Số điện thoại:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">ít nhất ' . ENTRY_TELEPHONE_MIN_LENGTH . ' ký tự</span>');
define('ENTRY_FAX_NUMBER', 'Số fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Nhận tin:');
define('ENTRY_NEWSLETTER_YES', 'Nhận');
define('ENTRY_NEWSLETTER_NO', 'Không');
define('ENTRY_NEWSLETTER_ERROR', '');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Gửi email');
define('IMAGE_BACK', 'Quay lại');
define('IMAGE_BACKUP', 'Sao lưu');
define('IMAGE_CANCEL', 'Hủy bỏ');
define('IMAGE_CONFIRM', 'Xác nhận');
define('IMAGE_COPY', 'Copy');
define('IMAGE_COPY_TO', 'Copy tới');
define('IMAGE_DETAILS', 'Chi tiết');
define('IMAGE_DELETE', 'Xóa');
define('IMAGE_EDIT', 'Sửa');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_FILE_MANAGER', 'Quản lý File');
define('IMAGE_ICON_STATUS_GREEN', 'Hoạt động');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Đặt chế độ hoạt động');
define('IMAGE_ICON_STATUS_RED', 'Không hoạt động');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Đặt chế độ không hoạt động');
define('IMAGE_ICON_INFO', 'Thông tin');
define('IMAGE_INSERT', 'Chèn');
define('IMAGE_LOCK', 'Khóa');
define('IMAGE_MODULE_INSTALL', 'Cài đặt modun');
define('IMAGE_MODULE_REMOVE', 'Gỡ modun');
define('IMAGE_MOVE', 'Chuyển');
define('IMAGE_NEW_BANNER', 'Tạo Banner');
define('IMAGE_NEW_CATEGORY', 'Tạo danh mục');
define('IMAGE_NEW_COUNTRY', 'Tạo Quốc gia');
define('IMAGE_NEW_CURRENCY', ' Tiền tệ');
define('IMAGE_NEW_FILE', 'Tạo File');
define('IMAGE_NEW_FOLDER', 'Tạo thư mục');
define('IMAGE_NEW_LANGUAGE', 'Tạo ngôn ngữ');
define('IMAGE_NEW_NEWSLETTER', 'Tạo bản tin');
define('IMAGE_NEW_PRODUCT', 'Tạo sản phẩm');
define('IMAGE_NEW_TAX_CLASS', 'Tạo lớp thuế');
define('IMAGE_NEW_TAX_RATE', 'Tạo thuế suất');
define('IMAGE_NEW_TAX_ZONE', 'Tạo thuế vùng');
define('IMAGE_NEW_ZONE', 'Vùng mới');
define('IMAGE_ORDERS', 'Orders');
define('IMAGE_ORDERS_INVOICE', 'Hóa đơn');
define('IMAGE_ORDERS_PACKINGSLIP', 'Packing Slip');
define('IMAGE_PREVIEW', 'Nhận xét');
define('IMAGE_RESTORE', 'Phục hồi');
define('IMAGE_RESET', 'Reset');
define('IMAGE_SAVE', 'Lưu');
define('IMAGE_SEARCH', 'Tìm');
define('IMAGE_SELECT', 'Chọn');
define('IMAGE_SEND', 'Gửi');
define('IMAGE_SEND_EMAIL', 'Gửi Email');
define('IMAGE_UNLOCK', 'Mở khóa');
define('IMAGE_UPDATE', 'Thay đổi');
define('IMAGE_UPDATE_CURRENCIES', 'Thay đổi tỉ giá');
define('IMAGE_UPLOAD', 'Tải lên');

define('ICON_CROSS', 'Sai');
define('ICON_CURRENT_FOLDER', 'Thư mục hiện tại');
define('ICON_DELETE', 'Xóa');
define('ICON_ERROR', 'Lỗi');
define('ICON_FILE', 'File');
define('ICON_FILE_DOWNLOAD', 'Tải xuống');
define('ICON_FOLDER', 'Thự mục');
define('ICON_LOCKED', 'Đã khóa');
define('ICON_PREVIOUS_LEVEL', 'Mục trên');
define('ICON_PREVIEW', 'Xem trước');
define('ICON_STATISTICS', 'Thống kê');
define('ICON_SUCCESS', 'Thành công');
define('ICON_TICK', 'Đúng');
define('ICON_UNLOCKED', 'Mở khóa');
define('ICON_WARNING', 'Cảnh báo');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Trang %s trên %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> quốc gia)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> khách hàng)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> đơn vị)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> ngôn ngữ)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> nhà sản xuất)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> trang tin)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> đơn đặt hàng)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> tình trạng đơn hàng)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> mặt hàng)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> mặt hàng yêu cầu)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> product nhận xét)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> mặt hàng special)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> lớp thuế)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> vùng thuế)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> thuế suất)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Hiển thị <b>%d</b> đến <b>%d</b> (trên tổng số <b>%d</b> vùng)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'mặc định');
define('TEXT_SET_DEFAULT', 'Đặt là mặc định');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Cần điền</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Lỗi: Không có loại tiền tệ nào được chọn là mặc định. Hãy chọn một loại trong bảng điều khiển của admin');

define('TEXT_CACHE_CATEGORIES', 'Danh mục');
define('TEXT_CACHE_MANUFACTURERS', 'Nhà sản xuất');
define('TEXT_CACHE_ALSO_PURCHASED', 'Mục tương tự');

define('TEXT_NONE', '--không--');
define('TEXT_TOP', 'Trên');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Lỗi: không tồn tại.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Lỗi: không ghi được.');
define('ERROR_FILE_NOT_SAVED', 'Lỗi: file tải lên chưa được nhớ.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Lỗi: không được phép tải loại file này lên.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'File tải lên thành công.');
define('WARNING_NO_FILE_UPLOADED', 'Không có file nào được tải lên.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Không được phép tải file lên do cấu hình máy chủ.');
?>
