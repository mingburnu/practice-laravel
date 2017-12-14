<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<h1>Create Car</h1>
{!! Form::open(['url' => 'car/store']) !!}
<div class="form-group">
    {!! Form::label('PRICE', 'PRICE:') !!}
    {!! Form::text('price',null,['class'=>'form-control']) !!}
    {!! Form::label('MAKE', 'MAKE:') !!}
    {!! Form::text('make',null,['class'=>'form-control']) !!}
    {!! Form::label('MODEL', 'MODEL:') !!}
    {!! Form::text('model',null,['class'=>'form-control']) !!}
    {!! Form::label('PRODUCED_ON', 'PRODUCED_ON:') !!}
    {!! Form::text('produced_on',null,['class'=>'form-control']) !!}
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
{!! Form::close() !!}
<a href="/car"><button class= 'btn btn-primary form-control'>Cars</button></a>
{!!  $errors->first('price') !!}
</body>
</html>
