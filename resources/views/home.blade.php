@extends('header')
<head>
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/bootstrap/css/signin.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
@section('login')
<body>
<main class="form-signin">
<form action="login" method="post">
@csrf

<div>
<label for="floatingInput">Email Address</label>
<input name="email" type="email" class="mb-2 form-control" id="floatingInput" placeholder="name@example.com">
</div>

<div>
<label for="floatingPassword">Password</label>
<input name="password" type="password" class="mb-2 form-control" id="floatingPassword" placeholder="Password">
</div>
 
<button style='background-color: purple; border-color: black;'  class="w-100 mb-2 btn btn-lg btn-primary" type="submit" border= "">Login</button>
<button style='background-color: purple; border-color: black;' class="w-100 mb-2 btn btn-lg btn-primary" type="button" onclick="window.location.href='/register'">Register</button>

</form>
</main>
@endsection
