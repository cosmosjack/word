/**
 * Created by Administrator on 2017-10-12.
 */
function show_detail(e){
    console.log($(e).attr("index"));
        var desc = {"1":"工厂长白班(不用通宵熬夜)","2":"工厂两班倒(一月白班，一月夜班)","3":"不限地区(大部分安排东莞)","4":"不要求高薪(保证工资不低于市场价)","5":"有实习的地方就可以"}
        var str_arr = $(e).attr("index").split(',');
    console.log(str_arr);
        if(str_arr.length > 0){
            str = '';
            for(var i=0;i<str_arr.length;i++){
                str += desc[str_arr[i]]+",";
            }
            str = str.substring(0,str.length-1);
        }else{
            var str = '暂无要求';
        }

    swal({title:"小小要求",text:str,type:"success"});
}
$(document).ready(function(){
    var ApiUrl = "http://"+window.location.host+"/zfd/";
    /* 获取 商品的列表 start */
    $.ajax({
        url: ApiUrl+"/index.php/index/record_list", //&is_self=1  // 是否显示只显示自己直系管理的店铺 开关
        type:"GET",
        data:{},
        success:function(msg){
            //console.log(msg);
            //alert(JSON.stringify(msg));
            //return false;
            /* template.config("escape",false);
             var js_data = document.getElementById('js_data').innerHTML;
             var r = template(js_data,msg);
             $("#tpl_data").append(r);*/
            $('.dataTables-example').DataTable( {
                data: msg,
                //使用对象数组，一定要配置columns，告诉 DataTables 每列对应的属性
                //data 这里是固定不变的，name，position，salary，office 为你数据里对应的属性
                //"ajax": AgentUrl+"/index.php?act=agent_user&op=index",
                columns: [
                    { data: 'name' },//店铺名字
                    { data: 'phone' }, //关系级别
                    { data: 'wx' },//代理人名字
                    //{ data: 'store_user' },//联系人
                    /* { data:null,"defaultContent":"<span id='"+ this.a_id+"' value='' class='show_span'><em class='show_em'></em></span>",render:function(e){
                     console.log(e);
                     }},*/
                    { data:'time'},
                    { data: 'age' },
                    { data: 'school' },
                    { data: 'agree' },
                    { data: null,render:function(e){
                        var timestamp = e.ctime;
                        var newDate = new Date();
                         newDate.setTime(timestamp * 1000);
                        return newDate.toDateString();
                    } },
                    {data:null,render:function(e){
                        //console.log(e);
                        return "<span index="+e.company+" onclick='show_detail(this);' class='btn btn-primary'>备注</span>";
                    }}
                ]
            } );
            /* 这里是可以根据返回的数据来改变 css 或 js 传值 start */
            var table_data = $('.dataTables-example').DataTable();
            var store_table = $("#store_table_tbody");
            var data = table_data.row($("#store_table_tbody").children('tr').eq(5)).data();

            /* 这里是可以根据返回的数据来改变 css 或 js 传值 start */
        },
        error:function(){
            alert('访问失败');
        }
    });
    /* 获取 商品的列表 start */

    //$(".dataTables-example").dataTable();
    var oTable=$("#editable").dataTable();
    /* oTable.$("td").editable("../example_ajax.php",{"callback":function(sValue,y){
     var aPos=oTable.fnGetPosition(this);
     oTable.fnUpdate(sValue,aPos[0],aPos[1])
     },
     "submitdata":function(value,settings){
     return{
     "row_id":this.parentNode.getAttribute("id"),
     "column":oTable.fnGetPosition(this)[2]}
     },
     "width":"90%","height":"100%"
     })*/
});
