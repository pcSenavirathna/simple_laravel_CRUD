<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<form action="{{ route('userstore') }}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="row mb-3">
	  <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
	  <div class="col-sm-10">
		<input type="text" class="form-control" id="inputEmail3" name="name">
	  </div>
	</div>
	<div class="row mb-3">
	  <label for="inputPassword3" class="col-sm-2 col-form-label">Age</label>
	  <div class="col-sm-10">
		<input type="text" class="form-control" id="inputPassword3" name="age">
	  </div>
	</div>
	
	<button type="submit" class="btn btn-primary">Submit data</button>
  </form>