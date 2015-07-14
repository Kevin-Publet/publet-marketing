<?php

class DemoRequestController extends \BaseController {

    public $layout = 'layouts.main';

    public function showConversionPage()
    {
        $view = \Illuminate\Support\Facades\View::make('publicPages.demoRequest.conversionPage');
        $this->layout->title = 'See Your Content Marketing Enhanced';
        $this->layout->content = $view->render();
    }

    public function showConfirmationPage()
    {
        $view = \Illuminate\Support\Facades\View::make('publicPages.demoRequest.confirmationPage');
        $this->layout->title = 'Your request has been received';
        $this->layout->content = $view->render();
    }

    public function sendDemoRequestViaEmail()
    {
        $data = \Illuminate\Support\Facades\Input::all();
        return $data;
    }


}
