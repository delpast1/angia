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

    <div class="col-sm-12">
        {{ Form::submit('Lưu', array('class' => 'btn btn-primary')) }}
    </div>
    {{ Form::close() }}
</body>
</html>