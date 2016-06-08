/**
* @desc:发送短信版本2:使用ops新提供的接口发送,原封冰清维护项目(SDK)废弃
* @wiki:http://open.corp.qihoo.net:8360/pages/viewpage.action?pageId=23888187
* @
*/
public static function sendSmsV2($mobiles,$content,$wireless = False)
{
if( empty($mobiles) || empty($content) )
{
return false;
}

$id = 44;
$key = 'rgBcjVBNphW';

if ($wireless == True)
{
$id = 64;
$key = 'pHeRDtRZgMo';
}

if( !is_array($content) && is_array($mobiles) )  //一个内容,多个手机号
{
$phone = implode(',',$mobiles);
$info[] = array(
'msg'   => $content,
'phone' => $phone,
);
}

if( is_array($content) && is_array($mobiles) )   // n个内容  n个手机号 ,先只考虑一一对应 的情况
{
$content = array_merge($content);
$mobiles = array_merge($mobiles);
foreach($content as $k=>$v)
{
$info[$k] = array(
'msg' => $v,
'phone' => $mobiles[$k],
);
}
}

if( !is_array($content) && !is_array($mobiles)) //一个内容,一个手机号
{
$info[] = array(
'msg'   => $content,
'phone' => $mobiles,
);
}

$url = 'http://sms.ops.qihoo.net:8360/sms?id='.$id.'&key='.$key;
$data['data'] = json_encode($info);

$rs = Helper_Http::request($url, "POST", $data, false, 10);
$rs = json_decode($rs,true);
if( isset($rs['result']) && $rs['result']==0)
{
return true;
}
$msg = json_encode($rs);
error_log(date("[Y-m-d H:i:s]")." {$msg}\n", 3, "/home/zhangyuzhi/tmp/news_msg.log.".date("Ymd"));
//echo $rs['descriptyon'];
return false;
}