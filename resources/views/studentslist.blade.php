<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<div class="card mb-3">
  <img class="card-img-top img-fluid gallery rounded" src="https://images.unsplash.com/photo-1530099486328-e021101a494a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTV8fHN0dWRlbnR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title text-center font-weight-bold">List of students</h5>
    <p class="card-text text-center">You can find here all information about students in the system.</p>

    <table class="table table-sm table-dark mt-3">
      <thead>
        <tr>
          <th scope="col">Cne</th>
          <th scope="col">First Name</th>
          <th scope="col">Second Name</th>
          <th scope="col">Age</th>
          <th scope="col">Speciality</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        @foreach($students as $student)
        <tr>
          <td>{{ $student->cne }}</td>
          <td>{{ $student->firstName }}</td>
          <td>{{ $student->secondName }}</td>
          <td>{{ $student->age }}</td>
          <td>{{ $student->speciality }}</td>
          <td>
              <a href="{{ url('/show/'.$student->id) }}" class="btn btn-sm btn-info">Show</a>
              <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
              <a href="{{ url('/destroy/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
