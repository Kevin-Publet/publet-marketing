<?php

class DemoRequestController extends \BaseController {

    public function showConversionPage()
    {
        return 'this is the show conversion function';
    }

    public function showConfirmationPage()
    {
        return 'this is the show confirmation page function';
    }

    public function sendDemoRequestViaEmail()
    {
        $data = \Illuminate\Support\Facades\Input::all();
        return $data;
    }


}
