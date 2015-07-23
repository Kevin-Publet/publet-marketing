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
			'firstBulletPoint' => 'This is the first bullet point dynamically',
			'firstBulletPointText' => 	'This is the text to go with the bullet point.
										I dont know what I will talk about but it should be good.
										Hopefully so good that visitors will click on the nav and get interested in Publet.
										Hopefully so good even more that they will set up a demo.
										Or even ask for beta access.
										Or if those don\'t work maybe want to get emailed that special content on the homepage.',
			'secondBulletPoint' => 'This is the second bullet point dynamically',
			'secondBulletPointText' => 	'This is the text to go with the bullet point.
										I dont know what I will talk about but it should be good.
										Hopefully so good that visitors will click on the nav and get interested in Publet.
										Hopefully so good even more that they will set up a demo.
										Or even ask for beta access.
										Or if those don\'t work maybe want to get emailed that special content on the homepage.',
			'thirdBulletPoint' => 'This is the third bullet point dynamically',
			'thirdBulletPointText' => 	'This is the text to go with the bullet point.
										I dont know what I will talk about but it should be good.
										Hopefully so good that visitors will click on the nav and get interested in Publet.
										Hopefully so good even more that they will set up a demo.
										Or even ask for beta access.
										Or if those don\'t work maybe want to get emailed that special content on the homepage.',
			'fourthBulletPoint' => 'This is the fourth bullet point dynamically',
			'fourthBulletPointText' => 	'This is the text to go with the bullet point.
										I dont know what I will talk about but it should be good.
										Hopefully so good that visitors will click on the nav and get interested in Publet.
										Hopefully so good even more that they will set up a demo.
										Or even ask for beta access.
										Or if those don\'t work maybe want to get emailed that special content on the homepage.',
			'fifthBulletPoint' => 'This is the fifth bullet point dynamically',
			'fifthBulletPointText' => 	'This is the text to go with the bullet point.
										I dont know what I will talk about but it should be good.
										Hopefully so good that visitors will click on the nav and get interested in Publet.
										Hopefully so good even more that they will set up a demo.
										Or even ask for beta access.
										Or if those don\'t work maybe want to get emailed that special content on the homepage.',

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
			$firstBulletPoint = $this->getFirstBulletPoint($title);
			$firstBulletPointText = $this->getFirstBulletPointText($title);
			$secondBulletPoint = $this->getSecondBulletPoint($title);
			$secondBulletPointText = $this->getSecondBulletPointText($title);
			$thirdBulletPoint = $this->getThirdBulletPoint($title);
			$thirdBulletPointText = $this->getThirdBulletPointText($title);
			$fourthBulletPoint = $this->getFourthBulletPoint($title);
			$fourthBulletPointText = $this->getFourthBulletPointText($title);
			$fifthBulletPoint = $this->getFifthBulletPoint($title);
			$fifthBulletPointText = $this->getFifthBulletPointText($title);


			$view = \Illuminate\Support\Facades\View::make('engagementPages.' . $viewName)->with([
				'firstBulletPoint'=> $firstBulletPoint,
				'firstBulletPointText' => $firstBulletPointText,
				'secondBulletPoint'=> $secondBulletPoint,
				'secondBulletPointText' => $secondBulletPointText,
				'thirdBulletPoint'=> $thirdBulletPoint,
				'thirdBulletPointText' => $thirdBulletPointText,
				'fourthBulletPoint'=> $fourthBulletPoint,
				'fourthBulletPointText' => $fourthBulletPointText,
				'fifthBulletPoint'=> $fifthBulletPoint,
				'fifthBulletPointText' => $fifthBulletPointText,
			]);
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

	public function getFirstBulletPoint($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['firstBulletPoint'];
	}

	public function getFirstBulletPointText($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['firstBulletPointText'];
	}

	public function getSecondBulletPoint($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['secondBulletPoint'];
	}

	public function getSecondBulletPointText($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['secondBulletPointText'];
	}

	public function getThirdBulletPoint($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['thirdBulletPoint'];
	}

	public function getThirdBulletPointText($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['thirdBulletPointText'];
	}

	public function getFourthBulletPoint($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['fourthBulletPoint'];
	}

	public function getFourthBulletPointText($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['fourthBulletPointText'];
	}

	public function getFifthBulletPoint($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['fifthBulletPoint'];
	}

	public function getFifthBulletPointText($pageTitle)
	{
		return $this->validPageTitles[$pageTitle]['fifthBulletPointText'];
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
