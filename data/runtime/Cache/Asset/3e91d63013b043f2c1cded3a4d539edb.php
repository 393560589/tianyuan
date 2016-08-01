<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/thinkcmf/public/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/thinkcmf/public/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/thinkcmf/public/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/thinkcmf/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/thinkcmf/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/thinkcmf/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/thinkcmf/public/js/jquery.js"></script>
    <script src="/thinkcmf/public/js/wind.js"></script>
    <script src="/thinkcmf/public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
</head>
<body class="body_none">
<style>
/*设置tab*/
.pop_nav {
	padding:10px 15px 0;
	margin-bottom:10px;
}
.pop_nav ul{
	border-bottom:1px solid #e3e3e3;
	padding:0 5px;
	height:25px;
	clear:both;
}
.pop_nav ul li{
	float:left;
	margin-right:10px;
}
.pop_nav ul li a{
	float:left;
	display:block;
	padding:0 10px;
	height:25px;
	line-height:23px;
}
.pop_nav ul li.current a{
	border:1px solid #e3e3e3;
	border-bottom:0 none;
	color:#333;
	font-weight:700;
	background:#fff;
	position:relative;
	border-radius:2px;
	margin-bottom:-1px;
}
.pop_cont{
	padding:0 15px;
}
/*上传*/
.edit_menu_cont {
    padding: 10px 15px;
}
.edit_uping {
    height: 30px;
    margin-bottom: 10px;
}
.edit_uping .num {
    color: #999999;
    float: right;
    margin-top: 5px;
}
.edit_uping .num em {
    color: #FF5500;
    font-style: normal;
}
.eidt_uphoto {
    border: 1px solid #CCCCCC;
}
.eidt_uphoto ul {
    height: 280px;
    overflow-y: scroll;
    padding-bottom: 10px;
    position: relative;
}
.eidt_uphoto li {
    display: inline;
    float: left;
    height: 100px;
    margin: 10px 0 0 10px;
    width: 87px;
}
.eidt_uphoto .invalid {
    background: none repeat scroll 0 0 #FBFBFB;
    border: 1px solid #CCCCCC;
    height: 98px;
    position: relative;
    width: 78px;
}
.eidt_uphoto .invalid .error {
    padding: 30px 1px;
    text-align: center;
}
.eidt_uphoto .no {
    background: url("/thinkcmf/admin/themes/simplebootx/Public/assets/images/upload_pic.jpg") no-repeat scroll center center #FBFBFB;
    border: 1px solid #CCCCCC;
    height: 98px;
    overflow: hidden;
    text-indent: -2000em;
}
.eidt_uphoto .nouplode {
    background: #FBFBFB;
    border: 1px solid #CCCCCC;
    height: 98px;
    overflow: hidden;
	text-align: center;
	padding: 0px 5px 0px 5px;
}
.eidt_uphoto .schedule {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #CCCCCC;
    height: 98px;
    line-height: 98px;
    position: relative;
    text-align: center;
}
.eidt_uphoto .schedule span {
    background: none repeat scroll 0 0 #F0F5F9;
    height: 98px;
    left: 0;
    position: absolute;
    top: 0;
}
.eidt_uphoto .schedule em {
    left: 0;
    position: absolute;
    text-align: center;
    top: 0;
    width: 78px;
    z-index: 1;
}
.eidt_uphoto .get{
	background:#ffffff;
	border:1px solid #cccccc;
	position:relative;
	overflow:hidden;
}
.eidt_uphoto .selected{
	border:2px solid #1D76B7;
}
.eidt_uphoto .get img{
	cursor:pointer;
}
.eidt_uphoto .del{
	position:absolute;
	width:15px;
	height:15px;
	background:url("/thinkcmf/admin/themes/simplebootx/Public/assets/images/upload_del.png") no-repeat;
	right:1px;
	top:1px;
	overflow:hidden;
	text-indent:-2000em;
	display:none;
}
.eidt_uphoto .del:hover{
	background-position:-20px 0;
}
.eidt_uphoto .get img{
	vertical-align:top;
	width:87px;
	height:75px;
	border-bottom:1px solid #ccc;
}
.eidt_uphoto .get input{
	border:0;
	outline:0 none;
	margin-left:3px;
}
.eidt_uphoto .get .edit{
	position:absolute;
	height:22px;
	line-height:22px;
	text-align:center;
	width:78px;
	bottom:0;
	left:0;
	background:#e5e5e5;
	color:#333;
	filter:alpha(opacity=70);
	-moz-opacity:0.7;
	opacity:0.7;
	display:none;
}
.eidt_uphoto li:hover .edit,
.eidt_uphoto li:hover .del{
	/*text-decoration:none;
	display:block;*/
}
/*上传选择按钮*/
#btupload,.addnew{
	background: url("/thinkcmf/public/js/swfupload/images/swfBnt.png") no-repeat; float:left; margin-right:10px;width:75px; height:28px; line-height:28px;font-weight:700; color:#fff;
}
#btupload{ 
    vertical-align:middle;border:none;cursor: hand;!important;cursor: pointer;
}
.addnew{
	background: url("/thinkcmf/public/js/swfupload/images/swfBnt.png") no-repeat; float:left; margin-right:10px;width:75px; height:28px; line-height:28px;font-weight:700; color:#fff;
}
.addnew{
	background-position: left bottom;
}
</style>
<script>
//用于图库加载
function set_iframe(id,src){
	if($("#"+id).attr("src") == ""){
		$("#"+id).attr("src",src); 
	}
}

//网络地址
function addonlinefile(obj) {
	var strs = $(obj).val() ? '|'+ $(obj).val() :'';
	$('#att-status').html(strs);
}

//是否添加水印设置
function change_params(){
	if($('#watermark_enable').attr('checked')) {
		swfu.addPostParam('watermark_enable', '1');
	} else {
		swfu.removePostParam('watermark_enable');
	}
}
//图片选择处理回调
function album_cancel(obj,id,source){
	//图片地址
	var src = $(obj).attr("data-path");
	//上传图片文件名
	var filename = $(obj).attr("title");
	//选择状态中的数据对象
	var selected = $("#fsUploadProgress .selected");
	if($("#aid-"+id).hasClass('selected')){
		$("#aid-"+id).removeClass("selected");
		selected = $("#fsUploadProgress .selected");
		var imgstr = $("#att-status").html();
		var length = selected.children("img").length;
		var strs = filenames = '';
		for(var i=0;i<length;i++){
			strs += '|'+selected.children("img").eq(i).attr('path');
			filenames += '|'+selected.children("img").eq(i).attr('title');
		}
		$('#att-status').html(strs);
		$('#att-status').html(filenames);
	} else {
		var num = $('#att-status').html().split('|').length;
		var file_upload_limit = '1';
		if(num > file_upload_limit) {alert('不能选择超过'+file_upload_limit+'个附件'); return false;}
		$("#aid-"+id).addClass("selected");
		$('#att-status').append('|'+src);
		$('#att-name').append('|'+filename);
	}
}
</script>
<script type="text/javascript">
var swfu = '';
	$(document).ready(function(){
		Wind.use("swfupload",GV.DIMAUB+"public/js/swfupload/handlers.js",function(){
		      swfu = new SWFUpload({
			flash_url:"/thinkcmf/public/js/swfupload/swfupload.swf",
			upload_url:"<?php echo U('asset/swfupload');?>",
			file_post_name : "Filedata",
			post_params:{
			                        "<?php echo C('VAR_SESSION_ID');?>":"<?php echo session_id();?>",
			                        "thumb_width":"0",
			                        "thumb_height":"0",
			                        "watermark_enable":"1",
			                        "filetype_post":"jpg|jpeg|gif|png|bmp|zip"
			},
			file_size_limit:"20240KB",
			file_types:"*.jpg;*.jpeg;*.gif;*.png;*.bmp;*.zip",
			file_types_description:"All Files",
			file_upload_limit:"1",
			custom_settings : {progressTarget : "fsUploadProgress",cancelButtonId : "btnCancel"},
	 
			button_image_url: "",
			button_width: 75,
			button_height: 28,
			button_placeholder_id: "buttonPlaceHolder",
			button_text_style: "",
			button_text_top_padding: 3,
			button_text_left_padding: 12,
			button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
			button_cursor: SWFUpload.CURSOR.HAND,

			file_dialog_start_handler : fileDialogStart,
			file_queued_handler : fileQueued,
			file_queue_error_handler:fileQueueError,
			file_dialog_complete_handler:fileDialogComplete,
			upload_progress_handler:uploadProgress,
			upload_error_handler:uploadError,
			upload_success_handler:uploadSuccess,
			upload_complete_handler:uploadComplete
		      });
		});
	})</script>
<div class="wrap" style="padding:5px;">
  <div class="pop_nav">
    <ul class="js-tabs-nav unstyled">
      <li class="current"><a href="javascript:;;">上传附件</a></li>
      <li class=""><a href="javascript:;;">网络文件</a></li>
    </ul>
  </div>
  <div class="js-tabs-content">
    <div class="pop_cont">
      <div class="">
        <div class="edit_uping"> 
             <!--选择按钮-->
            <div class="addnew"><span  id="buttonPlaceHolder"></span></div>
            <span class="num">最多上传<em> 1</em> 个附件,单文件最大 <em>20240 KB</em>，<em style="cursor: help;" title="可上传格式：jpg,jpeg,gif,png,bmp">支持格式？</em></span>
        </div>
        <div class="eidt_uphoto">
          <ul id="fsUploadProgress" class="cc">
            <!--<li class="J_empty"><div class="no">暂无</div></li>-->
          </ul>
        </div>
      </div>
    </div>
    <div class="pop_cont"> 请输入网络地址
      <div class="bk3"></div>
      <input type="text" name="info[filename]" class="input" value=""  style="width:600px;" placeholder="http://"  onblur="addonlinefile(this)">
    </div>
    <div class="pop_cont">
      <iframe name="album-list" src="" frameborder="false" scrolling="no" style="overflow-x:hidden;border:none" width="100%" height="350" allowtransparency="true" id="album_list"></iframe>
    </div>
      </div>
</div>
<div id="att-status" style="display:none"></div>
<div id="att-status-del" style="display:none"></div>
<div id="att-name" style="display:none"></div>
<script src="/thinkcmf/public/js/common.js"></script> 
<script>
$(function(){
    $("#att-status").html("");
    $("#att-status-del").html("");
    $("#att-name").html("");
});
</script>
</body>
</html>