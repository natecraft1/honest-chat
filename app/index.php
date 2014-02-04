<!doctype html>
<html lang="en" ng-app="myApp">
<head>
  <meta charset="utf-8">
  <title>My AngularJS App</title>
  <link rel="stylesheet" href="css/app.css"/>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
</head>
<body ng-cloak-auth class="hide">

  <div ng-view></div>

  <script src="https://cdn.firebase.com/v0/firebase.js"></script>
  <script src="https://cdn.firebase.com/v0/firebase-simple-login.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-route.js"></script>
  <script src="https://cdn.firebase.com/libs/angularfire/0.6.0/angularfire.js"></script>
  <script src="js/app.js"></script>
  <script src="js/config.js"></script>
  <script src="js/controllers.js"></script>
  <script src="js/directives.js"></script>
  <script src="js/filters.js"></script>
  <script src="js/routes.js"></script>
  <script src="js/services.js"></script>
  <script src="js/service.login.js"></script>
  <script src="js/service.firebase.js"></script>
  <script src="js/module.waitForAuth.js"></script>
  <script src="js/module.routeSecurity.js"></script>
</body>
</html>
