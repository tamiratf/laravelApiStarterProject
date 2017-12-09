<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    {!!Html::script('js/angular/angular.js')!!}
    {!!Html::script('js/angular/angular-ui-router.js')!!}
    {!!Html::script('js/angular/underscore.js')!!}
    {!!Html::script('js/angular/restangular.js')!!}
    {!!Html::script('js/angular/jquery.js')!!}
    {!!Html::script('js/angular/ngstorage.js')!!}
    {!!Html::script('app/api/api.base.js')!!}
    {!!Html::script('app/api/api.users.js')!!}
    {!!Html::script('app/login.js')!!}
</head>

<body class="login-img3-body" ng-app="fa-login">

<div class="container" ng-controller="loginCtrl">

    <form class="login-form">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" class="form-control" placeholder="Username" autofocus ng-model="email">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Password" ng-model="password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="button" ng-click="login();">Login</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
        </div>
    </form>
</div>



</body>

</html>
