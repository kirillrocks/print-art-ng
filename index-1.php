<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/angular-js/angular.min.js"></script>
      <script src="printPriceService.js"></script>
      <script src="app.js"></script>
   </head>
   <body ng-app="myApp" ng-controller="home">
      <div class="container container-margin">
         <div class="row">
            <div class="col-sm-4">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="assets/images/sample.jpg" class="img-responsive">
                  </div>
               </div>
            </div>
            <div class="col-sm-8">
               <div class="col-sm-12">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <button class="btn btn-warning ">Product Cost : {{ productCost }}  </button>
                        <button class="btn btn-warning ">Picture Cost : {{ pictureCost }}  </button>
                        <button class="btn btn-warning ">Paper Cost : {{ paperCost }}  </button>
                        <button class="btn btn-warning ">Mat Cost : {{ matCost }}  </button>
                        <button class="btn btn-warning ">Frame Cost : {{ frameCost }}  </button>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12">
                  <div class="panel panel-default">
                     <div class="panel-body">

                        <!-- Tabs Start Header -->
                        <div >
                           <button class="btn btn-space "
                              ng-repeat="tab in tabs" 
                              ng-click="selectedTab(tab)"
                              ng-class="{'btn-primary' : tab.id == _tab,'tab-btn btn-default' : tab.id != _tab }">{{ tab.name }}</button>
                        </div>
                        <!-- Tabs End Header -->
                        
                        <!-- Tabs Start Content -->
                        <div ng-repeat="tab in tabs">
                           <div ng-if="tab.id == _tabPanel">



                              <!-- Category Start Header -->
                              <!-- <div class="print-header">
                                 <h4>Select {{ _category_name }} </h4>
                                 <hr>
                                 <button class="btn btn-space"
                                    ng-repeat="(key,category) in tab.category"
                                    ng-click="selectedCategory(key,category)" 
                                    ng-class="{'btn-primary' : category.id == _category,'btn-default' : category.id != _category }">
                                 {{ category.name }}
                                 </button>
                              </div> -->
                              <!-- Category End Header -->
                              
                              <!-- Category Start Content -->
                              <div ng-repeat="category in tab.category" >
                                 <div ng-if="category.id == _categoryPanel "  >
                                    
                                    
                                    <!-- SubCategory Start Header -->
                                    <div class="print-header" ng-hide="_oneCategory">
                                       <h4>Category</h4>
                                       <hr>
                                       <button class="btn btn-space"
                                          ng-repeat="subcategory in category.subcategory"
                                          ng-click="selectedSubCategory(subcategory)" 
                                          ng-class="{'btn-primary' : subcategory.id == _subcategory,'btn-default' : subcategory.id != _subcategory }">
                                       {{ subcategory.name }}
                                       </button>  
                                    </div>
                                    <!-- SubCategory End Header -->
                                    
                                    <!-- SubCategory Start Content -->
                                    <div ng-repeat="subcategory in category.subcategory" >
                                       <div ng-if="subcategory.id == _subcategoryPanel && _subcategoryPanel != 'none'" >
                                          

                                          <!-- Options Start Header -->
                                          <div class="print-header">
                                             <h4>Options</h4>
                                             <hr>
                                             <button class="btn btn-space"
                                                ng-repeat="categories in subcategory.categories"
                                                ng-click="selectedCategories(categories)" 
                                                ng-class="{'btn-primary' : categories.id == _categories,'btn-default' : categories.id != _categories }">
                                             {{ categories.name }} 
                                             </button> 
                                          </div>
                                          <!-- Options End Header -->

                                       </div>
                                    </div>
                                    <!-- SubCategory End Content -->

                                 </div>
                              </div>
                              <!-- Category Start Content -->
                              <div class="print-header">
                               <hr>
                                 <div class="row">

                                    <div class="col-sm-2 text-left">
                                       <button ng-click="previous()" class="btn tab-btn btn-default">previous</button>    
                                    </div>
                                    <div class="col-sm-8 text-center">
                                       <div class="steps" ng-repeat="(key,category) in tab.category" ng-click="selectedCategory(key,category)" >
                                          <div class="step-title">{{ category.name }}</div>
                                          <div class="step-content">
                                             <span class="step-icon" ng-class="{'step-icon-selected' : category.id == _category,'step-icon' : category.id != _category }"></span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-2 text-right">
                                       <button ng-click="next()" class="btn btn-primary ">next</button>    
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Tabs End Content -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>