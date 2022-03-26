<link href="/bootstrat/css/bootstrap.min.css" rel="stylesheet">
<link href="/bootstrat/css/modals.css" rel="stylesheet">

<div class="modal modal-sheet position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="delete">
<form action="delete" method="post">
@csrf
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-6 shadow">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title">Delete User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body py-0">
        <p>Are you sure you want to delete user ?</p>
      </div>
      <div class="modal-footer flex-column border-top-0">
        <button type="button" class="btn btn-lg btn-primary w-100 mx-0 mb-2" onclick="window.location.href='/userdelete?rid={{ $user->id }}'">Yes, delete</button>
        <button type="button" class="btn btn-lg btn-light w-100 mx-0" data-bs-dismiss="modal" onclick="javascript:history.back()">No</button>
      </div>
    </div>
  </div>
</form>
</div>
