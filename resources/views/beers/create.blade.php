<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <title>Laravel Vue</title>
    </head>
    <body>
        <div id="app">
            @include('partials.nav')


            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{ Form::open(array('url' => 'beers')) }}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('percentage', 'Percentage') }}
                {{ Form::text('percentage', Input::old('percentage'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Create a beer', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    {{-- <form action="/beer" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Beer Name -->
            <div class="form-group">
                <label for="beerName" class="col-sm-3 control-label">Beer name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <label for="beerPercentage" class="col-sm-3 control-label">Beer percentage</label>
                <div class="col-sm-6">
                    <input type="text" name="percentage" id="percentage" class="form-control">
                </div>

                <label for="beerDescription" class="col-sm-3 control-label">Beer description</label>
                <div class="col-sm-6">
                    <input type="text" name="description" id="description" class="form-control">
                </div>
            </div>

            <!-- Add Beer Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Beer
                    </button>
                </div>
            </div>
        </form> --}}
            </div>
            <script type="text/javascript" src="/js/app.js"></script>
        </body>
</html>
