<?php

class HomeController extends BaseController {

	public $layout = 'layouts.main';

	public function setOuterNav()
	{
		$this->layout->outerNav = true;
	}



	public function showHomePage()
	{
		$view = View::make('publicPages.homepage');
		$this->layout->title = 'Digital Content that Converts | Publet';
		$this->setOuterNav();
		$this->layout->content = $view->render();
	}

}
