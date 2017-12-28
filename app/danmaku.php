<?php
/**
 * Created by 大师兄
 * 派系: 神秘剑派
 * 技能: zxc秒杀
 * Date: 2017/12/28
 * Time: 15:17
 * QQ:  997823131 
 */
// 返回json数据
function ajaxReturn($data,$type='') {
    if(empty($type)) $type = 'JSON';
    switch (strtoupper($type)){
        case 'JSON' :
// 返回JSON数据格式到客户端 包含状态信息
            header('Content-Type:application/json; charset=utf-8');
            exit(json_encode($data));
        case 'XML' :
// 返回xml格式数据
            header('Content-Type:text/xml; charset=utf-8');
            exit(xml_encode($data));
        case 'JSONP':
// 返回JSON数据格式到客户端 包含状态信息
            header('Content-Type:application/json; charset=utf-8');
            $handler = isset($_GET['VAR_JSONP_HANDLER']) ? $_GET['VAR_JSONP_HANDLER'] : 'jsonpReturn';
            exit($handler.'('.json_encode($data).');');
        case 'EVAL' :
// 返回可执行的js脚本
            header('Content-Type:text/html; charset=utf-8');
            exit($data);
    }
}
function db_connect(){
    define('InCosmos', true);
    define(HOST,"127.0.0.1");
    define(USER,"root");
    define(PASS,"root");
    define(DBNAME,"word");
    define(TABPREFIX,"wp_");
    include_once $_SERVER['DOCUMENT_ROOT']."/app/dpdo.php";
}
function p($param){
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
}

$post=false;
$post = json_decode(file_get_contents("php://input"),true);
db_connect();
$db_barrage = new Dpdo();
$db_barrage->setTable("barrage");

if($post['token'] == 'CosmosJack'){
    $insert['author'] = $post['author'];
    $insert['color'] = $post['color'];
    $insert['player'] = $post['player'];
    $insert['text'] = $post['text'];
    $insert['time'] = $post['time'];
    $insert['token'] = $post['token'];
    $insert['type'] = $post['type'];
    $insert['ip'] = $_SERVER['REMOTE_ADDR'];
    $result = $db_barrage->insert($insert);
    if($result){
        $data_barrage = $db_barrage->find($result);
        $data_barrage['player'] = array($data_barrage['player']);
        $data_barrage['_id'] = $data_barrage['v_id'];
        $data_barrage['__v'] = $data_barrage['v'];
        ajaxReturn(array('code'=>1,'danmaku'=>$data_barrage),"JSON");
    }else{
        ajaxReturn(array('code'=>2,'danmaku'=>$post),"JSON");
    }

}else{

    $data_barrage = $db_barrage->field("player as _id,v as __v,*")->where(array('player'=>$_GET['id']))->select();
    $data_barrage = $db_barrage->select();
    /*$msg['_id']="59c1cc5b555a0215ba1b16ac";
    $msg['author'] = 'CosmosJack';
    $msg['time'] = 3.2;
    $msg['text'] = '66666';
    $msg['color'] = "#fff";
    $msg['type'] = "right";
    $msg['ip'] = "183.152.92.225";
    $msg['referer']= "http://127.0.0.1/";
    $msg['__v'] = 0;
    $msg['player'] = array("9E2E3368B56CDBB4");

    $msg1['_id']="59c1cc5b555a0215ba1b16ac";
    $msg1['author'] = 'CosmosJack';
    $msg1['time'] = 4;
    $msg1['text'] = '88888';
    $msg1['color'] = "#fff";
    $msg1['type'] = "right";
    $msg1['ip'] = "183.152.92.225";
    $msg1['referer']= "http://127.0.0.1/";
    $msg1['__v'] = 0;
    $msg1['player'] = array("9E2E3368B56CDBB4");

    $msg2['_id']="59c1cc5b555a0215ba1b16ac";
    $msg2['author'] = 'CosmosJack';
    $msg2['time'] = 7;
    $msg2['text'] = '9999999';
    $msg2['color'] = "#fff";
    $msg2['type'] = "right";
    $msg2['ip'] = "183.152.92.225";
    $msg2['referer']= "http://127.0.0.1/";
    $msg2['__v'] = 0;
    $msg2['player'] = array("9E2E3368B56CDBB4");*/

//    $danmaku = array($msg,$msg1,$msg2);
    $data = array('code'=>1,'danmaku'=>$data_barrage);
    ajaxReturn($data,"JSON");
}
