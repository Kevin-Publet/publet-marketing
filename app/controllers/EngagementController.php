<?php

class EngagementController extends \BaseController {

	public $layout = 'layouts.main';

	public function setOuterNav()
	{
		$this->layout->outerNav = true;
	}

	public function setEngagementBodyContainer()
	{
		$this->layout->addEngagementBodyContainer = true;
	}

	public function setEngagementWrapper()
	{
		$this->layout->engagementWrapper = true;
	}

	public $validPageTitles = [

		'some-valid-page-title-here' => [
			'viewName' => 'SomeValidPageTitleHere',
			'viewTitle' => 'Some Valid Page Title Here | Page Title',
			'headline' => 'This is some headline',
			'subHeadline' => 'this is the sub headline which will show here.',
		],

	];

	public $validMarketingInfo = [

		'0000' => [
			'targetMarket' => 'someTargetMarket',
			'axpt' => 'someAccessPoint',
			'iPOV' => 'somePOV',
			'iMeth' => 'someMethod',
			'iCont' => 'someContent',
		],


	];



	public function showPage($title, $marketingKey)
	{
		if($this->pageAndMarketingKeyIsValid($title, $marketingKey))
		{
			$marketingDetails = $this->getMarketingDetails($marketingKey);
			$initiationHit = new InitiationHit($marketingDetails);

			$viewName = $this->getViewName($title);
			$viewTitle = $this->getViewTitle($title);
			$headline = $this->getHeadline($title);
			$subHeadline = $this->getSubHeadline($title);

			$view = \Illuminate\Support\Facades\View::make('engagementPages.' . $viewName);
			$this->layout->title = $viewTitle;
			$this->layout->initiationHit = $initiationHit;
			$this->layout->headline = $headline;
			$this->layout->subHeadline = $subHeadline;
			$this->setOuterNav();
			$this->setEngagementBodyContainer();
			$this->setEngagementWrapper();
			$this->layout->content = $view->render();
			return;

		}

		return '404 - The page you are looking for does not exist.';

	}

	public function pageAndMarketingKeyIsValid($pageTitleToCheck, $marketingKeyToCheck)
	{
		return ($this->pageIsValid($pageTitleToCheck) && $this->marketingKeyIsValid($marketingKeyToCheck))? :false;
	}

	public function pageIsValid($pageTitleToCheck)
	{
		return (isset($this->validPageTitles[$pageTitleToCheck]))? :false;
	}

	public function marketingKeyIsValid($marketingKeyToCheck)
	{
		return (isset($this->validMarketingInfo[$marketingKeyToCheck]))? :false;
	}

	public function getViewName($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['viewName'];
	}

	public function getViewTitle($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['viewTitle'];
	}

	public function getHeadline($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['headline'];
	}

	public function getSubHeadline($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['subHeadline'];
	}

	public function getMarketingDetails($marketingKey)
	{
		$details = [];
		$details['targetMarket'] = $this->validMarketingInfo[$marketingKey]['targetMarket'];
		$details['axpt'] = $this->validMarketingInfo[$marketingKey]['axpt'];
		$details['iPOV'] = $this->validMarketingInfo[$marketingKey]['iPOV'];
		$details['iMeth'] = $this->validMarketingInfo[$marketingKey]['iMeth'];
		$details['iCont'] = $this->validMarketingInfo[$marketingKey]['iCont'];
		return $details;
	}



}

class InitiationHit {

	public function __construct($marketingDetails = [])
	{
		$this->targetMarket = $marketingDetails['targetMarket'];
		$this->axpt = $marketingDetails['axpt'];
		$this->iPOV = $marketingDetails['iPOV'];
		$this->iMeth = $marketingDetails['iMeth'];
		$this->iCont = $marketingDetails['iCont'];

	}
}
