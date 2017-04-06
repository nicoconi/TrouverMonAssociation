// script.js

    // create the module and name it scotchApp
        // also include ngRoute for all our routing needs
    var mainApp = angular.module('mainApp', ['ngRoute']);

    // configure our routes
    mainApp.config(function($routeProvider) {
        $routeProvider

          //  route for the home page
        
        .when('/', {
                templateUrl : 'pages/map.php',
                controller  : 'mainController'
            })
            .when('/map', {
                templateUrl : 'pages/map.php',
                controller  : 'mainController'
            })
        
            .when('/list', {
                templateUrl : 'pages/list.php',
                controller  : 'listController'
            })
        
       

        
    });

 mainApp.controller('mainController', function($scope) {
        $scope.pageClass = 'page-home';    
    });

 mainApp.controller('listController', function($scope) {
        $scope.pageClass = 'page-list';    
    });

