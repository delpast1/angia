<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        
    </style>
</head>
<body>
    {{ Form::open(array('url' => 'admin/users/search', 'method' => 'get')) }}
        {{ Form::text('phone', null, array('placeholder'=>'Số điện thoại')) }}
        {{ Form::text('email', null, array('placeholder'=>'Email')) }}
        {{ Form::submit('Tìm kiếm', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
    <table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Ngày giờ</th> 
        <th>Họ tên</th>
        <th>Điện thoại</th>
        <th>Email</th>
        <th>Số sao</th>
        <th>Số point</th>
        <th>Đấu giá</th>
        <th></th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->created_date}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->rating}}</td>
        <td>{{$user->point}}</td>
        <td></td>
        <td>
            <a href="{{ URL::to('admin/user/' . $user->id) }}">Sửa</a>
            <a href="{{ URL::to('admin/user/delete/' . $user->id) }}" >Xóa</a>
        </td>
    </tr>
    @endforeach
    </table>
    {!! $users->render() !!}
</body>
</html>