<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
      crossorigin="anonymous"></script>
</head>

<body>
    <table class="table table-bordered">
        <thead>
           <tr>
            <th>Name</th>
            <th>Class</th>
            <th>Section</th>
            <th>Action</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->class}}</td>  
                <td>{{$student->section}}</td>
                 <td><a href="{{route('student.delete', $student->id)}}" class="btn btn-danger">Delete</a></td>
                 <td><a href="{{route('student.edit', $student->id)}}" class="btn btn-dark">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
