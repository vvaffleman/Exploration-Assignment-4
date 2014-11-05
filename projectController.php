<?php namespace controllers;
use core\view as View;

//main project controller
class ProjectController extends \core\controller{

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
		View::render('project/login', $data);
		View::rendertemplate('footer', $data);
	}

	public function register(){
		$data['title'] = 'Welcome';
		$data['welcome_message'] = $this->language->get('welcome_message');

		View::rendertemplate('header', $data);
		View::render('project/register', $data);
		View::rendertemplate('footer', $data);
	}
}
