<?php

class BetaRequestController extends \BaseController {

	public $layout = 'layouts.main';

	public function showConversionPage()
	{
		$view = \Illuminate\Support\Facades\View::make('publicPages.betaRequest.conversionPage');
		$this->layout->title = 'Get started with Publet | Request Access';
		$this->layout->content = $view->render();
	}

	public function showConfirmationPage()
	{

	}

	public function sendBetaRequestViewEmail()
	{

	}

}
