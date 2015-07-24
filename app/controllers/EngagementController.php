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
			'viewName' => 'engagementContentView',
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
			'thirdBulletPointText' => 'This is the text to go with the bullet point.
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

		'2-performance-indicators-that-prove-your-content-strategy-sucks' => [
			'viewName' => 'engagementContentView',
			'viewTitle' => '2 Performance Indicators That Prove Your Content Strategy Sucks | Publet - Enhance your content marketing',
			'headline' => '2 Performance Indicators That Prove Your Content Strategy Sucks',
			'subHeadline' => 'Look out for these signals and keep your business from a weak content marketing strategy.',
			'firstBulletPoint' => '1. A Low Return On Investment. Clearly!',
			'firstBulletPointText' => 	'If you have little to no ROI from your content marketing efforts there is obviously a problem
										Whether its a lack of call-to-actions, an inability to engage your audience effectively, or a
										lagging sales process - it all boils down to one thing. Your Strategy Needs Fixing!
										A strong strategy not only brings in revenue, but removes some pressure from your inbound team as prospective customers who\'ve
										felt the \'value-add\' of your business are more likely to convert.',

			'secondBulletPoint' => '2. Weak Content Engagement.',
			'secondBulletPointText' => 	'Weak engagement is not only a sign of a poor content strategy, it also indicates that your business does not
										fully understand the market. And if you don\'t intimately understand the needs of your customers
										should you really be expecting to convert them with your content?
										Of course you want to. But its not likely.',

			'thirdBulletPoint' => 'Ok, How Do I Fix These Things???',
			'thirdBulletPointText' => 'Having some of these issues and want to know how to fix them? Sorry. This article was made to serve the single purpose of telling you how much your content needs improvement.
										There are no remedies here! Just kidding, relax. If we didn\'t give you some advice on how to fix these
										issues we wouldn\'t be giving you much of a \'value-add\' now would we?
										...See what we did there?  Let\'s get started with some simple steps to improve your content strategy. ',

			'fourthBulletPoint' => 'Tip: Increasing Your ROI',
			'fourthBulletPointText' => 	'First things first. You have to remember the biggest part of content marketing...
										It\'s marketing! It sounds silly, but you will not believe how many businesses still produce content
										for the purpose of marketing without bare essentials like call-to-actions, or re-engagement preparations.
										Ensure you analyze your content for places you can put some calls to action without diluting the value.
										Also don\'t forget to lay the groundwork for later re-engagement, using tools like Remarketing and opt-in boxes
										which can help solve this problem.',

			'fifthBulletPoint' => 'Tip: Increasing Audience Engagement',
			'fifthBulletPointText' => 	'If you can\'t get your audience to engage with your content you are either doing one of two things wrong.
										You are either targeting the wrong audience, or not producing content your audience finds valuable.
										It really is that simple. So to start solving the problem, first ensure your targeting isn\'t the issue. Run small tests
										to see if the right people are getting to your content. After ensuring the issue is not your targeting, you can move on to
										producing content your audience finds valuable. An easy way to produce high quality content is to have an deep understanding
										of the market needs. How? Do some research. Run a few google queries, follow a few targets on twitter, do whatever is necessary to see what your audience is
										already engaging with. Please avoid being creepy. And lastly when you find out what your audience wants, make an effort to
										deliver it to them in a creative and memorable way. Remember this is content marketing!',

		],

		'3-profit-killing-mistakes-to-avoid-when-hiring-a-content-marketer' => [
			'viewName' => 'engagementContentView',
			'viewTitle' => '3 Profit Killing Mistakes To Avoid When Hiring A Content Marketer | Publet - Enhance your content marketing',
			'headline' => '3 Profit Killing Mistakes To Avoid When Hiring A Content Marketer',
			'subHeadline' => 'Don\'t make these all too common mistakes when hiring your next content marketer.',
			'firstBulletPoint' => '1. Hiring With Zero Proof Of Content Marketing Success.',
			'firstBulletPointText' => 	'If you have little to no ROI from your content marketing efforts there is obviously a problem
										Whether its a lack of call-to-actions, an inability to engage your audience effectively, or a
										lagging sales process - it all boils down to one thing. Your Strategy Needs Fixing!
										A strong strategy not only brings in revenue, but removes some pressure from your inbound team as prospective customers who\'ve
										felt the \'value-add\' of your business are more likely to convert.',

			'secondBulletPoint' => '2. Hiring Without Testing The Waters First.',
			'secondBulletPointText' => 	'Weak engagement is not only a sign of a poor content strategy, it also indicates that your business does not
										fully understand the market. And if you don\'t intimately understand the needs of your customers
										should you really be expecting to convert them with your content?
										Of course you want to. But its not likely.',

			'thirdBulletPoint' => '3. Hiring A Content Marketer Without Content Samples. Seriously?',
			'thirdBulletPointText' => 'Having some of these issues and want to know how to fix them? Sorry. This article was made to serve the single purpose of telling you how much your content needs improvement.
										There are no remedies here! Just kidding, relax. If we didn\'t give you some advice on how to fix these
										issues we wouldn\'t be giving you much of a \'value-add\' now would we?
										...See what we did there?  Let\'s get started with some simple steps to improve your content strategy. ',

			'fourthBulletPoint' => 'Don\'t Make These Mistakes!',
			'fourthBulletPointText' => 	'First things first. You have to remember the biggest part of content marketing...
										It\'s marketing! It sounds silly, but you will not believe how many businesses still produce content
										for the purpose of marketing without bare essentials like call-to-actions, or re-engagement preparations.
										Ensure you analyze your content for places you can put some calls to action without diluting the value.
										Also don\'t forget to lay the groundwork for later re-engagement, using tools like Remarketing and opt-in boxes
										which can help solve this problem.',

			'fifthBulletPoint' => '3 Tips To Make Sure You Hire The Right Content Marketer',
			'fifthBulletPointText' => 	'If you can\'t get your audience to engage with your content you are either doing one of two things wrong.
										You are either targeting the wrong audience, or not producing content your audience finds valuable.
										It really is that simple. So to start solving the problem, first ensure your targeting isn\'t the issue. Run small tests
										to see if the right people are getting to your content. After ensuring the issue is not your targeting, you can move on to
										producing content your audience finds valuable. An easy way to produce high quality content is to have an deep understanding
										of the market needs. How? Do some research. Run a few google queries, follow a few targets on twitter, do whatever is necessary to see what your audience is
										already engaging with. Please avoid being creepy. And lastly when you find out what your audience wants, make an effort to
										deliver it to them in a creative and memorable way. Remember this is content marketing!',

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

		'2958' => [
			'targetMarket' => 'Businesses hiring digital or content marketers',
			'axpt' => 'angel.co',
			'iPOV' => 'Indirect',
			'iMeth' => 'Direct Message',
			'iCont' => '234kjdsdf9',
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

class InitiationContentStorage {

	public $initiationContentUsed = [

		'234kjdsdf9' => '{{COMPANYNAME}} team,
						Hello. I was wondering if the {{POSITIONTITLE}} was still available or if there was another you thought I could be a good fit for.
						Here’s some info on me: I am proven digital marketer with experience and a track record of success.
						I also have some full stack development skills (PHP, HTML/CSS, Angular, Laravel, Bootstrap, etc.)
						which allows me to fill various roles as the needs of your business change.
						To see if you like my approach to digital marketing you can check out some writings
						 I recently put together for Publet, a SaaS startup helping businesses enhance their content marketing. You can find those at:
						http://next.publet.com/engagement/2-performance-indicators-that-prove-your-content-strategy-sucks/{{TRACKINGCODE}}
						and
						http://next.publet.com/engagement/3-profit-killing-mistakes-to-avoid-when-hiring-a-content-marketer/{{TRACKINGCODE}}.
						You can also learn more about me by checking out my interactive resume at http://kevinwashington.me/resume
						or viewing some of my work at http://kevinwashington.me/body-of-work
						Have a great day
						Kevin',


	];
}
