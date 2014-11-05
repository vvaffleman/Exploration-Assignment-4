<?php namespace controllers;
use core\view as View;

class Project extends \core\controller{

	/**
	 * call the parent construct
	 */
	public function __construct(){
		parent::__construct();

		$this->language->load('welcome');
	}

	/**
	 * define page title and load template files
	 */
	public function index(){

		$data['title'] = 'Welcome';
		$data['welcome_message'] = $this->language->get('welcome_message');

		View::rendertemplate('header', $data);
		View::render('project/index', $data);
		View::rendertemplate('footer', $data);
	}

}
