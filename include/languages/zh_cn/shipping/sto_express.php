<?php

/**
 * 申通快递插件的语言文件
*/

$_LANG['sto_express']            = 'Shentong Express';
$_LANG['sto_express_desc']       = 'El primer peso en Jiangsu, Zhejiang y Shanghai es de 15 yuanes / KG, las otras regiones son de 18 yuanes / KG, y el peso continuo es de 5-6 yuanes / KG, y la región de Yunnan es de 8 yuanes';
$_LANG['item_fee']              = 'Costo por artículo:';
$_LANG['base_fee']              = 'Costo dentro de 1000 gramos';
$_LANG['step_fee']               = 'Peso de renovación por 1,000 gramos o su fracción';
$_LANG['shipping_print']         = '<table border="0" cellspacing="0" cellpadding="0" style="width:18.9cm;">
<tr>
  <td colspan="3" style="height:2cm;">&nbsp;</td>
</tr>
<tr>
  <td style="width:8cm; height:4cm; padding-top:0.3cm;" align="center" valign="middle">
   <table border="0" cellspacing="0" cellpadding="0" style="width:7.5cm;" align="center">
<tr>
  <td style="width:2.3cm;">&nbsp;</td>
  <td style="height:1.5cm;">{$shop_address}</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td style="height:0.9cm;">{$shop_name}</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td style="height:0.9cm;">{$shop_name}</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td style="height:0.9cm;">{$service_phone}</td>
</tr>
</table>

  </td>
  <td style="width:8cm; height:4cm; padding-top:0.3cm;" align="center" valign="middle">
  <table border="0" cellspacing="0" cellpadding="0" style="width:7.5cm;" align="center">
<tr>
  <td style="width:2.3cm;">&nbsp;</td>
  <td style="height:1.5cm;">{$order.address}</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td style="height:0.9cm;"></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td style="height:0.9cm;">{$order.consignee}</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td style="height:0.9cm;">{$order.tel}</td>
</tr>
</table>
  </td>
  <td rowspan="2" style="width:3cm;">&nbsp;</td>
</tr>
<tr>
  <td colspan="2" style="height:3.5cm;">&nbsp;</td>
</tr>
</table>';

return $_LANG;
