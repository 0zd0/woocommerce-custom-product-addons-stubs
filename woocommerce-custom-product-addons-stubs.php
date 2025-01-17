<?php
/**
 * Generated stub declarations for Woocommerce Custom Product Addons.
 * @see https://acowebs.com/woo-custom-product-addons
 * @see https://github.com/0zd0/carbon-fields-stubs
 */

namespace Acowebs\WCPA;

/**
 * Plugin autoloader.
 *
 * Plugin autoloader handler class is responsible for loading the different
 * classes needed to run the plugin.
 *
 * @since 5.0.0
 */
class Autoloader
{
    /**
     * Run autoloader.
     *
     * Register a function as `__autoload()` implementation.
     *
     * @param string $default_path
     * @param string $default_namespace
     *
     * @since
     * @access public
     * @static
     */
    public static function run($default_path = '', $default_namespace = '')
    {
    }
    /**
     * Get classes aliases.
     *
     * Retrieve the classes aliases names.
     *
     * @since 1.6.0
     * @access public
     * @static
     *
     * @return array Classes aliases.
     */
    public static function get_classes_aliases()
    {
    }
    public static function get_classes_map()
    {
    }
}
class Admin
{
    /**
     * Admin constructor.
     *
     * @param $isWooActive
     */
    public function __construct($isWooActive)
    {
    }
    public function popup_container()
    {
    }
    public function add_settings_link($links)
    {
    }
    /**
     * Append plugin update failed guideline for update error
     *
     * @param $that
     * @param $action
     */
    public function up_grader_process($that, $action)
    {
    }
    public function delete_transient($arg = false)
    {
    }
    public function deactivation()
    {
    }
    /**
     * Load admin Javascript.
     * @access  public
     * @return  void
     * @since   1.0.0
     */
    public function admin_enqueue_scripts($hook = '')
    {
    }
    public function get_taxonomy_hierarchy($taxonomy, $parent = 0)
    {
    }
    function this_screen()
    {
    }
    function redirectMl($post_id, $lang = false)
    {
    }
    /**
     * Load admin CSS.
     * @access  public
     * @return  void
     * @since   1.0.0
     */
    public function admin_enqueue_styles($hook = '')
    {
    }
    public function add_menu()
    {
    }
    /**
     * Calling view function for admin page components
     */
    public function adminUi()
    {
    }
    /**
     * WooCommerce not active notice.
     * @access  public
     * @return string Fallack notice.
     */
    public function notice_need_woocommerce()
    {
    }
}
class BackendApi
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    public function setLang($response, $handler, $request)
    {
    }
    /**
     * Register API routes
     */
    public function register_routes()
    {
    }
    public function purge_caches($data)
    {
    }
    public function translate_form($data)
    {
    }
    /** Verify s3 bucket
     * @param $data
     */
    public function verify_bucket($data)
    {
    }
    public function translate_options($data)
    {
    }
    public function change_form_lang($data)
    {
    }
    public function delete_form($data)
    {
    }
    public function trash_form($data)
    {
    }
    public function restore_forms($data)
    {
    }
    public function update_form_status($data)
    {
    }
    public function duplicate_form($data)
    {
    }
    public function save_form($data)
    {
    }
    public function set_screen_options($data)
    {
    }
    public function save_product_meta($data)
    {
    }
    public function get_product_forms($data)
    {
    }
    /**
     * Get Designs
     */
    public function get_designs()
    {
    }
    public function activate_theme($data)
    {
    }
    public function save_theme_conf($data)
    {
    }
    public function get_style($data)
    {
    }
    /**
     * Get forms
     */
    public function get_forms($data)
    {
    }
    /**
     * Get forms Fields
     *
     * @param $data
     *
     * @return WP_REST_Response
     */
    public function get_fields($data)
    {
    }
    public function save_order_items($data)
    {
    }
    public function get_order_items($data)
    {
    }
    /**
     * get global settings
     */
    public function get_settings()
    {
    }
    public function save_settings($data)
    {
    }
    /**
     * get global settings
     */
    public function get_license()
    {
    }
    public function save_license($data)
    {
    }
    //DeActivate License
    public function deactivate_license($data)
    {
    }
    //Export Form
    public function export_form($data)
    {
    }
    public function import_form($data)
    {
    }
    /**
     * Export forms bulk
     */
    public function export_bulk_forms($data)
    {
    }
    /**
     * Import Forms bulk
     */
    public function import_bulk_forms($data)
    {
    }
    /**
     * Products Listing
     */
    public function products_listing($data)
    {
    }
    /**
     * Products Searching
     */
    public function products_searching($data)
    {
    }
    /**
     * Products Assigning to Form
     */
    public function save_products_meta($data)
    {
    }
    /**
     * Products Removing from Form
     */
    public function remove_products_meta($data)
    {
    }
    /**
     * Checkout Fields
     */
    public function get_checkout_fields()
    {
    }
    /**
     * Field Options API's
     *
     *
     */
    /**
     * Get Fields options
     */
    public function get_options_lists($data)
    {
    }
    public function delete_options_list($data)
    {
    }
    public function trash_options_list($data)
    {
    }
    public function restore_options_list($data)
    {
    }
    public function duplicate_options_list($data)
    {
    }
    public function save_options_list($data)
    {
    }
    public function export_options_list($data)
    {
    }
    public function import_options_list($data)
    {
    }
    /**
     * Export options list bulk
     */
    public function export_bulk_options_lists($data)
    {
    }
    /**
     * Import options list bulk
     */
    public function import_bulk_options_lists($data)
    {
    }
    /**
     * Get Options List Options
     *
     * @param $data
     *
     * @return WP_REST_Response
     */
    public function get_options($data)
    {
    }
    /**
     * Get Options fields by slug
     *
     * @param $data
     *
     * @return WP_REST_Response
     */
    public function get_options_by_key($data)
    {
    }
    /**
     * Permission Callback
     **/
    public function getPermission()
    {
    }
}
class Designs
{
    /**
     *  ['custom'=>[],'active'=>['type'=>'custom','key'=>'active theme key','conf'=>['key'=>conf]]
     * @var string
     *
     */
    static $keyDesigns = 'wcpa_designs_key';
    static $keyActiveDesign = 'wcpa_active_design';
    static $design_css = 'wcpa_css_';
    public $designs = [];
    public function __construct()
    {
    }
    public function save_theme_conf($data)
    {
    }
    public function activate_theme($theme)
    {
    }
    public function updateOption($option)
    {
    }
    /** return css and conf for admin api
     *
     * @param $style
     *
     * @return array|false
     */
    public function get_style($style)
    {
    }
    //    public function get_design($theme, $returnValueOnly = true)
    //    {
    //        $designs = $this->get_designs($returnValueOnly);
    //
    //        return current(array_filter($designs['designs'], function ($v) use ($theme) {
    //            return $v['key'] === $theme;
    //        }));
    //    }
    /**
     * Return active theme key,  and  also its corresponding configration  as css code
     * @return array
     */
    public function get_active_design()
    {
    }
    /**
     * get designs, compaigned with default value and user updated value from db
     *
     * @param  bool  $returnValueOnly  theme conf,can be with attributes other than value, for front end users, it needs to return value only,
     * where as for backend, it need config as well
     *
     * @return array
     */
    public function get_designs($returnValueOnly = true)
    {
    }
    public function mergeDesigns($fromDb, $default)
    {
    }
}
class Product_Meta
{
    static $fieldKey = '_wcpa_product_meta';
    static $orderKey = 'wcpa_product_meta_order';
    public function __construct()
    {
    }
    public static function instance()
    {
    }
    public function product_import_mapping_options($options, $item)
    {
    }
    public function import_mapping_default_columns($cols = array())
    {
    }
    public function product_importer_pre_expand_data($data)
    {
    }
    public function export_product_default_columns($cols = array())
    {
    }
    public function export_product_column_wcpa_forms($value, $product, $col_id)
    {
    }
    public function manage_products_columns($columns)
    {
    }
    public function manage_products_column($column_name, $post_id)
    {
    }
    public function woocommerce_process_product_meta_fields_save($post_id)
    {
    }
    public function save_meta($post_id, $data)
    {
    }
    public function get_forms($post_id)
    {
    }
    public function add_my_custom_product_data_tab($product_data_tabs)
    {
    }
    public function add_my_custom_product_data_fields()
    {
    }
    public function save_products_meta($form_id, $products_ids)
    {
    }
    public function remove_products_meta($form_id, $product_id)
    {
    }
}
class Settings
{
    static $key;
    static $screen_options_key;
    public function __construct()
    {
    }
    /**
     * Get Screen Options
     * @since 5.0.0
     */
    public static function get_screen_options()
    {
    }
    /**
     * Update Screen Options
     * @since 5.0.0
     */
    public function update_screen_options($options)
    {
    }
    /**
     * Get Gloval Seetings
     * @since 5.0.0
     */
    public function get_settings($isBackend = false)
    {
    }
    public function get_license()
    {
    }
    public function save_settings($data)
    {
    }
    public function sanitize_settings($type, $val)
    {
    }
    public function save_license($post_data)
    {
    }
    function activate_license($key)
    {
    }
    public function deactivate_license($key)
    {
    }
}
class Themes
{
    /**
     * [
     * 'css' => [
     * 'LabelColor' => '',
     * 'LabelSize' => '',
     * 'LineColor' => '',
     *
     * 'DescColor' => '',
     * 'DescSize' => '',
     *
     * 'BorderColor' => '',
     * 'BorderWidth' => '',
     *
     * 'InputBgColor' => '',
     * 'CheckLabelColor' => '',
     * 'CheckLabelSize' => '',
     * 'CheckBgColor' => '',
     * 'CheckTickColor' => '',
     * ],
     * 'conf' => [
     * 'LabelPosition' => '',
     * 'DescPosition' => '',
     * ]
     * ];
     */
    public function getThemes()
    {
    }
}
/**
 * Allows plugins to use their own update API.
 *
 * @author Easy Digital Downloads
 * @version 1.9.1
 */
class Updater
{
    /**
     * Class constructor.
     *
     * @uses plugin_basename()
     * @uses hook()
     *
     * @param string  $_api_url     The URL pointing to the custom API endpoint.
     * @param string  $_plugin_file Path to the plugin file.
     * @param array   $_api_data    Optional data to send with API calls.
     */
    public function __construct($_api_url, $_plugin_file, $_api_data = null)
    {
    }
    /**
     * Set up WordPress filters to hook into WP's update process.
     *
     * @uses add_filter()
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Check for Updates at the defined API endpoint and modify the update array.
     *
     * This function dives into the update API just when WordPress creates its update array,
     * then adds a custom API call and injects the custom plugin data retrieved from the API.
     * It is reassembled from parts of the native WordPress plugin update code.
     * See wp-includes/update.php line 121 for the original wp_update_plugins() function.
     *
     * @uses api_request()
     *
     * @param array   $_transient_data Update array build by WordPress.
     * @return array Modified update array with custom plugin data.
     */
    public function check_update($_transient_data)
    {
    }
    /**
     * Get repo API data from store.
     * Save to cache.
     *
     * @return \stdClass
     */
    public function get_repo_api_data()
    {
    }
    /**
     * Show the update notification on multisite subsites.
     *
     * @param string  $file
     * @param array   $plugin
     */
    public function show_update_notification($file, $plugin)
    {
    }
    /**
     * Updates information on the "View version x.x details" page with custom data.
     *
     * @uses api_request()
     *
     * @param mixed   $_data
     * @param string  $_action
     * @param object  $_args
     * @return object $_data
     */
    public function plugins_api_filter($_data, $_action = '', $_args = null)
    {
    }
    /**
     * Disable SSL verification in order to prevent download update failures
     *
     * @param array   $args
     * @param string  $url
     * @return object $array
     */
    public function http_request_args($args, $url)
    {
    }
    /**
     * If available, show the changelog for sites in a multisite install.
     */
    public function show_changelog()
    {
    }
    /**
     * Get the version info from the cache, if it exists.
     *
     * @param string $cache_key
     * @return object
     */
    public function get_cached_version_info($cache_key = '')
    {
    }
    /**
     * Adds the plugin version information to the database.
     *
     * @param string $value
     * @param string $cache_key
     */
    public function set_version_info_cache($value = '', $cache_key = '')
    {
    }
}
class Comp
{
    public function __construct()
    {
    }
    public function kl_started_checkout($event_data, $cart)
    {
    }
    public function kl_cart_rebuild_complete($kl_cart)
    {
    }
    public function kl_checkout_item($item, $product)
    {
    }
    public function restaurant_ordering_modal_data($data, $product)
    {
    }
}
class Currency
{
    public function __construct()
    {
    }
    /**
     *Return product price converted
     *
     * @param $product
     *
     * @return float
     */
    static function getProductPrice($price, $product)
    {
    }
    /** Some Multi currency plugins convert the price set in cart again. some doesnt convert it again
     * So we have to return the price based on the typ
     *
     * @param $priceConverted
     * @param $originalPrice
     *
     * @return mixed|void
     */
    static function cartSetPrice($priceConverted, $originalPrice, $priceNoMC = 0.0)
    {
    }
    //
    //    /** some currency convert plugin will not take care the conversion automatically always
    //     * in such case it can handle based on the currency converter plugin used
    //     *
    //     * @param $price
    //     * @param  bool  $section
    //     *
    //     * @return mixed|void
    //     */
    //    static function mayBeConvert($price, $section = false)
    //    {
    //        $unit = self::getConUnit(true, $section === 'add_fee');
    //
    //        return $price * $unit;
    //
    ////        return $price;
    //        $from_currency = get_option('woocommerce_currency');
    //        $to_currency   = get_woocommerce_currency();
    //
    //        $price = apply_filters('wc_aelia_cs_convert', $price, $from_currency, $to_currency);
    //        if (function_exists('wcpbc_the_zone') && ! is_bool(wcpbc_the_zone())) {
    //            $wcpbc = wcpbc_the_zone();
    //            if (is_callable($wcpbc, 'get_exchange_rate_price') || method_exists($wcpbc, 'get_exchange_rate_price')) {
    //                $price = $wcpbc->get_exchange_rate_price($price);
    //            }
    //        }
    //
    //        if ($section == 'add_fee') {
    //            global $WOOCS;
    //            if (function_exists('wmc_get_price')) {
    //                $price = wmc_get_price($price);
    //            } elseif ($WOOCS !== null) {
    //                /** https://wordpress.org/plugins/woocommerce-currency-switcher */
    //                if (method_exists($WOOCS, 'woocs_exchange_value')) {
    //                    $price = $WOOCS->woocs_exchange_value($price);
    //                }
    //            }
    //        }
    //
    //
    //        return $price;
    //    }
    static function convertCurrency($price, $isCart = false, $isFee = false)
    {
    }
    static function getConUnit($isCart = false, $isFee = false)
    {
    }
    public function before_set_product_price($priceConverted, $originalPrice, $priceNoMC = 0.0)
    {
    }
    public function converted_product_price($price, $product)
    {
    }
    public function multi_currency_filters($conversion_unit, $isCart, $isFee)
    {
    }
}
class Discounts
{
    public function __construct()
    {
    }
    static function cartPrice($total_price, $excludeDiscountPrice)
    {
    }
    /** adding third party discount plugins filters
     *
     * @param $response
     * @param $product
     *
     * @return mixed
     */
    static function product_discount_filters($response, $product)
    {
    }
    /** adding third party discount plugins filters
     *
     * @param $response
     * @param $product
     *
     * @return mixed|void
     */
    static function product_price_filters($response, $product)
    {
    }
    static function applyDiscountToCartAddonPrice($cartWcpa_price, $product)
    {
    }
    static function getDiscountRule($product, $returnUnit = false)
    {
    }
    static function getProductPrice($product, $returnRegular = false)
    {
    }
    public function item_adjusted_price($adjusted_price, $cart_item)
    {
    }
    public function item_display_price($price, $cart_item)
    {
    }
    public function update_options_price()
    {
    }
    function before_set_product_price_filters($total_price, $excludeDiscountPrice)
    {
    }
    public function wcpa_cart_apply_discount_on($cart_item)
    {
    }
    public function wcpa_cart_addon_data($data, $cart_item)
    {
    }
    public function flyCartPriceToApplyDiscount($product_price, $product, $quantity, $cart_item, $calculate_discount_from)
    {
    }
}
class ML
{
    /**
     * The version number.
     * @var     string
     * @access  public
     * @since   1.0.0
     */
    public $_version;
    public $default_lang;
    public $current_lang;
    public function __construct()
    {
    }
    /**
     *
     *
     * Ensures only one instance of WCPA is loaded or can be loaded.
     *
     * @return Main WCPA instance
     * @see WordPress_Plugin_Template()
     * @since 1.0.0
     * @static
     */
    public static function instance()
    {
    }
    public function modify_lang_menu($languages_links)
    {
    }
    public function is_active()
    {
    }
    public function is_new_post($post_id)
    {
    }
    public function base_form($post_id)
    {
    }
    public function getTransById($post_id, $lang)
    {
    }
    public function langList()
    {
    }
    /** Using for translation attributes
     * @param $cl_val
     * @param $cl_field_sub
     * @return string
     */
    public function getAttribute($cl_val, $cl_field_sub)
    {
    }
    public function listArgs($args)
    {
    }
    public function is_default_lan()
    {
    }
    public function is_all_lan()
    {
    }
    public function lang_list()
    {
    }
    /**
     * Get the from post id , for wpml it can get from trid
     *
     * @return bool
     */
    public function from_post_id()
    {
    }
    public function is_duplicating()
    {
    }
    /**
     * change/set post language
     *
     * @param $postId
     * @param $lang
     * @param false $base_lang_id
     */
    public function set_post_lang($postId, $lang, $base_lang_id = false, $post_type = false)
    {
    }
    /**
     * Get posts language
     *
     * @param $postId
     *
     * @return false|string
     *
     */
    public function get_post_language($postId)
    {
    }
    public function default_language()
    {
    }
    public function setCurrentLang($lang_code)
    {
    }
    /**
     * get form edit links in all languages
     *
     * @param $postId
     *
     * @return array
     */
    public function get_post_translations_links($postId)
    {
    }
    public function default_fb_meta()
    {
    }
    public function current_language()
    {
    }
    public function get_new_language()
    {
    }
    public function get_original_forms()
    {
    }
    public function lang_object_ids($object_id, $type, $fromDefault = false)
    {
    }
    public function sync_data($post_id)
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 1.0.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 1.0.0
     */
    public function __wakeup()
    {
    }
}
class WPMLCurrency
{
    public function __construct()
    {
    }
    public function convertCurrency($status, $price)
    {
    }
    public function scripts()
    {
    }
    public function renderScript()
    {
    }
}
class Config
{
    static $key;
    static $values = false;
    public function __construct()
    {
    }
    static function getValidationMessage($field, $key)
    {
    }
    static function get_config($option, $default = false, $translate = false)
    {
    }
    /**
     * @param $productId
     * @param  bool  $withPrefix  - using to remove prefix for product meta backend
     * @param  false  $excludeGlobal  - using for product meta backend
     *
     * @return mixed
     */
    static function getWcpaCustomFieldByProduct($productId, $withPrefix = true, $excludeGlobal = false)
    {
    }
    static function getWcpaCustomField($key, $productId)
    {
    }
}
class Cron
{
    static $key = 'wcpa_daily_event';
    public function __construct()
    {
    }
    static function schedule_cron()
    {
    }
    static function protect_upload_dir()
    {
    }
    static function clear()
    {
    }
    public function delete_temp_files()
    {
    }
}
class Customer
{
    public function __construct()
    {
    }
    public function get_session_cookie()
    {
    }
    public function upload_directory_base($temp = false)
    {
    }
    /**
     *
     *
     * Ensures only one instance of WCPA is loaded or can be loaded.
     *
     * @since 1.0.0
     * @static
     * @see WordPress_Plugin_Template()
     * @return Main WCPA instance
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 1.0.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 1.0.0
     */
    public function __wakeup()
    {
    }
    //    /**
    //     * Installation. Runs on activation.
    //     * @access  public
    //     * @since   1.0.0
    //     * @return  void
    //     */
    //    public function install() {
    //        $this->_log_version_number();
    //    }
    //
    //    /**
    //     * Log the plugin version number.
    //     * @access  public
    //     * @since   1.0.0
    //     * @return  void
    //     */
    //    private function _log_version_number() {
    //        update_option($this->_token . '_version', $this->_version);
    //    }
}
class FormSettings
{
    static $META_KEY = "wcpa_meta_settings_key";
    public function __construct($post_id)
    {
    }
    public function save($postSettings)
    {
    }
    public function insert($settings)
    {
    }
    /**
     * ML compatibility
     * Merge settings with different languages
     *
     * @param $base_id
     * @param $tran_id
     *
     * @return mixed
     */
    public function merge_settings_with($tran_id)
    {
    }
    public function getValues($isBackend = false)
    {
    }
    public function get($key)
    {
    }
}
/**
 * Handling Form related functions
 *
 */
class Form
{
    static $CPT = "wcpa_pt_forms";
    static $META_KEY_1 = "_wcpa_fb-editor-data";
    static $META_KEY_2 = "_wcpa_fb_json_data";
    static $META_FORMULA_KEY = "_wcpa_fb_formula_data";
    public $settings;
    /**
     * Class Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * for showing form selector in backend
     */
    public function forms_list()
    {
    }
    public function getFormSections($form_id)
    {
    }
    /**
     *  To ensure the post_type in QP_Query has not modified.
     * Some customers writing custom codes to filter out 'posts' from front end search by setting post type 'product'
     * This can cause issue it rest api requests for forms, options fetching
     * @param $query
     * @return mixed
     */
    public function suppress_filters($query)
    {
    }
    public function get_forms($tab, $page = 1, $per_page = 20, $search = '')
    {
    }
    public function init()
    {
    }
    /**
     * Register Custom Post Type
     *
     */
    public function register_cpt()
    {
    }
    /**
     * Products Listing in Form Detail Page
     *
     * @param int $form_id
     *
     * @return array $response
     */
    public function products_listing($form_id, $returnIds = false)
    {
    }
    /**
     * @param $formula
     * @param $form_id
     * @param $_from_id ( in case of Global form, each field has its own form id as well)
     *
     * @return string
     */
    public function replace_vars($formula, $form_id, $_from_id)
    {
    }
    public function get_formulas($form_id, $returnVersion = false)
    {
    }
    public function toRowCol($json_decode)
    {
    }
    public function translate_form($post_id, $newLang)
    {
    }
    public function insert($title, $formJson, $formulaJson, $lang = false, $base_lang_id = false, $modDate = false)
    {
    }
    public function change_form_lang($post_id, $lang)
    {
    }
    public function delete_form($posts)
    {
    }
    public function trash_form($posts)
    {
    }
    public function restore_forms($posts)
    {
    }
    public function duplicate_form($form_id)
    {
    }
    public function get_form_meta_data($form_id, $returnVersion = false)
    {
    }
    public function replaceOldIds($str, $ids)
    {
    }
    public function update_form_status($post_id, $status = 'publish')
    {
    }
    public function save_form($post_id, $post_data)
    {
    }
    public function replaceTags(&$fb_data, $reverse = false)
    {
    }
    public function update($post_id, $title, $formJson, $formulaJson, $lang = false, $modDate = false)
    {
    }
    /**
     * merging form fields with different languages
     *
     * @param $base_id form base language form id,
     * @param $tran_id
     *
     * @return array|string
     */
    public function merge_meta($base_id, $tran_id)
    {
    }
    /**
     *  Merge each fields data with translated version, here it limits to certain fields only, not syncing all fields,
     * only fields which are translatable are synced
     *
     * @param $base_data
     * @param $trans_data
     *
     * @return mixed
     */
    public function merge_data($base_data, $trans_data)
    {
    }
    /**
     * @return string
     */
    function get_post_meta($pos_id, $key, $default = false)
    {
    }
    /**
     * Export only forms to a JSON file
     *
     * @param int $form_id
     *
     * @return array $result
     */
    public function export_form($form_id)
    {
    }
    public function get_fields($form_id)
    {
    }
    /**
     * Import via JSON file
     *
     * @param int $form_id
     *
     * @return array $result
     */
    public function import_form($form_id, $post_data)
    {
    }
    /**
     * Export Forms Lists to json
     *
     * @param array $forms
     *
     * @return array $result
     */
    function export_bulk_forms($posts = 'all')
    {
    }
    /**
     * Import Forms Lists from json
     * @return array $result
     */
    public function import_bulk_forms($post_data)
    {
    }
    /**
     * Products Searching in Form Detail Page
     *
     * @param int $search
     *
     * @return array $response
     */
    public function products_searching($search)
    {
    }
    /**
     * Get Checkout Fields
     * @return array $response
     */
    public function get_checkout_fields()
    {
    }
    public function get_wcpaProducts()
    {
    }
}
class Front
{
    public $assets_url;
    public $version;
    public $token;
    public $wcpaProducts = [];
    public $translate_keys = ['label', 'placeholder', 'description', 'value', 'tooltip', 'repeater_section_label', 'repeater_field_label', 'repeater_add_label', 'repeater_remove_label', 'quantity_label', 'check_value', 'requiredError', 'validEmailError', 'validUrlError', 'minFieldsError', 'maxFieldsError', 'groupMinError', 'groupMaxError', 'otherFieldError', 'quantityRequiredError', 'allowedCharsError', 'patternError', 'maxlengthError', 'minlengthError', 'minValueError', 'maxValueError', 'minQuantityError', 'maxQuantityError', 'maxFileCountError', 'minFileCountError', 'maxFileSizeError', 'minFileSizeError', 'fileExtensionError'];
    public function __construct()
    {
    }
    public function woo_discount_rules_has_price_override($status, $product)
    {
    }
    /**
     * Check a product has form assigned
     *
     * @param $product_id
     *
     * @return bool
     */
    public function is_wcpa_product($product_id)
    {
    }
    /**
     * Provide tags to use in email  templates
     * {wcpa_id_<element_id>}
     */
    public function email_format_string($string, $obj)
    {
    }
    /**
     * Show the reasons to admin  why wcpa  fields  are not rendered
     */
    public function show_warnings()
    {
    }
    /**
     * Disable or remove direct payment buttons(Paypal/Stripe) from product detail page
     *
     * @param $allow
     * @param $product
     *
     * @return false
     * @since 5.0.0
     */
    public function remove_checkout_button($allow, $product)
    {
    }
    public function show_checkout_button($allow, $product)
    {
    }
    /**
     * while loading variation data in product detail page , by default it will be missing stock_status and stock_quantity
     * We need to append that information as well, so that we can use it for conditiona logics
     *
     * @param $infos
     * @param $object
     * @param $variation
     *
     * @return mixed
     * @since 5.0.0
     */
    public function variation_info($infos, $object, $variation)
    {
    }
    /**
     * @param $price
     * @param $product
     *
     * @return string
     */
    public function get_price_html($price, $product)
    {
    }
    /**
     * return permalink for wcpa product,
     * If direct Purchasable product, return  the original $url
     *
     * @param $url
     * @param $product
     *
     * @return mixed
     */
    public function add_to_cart_url($url, $product)
    {
    }
    public function is_direct_purchasable_product($product_id)
    {
    }
    public function product_class($classes = array(), $class = false, $product_id = false)
    {
    }
    public function add_to_cart_text($text, $product)
    {
    }
    /**
     * Remove ajax add to cart feature for wcpa products.
     *
     * @param $support
     * @param $feature
     * @param $product
     *
     * @return bool
     */
    public function product_supports($support, $feature, $product)
    {
    }
    public function add_to_cart_args($args, $product)
    {
    }
    public function enqueue_styles()
    {
    }
    /**
     * Load frontend Javascript.
     * @access  public
     * @return  void
     * @since   1.0.0
     */
    public function admin_enqueue_scripts()
    {
    }
    public function registerFrontScripts($isAdmin = false)
    {
    }
    public function enqueue_scripts()
    {
    }
}
/**
 * Product addon Plugin by Acowebs
 *
 * The action/filter hooks handling
 *
 * @since 5.0.0
 */
class Hooks
{
    public function __construct()
    {
    }
}
/**
 * Product addon Plugin by Acowebs
 *
 * The main plugin handler class is responsible for initializing Plugin.
 *
 * @since 5.0.0
 */
class Main
{
    /**
     * Instance.
     *
     * Holds the plugin instance.
     *
     * @since 5.0.0
     * @access public
     * @static
     *
     * @var Plugin
     */
    public static $instance = null;
    public static $cartError = [];
    public $form;
    public $options;
    public $admin;
    public function pre_update($value)
    {
    }
    /**
     * This carterror object can be used to decide whether to autofill the form fields if  the add to cart have validation errors
     *
     * @param $productId
     * @param $status
     *
     * @since 5.0.0
     */
    public static function setCartError($productId, $status)
    {
    }
    /**
     * Instance.
     *
     * Ensures only one instance of the plugin class is loaded or can be loaded.
     *
     * @return Plugin An instance of the class.
     * @since 5.0.0
     * @access public
     * @static
     *
     */
    public static function instance()
    {
    }
    function woo_template($template, $template_name, $template_path)
    {
    }
    /**
     * Init.
     *
     * Initialize  Plugin. Register  support for all the
     * @since 5.0.0
     * @access public
     */
    public function init()
    {
    }
    /**
     * Check if WooCommerce installed and activated
     * @return bool
     */
    static function is_woocommerce_active()
    {
    }
    /**
     * Clone.
     *
     * Disable class cloning and throw an error on object clone.
     *
     * The whole idea of the singleton design pattern is that there is a single
     * object. Therefore, we don't want the object to be cloned.
     *
     * @access public
     * @since 5.0.0
     */
    public function __clone()
    {
    }
    /**
     * Wakeup.
     *
     * Disable unserializing of the class.
     *
     * @access public
     * @since 5.0.0
     */
    public function __wakeup()
    {
    }
}
class MetaDisplay
{
    public $config;
    public function __construct($isCart, $show_price = true, $priceMultiplier = 1, $quantityMultiplier = 1, $discountUnit = 1, $currency = false)
    {
    }
    public function setQuantityMultiplier($quantityMultiplier)
    {
    }
    public function setDiscountUnit($discountUnit)
    {
    }
    public function display($field, $formRules = false, $value = false, $returnValue = false)
    {
    }
    public function file($field)
    {
    }
    public function hideImage($field)
    {
    }
    public function place($field)
    {
    }
    public function group($value, $returnValue = false)
    {
    }
    public function image($field)
    {
    }
    public function colorGroup($field)
    {
    }
    public function productGroup($value, $field_price_multiplier = 1)
    {
    }
}
class Migration
{
    public function __construct()
    {
    }
    public function fieldMigrationsToV5(&$json_decode, $form_id)
    {
    }
    public function date($field)
    {
    }
    /**
     * Convert old version date conf dates to a unique format  (Y-m-d)
     *
     * @param $date
     * @param $format
     *
     * @return false|string
     */
    public function getUNIDate($date, $format)
    {
    }
    /**
     * Convert old version minDate and maxDate to new
     *
     * @param $date
     * @param $format
     *
     * @return false|string
     */
    public function minMaxDate($date, $format)
    {
    }
}
/**
 * Handling Options related functions
 *
 */
class Options
{
    static $CPT = "wcpa_pt_options";
    static $META_KEY_1 = "_wcpa_options_data";
    static $META_KEY_2 = "_wcpa_options_unique_key";
    /**
     * Class Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Register Custom Post Type
     *
     */
    public function register_cpt()
    {
    }
    public function init()
    {
    }
    /**
     *  To ensure the post_type in QP_Query has not modified.
     * Some customers writing custom codes to filter out 'posts' from front end search by setting post type 'product'
     * This can cause issue it rest api requests for forms, options fetching
     * @param $query
     * @return mixed
     */
    public function suppress_filters($query)
    {
    }
    /**
     * Get the Field Options
     */
    public function get_options_lists($tab, $page = 1, $per_page = 20, $search = '')
    {
    }
    public function save_options_list($post_id, $post_data)
    {
    }
    public function insert($title, $uniqueId, $settings_json, $lang = false, $base_lang_id = false)
    {
    }
    public function update($post_id, $title, $settings_json, $lang = false)
    {
    }
    public function get_options($options_id)
    {
    }
    public function delete_options_list($posts)
    {
    }
    public function trash_options_list($posts)
    {
    }
    public function restore_options_list($posts)
    {
    }
    public function duplicate_options_list($options_list_id)
    {
    }
    /**
     * Export only options to a CSV file
     *
     * @param int $post_id
     *
     * @return array $result
     */
    public function export_options($post_id)
    {
    }
    /**
     * Retrive options items for front end
     *
     * @param $key
     */
    public function get_options_by_key($key)
    {
    }
    /**
     * Import via csv file
     *
     * @param int $post_id
     *
     * @return array $result
     */
    public function import_options($post_id, $post_data)
    {
    }
    /**
     * Export Options Lists to json
     *
     * @param array $options
     *
     * @return array $result
     */
    function export_options_lists($posts = 'all')
    {
    }
    /**
     * Import Options Lists from json
     * @return array $result
     */
    public function import_bulk_options_lists($post_data)
    {
    }
    public function translate_options($post_id, $newLang)
    {
    }
    /**
     * merging optionlist with different languages
     *
     * @param $base_id optionlist base language id,
     * @param $tran_id
     *
     * @return array|string
     */
    public function merge_meta($base_id, $tran_id)
    {
    }
    /**
     *  Merge each fields data with translated version, here it limits to certain fields only, not syncing all fields,
     * only fields which are translatable are synced
     *
     * @param $base_data
     * @param $trans_data
     *
     * @return mixed
     */
    public function merge_data($base_data, $trans_data)
    {
    }
    public function get_optionlist_meta_data($form_id)
    {
    }
}
class OrderMetaLineItem
{
    public function __construct($item, $product)
    {
    }
    public function render()
    {
    }
    public function group($field)
    {
    }
    public function file($field)
    {
    }
    public function placeselector($field)
    {
    }
    public function default($field)
    {
    }
}
class Order
{
    public $orderCurrency = false;
    public function __construct()
    {
    }
    public function item_display_meta_key($display_key, $meta, $item)
    {
    }
    public function email_attachments($attachments, $email_id, $order)
    {
    }
    //TODO to verify
    public function display_item_meta($html, $item, $args)
    {
    }
    public function order_item_line_item_html($item_id, $item, $product)
    {
    }
    /**
     * To hide showing wcpa meta as default order meta in admin end order details. As we are already showing this data in formatted mode
     */
    public function order_item_get_formatted_meta_data($formatted_meta, $item)
    {
    }
    public function checkout_order_processed($order_id)
    {
    }
    public function update_order_item($item)
    {
    }
    public function order_meta_plain($v, $form_rules, $show_price = true, $quantity = 1, $product = false)
    {
    }
    /**
     * Prepare addon values as plain text, it can be stored as order line item meta
     * This data can be utilized even if WCPA plugin is inActive
     * Also 3rd party plugins might be using this data, even it is not compatible with product addon, this raw data will be accessible
     */
    //TODO handle version 1 Data
    public function checkout_subscription_created($subscription)
    {
    }
    public function checkout_create_order_line_item($item, $cart_item_key, $values, $order)
    {
    }
    public function rfqtk_checkout_create_order_line_item($item, $cart_item_key, $values, $order)
    {
    }
    /**
     * Display   formatted meta value
     *
     * @param $display_value
     * @param null $meta
     * @param null $item
     *
     * @return mixed|void
     */
    public function display_meta_value($display_value, $meta = null, $item = null)
    {
    }
    public function saveOrderMeta($itemId, $data)
    {
    }
    public function getOrderMeta($itemId)
    {
    }
    public function order_formatted_line_subtotal($subtotal, $item)
    {
    }
}
class Cart
{
    public $config;
    public function __construct()
    {
    }
    /**
     * Double verify option data is set for a wcpa product
     *
     * If the wcpa data is empty, and Check any required field without setting any conditional logic,
     * If there is a required field, without cl logic, there can be product added to cart bypassing validation
     */
    static function check_cart_items()
    {
    }
    public function cart_item_price($price, $cart_item)
    {
    }
    public function calculate_item_totals_taxes($total_taxes, $item)
    {
    }
    //    public function cart_subtotal($cart_subtotal, $compound, $cart_obj)
    //    {
    //        if ($compound) {
    //            return $cart_subtotal;
    //        }
    //        $fee = 0;
    //        if (WC()->cart->display_prices_including_tax()) {
    //            $total = $cart_obj->get_subtotal() + $cart_obj->get_subtotal_tax();
    //        } else {
    //            $total = $cart_obj->get_subtotal();
    //        }
    //        if (method_exists($cart_obj, 'get_cart')) {
    //            $cart_contents = $cart_obj->get_cart();
    //        } else {
    //            $cart_contents = $cart_obj->cart_contents;
    //        }
    //        if ($cart_contents) {
    //            $lastEle = end($cart_contents);
    //            if (isset($lastEle['wcpaFee'])) {
    //                $fee = array_sum($lastEle['wcpaFee']);
    //            }
    //        }
    //
    //        return wc_price($fee + $total);
    //    }
    public function map_checkout_field($default, $field)
    {
    }
    public function remove_cart_item($cart_item_key)
    {
    }
    public function cart_item_class($class, $cart_item)
    {
    }
    public function cart_get_subtotal($total)
    {
    }
    public function cart_item_restored($cart_item_key, $cartObject)
    {
    }
    public function add_addon_product_to_cart($cart_item_key)
    {
    }
    /**
     * Filter the cart item key
     *
     * @param $cart_key
     *
     * @return string
     * @since 4.1.0
     */
    public function update_cart_item_key($cart_key)
    {
    }
    public function after_product_added_to_cart($cart_item_key, $product_id, $quantity, $variation_id, $variation)
    {
    }
    /**
     * Appending codes after product name in cart
     *
     * @param $cart_item
     * @param $cart_item_key
     *
     * @since 4.1.8
     */
    public function after_cart_item_name($cart_item, $cart_item_key)
    {
    }
    public function after_cart_item_quantity_update($cart_item_key, $quantity, $old_quantity, $cart_obj)
    {
    }
    public function cart_item_subtotal($product_subtotal, $cart, $cart_item_key)
    {
    }
    public function get_discounted_price($total, $item)
    {
    }
    public function cart_calculate_fees($cart_obj)
    {
    }
    public function before_calculate_totals_session($cart_obj)
    {
    }
    public function before_calculate_totals($cart_obj, $priority = 'start')
    {
    }
    public static function get_fee_label($v, $i = false)
    {
    }
    public function fee_sum()
    {
    }
    public function before_calculate_totals_start($cart_obj)
    {
    }
    public function pllwc_translate_cart_item($item)
    {
    }
    public function cart_item_from_session($session_data)
    {
    }
    public function before_calculate_totals_end($cart_obj)
    {
    }
    public function after_calculate_totals($cart_obj)
    {
    }
    public function get_item_data($item_data, $cart_item)
    {
    }
    //    public function cartDisplay($v, $form_rules, $product, $quantity = 1)
    //    {
    //        $display = '';
    //
    //
    //        if ((($this->config['show_price_in_cart']
    //              && ! is_checkout())
    //             || (is_checkout() && $this->config['show_price_in_checkout']))) {
    //            $this->show_price = true;
    //        } else {
    //            $this->show_price = false;
    //        }
    //
    //        $field_price_multiplier = 1;
    //        if ($this->config['show_field_price_x_quantity']) {
    //            $field_price_multiplier = $quantity;
    //        }
    //
    //        if ((isset($form_rules['pric_cal_option_once']) &&
    //             $form_rules['pric_cal_option_once'] === true) ||
    //            (isset($form_rules['pric_use_as_fee']) &&
    //             $form_rules['pric_use_as_fee'] === true) ||
    //            (isset($v['is_fee']) && $v['is_fee'] === true)
    //        ) {
    //            $field_price_multiplier = 1;
    //        }
    //
    //        if ($this->con_unit == false) {
    //            $currency       = new Currency();
    //            $this->con_unit = $currency->getConUnit($product);
    //        }
    //        if ($this->taxRate == false) {
    //            $this->taxRate = getTaxRate($product, true);
    //        }
    //
    //        $field_price_multiplier = $field_price_multiplier * $this->con_unit * $this->taxRate;
    //
    //        $showPriceHere = true;
    //        switch ($v['type']) {
    //            case 'text':
    //            case 'url':
    //            case 'email':
    //            case 'number':
    //            case 'time':
    //            case 'header':
    //                $display = $v['value'];
    //                break;
    //            case 'date':
    //            case 'datetime-local':
    //                $display = $v['value'];
    //                if ($v['value'] !== '' && isset($v['dateFormat'])) {
    //                    $display = date($v['dateFormat'], strtotime($v['value']));
    //                }
    //                break;
    //            case 'content':
    //                $display = do_shortcode(nl2br($v['value']));
    //                break;
    //            case 'textarea':
    //                $display = nl2br($v['value']);
    //                break;
    //            case 'color':
    //                $display = '<span  style="color:' . $v['value'] . ';font-size: 20px; padding: 0;line-height: 0;">&#9632;</span>' . $v['value'];
    //                break;
    //            case 'file':
    //                $display = $this->cart_display_file($v);
    //                break;
    //            case 'placeselector':
    //                $display = $this->cart_display_place($v);
    //                break;
    //            case 'select':
    //            case 'checkbox-group':
    //            case 'radio-group':
    //                $showPriceHere = false;
    //                $display       = $this->cart_display_array($v, $field_price_multiplier);
    //                break;
    //            case 'image-group':
    //                $display       = $this->cart_display_image($v, $field_price_multiplier);
    //                $showPriceHere = false;
    //                break;
    //            case 'productGroup':
    //                $display       = $this->cart_display_productGroup($v, $product, $field_price_multiplier);
    //                $showPriceHere = false;
    //                break;
    //            case 'color-group':
    //                $display       = $this->cart_display_colorgroup($v, $field_price_multiplier);
    //                $showPriceHere = false;
    //                break;
    //        }
    //
    //        if ($showPriceHere) {
    //            if ($v['price'] && $this->show_price && ( ! $this->config['cart_hide_price_zero'] || $v['price'] != 0)) {
    //                $price   = $field_price_multiplier * $v['price'];
    //                $display = $display . ' <span class="wcpa_cart_price">(' . wcpaPrice($price) . ')</span>';
    //            }
    //        }
    //
    //
    //        if ($display == '') {
    //            $display = '&nbsp;';
    //        }
    //
    //        return apply_filters(
    //            'wcpa_display_cart_value',
    //            '<div class="wcpa_cart_val wcpa_cart_type_' . $v['type'] . '" >' . $display . '</div>',
    //            $display,
    //            $v
    //        );
    //    }
    //    public function cart_display_file($v)
    //    {
    //        $display   = '';
    //        $hideImage = false;
    //        if (isset($v['form_data']->hideImageIn_cart) && $v['form_data']->hideImageIn_cart) {
    //            $hideImage = true;
    //        }
    //        $value = $v['value'];
    //        if (is_array($value)) {
    //            foreach ($value as $val) {
    //                if (isset($val['url'])) {
    //                    $display .= '<a href="' . $val['url'] . '"  target="_blank" download="' . $val['file_name'] . '">';
    //                    if ( ! $hideImage && in_array(
    //                            $val['type'],
    //                            array(
    //                                'image/jpg',
    //                                'image/png',
    //                                'image/gif',
    //                                'image/jpeg',
    //                            )
    //                        )) {
    //                        $display .= '<img class="wcpa_img" src="' . $val['url'] . '" />';
    //                    } else {
    //                        $display .= '<img class="wcpa_icon" src="' . wp_mime_type_icon($val['type']) . '" />';
    //                    }
    //                    $display .= '<span>' . $val['file_name'] . '</span></a>';
    //                }
    //            }
    //        }
    //
    //        return $display;
    //    }
    //
    //    public function cart_display_place($v)
    //    {
    //        $display = '';
    //        $strings = [
    //            'street'    => Config::get_config('place_selector_street'),
    //            'city'      => Config::get_config('place_selector_city'),
    //            'state'     => Config::get_config('place_selector_state'),
    //            'zip'       => Config::get_config('place_selector_zip'),
    //            'country'   => Config::get_config('place_selector_country'),
    //            'latitude'  => Config::get_config('place_selector_latitude'),
    //            'longitude' => Config::get_config('place_selector_longitude'),
    //        ];
    //        if ( ! empty($v['value']['value'])) {
    //            $display = $v['value']['value'] . '<br>';
    //            if ( ! empty($v['value']['split']['street_number'])) {
    //                $display .= $strings['street'] . ' ' . $v['value']['split']['street_number'] . ' ' . $v['value']['split']['route'] . ' <br>';
    //            }
    //            if ( ! empty($v['value']['split']['locality'])) {
    //                $display .= $strings['city'] . ' ' . $v['value']['split']['locality'] . '<br>';
    //            }
    //            if ( ! empty($v['value']['split']['administrative_area_level_1'])) {
    //                $display .= $strings['state'] . ' ' . $v['value']['split']['administrative_area_level_1'] . '<br>';
    //            }
    //            if ( ! empty($v['value']['split']['postal_code'])) {
    //                $display .= $strings['zip'] . ' ' . $v['value']['split']['postal_code'] . '<br>';
    //            }
    //            if ( ! empty($v['value']['split']['country'])) {
    //                $display .= $strings['country'] . ' ' . $v['value']['split']['country'] . '<br>';
    //            }
    //            if (isset($v['value']['cords']['lat']) && ! empty($v['value']['cords']['lat'])) {
    //                $display .= $strings['latitude'] . ' ' . $v['value']['cords']['lat'] . '<br>';
    //                $display .= $strings['longitude'] . ' ' . $v['value']['cords']['lng'] . '<br>';
    //                $display .= '<a href="https://www.google.com/maps/?q=' . $v['value']['cords']['lat'] . ',' . $v['value']['cords']['lng'] . '" target="_blank">' . __(
    //                        'View on map',
    //                        'woo-custom-product-addons-pro'
    //                    ) . '</a> <br>';
    //
    //        }
    //
    //        return $display;
    //    }
    //
    //    public function cart_display_array($value, $field_price_multiplier = 1)
    //    {
    //        $display   = '';
    //        $hide_zero = $this->config['cart_hide_price_zero'];
    //
    //        if (is_array($value['value'])) {
    //            foreach ($value['value'] as $k => $v) {
    //                if ($k === 'other') {
    //                    //Other text has to apply i18n
    //                    $display .= '<span>' .$v['label'] . ': ' . $v['value'] . '</span>';
    //                } else {
    //                    //Label no need to apply i18n.
    //                    $display .= '<span>' . $v['label'] . ' </span>';
    //                }
    //                if ($value['price'] !== false && is_array($value['price']) && $this->show_price) {
    //                    if (isset($value['price'][$k]) && $value['price'][$k] !== false && ( ! $hide_zero || $value['price'][$k] != 0)) {
    //                        $price   = $value['price'][$k] * $field_price_multiplier;
    //                        $display .= '<span class="wcpa_cart_price">(' . wcpaPrice($price) . ')</span>';
    //                    }
    //                } else {
    //                    if ($value['price'] !== false && $this->show_price && ( ! $hide_zero || $value['price'] != 0)) {
    //                        $price   = $value['price'] * $field_price_multiplier;
    //                        $display .= ' <span class="wcpa_cart_price">(' . wcpaPrice($price) . ')</span>';
    //                    }
    //                }
    //                $display .= '<br />';
    //            }
    //        } else {
    //            $display = $value['value'];
    //            if ($value['price'] && $this->show_price && ( ! $hide_zero || $value['price'] != 0)) {
    //                $price   = $value['price'] * $field_price_multiplier;
    //                $display = $display . ' <span class="wcpa_cart_price">(' . wcpaPrice($price) . ')</span>';
    //            }
    //        }
    //
    //        return $display;
    //    }
    //
    //    public function cart_display_image($value, $product, $field_price_multiplier = 1)
    //    {
    //        $display   = '';
    //        $class     = '';
    //        $hide_zero = $this->config['cart_hide_price_zero'];
    //
    //        if (isset($value['form_data']->img_preview) && $value['form_data']->img_preview) {
    //            $class = 'class="wcpa_cart_img_preview ';
    //            if (isset($value['form_data']->img_preview_disable_mobile) && $value['form_data']->img_preview_disable_mobile) {
    //                $class .= 'wcpa_product_img_preview_disable_mobile ';
    //            }
    //            $class .= '"';
    //        }
    //        $hideImage = false;
    //        if (isset($value['form_data']->hideImageIn_cart) && $value['form_data']->hideImageIn_cart) {
    //            $hideImage = true;
    //        }
    //        if (is_array($value['value'])) {
    //            foreach ($value['value'] as $k => $v) {
    //                if ($k === 'other') {
    //
    //                    $display .= '<p>' . $v['label'] . ': ' . $v['value'] . '';
    //                } else {
    //                    $img_size_style = ((isset($value['form_data']->disp_size_img) && $value['form_data']->disp_size_img > 0) ? 'style="width:' . $value['form_data']->disp_size_img . 'px"' : '');
    //
    //                    $display .= '<p ' . $class . '>' . (! $hideImage ? '<img ' . $img_size_style . ' data-src="' . $v['image'] . '" src="' . $v['image'] . '" />' : '');
    //                    if ( ! empty($v['label'])) {
    //                        $display .= ' <span >' . $v['label'] . '</span> ';
    //                    }
    //                }
    //
    //                if ($value['price'] && is_array($value['price']) && $this->show_price) {
    //                    if (isset($value['price'][$k]) && $value['price'][$k] !== false && ( ! $hide_zero || $value['price'][$k] != 0)) {
    //                        $price   = $value['price'][$k] * $field_price_multiplier;
    //                        $display .= '<span class="wcpa_cart_price">(' . wcpaPrice($price) . ')</span>';
    //                    }
    //                } else {
    //                    if ($value['price'] !== false && $this->show_price && ( ! $hide_zero || $value['price'] != 0)) {
    //                        $price   = $value['price'] * $field_price_multiplier;
    //                        $display .= ' <span class="wcpa_cart_price">(' . wcpaPrice($price) . ')</span>';
    //                    }
    //                }
    //
    //                $display .= '</p>';
    //            }
    //        } else {
    //            $display = $value['value'];
    //            if ($value['price'] && $this->show_price && ( ! $hide_zero || $value['price'] != 0)) {
    //                $price   = $value['price'] * $field_price_multiplier;
    //                $display = $display . ' <span class="wcpa_cart_price">(' . wcpaPrice($price) . ')</span>';
    //            }
    //        }
    //
    //        return $display;
    //    }
    //
    //    public function cart_display_productGroup($value, $product, $field_price_multiplier = 1)
    //    {
    //        $display   = '';
    //        $class     = 'wcpa_cart_productGroup ';
    //        $hide_zero = Config::get_config('cart_hide_price_zero', false);
    //        if (isset($value['form_data']->img_preview) && $value['form_data']->img_preview) {
    //            $class .= ' wcpa_cart_img_preview ';
    //            if (isset($value['form_data']->img_preview_disable_mobile) && $value['form_data']->img_preview_disable_mobile) {
    //                $class .= 'wcpa_product_img_preview_disable_mobile ';
    //            }
    //        }
    //        if ($class != '') {
    //            $class .= ' class="' . $class . '" ';
    //        }
    //        $hideImage = true;
    //        if (isset($value['form_data']->show_image) && $value['form_data']->show_image) {
    //            if (isset($value['form_data']->hideImageIn_cart) && $value['form_data']->hideImageIn_cart) {
    //                $hideImage = true;
    //            } else {
    //                $hideImage = false;
    //            }
    //        }
    //
    //        if (is_array($value['value'])) {
    //            foreach ($value['value'] as $k => $v) {
    //                $pro_image = '';
    //                if ( ! $hideImage) {
    //                    if ($v->get_image_id()) {
    //                        $pro_image = wp_get_attachment_url($v->get_image_id());
    //                    }
    //
    //                    if ( ! $pro_image) {
    //                        $pro_image = wc_placeholder_img_src('woocommerce_thumbnail');
    //                    }
    //                }
    //                $img_size_style = ((isset($value['form_data']->disp_size_img) && $value['form_data']->disp_size_img > 0) ? 'style="width:' . $value['form_data']->disp_size_img . 'px"' : '');
    //
    //                $display .= '<p ' . $class . '>' . (! ($hideImage) ? '<img ' . $img_size_style . ' data-src="' . $pro_image . '"  src="' . $pro_image . '" />' : '');
    //
    //                $label = $v->get_title();
    //                if ( ! empty($label)) {
    //                    $display .= ' <span >' . $label . '</span> ';
    //                }
    //
    //                if ( ! empty($value['quantities'])) {
    //                    $display .= ' <span class="wcpa_productGroup_cart_quantity">x ' . $value['quantities'][$k] . '</span> ';
    //                }
    //
    //                if ($value['price'] && is_array($value['price']) && $this->show_price) {
    //                    if (isset($value['price'][$k]) && $value['price'][$k] !== false && ( ! $hide_zero || $value['price'][$k] != 0)) {
    //                        $price   = wcpa_get_price_cart($product, $value['price'][$k]);
    //                        $display .= '<span class="wcpa_cart_price">(' . wcpa_price(
    //                                $price * $field_price_multiplier
    //                            ) . ')</span>';
    //                    }
    //                } else {
    //                    if ($value['price'] !== false && $this->show_price && ( ! $hide_zero || $value['price'] != 0)) {
    //                        $price   = wcpa_get_price_cart($product, $value['price']);
    //                        $display .= ' <span class="wcpa_cart_price">(' . wcpa_price(
    //                                $price * $field_price_multiplier
    //                            ) . ')</span>';
    //                    }
    //                }
    //
    //                $display .= '</p>';
    //            }
    //        }
    //
    //        return $display;
    //    }
    //
    //    public function cart_display_colorgroup($value,  $field_price_multiplier = 1)
    //    {
    //        $display   = '';
    //
    //
    //        if (is_array($value['value'])) {
    //            foreach ($value['value'] as $k => $v) {
    //                if ($k === 'other') {
    //                    $display .= '<p>' .$v['label'] . ': ' . $v['value'] . '';
    //                } else {
    //                    $display .= '<p>';
    //                    $size    = '';
    //                    if (isset($value['form_data']->cart_display_type) && $value['form_data']->cart_display_type == 'text') {
    //                        $display .= '<span style="color:' . $v['color'] . ';font-size: 20px;padding: 0;line-height: 0;">&#9632;</span>' . (! isEmpty(
    //                                $v['label']
    //                            ) ? $v['label'] : $v['value']) . '  ';
    //                    } else {
    //                        if (isset($value['form_data']->disp_size) && $value['form_data']->disp_size > 10) {
    //                            $size .= 'height:' . $value['form_data']->disp_size . 'px;';
    //                            if (isset($value['form_data']->show_label_inside) && $value['form_data']->show_label_inside) {
    //                                $size .= 'min-width:' . $value['form_data']->disp_size . 'px;line-height:' . ($value['form_data']->disp_size - 2) . 'px;';
    //                            } else {
    //                                $size .= 'width:' . $value['form_data']->disp_size . 'px;';
    //                            }
    //                        }
    //
    //                        if (isset($value['form_data']->show_label_inside) && $value['form_data']->show_label_inside) {
    //                            $display .= '<span class="wcpa_cart_color label_inside disp_' . $value['form_data']->disp_type . ' ' . colorClass(
    //                                    $v['color']
    //                                ) . ' ' . ((isset($value['form_data']->adjust_width) && $value['form_data']->adjust_width) ? 'wcpa_adjustwidth' : '') . '"'
    //                                        . ' style="background-color:' . $v['color'] . ';' . $size . '" >'
    //                                        . '' . $v['label'] . '</span>';
    //                        } else {
    //                            $display .= '<span class="wcpa_cart_color disp_' . $value['form_data']->disp_type . ' ' . colorClass(
    //                                    $v['color']
    //                                ) . ' ' . ((isset($value['form_data']->adjust_width) && $value['form_data']->adjust_width) ? 'wcpa_adjustwidth' : '') . '"'
    //                                        . ' style="background-color:' . $v['color'] . ';' . $size . '" ></span>';
    //                            if ( ! empty($v['label'])) {
    //                                $display .= ' <span >' . $v['label'] . '</span> ';
    //                            }
    //                        }
    //                    }
    //                }
    //
    //                if ($value['price'] && is_array(
    //                        $value['price']
    //                    ) && $this->show_price && ( ! $this->config['cart_hide_price_zero'] || $value['price'] != 0)) {
    //                    if (isset($value['price'][$k]) && $value['price'][$k] !== false) {
    //                        $price   = $value['price'][$k] * $field_price_multiplier;
    //                        $display .= '<span class="wcpa_cart_price">(' . wcpaPrice($price) . ')</span>';
    //                    }
    //                } else {
    //                    if ($value['price'] !== false && $this->show_price && ( ! $this->config['cart_hide_price_zero'] || $value['price'] != 0)) {
    //                        $price   = $value['price'] * $field_price_multiplier;
    //                        $display .= ' <span class="wcpa_cart_price">(' . wcpaPrice($price) . ')</span>';
    //                    }
    //                }
    //
    //                $display .= '</p>';
    //            }
    //        } else {
    //            $display = $value['value'];
    //            if ($value['price'] && $this->show_price && ( ! $this->config['cart_hide_price_zero'] || $value['price'] != 0)) {
    //                $price   = $value['price'] * $field_price_multiplier;
    //                $display = $display . ' <span class="wcpa_cart_price">(' . wcpaPrice($price) . ')</span>';
    //            }
    //        }
    //
    //        return $display;
    //    }
}
class CLogic
{
    public $form_data = false;
    public $fields = false;
    public $product = false;
    public $parentProduct = false;
    public $quantity = false;
    public function __construct($form_data, $fields, $product, $parentProduct, $quantity)
    {
    }
    /** formData is not passed as reference, so each  time it has to update as changes occures
     * @param $form_data
     */
    public function setFormData($form_data)
    {
    }
    /**
     * @param $cl_dependency
     * @param $processed_ids
     *
     * @since 5.0
     */
    public function processClDependency($cl_dependency, &$processed_ids)
    {
    }
    /**
     * Process conditional logic with relations provided
     *
     * @param $clRule
     * @param $relations
     * @param $product_id
     *
     * @return string
     */
    public function evalConditions($clRule, $relations)
    {
    }
    public function eval_relation($rule)
    {
    }
    /** is a field has a relation with userRole, it need validate before rendering
     *  from PHP side itself, to avoid leaking sensitive data to front end
     *
     * @param $clRule
     * @param $relations
     */
    public function evalUserRoleRelation($relations, $cl_rule)
    {
    }
    public function getFieldValueForCL($dataField, $cl_relation = false)
    {
    }
    public function getRelValueForCL($type, $rules)
    {
    }
    public function getExtraValueForCL($cl_field, $cl_relation)
    {
    }
}
/**
 * Handle File Uploads
 * Class File
 * @package Acowebs\WCPA
 */
class File
{
    public function __construct()
    {
    }
    public function move_file($field, $file)
    {
    }
    public function upload_dir_temp($upload)
    {
    }
    public function upload_dir($upload)
    {
    }
    public function handle_upload_ajax($field, $file)
    {
    }
    public function handle_upload($field, $file)
    {
    }
}
class FormValidation
{
    public $errorMessages = [];
    public function __construct($product = false, $quantity = 1)
    {
    }
    public function validateGroup($field, $dField, $fieldData)
    {
    }
    public function validate($field, $dField)
    {
    }
    public function validateFileUpload($field, $file, $isAjax = false, $s3 = false)
    {
    }
    public function validate_file_with_config($field, $ext)
    {
    }
    public function isEmpty()
    {
    }
}
class Price
{
    public $form_data = false;
    public $fields = false;
    public $product = false;
    public function __construct($form_data, $fields, $product, $quantity)
    {
    }
    /** formData is not passed as reference, so each  time it has to update as changes occures
     * @param $form_data
     */
    public function setFormData($form_data)
    {
    }
    /**
     * Process the price field which has dependency on price which are not processed while exicuting a field price
     * This method is different in frontend (js). Where it check it using the dependency ids already set with field.
     * So we can reduce repeated iteration of whole form each time a field change
     *
     * @param $dependencyFields
     */
    public function processPriceDependencies(&$dependencyFields, &$formData)
    {
    }
    /**
     * set field price, return 'dependency' if there is dependency
     *
     * @param $dField
     * @param $field
     *
     * @return array|false|int|mixed|string|string[]|void
     */
    public function setFieldPrice(&$dField, $field)
    {
    }
    public function calculate_price($price, $dField, $field, $index = false)
    {
    }
    public function process_custom_formula($formula, $dField, $field = false, $index = false, $isLabel = false)
    {
    }
    public function isPriceNumeric($price)
    {
    }
    function priceToFloat($price)
    {
    }
    /**
     *
     * @param $formula
     * @param $dField
     * @param $field
     *
     * @return string|Object  object if it has quantity dependency , other wise string
     */
    public function contentFormula($formula, $dField, $field = false)
    {
    }
    public function getValueFromArrayValues($val)
    {
    }
}
class Process
{
    public $thumb_image = false;
    public $subProducts = [];
    public $checkoutFields = [];
    public function __construct()
    {
    }
    public function order_again_cart_item_data($cart_item_data, $item, $order)
    {
    }
    /**
     * @param $passed
     * @param $product_id
     * @param int $qty
     * @param false $variation_id
     * @param false $variations Optional, it will be passed for order again validation action
     * @param false $cart_item_data Optional, it will be passed for order again validation action
     *
     * @return bool
     */
    public function add_to_cart_validation($passed, $product_id, $qty = 1, $variation_id = false, $ignoreCaptcha = false)
    {
    }
    /**
     * Initiate form fields if not initiated already,
     *
     * @param $product_id id must be product parent id, dont pass variation id
     *
     * @since 5.0
     */
    public function setFields($product_id)
    {
    }
    public function is_recaptcha_valid()
    {
    }
    /** set product object, it can use where product objects need
     *
     * @param $product_id
     * @param bool $variation_id
     * @param int $quantity
     */
    public function set_product($product_id, $variation_id = false, $quantity = 1)
    {
    }
    /** Read user submitted data
     *
     * @param $product_id
     *
     * @since 5.0
     */
    public function read_form()
    {
    }
    public function _read_form($section, &$fieldTemp)
    {
    }
    public function setSubProduct($product)
    {
    }
    /**
     * Process conditional logic with user submited data
     *
     * @param $product_id
     *
     * @since 5.0
     */
    public function process_cl_logic()
    {
    }
    public function validateFormData()
    {
    }
    /**
     * @param $cart_item_data
     * @param $product_id
     * @param false $variation_id
     * @param int $quantity
     * @param false $reRead = forcing reading the daa from request/get again
     * @return array
     */
    public function add_cart_item_data($cart_item_data, $product_id, $variation_id = false, $quantity = 1, $reRead = false)
    {
    }
    public function processPricing()
    {
    }
    public function processContentFormula()
    {
    }
    public function processWeight()
    {
    }
    public function pllwc_cart_item_data($cart_item_data, $item)
    {
    }
    public function setThumbImage($image)
    {
    }
    public function setCheckoutField($field)
    {
    }
    /**
     * Ajax Add to Cart
     * @since 5.0
     */
    public function ajax_add_to_cart()
    {
    }
    public function add_multiple_mime_types($check, $file, $filename)
    {
    }
    /**
     * Register API routes
     */
    public function register_routes()
    {
    }
    public function isSetRepeaterField($name)
    {
    }
    public function fieldValFromName($name)
    {
    }
    public function processRepeater()
    {
    }
    public function s3_sign($data)
    {
    }
    public function initSession()
    {
    }
    /**
     * @param $fieldName
     *
     * @return false
     */
    public function findFieldByFieldName($fieldName)
    {
    }
    public function tus_upload_serve($data)
    {
    }
    public function tus_upload($data)
    {
    }
    public function ajax_upload($data)
    {
    }
    /**
     * @param $fieldId
     *
     * @return false
     */
    public function findFieldById($fieldId)
    {
    }
}
class ReadForm
{
    public function __construct(\Acowebs\WCPA\Process $process = null)
    {
    }
    public function read_from_order_data($data, $field, $hide_empty, $zero_as_empty)
    {
    }
    public function find_meta($field)
    {
    }
    public function searchField($data, $field)
    {
    }
    public function readOptionsField($field, $values = false)
    {
    }
    public function fieldFromName($name, $action = 'value', $prefix = false)
    {
    }
    public function sanitize_values($value, $isMultiLine = false)
    {
    }
    public function readProductGroup($field, $values = false)
    {
    }
    public function _read_form($field, $hide_empty, $zero_as_empty)
    {
    }
    public function readFieldFile($field)
    {
    }
    public function readPlaceSelector($field)
    {
    }
    public function readDateFields($field, $value = false)
    {
    }
    public function readTextFields($field)
    {
    }
}
class Weight
{
    public $form_data = false;
    public $fields = false;
    public $product = false;
    public function __construct($form_data, $fields, $product, $quantity)
    {
    }
    /** formData is not passed as reference, so each  time it has to update as changes occures
     * @param $form_data
     */
    public function setFormData($form_data)
    {
    }
    /**
     * Process the price field which has dependency on price which are not processed while exicuting a field price
     * This method is different in frontend (js). Where it check it using the dependency ids already set with field.
     * So we can reduce repeated iteration of whole form each time a field change
     *
     * @param $dependencyFields
     */
    public function processWeightDependencies(&$dependencyFields)
    {
    }
    /**
     *
     * @param $formula
     * @param $dField
     * @param $field
     *
     * @return string|Object  object if it has quantity dependency , other wise string
     */
    public function contentFormula($formula, $dField, $field = false)
    {
    }
    // public function getValueFromArrayValues($val)
    // {
    //     if (is_array($val)) {
    //         if (isset($val['value'])) {
    //             /** place selector */
    //             return $val['value'];
    //         } elseif (isset($val['start'])) {
    //             /* date picker range */
    //             return $val['start'];
    //         } elseif (count($val)) {
    //             /**
    //              * For array of values, sum the values if the values are numeric
    //              * Otherwise return the first value
    //              */
    //             $p_temp = array_values($val)[0];
    //             if (count($val) == 1 || isset($p_temp['file_name'])) {
    //                 $p_temp = is_array($p_temp) ? (isset($p_temp['file_name']) ? $p_temp['file_name'] : $p_temp['value']) : $p_temp; /* $p_temp['name'] => for files */
    //                 return $p_temp;
    //             } else {
    //                 $_i = -1;
    //                 $valueSum = 0.0;
    //                 foreach ($val as $_p) {
    //                     $_i++;
    //                     if (is_array($_p)) {
    //                         if (is_numeric($_p['value'])) {
    //                             $valueSum += (float)$_p['value'];
    //                         } elseif ($_i == 0) {
    //                             $valueSum = $_p['value'];
    //                             break;
    //                         }
    //                     } else {
    //                         if (is_numeric($_p)) {
    //                             $valueSum += (float)$_p;
    //                         } elseif ($_i == 0) {
    //                             $valueSum = $_p;
    //                             break;
    //                         }
    //                     }
    //                 }
    //                 return $valueSum;
    //             }
    //         }
    //         return false;
    //     }
    //     return $val;
    // }
    /**
     * set field price, return 'dependency' if there is dependency
     *
     * @param $dField
     * @param $field
     *
     * @return array|false|int|mixed|string|string[]|void
     */
    public function setFieldWeight(&$dField, $field)
    {
    }
    public function calculate_weight($weight, $dField, $field, $index = false)
    {
    }
    // public function isPriceNumeric($price)
    // {
    //     $locale = localeconv();
    //     $decimals = array(wc_get_price_decimal_separator(), $locale['decimal_point'], $locale['mon_decimal_point']);
    //     $price = str_replace($decimals, '.', $price);
    //     return is_numeric($price);
    // }
    // function priceToFloat($price)
    // {
    //     $locale = localeconv();
    //     $decimals = array(wc_get_price_decimal_separator(), $locale['decimal_point'], $locale['mon_decimal_point']);
    //     $price = str_replace($decimals, '.', $price);
    //     return (float)$price;
    // }
}
class Product
{
    public $translate_keys = ['label', 'placeholder', 'description', 'value', 'tooltip', 'repeater_section_label', 'repeater_field_label', 'repeater_add_label', 'repeater_remove_label', 'quantity_label', 'check_value', 'requiredError', 'validEmailError', 'validUrlError', 'minFieldsError', 'maxFieldsError', 'groupMinError', 'groupMaxError', 'otherFieldError', 'quantityRequiredError', 'allowedCharsError', 'patternError', 'maxlengthError', 'minlengthError', 'minValueError', 'maxValueError', 'minQuantityError', 'maxQuantityError', 'maxFileCountError', 'minFileCountError', 'maxFileSizeError', 'minFileSizeError', 'fileExtensionError'];
    public function __construct()
    {
    }
    public function get_price_dependency()
    {
    }
    public function custom_weglot_add_regex_checkers($regex_checkers)
    {
    }
    public function get_fields($product_id = false)
    {
    }
    public function getCache($product_id)
    {
    }
    /**
     * get forms assigned to product by product id
     *
     * @param $product_id
     *
     * @return array|int|int[]|mixed|void|WP_Post[]
     */
    public function get_form_ids($product_id)
    {
    }
    /**
     * @param $ids
     * @param $p_id
     *
     * @return array
     */
    public function re_order_and_merge_forms($idsByCats, $directIds, $p_id)
    {
    }
    public function process_cl($v, $prod)
    {
    }
    public function replace_custom_field($string = '', $prod = false)
    {
    }
    public function getGlobalFormFields($field)
    {
    }
    /**
     * @param $v
     */
    public function find_price_dependency($v, $form_id)
    {
    }
    public function check_field_price_dependency($price_formula)
    {
    }
    public function update_global_options($field)
    {
    }
    public function filterOptionsBasedOnType($type, $options)
    {
    }
    public function replace_custom_fields($v, $prod)
    {
    }
    public function processFields($field, $form_id)
    {
    }
    public function setTranslationKeys($field)
    {
    }
    public function findScriptsRequired($field, &$scripts)
    {
    }
    public function map_dependencies()
    {
    }
    public function setCache($product_id, $data)
    {
    }
    /**
     * @param $ids
     * @param $p_id
     *
     * @return array
     */
    public function re_order_forms($ids, $p_id, $applyCatOrder = false)
    {
    }
}
class Render
{
    public $token;
    public $action_hook_tag = false;
    public $product = false;
    public function __construct()
    {
    }
    public function init()
    {
    }
    public function wcpa_render_form_filter($data, $product)
    {
    }
    public function render_form($isRest = false, $doReturn = false, $product_id = false)
    {
    }
    /**
     * Prefill if the form validation got wrong
     * Prefill data passed in URL
     * prefill data for cart edit
     *
     */
    public function processFields(&$fields)
    {
    }
    public function setDefaultValue(&$field, $default = false)
    {
    }
    public function sanitizeValue($type, $value)
    {
    }
    public function checkCartEdit(&$fields)
    {
    }
    public function getProductData()
    {
    }
    public function get_pro_attr_list($pro = false)
    {
    }
    public function wc_api_support()
    {
    }
    public function get_form_fields_api($object)
    {
    }
    public function popup_container()
    {
    }
    public function render_init()
    {
    }
}
class S3
{
    protected $uploadDir;
    protected $active;
    protected $config;
    public function __construct()
    {
    }
    public function isActive()
    {
    }
    public function verify($creds)
    {
    }
    public function serve($file)
    {
    }
    public function getClient()
    {
    }
    public function moveFile($file)
    {
    }
    //    public function getFile($key)
    //    {
    //        $server = new Server();
    //        $cache = $server->getCache();
    //        if (!$fileMeta = $cache->get($key)) {
    //            return false;
    //        }
    //        return $fileMeta;
    //    }
    //
    //    public function deleteFile($key)
    //    {
    //        $server = new Server();
    //
    //        $cache = $server->getCache();
    //        $cache->delete($key);
    //    }
    public function deleteTemp()
    {
    }
}
/*
 *  Tus php wrapper
 */
class Tus
{
    protected $uploadDir;
    protected $active;
    public function __construct()
    {
    }
    public function isActive()
    {
    }
    public function serve()
    {
    }
    public function getFile($key)
    {
    }
    public function deleteFile($key)
    {
    }
}
namespace Acowebs\WCPA;

function activeUploadMethod()
{
}
function valueByOrder($order_id, $key, $type = 'name', $returnAll = true)
{
}
function extractFormData($field)
{
}
function fieldValueFromCartValue($type, $value)
{
}
function cloneField($field, $newId, $index)
{
}
function cloneSection($section, $parentKey, $newKey, $name = false, $index = 0)
{
}
function wcpaDataToKeyValue($data)
{
}
function fieldFromName($name, $action = 'value', $prefix = false, $method = 'POST')
{
}
function getDateFormat($field)
{
}
function isEmpty($var)
{
}
function emptyObj($obj)
{
}
function priceToFloat($price)
{
}
function getValueFromArrayValues($val)
{
}
function calcTax($product, $price)
{
}
function getPriceFromHtml($product)
{
}
function getRealTaxRate($product, $isCart = false)
{
}
/** return tax rate for addon, it will return 1 if the product is not taxable
 * @param $product
 * @param false $isCart
 * @return float|int|string
 */
function getTaxRate($product, $isCart = false)
{
}
//
//function getShopPrice($product, $args = array(), $regularPrice = false)
//{
//    if (is_array($args) && empty($args)) {
//        // request directly to get product price, in that case it need to apply the tax configuration
//        $consider_tax = true;
//    } else {
//        $consider_tax = Config::get_config('consider_product_tax_conf');
//    }
//
//    if ( ! is_array($args) && $args !== false) {
//        $args = array(
//            'qty'   => 1,
//            'price' => $args,
//        );
//    }
//    if ( ! isset($args['qty']) || empty($args['qty'])) {
//        $args['qty'] = 1;
//    }
//    if ( ! isset($args['price'])) {
//        if ($regularPrice) {
//            $args['price'] = $product->get_regular_price();
//        } else {
//            $args['price'] = $product->get_price();
//        }
//    }
//
//
//    // Remove locale from string.
//    if ( ! is_float($args['price'])) {
//        $price = priceToFloat($args['price']);
//    } else {
//        $price = $args['price'];
//    }
//
//
//    $qty = (int) $args['qty'];
//    if ($price < 0) {
//        return $price;
//    }
//    if ($consider_tax) {
//        return 'incl' === get_option('woocommerce_tax_display_shop') ?
//            wc_get_price_including_tax(
//                $product,
//                array(
//                    'qty'   => $qty,
//                    'price' => $price,
//                )
//            ) :
//            wc_get_price_excluding_tax(
//                $product,
//                array(
//                    'qty'   => $qty,
//                    'price' => $price,
//                )
//            );
//    } else {
//        return $price;
//    }
//}
function getUNIDate($dateString, $type = 'date')
{
}
//function display_hook($arg)
//{
//    $hooks = apply_filters(
//        'wcpa_display_hooks',
//        [
//            "fields"             => ["woocommerce_before_add_to_cart_button", 10],
//            "price_summary"      => ["wcpa_price_summary_box", 10],
//            "validation_summary" => ["wcpa_validation_summary_box", 10],
//        ]
//    );
//
//    return $hooks[$arg];
//}
/**
 * @return string
 */
function colorClass($hex)
{
}
function confToCss($conf)
{
}
function metaToBoolean($v)
{
}
/**
 * convert wcpa 1 field structure to wcpa2
 *
 * @param $fields
 *
 * @return array
 */
function toRowCol($fields)
{
}
function fix_cols($data)
{
}
function priceOverride($addonPrice, $product_price, $wcpa_cart_rules)
{
}
function getMimeTypes()
{
}
function fileTypesToExtensions($field, $dot = 'add')
{
}
/**
 * Check if the fields are in old wcpa structure or new
 *
 * @param $data
 */
function checkFieldStructure($data)
{
}
function generateSectionFields($fields = [])
{
}
function uniqSectionId()
{
}
function sanitizeFields(&$formBuilderData, $allowed_html)
{
}
/**
 * @param $price
 * @param $strikePrice
 * @param int $no_style
 * @param array $args
 * @param string $class
 *
 * @return string
 */
function wcpaPrice($price, $strikePrice = 0, $no_style = 0, $args = array(), $class = 'price_value')
{
}
//
//function wcpa_get_price_cart($product, $args = array())
//{
//    if (is_array($args) && empty($args)) {
//        // request directly to get product price, in that case it need to apply the tax configuration
//        $consider_tax = true;
//    } else {
//        $consider_tax = Config::get_config('consider_product_tax_conf');
//    }
//
//    if ( ! is_array($args) && $args !== false) {
//        $args = array(
//            'qty'   => 1,
//            'price' => $args,
//        );
//    }
//
//
//    if ( ! isset($args['qty']) || empty($args['qty'])) {
//        $args['qty'] = 1;
//    }
//
//    if ( ! isset($args['price'])) {
//        $args['price'] = $product->get_price();
//    }
////        else {
////            $args['price'] = apply_filters('woocommerce_product_get_price', $args['price'], $product);
////        }
//
//    // Remove locale from string.
//    if ( ! is_float($args['price'])) {
//        $price = priceToFloat($args['price']);
//    } else {
//        $price = $args['price'];
//    }
//
//    $qty = (int) $args['qty'];
//
//
//    if ($price > 0 && $consider_tax) {
//        if (WC()->cart->display_prices_including_tax()) {
//            $product_price = wc_get_price_including_tax(
//                $product,
//                array(
//                    'qty'   => $qty,
//                    'price' => $price,
//                )
//            );
//        } else {
//            $product_price = wc_get_price_excluding_tax(
//                $product,
//                array(
//                    'qty'   => $qty,
//                    'price' => $price
//                )
//            );
//        }
//    } else {
//        $product_price = $price;
//    }
//
//    return $product_price;
//}
/**
 * Using to check if the date contains from to value ( 2011-1-20 to 2022-02-30)
 */
function processDateValueForCl($val)
{
}
/**
 * get product attribute list, custom attrs and attributes,
 *
 * @param $product
 *
 * @return array
 */
function get_pro_attr_list($product)
{
}
function getFormEditUrl($post_id)
{
}
function hasFormula($str)
{
}
function formattedDate($value, $dateFormat = false)
{
}
/**
 * find field by elementID,
 *
 * @param $formData
 * @param $element_id
 * @param false $returnIndex whether to return section=>row>col indexes only or return field itself
 *
 * @param bool $isObject
 *
 * @return array|false|mixed
 * @since 5.0
 */
function findFieldById($formData, $element_id, $returnIndex = false, $isObject = false)
{
}
function orderMetaValueForDb($label, $value, $qty, $image = false, $color = false)
{
}
function refreshCaches($form_id = false, $product_id = false)
{
}
function addonsList()
{
}
function get_transient_keys_with_prefix($prefix)
{
}
function delete_transients_with_prefix($prefix)
{
}
function beforeCalculateDiscount($product_price, $cart_item)
{
}
function processProductGroup(&$field)
{
}
/**
 *  function to check a product has product form assigned
 * It can call Acowebs\WCPA\has_form()
 *
 * @param $product_id
 *
 * @return string
 */
function has_form($product_id)
{
}
/**
 * Polyfill for `array_key_last()` function added in PHP 7.3.
 *
 * @param array $array An array.
 *
 * @return string|int|null The last key of array if the array
 *.                        is not empty; `null` otherwise.
 */
function array_key_last($array)
{
}
function array_key_first(array $array)
{
}
function isPriceNumeric($price)
{
}