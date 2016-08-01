<?php

/**
 * 测试页面
 */
namespace Test\Controller;
use Common\Controller\AdminbaseController;
class IndexadminController extends AdminbaseController {
    //登录
	public function index() {
		echo "this is a test";
		echo "</br>";
		
		
		$m=M('Test');
		$n=$m->select();
		var_dump($n);
		exit;
		$this->display("Indexadmin/index");
	}
	public function submit(){
		$data['username']=I(post.username);
		$data['passwd']=I(post.passwd);
		$data['email']=I(post.email);
		var_dump($data['username']);
		
		
		
		
	}

}