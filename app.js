var app = angular.module("myApp", []);

app.service('printPriceService',printPriceService);

app.controller('home', function($scope, $http,printPriceService) {

	//initialing the product price
	var product_price = 10;
    printPriceService.setProductCost(product_price);
    $scope.product_price = printPriceService.getProductCost();

    //Getting the Tabs
    var req = $http.get('category.php');
    req.then(function(data) {

        var res = data.data;
        printPriceService.setTabs(res);
        $scope.tabs = res;

    });


    $scope.selectedTab = function(tab) {
    	 $scope._tab = $scope._tabPanel = tab.id;
    	// printPriceService.setTab(tab,$scope);
    }
    
    $scope.selectedCategory = function (category) {
        // printPriceService.subcategoryShowHide(category.id,$scope);
        $scope._category = $scope._categoryPanel = category.id;   
    }

    $scope.selectedSubCategory = function (subcategory) {
        $scope._subcategory = $scope._subcategoryPanel = subcategory.id;   
    }

    $scope.selectedCategories = function (categories) {
        $scope._categories = $scope.categoriesPanel = categories.id;   
    }


});