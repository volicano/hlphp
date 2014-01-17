<?php
//测试控制器类
class NewsControl extends Control{
    function index(){
        echo "234";
    }

    function add(){
    	$this->display();
    }
}
?>