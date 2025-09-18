<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
 <body>
 <div class="container mt-4">
    <form action="{{route('student.store')}}" method="post">
          @csrf
          <div style="width: 30%; margin-left:30%; box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);">
             <div class="py-4" style="background-color: #5a5d60ff;">
             <h2 style="text-align:center; color: white;">Student Form</h2>
           </div>
         <div style="padding:20px;">
            <label for="">Name:</label>
            <input type="text" class="form-control" name="name" maxLength="18" required><br>
            <label for="">Class:</label>
            <input type="numbers" class="form-control" name="class" maxLength="2" required><br>
            <label for="">Section:</label>
            <input type="text" class="form-control" name="section" maxLength="1" required><br>
            <button class="btn btn-dark" type="submit">Submit</button>
        </div>
    </form>
   </div>
 </body>
</html>
