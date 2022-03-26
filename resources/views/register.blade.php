{{View:: make('title')}}
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

      .form-register {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
      }

    </style>
<body>
<main class="form-register">
<div class="container">
<form action="register" method="post">
@csrf
<h1 class="h3 mb-3 fw-normal">Register New User</h1>
<div>
<label for="exampleInputName1">Full Name</label>
<input class="mb-2 form-control" type="text" name="fullname" id="exampleInputName1">
</div>
<div>
<label for="exampleInputEmail1">Email Address</label>
<input class="mb-2 form-control" type="email" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div>
<label for="examplePassword1">Password</label>
<input class="mb-2 form-control" type="password" name="password" id="exampleInputPassword1">
</div>
<button style='background-color: purple; border-color: black;' class="w-100 mb-3 btn btn-lg btn-primary" type="submit">Register</button>
<button style='background-color: purple; border-color: black;' class="w-100 mb-3 btn btn-lg btn-primary" type="button" onclick="javascript:history.back()">Cancel</button>
</form>
</div>
</main>
{{View:: make('footer')}}
