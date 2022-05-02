<style>
    a:link { 
        text-decoration: none; 

        }
</style>
@if ($errors->any())
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong class="mr-5">{{ $errors->first() }}</strong> 
    <a href="#" class="close text-danger" data-dismiss="alert" aria-label="close">&times;</a>
  </div>
@endif

@if (session('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{ session('error') }}</strong> 
    <a href="#" class="close text-danger" data-dismiss="alert" aria-label="close">&times;</a>
  </div>
@endif
@if (session('fail'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{ session('fail') }}</strong> 
    <a href="#" class="close text-warning" data-dismiss="alert" aria-label="close">&times;</a>
  </div>
@endif
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong> 
    <a href="#" class="close text-success" data-dismiss="alert" aria-label="close">&times;</a>
  </div>
@endif

