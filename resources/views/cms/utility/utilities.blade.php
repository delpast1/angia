<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if ($utilities[0]->is_movable === TRUE) 
        <title>Movable Utilities</title>
    @else
        <title>Fixed Utilities</title>
    @endif
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        
    </style>
</head>
<body>
    {{ Form::open(array('url' => 'admin/utilities/search', 'method' => 'get')) }}   
        {{ Form::text('phone', null, array('placeholder'=>'Mã quản lý')) }}
        {{ Form::text('hotline', null, array('placeholder'=>'Hotline')) }}
        {{ Form::submit('Tìm kiếm', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
    <table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Tên</th> 
        <th>Hotline</th>
        <th>Email quản lý</th>
        <th>Ngày hết hạn</th>
        <th>Đánh giá</th>
        <th>Vị trí</th>
        <th></th>
    </tr>
    @foreach ($utilities as $utility)
    <tr>
        <td>{{$utility->id}}</td>
        <td><a href="{{ URL::to('admin/utility/' . $utility->id) }}" target="_blank">{{$utility->name}}</a></td>
        <td>{{$utility->hotline}}</td>
        <td>{{$utility->user->email}}</td>
        <td>{{$utility->due_date}}</td>
        <td>{{$utility->rating}}</td>
        <td></td>
        <td>{{$utility->status}}</td>
    </tr>
    @endforeach
    </table>
    {!! $utilities->render() !!}
</body>
</html>