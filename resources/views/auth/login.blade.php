
<!DOCTYPE html>
<html lang="en">
<head>
    <title>METAL ART</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{url('frontend-assets/img/logos/site-logo.png')}}" rel="shortcut icon">
    <link rel="stylesheet" href="{{ url('dist/css/app.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <div class="hidden xl:flex flex-col min-h-screen">
            <div class="my-auto">
                <img alt="" class="-intro-x w-1/2 -mt-16" src="{{url('frontend-assets//img/logos/site-logo.png')}}">
            </div>
        </div>
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div
                    class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Sign In
                </h2>
                {!! Form::open(['url' =>route('login')]) !!}
                <div class="intro-x mt-5">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {{ Form::label('email', '', ['class' => 'font-helvetica']) }}
                        {{ Form::text('email', null, ['class' => 'intro-x login__input input input--lg border border-gray-300 block mt-2 mb-3']) }}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                            {{ $errors->first('email') }}
                                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {{ Form::label('password', '', ['class' => 'font-helvetica']) }}
                        {{ Form::password('password', ['class' => 'intro-x login__input input input--lg border border-gray-300 block mt-2']) }}
                        @if ($errors->has('password'))
                            <span class="help-block">
                                            {{ $errors->first('password') }}
                                        </span>
                        @endif
                    </div>

                </div>
                <div class="intro-x flex text-gray-700 text-xs sm:text-sm mt-4">
                    <div class="flex items-center mr-auto">
                        <input type="checkbox" name="remember" class="input border mr-2" id="remember-me">
                        <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                    </div>
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    {{ Form::submit('Login', ['class' => 'button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3']) }}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script src="{{ url('dist/js/app.js') }}"></script>
</body>
</html>
