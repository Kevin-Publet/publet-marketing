<div ng-controller="betaRequestController" class="container" id="betaRequestConversionContainer">


    {{tester}}
    <div id="betaRequestConversionPageHeader">
        <div id="betaRequestConversionPageHeaderTitle">
            <h2>This is the conversion page for Demo requests</h2>
        </div>
        <div id="betaRequestConversionPageHeaderSubTitle">
            <h4>This is the subtitle of the page</h4>
        </div>
    </div>

    <div id="betaRequestForm">
        <form class="form-horizontal" name="betaRequestForm">

            <div class="form-group">
                <label for="productService" class="text-center"> </label>
                <input type="text" ng-model="betaRequestProductService" class="form-control input-lg" name="productService" id="productService" placeholder="Description of your company's product or service">
            </div>

            <div class="form-group">
                <label for="targetAudience" class="text-center"> </label>
                <input type="text" ng-model="betaRequestTargetAudience" class="form-control input-lg" name="targetAudience" id="targetAudience" placeholder="Description of your company's target audience">
            </div>

            <div class="form-group">
                <label for="companyName" class="text-center">Company's name: </label>
                <input type="text" ng-model="betaRequestCompanyName" class="form-control input-lg" name="companyName" id="companyName" placeholder="Aamaco">
            </div>

            <div class="form-group">
                <label for="name" class="text-center">Enter your name: </label>
                <input type="text" ng-model="betaRequestName" class="form-control input-lg" name="name" id="name" placeholder="Carl Winslow">
            </div>

            <div class="form-group">
                <label for="email" class="text-center">Enter your email: </label>
                <input type="email" ng-model="betaRequestEmail" class="form-control input-lg" name="email" id="email" placeholder="carl@familyMatters.com">
            </div>

        </form>
    </div>

    <a ng-click="sendBetaRequest(betaRequestProductService, betaRequestTargetAudience, betaRequestCompanyName, betaRequestName, betaRequestEmail)" class="btn btn-primary">Click</a>
</div>