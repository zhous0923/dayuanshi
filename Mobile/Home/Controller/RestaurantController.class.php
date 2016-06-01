<?php
/*
 * title :餐馆模块
 * create time :2016-5-26
 * */

namespace Home\Controller;
use Think\Controller;
class RestaurantController extends Controller{
	
	public function index(){
		
		$this->display("Restaurant/index");
	}
}