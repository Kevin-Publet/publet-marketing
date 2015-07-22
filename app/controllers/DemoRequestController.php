<?php

class DemoRequestController extends \BaseController {

    public $layout = 'layouts.main';

    public function setInnerNav()
    {
        $this->layout->innerNav = true;
    }

    public function showConversionPage()
    {
        $view = \Illuminate\Support\Facades\View::make('publicPages.demoRequest.conversionPage');
        $this->layout->title = 'See Your Content Marketing Enhanced';
        $this->setInnerNav();
        $this->layout->content = $view->render();
    }

    public function showConfirmationPage()
    {
        $view = \Illuminate\Support\Facades\View::make('publicPages.demoRequest.confirmationPage');
        $this->layout->title = 'Your request has been received';
        $this->setInnerNav();
        $this->layout->content = $view->render();
    }

    public function sendDemoRequestViaEmail()
    {
        $data = new DemoRequest();
        $data->name = \Illuminate\Support\Facades\Input::get('name');
        $data->email = \Illuminate\Support\Facades\Input::get('email');
        $data->companyName = \Illuminate\Support\Facades\Input::get('companyName');
        $data->productService = \Illuminate\Support\Facades\Input::get('productService');
        $data->targetAudience = \Illuminate\Support\Facades\Input::get('targetAudience');

        \Illuminate\Support\Facades\Mail::send('publicPages.demoRequest.sendDemoRequestToPublet', ['data' => $data], function($message)
        {
            $message->to('leads@publet.com')->subject('New Demo Request');
        });

        return 'good';

    }


}

class DemoRequest {


}
