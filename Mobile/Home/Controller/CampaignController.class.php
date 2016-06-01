<?php

/* 
	title		:活动业务模块
	createTime	:2016-05-16 9:55
	Ramrk		:主页显示、
	-----------------------------
	updateTime	:2016-05-16 9:55
	updateName	:李亚洲
	UpdateRamrk :创建活动主页
	-----------------------------
*/
namespace Home\Controller;
use Think\Controller;
class CampaignController extends Controller {
    public function index(){        
        $this->display("/Campaign/index");
    }
    
    public function lists(){
    	$this->display("/Campaign/lists");
    }
    
    public function detail(){
    	$this->display("/Campaign/detail");
    }
}