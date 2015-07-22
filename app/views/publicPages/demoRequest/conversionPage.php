<div id="demoRequestConversionPageContainer">
    <div ng-controller="demoRequestController" class="container" id="demoRequestConversionContainer">

        <div id="demoRequestConversionPageHeader" class="text-center">
            <div id="demoRequestConversionPageHeaderTitle">
                <h2 class="homepageHeavyFont">Want to see your content marketing enhanced?</h2>
            </div>
            <div id="demoRequestConversionPageHeaderSubTitle">
                <h4 class="homepageLightFont">Fill out this short form and that's exactly what you'll get!</h4>
            </div>
        </div>

        <div id="demoRequestForm" class="col-lg-8 col-lg-offset-2">
            <form class="form-horizontal" name="demoRequestForm">

                <div class="form-group">
                    <label for="targetAudience" class="text-center"> </label>
                    <input type="text" ng-model="demoRequestTargetAudience" class="form-control input-lg" name="targetAudience" id="targetAudience" placeholder="Who is your target audience? (Please separate multiple entries with a comma.)">
                </div>

                <div class="form-group">
                    <label for="productService" class="text-center"></label>
                    <input type="text" ng-model="demoRequestProductService" class="form-control input-lg" name="productService" id="productService" placeholder="What product or service are you offering?">
                </div>

                <div class="form-group">
                    <label for="companyName" class="text-center"></label>
                    <input type="text" ng-model="demoRequestCompanyName" class="form-control input-lg" name="companyName" id="companyName" placeholder="Name of your company">
                </div>


            </form>
        </div>

        <div class="row">
            <div class="col-lg-12" ng-show="demoRequestCompanyName && demoRequestProductService && demoRequestTargetAudience">
                <p class="homepageHeavyFont">Hey! Your almost done. Just tell us where we should send your enhanced content.</p>
            </div>
            <div class="col-lg-6" ng-show="demoRequestCompanyName && demoRequestProductService && demoRequestTargetAudience">
                <div class="form-group">
                    <label for="name" class="text-center"> </label>
                    <input type="text" ng-model="demoRequestName" class="form-control input-lg" name="name" id="name" placeholder="Your name">
                </div>

                <div class="form-group">
                    <label for="email" class="text-center"></label>
                    <input type="email" ng-model="demoRequestEmail" class="form-control input-lg" name="email" id="email" placeholder="Email">
                </div>
            </div>
            <div class="col-lg-12 text-center" ng-hide="demoRequestCompanyName && demoRequestProductService && demoRequestTargetAudience">
                <a class="btn disabled btn-distribute btn-homepageHuge ">+ Complete the form first</a>
            </div>

            <div class="col-lg-6" ng-show="demoRequestCompanyName && demoRequestProductService && demoRequestTargetAudience" ng-hide="demoRequestEmail && demoRequestName || (!demoRequestCompanyName || !demoRequestProductService || !demoRequestTargetAudience)">
                <a class="btn disabled btn-distribute btn-homepageHuge ">+ Almost done</a>
            </div>
            <div class="col-lg-6" ng-show="demoRequestCompanyName && demoRequestProductService && demoRequestTargetAudience && demoRequestEmail && demoRequestName" >
                <a ng-click="sendDemoRequest(demoRequestProductService, demoRequestTargetAudience, demoRequestCompanyName, demoRequestName, demoRequestEmail)" class="btn btn-distribute btn-homepageHuge ">+ Send it to me</a>
            </div>


        </div>



    </div>
</div>
