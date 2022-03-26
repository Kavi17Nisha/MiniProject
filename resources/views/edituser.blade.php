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

      .form-update {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
      }

    </style>
<body>
<main class="form-update">
<div class="container">

<form action="useredit?rid={{ Request::get('rid') }}" method="post">
@csrf

<h1 style="text-align:center" class="h4 mb-3 fw-normal">Update Profile</h1>

<div>
<label for="exampleInputName1" class="form-label">Full Name</label>
<input class="mb-2 form-control" maxlength="100", value="{{ $users->name }}" type="text" name="fullname" id="exampleInputName1">
</div>

<div>
<label for="exampleInputEmail" class="form-label">Email Address</label>
<input class="mb-2 form-control" maxlength="100", value="{{ $users->email }}" type="email" name="email" id="exampleInputEmail">
</div>

<div>
<label for="exampleInputPassword" class="form-label">Password</label>
<input class="mb-2 form-control" maxlength="50", value="{{ $users->password }}" type="text" name="password" id="exampleInputPassword">
</div>
<button style='background-color: purple; border-color: black;' class="w-100 mb-2 btn btn-lg btn-primary" type="submit">Update</button>
<button style='background-color: purple; border-color: black;' class="w-100 mb-2 btn btn-lg btn-primary" type="button" onclick="javascript:history.back()">Cancel</button>
</form>
</div>
</main>

{{View:: make('footer')}}
