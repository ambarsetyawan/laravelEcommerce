@extends('app')
@section('content')
    <div class="container">

        <h1>Create product</h1>


        @if($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'admin.products.store', 'method' => 'post'])  !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', '', ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('category', 'Category:') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('price', 'Price:') !!}
            {!! Form::text('price', '', ['class' => 'form-control']) !!}

        </div>

       <div class="form-group">

            {!! Form::label('featured', 'Featured:') !!}<br>

            {!! Form::radio('featured', false, false) !!} No<br>
            {!! Form::radio('featured', true, true) !!} Yes

        </div>


        <div class="form-group">
            {!! Form::label('recommend', 'Recommend:') !!}<br>
            {!! Form::radio('recommend', false, false) !!} No<br>
            {!! Form::radio('recommend', true, true) !!} Yes
        </div>

        <div class="form-group">

            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', '',['class' => 'form-control']) !!}

        </div>



        <div class="form-group">

            {!! Form::submit('Add product', ['class' => 'btn btn-primary form-control']) !!}

        </div>

        {!! Form::close()  !!}

    </div>
@endsection
