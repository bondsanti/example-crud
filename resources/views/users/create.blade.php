<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
    @include('sweetalert::alert')
    <div class="container">
        <a href="{{route('users')}}" class="btn btn-primary">กลับไปหน้าตาราง</a>
        <h1 class="text-center">Page เพิ่มข้ออมูล</h1>


        <form action="{{route('users.insert')}}" method="post" enctype="multipart/form-data">

            @csrf <!-- สำคัญ -->

            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" id="username" name="username">
              <small class="text-danger"> @error('username') {{ $message }}  @enderror   </small>

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="password" name="password">
              <small class="text-danger"> @error('password') {{ $message }}  @enderror   </small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Fullname</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
                <small class="text-danger"> @error('fullname') {{ $message }}  @enderror   </small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">สิทธิใช้งาน</label>
                <select name="role" id="role" class="form-control">
                    <option value="">เลือก</option>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
                <small class="text-danger"> @error('role') {{ $message }}  @enderror   </small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">รูปภาพ</label>
                <input type="file" name="img">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


    </div>
</body>
</html>
