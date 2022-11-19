@extends('base')

@section('content')

<div class="container">
<div class="row">
    <h1>Edit Investor</h1>


        <div class="">
            {!! Form::model($visitor, ['url'=>'/edit-vis/' . $visitor->id, 'method'=>'put']) !!}


            <div class="mb-3">
                {!! Form::label('name') !!}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('phone') !!}
                {{ Form::text('phone', null, ['class' => 'form-control']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('purpose') !!}
                {{ Form::text('purpose', null, ['class' => 'form-control']) }}
            </div>

            <div class="mb-3">
                {!! Form::label('time') !!}
                {{ Form::text('time', null, ['class' => 'form-control']) }}
            </div>


            <div class="form-group float-start">
                <button class="btn btn-secondary m-1" type="submit">
                    Save Changes
                </button>
                <a href="{{url('/')}}" class="btn btn-secondary m-1">I want to Cancel</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
    <style>
        .container{
            margin-top: 50px;
            display: grid;
            place-items: center;

        }
        .row{

            text-align: center;
        }
    </style>
@endsection
