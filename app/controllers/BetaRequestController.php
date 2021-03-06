<?php

class BetaRequestController extends \BaseController {

	public $layout = 'layouts.main';

	public function setInnerNav()
	{
		$this->layout->innerNav = true;
	}


	public function showConversionPage()
	{
		$view = \Illuminate\Support\Facades\View::make('publicPages.betaRequest.conversionPage');
		$this->layout->title = 'Get started with Publet | Request Access';
		$this->setInnerNav();
		$this->layout->content = $view->render();
	}

	public function showConfirmationPage()
	{
		$view = \Illuminate\Support\Facades\View::make('publicPages.betaRequest.confirmationPage');
		$this->layout->title = 'Thank You | Your Request to join Publet Received!';
		$this->setInnerNav();
		$this->layout->content = $view->render();
	}

	public function sendBetaRequestViaEmail()
	{
		$data = new BetaRequest();
		$data->name = \Illuminate\Support\Facades\Input::get('name');
		$data->email = \Illuminate\Support\Facades\Input::get('email');
		$data->companyName = \Illuminate\Support\Facades\Input::get('company');
		$data->targetAudience = \Illuminate\Support\Facades\Input::get('targetAudience');

		\Illuminate\Support\Facades\Mail::send('publicPages.betaRequest.sendBetaRequestToPublet', ['data' => $data], function($message)
		{
			$message->to('leads@publet.com')->subject('New Beta Access Request');
		});

		return 'good';
	}

}

class BetaRequest {

}
