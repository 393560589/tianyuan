<?php

/**
 * 测试页面
 */
namespace Test\Controller;
use Common\Controller\HomebaseController;
class IndexController extends HomebaseController {
    //登录
	public function index() 
		{
		 $this->show('这是一个小测试');
		 echo "</br>";
		 $this->model=D('Posts');
		 echo "当前时间是".$this->model->mGetDate();
	    echo "</br>";
		 $b=$this->model->select();	
		 //var_dump($b);
		 echo "</br>";
		 $this->assign('b',$b);
       $this->assign('name','this is a name');		
	    $this->display(':index');
		}
		public function test(){
		
				
		echo "dfvdfsdfsf";
			
		}
}