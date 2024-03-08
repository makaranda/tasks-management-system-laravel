
<footer class="footer pt-3  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © {{date('Y')}} Developed by
            <a href="{{ URL::to('') }}" class="font-weight-bold" target="_blank">Makaranda</a>
            Pathirana
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
</main>

   <!-- Logout Modal-->

   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-sm btn-danger" type="button" data-bs-dismiss="modal">Cancel</button>
          <a class="btn btn-sm btn-primary" href="{{ route('admin.logout') }}">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Logout Modal-->
