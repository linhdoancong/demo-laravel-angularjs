var app = angular.module("demoApp", [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
}); 
app.controller("demoController", function($scope, $http) {
	$scope.input_item = [];	
	$scope.init = function() {
		$http.get('getListItems')
		.success(function(data, status, headers, config) {
			$scope.data = data;
		});
	}

	$scope.submit = function(){
		$input_item = $scope.input_item.filter(function(item){
			return angular.isNumber(item);
		});
		$http.post('storeListItems', {'list':JSON.stringify($input_item)})
		.success(function(data, status, headers, config) {
			$scope.input_item = [];
			$scope.data = data;
		});
	}

	$scope.remove = function(id){
		$http.post('deleteItem', {id : id})
		.success(function(data, status, headers, config) {
			$scope.data = data;
		});
	}

	$scope.init();
});