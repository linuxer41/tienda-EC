<?php

/**
 * 中通速递插件的语言文件
 */

$_LANG['zto']          = 'Zhongtong Express';
$_LANG['zto_desc']     = 'Instrucciones relevantes de Zhongtong Express. ';
$_LANG['item_fee'] = 'Costo por artículo:';
$_LANG['base_fee'] = 'Primer costo';
$_LANG['step_fee'] = 'Peso de renovación por 1,000 gramos o su fracción';
$_LANG['shipping_print'] = '<table style="width:18.2cm" border="0" cellspacing="0" cellpadding="0">
<tr>
  <td style="height:2.2cm;">&nbsp;</td>
</tr>
</table>
<table style="width:18.2cm" border="0" cellspacing="0" cellpadding="0">
<tr>
  <td style="height:4.4cm; width:9.1cm;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td style="width:2cm; height:0.8cm;">&nbsp;</td>
  <td style="width:2.7cm;">{$shop_name}</td>
  <td style="width:1.2cm;">&nbsp;</td>
  <td>{$province}</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td colspan="3" style="height:1.6cm;">{$shop_address}</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td colspan="3" style="height:0.8cm;">{$shop_name}</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td style="height:1.2cm;">{$service_phone}</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  </table>
  </td>
  <td style="height:4.4cm; width:9.1cm;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td style="width:2cm; height:0.8cm;">&nbsp;</td>
  <td style="width:2.7cm;">{$order.consignee}</td>
  <td style="width:1.2cm;">&nbsp;</td>
  <td>{$order.region}</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td colspan="3" style="height:1.6cm;">{$order.address}</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td colspan="3" style="height:0.8cm;"></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td style="height:1.2cm;">{$order.mobile}</td>
  <td>&nbsp;</td>
  <td>{$order.zipcode}</td>
  </tr>
  </table>
  </td>
</tr>
</table>
<table style="width:18.2cm" border="0" cellspacing="0" cellpadding="0">
<tr>
  <td style="height:4.2cm;">&nbsp;</td>
</tr>
</table>';

return $_LANG;
