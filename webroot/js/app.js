var app=angular.module('single-page-app',['ngRoute']);


app.config(function($routeProvider){


      $routeProvider
          .when('/',{
                templateUrl: 'index'
          })
          .when('/add',{
                templateUrl: 'add',
                controller:'cfgController'
          })
          .when('/edit/:id',{
                templateUrl: 'add',
                controller:'UsereditCtrl'
          })
          .when('/list',{
                templateUrl: 'index'
          });



});


app.controller('cfgController',function($scope){
    $scope.message="Hello world";
    App.setPage("form_validation");
    App.init();
});
app.controller('UsereditCtrl',['$scope','$routeParams','$http',function($scope,$routeParams,$http){
    	App.setPage("form_validation");
        App.init();
        $scope.item=[];
        $http.get('edit/'+$routeParams.id+'.json').success (function(data){
               $scope.item;
             
            }); 
        $scope.save=function(){
             console.log( $scope.item);
        }    
}]);