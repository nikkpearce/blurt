var MessageApp = angular.module("MessageApp", [
    "ngRoute",
    "AppController"
]);

MessageApp.config([
    "$routeProvider", "$locationProvider", function($routeProvider, $locationProvider){
        
        
       
        $routeProvider.when(
            "/user", //the name for the route
            {
                templateUrl : "view/user.html"
            }
        ).when(
            "/chat",
            {
                templateUrl : "view/allmessage.html",
                controller: "msgCtrl"
            }
        ).when(
            "/login",
            {
                templateUrl : "view/login.html"
            }
        )
    }
]);