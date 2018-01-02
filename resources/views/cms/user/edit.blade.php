<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update User Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>User: {{ $user->name }}</h1>
    <h2>ID: {{ $user->id}}</h2>

    {{ Form::model($user, ['route' => array('user.update', $user->id)]) }}

    <div class="form-group col-sm-6">
        {{ Form::label('name', 'Họ tên') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-sm-6">
        {{ Form::label('phone', 'Điện thoại') }}
        {{ Form::text('phone', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-sm-6">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-sm-6">
        {{ Form::label('rating', 'Số sao') }}
        {{ Form::text('rating', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-sm-6">
        {{ Form::label('point', 'Số point') }}
        {{ Form::text('point', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-sm-6">
        {{ Form::label('point', 'Địa chỉ') }}
        {{ Form::text('address', null, array('class' => 'form-control')) }}
    </div>
    <div class="col-sm-6">
        {{ Form::submit('Lưu', array('class' => 'btn btn-primary')) }}
    </div>
    <div class="col-sm-6">
        <a href="{{ URL::to('admin/user/delete/' . $user->id) }}" class="btn btn-primary">Xóa</a>
    </div>
    {{ Form::close() }}

    <div class="col-sm-12">
        <h4>Số tiện ích của người dùng: {{count($user->utilities)}}</h4>
        <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Tên</th> 
            <th>Hotline</th>
            <th>Ngày hết hạn</th>
            <th>Thang điểm</th>
        </tr>  
        @foreach ($user->utilities as $utility)
        <tr>
            <td>{{$utility->id}}</td>
            <td><a href="{{ URL::to('admin/utility/' . $utility->id) }}" target="_blank">{{$utility->name}}</a></td>
            <td>{{$utility->hotline}}</td>
            <td>{{$utility->due_date}}</td>
            <td>{{$utility->rating}}</td>
        </tr>          
        @endforeach
        </table>
    </div>
</body>
</html>