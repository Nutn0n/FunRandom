var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
$scope.itemArray = [
{
title: 'iPhone',
info:'You will buy an iPhone',
img:'iphone.jpg'
},
{
title: 'iPad',
info:'You will buy an iPad',
img:'ipad.jpg'
},
{
title: 'Mac',
info:'You will buy a Mac',
img:'mac.jpg'
}
];
$scope.howMany = $scope.itemArray.length;
$scope.item = $scope.itemArray[Math.floor(Math.random()*$scope.howMany)];
});
