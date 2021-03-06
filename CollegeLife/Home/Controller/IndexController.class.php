<?php
namespace Home\Controller;

/**
* 静态页面控制器
*/
class IndexController extends CommonController {
    public function index(){
        // 只有在首页时才显示“登陆”和“注册”
        $this->assign('home', 'home');
        $this->assign(C('TOKEN_NAME'), get_token(C('TOKEN_NAME')));
        $this->display('index');
    }

    /**
    * 商城
    * @return 
    */
    public function shopCenter() {
        $this->display();
    }

    /**
    * 关于大学时光
    * @return
    */
    public function about() {
        $this->display();
    }

    /**
    * 联系我们
    * @return
    */
    public function contact() {
        $this->display();
    }
}