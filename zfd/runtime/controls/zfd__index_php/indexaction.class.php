<?php
	class IndexAction extends Common {
		function index(){
            $db_record = D("record");
//            $insert['name'] =
            $temp = '';
            for($i=0;$i<count($_POST['company']);$i++){
                $temp .= $_POST['company'][$i].",";
            }
            $temp = rtrim($temp,',');
            $_POST['company'] = $temp;
            $_POST['ctime'] = time();
            $row = false;
            if(!empty($_POST['name']) && !empty($_POST['phone'])){
                $row = $db_record->insert($_POST);
            }
            if($row){
                ajaxReturn(array('control'=>'index','code'=>200,'msg'=>'报名成功'),"JSON");
            }else{
                ajaxReturn(array('control'=>'index','code'=>0,'msg'=>'已经报名或信息不全'),"JSON");

            }
		}
        function admin(){
            if($_GET['admin'] == 'f379eaf3c831b04de153469d1bec345e'){
                $this->display();
            }
        }
        function record_list(){

            $db_record = D("record");
            $data_record = $db_record->order("ctime desc")->select();
//            P($data_record);
            ajaxReturn($data_record,"JSON");
        }

	}