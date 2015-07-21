 <div id="betaRequestConversionPageContainer" >

     <div id="betaRequestConversionFormContainer" ng-controller="betaRequestController" class="container" >

         <div id="betaRequestConversionPageHeader" class="text-center">
             <div id="betaRequestConversionPageHeaderTitle">
                 <h3>Ready to convert more customers with enhanced Content Marketing?</h3>
             </div>
             <div id="betaRequestConversionPageHeaderSubTitle">
                 <h4>Of course you are. Complete the short form below and let's get started!</h4>
             </div>
         </div>

         <div id="betaRequestForm" class="col-md-8 col-md-offset-2">
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
             <a ng-click="sendBetaRequest(betaRequestProductService, betaRequestTargetAudience, betaRequestCompanyName, betaRequestName, betaRequestEmail)" class="btn btn-danger">Launch Campaign</a>

         </div>

     </div>
 </div>
