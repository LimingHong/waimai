<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

global $phpjiami_decrypt;
$phpjiami_decrypt["�֮�����î����֯�þ��Į���֥����"] = base64_decode("ZGVmaW5lZA==");
$phpjiami_decrypt["����î�����ֈ���î�å������֋���"] = base64_decode("dHJpbQ==");
$phpjiami_decrypt["���֯֎����������ֈ�Ď����������"] = base64_decode("aW50dmFs");
defined("IN_IA") or exit("Access Denied");
global $_W;
global $_GPC;
$op = trim($_GPC["op"]) ? trim($_GPC["op"]) : "index";
if ($op == "index") {
    $_W["page"]["title"] = "基础设置";
    if ($_W["ispost"]) {
        $type = trim($_GPC["type"]);
        if ($type != "store" && $type != "plateform") {
            imessage(error(-1, "请选择对接模式"), "", "ajax");
        }
        $data = array("status" => intval($_GPC["status"]), "type" => $type, "city" => trim($_GPC["city"]), "mobile" => trim($_GPC["mobile"]), "md5" => trim($_GPC["md5"]), "token" => trim($_GPC["shansongtoken"]), "merchantid" => trim($_GPC["merchantid"]), "partnerNO" => trim($_GPC["partnerNO"]));
        set_plugin_config(base64_decode("c2hhbnNvbmc="), $data);
        imessage(error(0, base64_decode("6K6+572u5oiQ5Yqf")), base64_decode("cmVmcmVzaA=="), "ajax");
    }
    $notify_url = WE7_WMALL_URL . "plugin/shansong/notify.php";
    $shansong = get_plugin_config("shansong");
}
include itemplate(base64_decode("Y29uZmln"));

?>
