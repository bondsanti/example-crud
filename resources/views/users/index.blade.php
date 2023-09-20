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
        <a href="{{route('users.create')}}" class="btn btn-primary">เพิ่มข้อมูล</a>
        <table class="table">
            <thead class="thead-light">



            <tr>
                <th scope="col">id</th>
                <th scope="col">Username</th>
                {{-- <th scope="col">Password</th> --}}
                <th scope="col">Fullname</th>
                <th scope="col">Role</th>
                <th>Action</th>
            </tr>


            </thead>
            <tbody>
                @foreach ($users as $item )
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->username}}</td>
                {{-- <td>{{$item->password}}</td> --}}
                <td>{{$item->fullname}}</td>
                <td>{{$item->role}}</td>
                <td>
                    <a href="{{url('/users/edit/'.$item->id)}}" class="btn btn-warning">แก้ไข</a>

                    <form method="post" action="{{route('users.delete',['id'=> $item->id])}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">ลบ</button>
                    </form>

                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>


</body>
</html>
