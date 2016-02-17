var ctrl = angular.module("AppController", []);

ctrl.controller("msgCtrl", ["$scope", function($scope){
    $scope.hello = "Yo what's up";
    $scope.myId = "theBestId";
    $scope.showImg = function(numlikes){
        return (numlikes > 0) ? "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Heart_coraz%C3%B3n.svg/2000px-Heart_coraz%C3%B3n.svg.png" : "https://d30y9cdsu7xlg0.cloudfront.net/png/14701-200.png";
    }
    $scope.like = function(msgId){
        //alert(msgId);
        $.ajax({
            url:"controller/msg.php",
            type:"POST",
            dataType:"html",
            data:{
                method:"like",
                message_id:msgId,
                user_id:sessionStorage.myid
            }
        });
    }
    
    setInterval(function(){
        $.ajax({
            url:"controller/msg.php",
            type:"POST",
            dataType:"json",
            data:{
                method:"getall"
            },
            success:function(resp){
                console.log(resp);

                $scope.$apply(function(){
                    $scope.msgs = resp;
                });
            }
        })
    }, 1000);
}]);