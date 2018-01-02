<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if ($utility->is_movable === TRUE) 
        <title>Movable Utility ID {{$utility->id}}</title>
    @else
        <title>Fixed Utility ID {{$utility->id}}</title>
    @endif
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>User: {{ $utility->type }}</h1>
    <h2>ID: {{ $utility->id}}</h2>

    {{ Form::model($utility, ['route' => array('utility.update', $utility->id)]) }}

    <div class="form-group col-sm-6">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-sm-6">
        {{ Form::label('type', 'Loại hình') }}
        {{ Form::text('type', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-sm-6">
        {{ Form::label('type_detail', 'Chi tiết loại hình') }}
        {{ Form::text('type_detail', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-sm-6">
        {{ Form::label('hotline', 'Hotline') }}
        {{ Form::text('hotline', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-sm-6">
        {{ Form::label('address', 'Địa chỉ') }}
        {{ Form::text('address', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-sm-6">
        {{ Form::label('website', 'Website') }}
        {{ Form::text('website', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-sm-6">
        {{ Form::label('title_advertisement', 'Quảng cáo') }}
        {{ Form::text('title_advertisement', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-sm-6">
        {{ Form::label('description_advertisement', 'Chi tiết quảng cáo') }}
        {{ Form::text('description_advertisement', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-sm-6">
        {{ Form::label('due_date', 'Ngày hết hạn') }}
        {{ Form::text('due_date', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-sm-6">
        {{ Form::label('rating', 'Số sao') }}
        {{ Form::text('rating', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-sm-6">
        {{ Form::label('status', 'Trạng thái') }}
        {{ Form::text('status', null, array('class' => 'form-control')) }}
    </div>
    @if ($utility->is_movable === TRUE) 
        <div class="col-sm-12">
            <h4>Chi tiết tiện ích di chuyển:</h4>
            <div class="form-group col-sm-6">
                {{ Form::label('identifier_number', 'Số định danh') }}
                {{ Form::text('identifier_number', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-sm-6">
                {{ Form::label('GPS', ' GPS') }}
                {{ Form::text('', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-sm-6">
                {{ Form::label('number', 'Số khung/Số máy') }}
                {{ Form::text('', null, array('class' => 'form-control')) }}
            </div>
        </div>
    @endif
    <div class="col-sm-12">
        {{ Form::submit('Lưu', array('class' => 'btn btn-primary')) }}
    </div>
    {{ Form::close() }}
</body>
</html>