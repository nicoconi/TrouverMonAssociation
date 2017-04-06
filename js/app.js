// script.js

    // create the module and name it scotchApp
 
var statsApp = angular.module('statsApp', ['ngRoute']);

    // configure our routes
     statsApp.config(function($routeProvider) {
        $routeProvider

        
        .when('/stat1', {
                templateUrl : 'stats/stat1.php',
                controller  : 'statsController'
            })
       
           .when('/stat2', {
                templateUrl : 'stats/stat2.php',
                controller  : 'stats2Controller'
            })
       
            .when('/stat3', {
                templateUrl : 'stats/stat3.php',
                controller  : 'stats3Controller'
            })
       
           .when('/stat4', {
                templateUrl : 'stats/stat4.php',
                controller  : 'stats4Controller'
            })
         .when('/stat5', {
                templateUrl : 'stats/stat5.php',
                controller  : 'stats5Controller'
            })
       
        .when('/stat6', {
                templateUrl : 'stats/stat6.php',
                controller  : 'stats6Controller'
            })
       
        
    });

 statsApp.controller('statsController', function($scope) {
        $scope.pageClass = 'stat1';    
    });

statsApp.controller('stats2Controller', function($scope) {
        $scope.pageClass = 'stat2';    
    });
statsApp.controller('stats3Controller', function($scope) {
        $scope.pageClass = 'stat3';    
    });

statsApp.controller('stats4Controller', function($scope) {
        $scope.pageClass = 'stat4';    
    });

statsApp.controller('stats5Controller', function($scope) {
        $scope.pageClass = 'stat5';    
    });
statsApp.controller('stats6Controller', function($scope) {
        $scope.pageClass = 'stat6';    
    });