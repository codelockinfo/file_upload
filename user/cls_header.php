<?php
include_once '../append/connection.php';
include_once ABS_PATH . '/user/cls_functions.php';
include_once ABS_PATH . '/cls_shopifyapps/config.php';

$default_shop = 'dashboardmanage.myshopify.com';
$store = isset($_GET['store']) ? $_GET['store'] : $default_shop;
if ((isset($store) && $store != '')) {
    $functions = new Client_functions($store);
    $current_user = $functions->get_store_detail_obj();
} else {
    header('Location: https://www.shopify.com/admin/apps');
    exit;
}
$view = (isset($_GET["view"]) && $_GET["view"]) ? $_GET["view"] : FALSE;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?php echo CLS_SITE_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo main_url('assets/css/polaris_style.css'); ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo main_url('assets/css/style.css'); ?>" rel="stylesheet">


    <script>
        var store = "<?php echo $store; ?>";
    </script>
    <?php $_SESSION['store'] = $store; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="<?php echo main_url('assets/js/jquery3.6.4.min.js'); ?>"></script>
    <script src="<?php echo main_url('assets/js/easy_style.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="<?php echo main_url('assets/js/shopify_client.js'); ?>"></script>
    <script src="<?php echo main_url('assets/js/shopify_client_second.js'); ?>"></script>
    <script src="<?php echo main_url('assets/js/ckeditor.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.cls-box-white').click(function() {
                $('.cls-box-white').removeClass("active");
                $(this).addClass("active");
                // $('#tab-1').removeClass("active");
                // $(this).addClass("active");
                var tabID = $('.cls-box-white.active').attr('data-tab');
                console.log(tabID, "hello........");
                $('.first-run').removeClass("active");
                var data = $('#tab-' + tabID).addClass('active');

                console.log(data, "hello........");
            });
            $(".btn-arae-type").click(function() {
                $(".cls-css-textarae").css("display","block");
                $(".cls-use-css").css("display","none");
            });
        });
    </script>