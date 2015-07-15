<?php

class EngagementController extends \BaseController {

	public $layout = 'layouts.main';


	public $validPageTitles = [

		'some-valid-page-title-here' => [
			'viewName' => 'SomeValidPageTitleHere',
			'viewTitle' => 'Some Valid Page Title Here | Page Title',
		],

	];




	public function showPage($title)
	{
		if($this->pageIsValid($title))
		{
			$viewName = $this->getViewName($title);
			$viewTitle = $this->getViewTitle($title);

			$view = \Illuminate\Support\Facades\View::make('engagementPages.' . $viewName);
			$this->layout->title = $viewTitle;
			$this->layout->content = $view->render();
			return;

			//send hit to google analytics
		}

		return 'need to add a 404 page';

	}

	public function pageIsValid($pageTitleToCheck)
	{
		return (isset($this->validPageTitles[$pageTitleToCheck]))? :false;
	}

	public function getViewName($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['viewName'];
	}

	public function getViewTitle($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['viewTitle'];
	}

}
