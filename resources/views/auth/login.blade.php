<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
.container{
  align-items: stretch;
  padding-left: 350px;
  padding-top: 150px;
}
.card-body{
    background-color: #f2f2f2;
      border-radius: 3px

}
.card-title{
  padding-left: 120px;
}
.btn{
  background-color:  #39ac73;
  color: white;

}

.card-title{
  font-size: 30px;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                                <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}"  placeholder=" Email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <br>
                                <input id="password" type="password" class="form-control
                                 @error('password') is-invalid @enderror"
                                 name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>


                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit"  class="btn btn-sucess">
                                    Login to Clocking
                                </button>


                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
