@extends('base')

@section('content')

<div class="container">


<div class="row">
    <h1>Create Investor</h1>


        <div class="">
        {!! Form::open(['url'=>'/visitor/create', 'method'=>'post']) !!}

            <div class="form-group">
                {{Form::label('name')}}
                {{Form::text('name', null, ['class'=>'form-control' , 'placeholder'=>'Name'] )}}
            </div>

            <div class="form-group">
                {{Form::label('phone')}}
                {{Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'phone'] )}}
            </div>

            <div class="form-group">
                {{Form::label('purpose')}}
                {{Form::text('purpose', null, ['class'=>'form-control', 'placeholder'=>'purpose'] )}}
            </div>

            <div class="form-group">
                {{Form::label('time')}}
                {{Form::time('time', null, ['class'=>'form-control', 'placeholder'=>'mm-yy-dd'] )}}
            </div>

            <div class="form-group">
                <button class="btn btn-secondary float-start mt-3 m-2">
                    <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add
                </button>

            </div>

    {!! Form::close() !!}
    <a href="/" class="btn btn-secondary float-start mt-3 m-2">
        <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Cancel
    </a>

        </div>

        <div class="err col-md-7">
            @if (count($errors)>0)


                <div class="card">

                    <div class="card-body bg-secondary text-white">
                        <ul>
                            @foreach ($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            @endif
        </div>
    </div>
</div>
<style>

    .container{
        width: 100vh;
        margin-top: 50px;
        display: grid;
        place-items: center;
    }
    .row{

text-align: center;
}
</style>
@endsection
