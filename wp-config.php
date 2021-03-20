<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'shop2' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Cw.9cx?loDp=.8Mg!qxo4#&_/TN()0::1}OLV S4u0I1~K19Z.t`^T<zX1yT}za%' );
define( 'SECURE_AUTH_KEY',  '%`A)[e%yXlgZv)PY3CcF%1 n<Q2s x?M*1Pa#Ih]$kHZu3mNr8?{Gac<;O,]W]{(' );
define( 'LOGGED_IN_KEY',    'dY=~y[N[o$lnYTI[>t@%1@xcbl(x)snQkH{kjD_Mk-jqZSq47|yfDV*aI)(<#?^Y' );
define( 'NONCE_KEY',        '3[&K=-{|]3m1gN6YxLR2M:LIIIC&hS,/0#k/(cMV8=0-Mx:!:P FkvpNf89@gWS;' );
define( 'AUTH_SALT',        'Uz+038jf;bq3.ZT1Dt&QZjv,E zZO3:t~!+%6K9L)e<ijynGypg>^/v_,XH_26$e' );
define( 'SECURE_AUTH_SALT', ')iXmO*u58Lq+gQY/ye<Cioma3I0Cu8NtZ0]tM18{`m0U7 zgRS=ga$b*:h@j59>a' );
define( 'LOGGED_IN_SALT',   '&`s^W<,T&5q_S ; qIzMtziJqCR|Df~M$x,GfH@m{!jp%c7 oRoJ]4kPZREgT<::' );
define( 'NONCE_SALT',       'd?p)n,ukZ^|iSV_bR,$W*0_;K`scJ.n%sJ<F~2v>&B`%Y)pg;Tzz3BieoC8-6Wqi' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
