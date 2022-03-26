{{View:: make('title')}}
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/bootstrap/css/dashboard.css" rel="stylesheet">
<link href="/bootstrap/js/dashboard.js" rel="stylesheet">

<form action="userlist" method="post" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" >
@csrf
<div class="text-center">
<input class="form-control-light" value="{{request()->input('search')}}" name="search" type="search" placeholder="Search">
<button style='background-color: purple; border-color: black; margin-top:10px;' class="mb-3 btn btn-primary" type="submit">Search</button>
</div>
</form>

<h2>All Users</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email Address</th>
              <th scope="col">Password</th>
              <th scope="col">Created Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <?php $no=1;
                if(isset($_GET['page'])){
                    $no = $no + 5 * ($_GET['page']-1);
                }
          ?>
          <tbody>
          @foreach($users as $user)
            
            <tr>
              <td><?php echo $no;?></td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->password }}</td>
              <td>{{ date('D, d F Y',strtotime($user->created_at)) }}</td>
              <td>
              <a href="/editmyuser?rid={{ $user->id }}">Edit</a>
              
              <a href="/userdelete?rid={{ $user->id }}" onclick="return confirm('Are you sure you want to delete {{ $user->name }} ?')">Delete</a>
              </td>
            </tr>
            <?php $no++;?>
            @endforeach
          </tbody>
        </table>
       </div>
<style>.h-5 {height: 1em;}.flex {text-align: center;width: 100%;}.leading-5{padding: 0.7em;}</style>

<div class="pagination">{{ $users->appends(['search' => Request::get('search')])->links() }}</div>

{{View:: make('footer')}}



