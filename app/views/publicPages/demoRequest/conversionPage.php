<div ng-controller="demoRequestController" class="container" id="demoRequestConversionContainer">


    <div id="demoRequestConversionPageHeader">
        <div id="demoRequestConversionPageHeaderTitle">
            <h2>This is the conversion page for Demo requests</h2>
        </div>
        <div id="demoRequestConversionPageHeaderSubTitle">
            <h4>This is the subtitle of the page</h4>
        </div>
    </div>

    <div id="demoRequestForm">
        <form class="form-horizontal" name="demoRequestForm">

            <div class="form-group">
                <label for="productService" class="text-center"> </label>
                <input type="text" ng-model="demoRequestProductService" class="form-control input-lg" name="productService" id="productService" placeholder="Description of your company's product or service">
            </div>

            <div class="form-group">
                <label for="targetAudience" class="text-center"> </label>
                <input type="text" ng-model="demoRequestTargetAudience" class="form-control input-lg" name="targetAudience" id="targetAudience" placeholder="Description of your company's target audience">
            </div>

            <div class="form-group">
                <label for="companyName" class="text-center">Company's name: </label>
                <input type="text" ng-model="demoRequestCompanyName" class="form-control input-lg" name="companyName" id="companyName" placeholder="Aamaco">
            </div>

            <div class="form-group">
                <label for="name" class="text-center">Enter your name: </label>
                <input type="text" ng-model="demoRequestName" class="form-control input-lg" name="name" id="name" placeholder="Carl Winslow">
            </div>

            <div class="form-group">
                <label for="email" class="text-center">Enter your email: </label>
                <input type="email" ng-model="demoRequestEmail" class="form-control input-lg" name="email" id="email" placeholder="carl@familyMatters.com">
            </div>

        </form>
    </div>

    <a ng-click="sendDemoRequest(demoRequestProductService, demoRequestTargetAudience, demoRequestCompanyName, demoRequestName, demoRequestEmail)" class="btn btn-primary">Click</a>
</div>