<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<a href="{{route('usercreate')}}" > creare new user</a>

<table class="table">
	<thead>
	  <tr>
		<th scope="col">ID</th>
		<th scope="col">Name</th>
		<th scope="col">Age</th>
		<th scope="col">Handle</th>
	  </tr>
	</thead>
	<tbody>
		@foreach($tasks as $item=>$task)
		<tr>
			<th scope="row">{{++$item}}</th>
			<td>{{$task->name}}</td>
			<td>{{$task->age}}</td>
			<td><button><a href="{{route('userupdate',$task->id)}}">Update</a> </button></td>
			<td><a href="{{route('userdelete',$task->id)}}">Delete</a></td>
		  </tr>
		@endforeach
	  
	</tbody>
  </table>