<body class="text-center">
You have logged in as {{ session()->get('user')->email }} 
</br><a href="/logout">Log Out</a>
</br><a href="/editmyuser?rid={{ session()->get('user')->id }}">Edit</a>
