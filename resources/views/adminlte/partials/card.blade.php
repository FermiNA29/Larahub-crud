<div class="card">
  <div class="card-header">
    <h3 class="card-title">@yield('name')</h3>
    <div class="card-tools">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
      <span class="badge badge-primary">@yield('label')</span>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    @yield('content')
  </div>
  <!-- /.card-body -->
  <div class="card-footer" style="text-align: center">
    Forum Tanya Programer
  </div>
  <!-- /.card-footer -->
</div>
<!-- /.card -->