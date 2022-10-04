<?php
/**
 * @package admin
 * @copyright Copyright 2019 That Software Guy 
 * @link https://www.thatsoftwareguy.com/zencart_ot_edit.html 
 * @copyright Portions Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 */
require('includes/application_top.php');

// unset variable which is sometimes tainted by bad plugins like magneticOne tools
if (isset($module)) {
  unset($module);
}

require(DIR_WS_CLASSES . 'currencies.php');
$currencies = new currencies();

if (!isset($_GET['page'])) $_GET['page'] = '';
$action = (isset($_GET['action']) ? $_GET['action'] : '');
$oID = FALSE;
if (isset($_POST['oID'])) {
  $oID = zen_db_prepare_input(trim($_POST['oID']));
} elseif (isset($_GET['oID'])) {
  $oID = zen_db_prepare_input(trim($_GET['oID']));
}
if (!$oID) {
    $messageStack->add_session(ERROR_ORDER_NOT_SPECIFIED, 'error');
    zen_redirect(zen_href_link(FILENAME_ORDERS, zen_get_all_get_params(array('oID', 'action')), 'NONSSL'));
}
$orders = $db->Execute("SELECT orders_id, currency  
                          FROM " . TABLE_ORDERS . "
                          WHERE orders_id = " . (int)$oID);
$order_exists = true;
if ($orders->RecordCount() <= 0) {
    $order_exists = false;
    if ($action != '') {
      $messageStack->add_session(ERROR_ORDER_DOES_NOT_EXIST . ' ' . $oID, 'error');
    }
    zen_redirect(zen_href_link(FILENAME_ORDERS, zen_get_all_get_params(array('oID', 'action')), 'NONSSL'));
}
$order_currency = zen_db_prepare_input($orders->fields['currency']); 
$currency_query = $db->Execute("SELECT * FROM " . TABLE_CURRENCIES . " WHERE code = '" . $order_currency . "'"); 
if ($currency_query->EOF) {
  define("CURR_SYMBOL", "$"); 
  define("CURR_SEPARATOR", ","); 
} else {
  define("CURR_SYMBOL", $currency_query->fields['symbol_left']); 
  define("CURR_SEPARATOR", $currency_query->fields['thousands_point']); 
}
$zco_notifier->notify('NOTIFY_ADMIN_ORDER_PREDISPLAY_HOOK', $oID, $action);

if (zen_not_null($action) && $order_exists == true) {
  switch ($action) {
    case 'edit':
      break;
    case 'update_order':
      // Process each post that looks like 'ot_' 
      $text = zen_db_prepare_input($_POST['ot_subtotal']); 
      $text = str_replace(CURR_SYMBOL,"",$text); 
      $text = str_replace(CURR_SEPARATOR,"",$text); 
      $total =   floatval($text); 
      foreach ($_POST as $key => $text) {
        $key = zen_db_prepare_input($key);
        $text = zen_db_prepare_input($text); 
        if (strncmp($key, "ot_", 3) !== 0) continue; 
        if ($key == "ot_subtotal") continue; 
        if ($key == "ot_total") continue; 
        $text = str_replace(CURR_SYMBOL,"",$text); 
        $text = str_replace(CURR_SEPARATOR, "",$text); 
        $value = floatval($text); 
        if ($key == "ot_tax") $tax_value = $value; 
        if (empty($text)) continue;
        if (strpos("-", $text) !== false) {
          $total -= $value; 
        } else {
          $total += $value; 
        }
        $db->Execute("UPDATE " . TABLE_ORDERS_TOTAL . " SET text = '" . $currencies->format($value) . "', value=" . $value . " WHERE orders_id = " . (int)$oID . " AND class = '" . $key . "'");  
      }
      // Update total in OT table 
      $db->Execute("UPDATE " . TABLE_ORDERS_TOTAL . " SET text = '" . $currencies->format($total) . "', value=" . $total. " WHERE orders_id = " . (int)$oID . " AND class = 'ot_total'");  
      // Update total in ORDERS table 
      $db->Execute("UPDATE " . TABLE_ORDERS . " SET order_total = " . $total. " WHERE orders_id = " . (int)$oID); 
      // Update tax in ORDERS table 
      if (isset($tax_value)) {
         $db->Execute("UPDATE " . TABLE_ORDERS . " SET order_tax = " . $tax_value . " WHERE orders_id = " . (int)$oID); 
      }
      $messageStack->add_session(SUCCESS_ORDER_UPDATED, 'success');
      zen_record_admin_activity('Order ' . $oID . ' updated.', 'info');
      zen_redirect(zen_href_link(FILENAME_OT_EDIT, zen_get_all_get_params(array('action')) . 'action=edit', 'NONSSL'));
      break;
  }
}
?>
<!doctype html>
<html <?php echo HTML_PARAMS; ?>>
  <head>
    <meta charset="<?php echo CHARSET; ?>">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
    <link rel="stylesheet" type="text/css" media="print" href="includes/stylesheet_print.css">
    <link rel="stylesheet" type="text/css" href="includes/cssjsmenuhover.css" media="all" id="hoverJS">
    <script src="includes/menu.js"></script>
    <script src ="includes/general.js"></script>
    <script>
      function init() {
          cssjsmenu('navbar');
          if (document.getElementById) {
              var kill = document.getElementById('hoverJS');
              kill.disabled = true;
          }
      }
    </script>
  </head>
  <body onLoad = "init()">
    <!-- header //-->
    <?php
    require(DIR_WS_INCLUDES . 'header.php');
    ?>
    <!-- header_eof //-->
    <!-- body //-->
<?php
$totals = $db->Execute("SELECT * FROM " . TABLE_ORDERS_TOTAL . " WHERE orders_id = " . (int)$oID . " ORDER BY sort_order"); 
?>
    <div class="container-fluid">
      <!-- body_text //-->
      <h1><?php echo HEADING_TITLE; ?></h1>
      <h4><?php echo HEADING_SUB_TITLE . " " . $oID; ?></h4>

        <div class="row noprint">
          <div class="formArea">
              <?php echo zen_draw_form('status', FILENAME_OT_EDIT, zen_get_all_get_params(array('action')) . 'action=update_order', 'post', 'class="form-horizontal"', true); ?>
<br />
<?php
 while (!$totals->EOF) { 
?>
            <div class="form-group">
                <?php echo zen_draw_label($totals->fields['title'], $totals->fields['class'], 'class="col-sm-3 control-label"'); ?>
              <div class="col-sm-3">
<?php 
   if ($totals->fields['class'] == 'ot_subtotal' || 
       $totals->fields['class'] == 'ot_total') { 
      echo zen_draw_input_field($totals->fields['class'], $totals->fields['text'], 'class="form-control" readonly'); 
   } else { 
      echo zen_draw_input_field($totals->fields['class'], $totals->fields['text'], 'class="form-control"'); 
   }
?>
              </div>
            </div>
<?php 
   $totals->MoveNext(); 
 } 
?>
            <div class="form-group">
              <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-info"><?php echo IMAGE_UPDATE; ?></button>
              </div>
            </div>
            <?php echo '</form>'; ?>
      <!-- body_text_eof //-->

    </div>
    <!-- body_eof //-->

    <!-- footer //-->
    <div class="footer-area">
      <?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
    </div>
    <!-- footer_eof //-->
  </body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>
