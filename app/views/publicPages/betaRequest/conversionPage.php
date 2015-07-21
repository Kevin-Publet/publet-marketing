<div ng-controller="betaRequestController" class="container" id="betaRequestConversionContainer">



    <div id="betaRequestConversionPageHeader">
        <div id="betaRequestConversionPageHeaderTitle">
            <h3>Ready to convert more customers with enhanced Content Marketing?</h3>
        </div>
        <div id="betaRequestConversionPageHeaderSubTitle">
            <h4>Complete the short form below and let's get started!</h4>
        </div>
    </div>

    <div id="betaRequestForm">
        <form class="form-horizontal" name="betaRequestForm">

            <div class="form-group">
                <label for="targetAudience" class="text-center"> Who is your target audience? (Please separate multiple entries with a comma)</label>
                <input type="text" ng-model="betaRequestTargetAudience" class="form-control input-lg" name="targetAudience" id="targetAudience" placeholder="Real estate agents, SaaS business owners, PHP Developers">
            </div>

            <div class="form-group">
                <label for="companyName" class="text-center">Your Company's name: </label>
                <input type="text" ng-model="betaRequestCompanyName" class="form-control input-lg" name="companyName" id="companyName" placeholder="Google, Inc.">
            </div>

            <div class="form-group">
                <label for="name" class="text-center">Your name: </label>
                <input type="text" ng-model="betaRequestName" class="form-control input-lg" name="name" id="name" placeholder="Larry Page">
            </div>

            <div class="form-group">
                <label for="email" class="text-center">Enter your email: </label>
                <input type="email" ng-model="betaRequestEmail" class="form-control input-lg" name="email" id="email" placeholder="boss@google.com">
            </div>

        </form>
    </div>

    <a ng-click="sendBetaRequest(betaRequestProductService, betaRequestTargetAudience, betaRequestCompanyName, betaRequestName, betaRequestEmail)" class="btn btn-danger">Launch Campaign</a>
</div>