<?php

$s = file_get_contents('../zb_system/function/c_system_plugin.php');

$matchs = array();

$i = preg_match_all("/[\*]{50}<.*?[\*]{50}>/s", $s, $matchs);

$matchs = $matchs[0];
echo '<pre>';
foreach ($matchs as $key => $value) {
    $t = $value;
    $t = str_replace('\'', '', $t);
    $t = str_replace('**************************************************<', '', $t);
    $t = str_replace('**************************************************>', '', $t);
    $t = str_replace("tip:Filter\r\n", '', $t);
    $t = str_replace("isim:", '====', $t);
    $t = str_replace("\r\nn parametresi", "====\r\n parametresi", $t);
    $t = str_replace("\r\n Açıklama", "\\\\\r\n Açıklama", $t);
    $t = str_replace("\r\n aramak", "\\\\\r\n aramak", $t);
    $t = str_replace("çağrı:", "çağrı:\\\\", $t);
    echo $t;
}
echo '</pre>';
