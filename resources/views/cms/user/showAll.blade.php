<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Users</title>
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
        <th>Số tiện ích</th>
        <th>Số sao</th>
        <th>Số point</th>
        <th>Trạng thái</th>
        <th>Vị trí</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{ \Carbon\Carbon::parse($user->created_date)->format('d/m/Y')}}</td>
        <td><a href="{{ URL::to('admin/user/' . $user->id) }}" target="_blank">{{$user->name}}</a></td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
        <td>{{count($user->utilities)}}</td>
        <td>{{$user->rating}}</td>
        <td>{{$user->point}}</td>
        <td></td>
        <td></td>
    </tr>
    @endforeach
    </table>
    {!! $users->render() !!}
</body>
</html>