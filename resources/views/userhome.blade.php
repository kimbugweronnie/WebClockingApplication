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

<style>

.navbar  {

  font-weight: 100;

}
.col {
  background-color: #33adff;

}

.time{
  font-size: 75px;
  padding-left: 25px;

}

.date{
  padding-left: 70px;
}

.buttonSuccess {
 padding-left: 110px;
}

.btn{
  background-color: #39ac73;

}
.navbar-text{
  color:white;
}

.container-xxl{
align-items:center;
  padding-left: 450px;
  padding-top: 150px;
}

.container {

  border-radius: 5px;
  background-color: #f2f2f2;

  padding-top: 40px;
}


.row{
  padding-top: 40px;
  padding-left: 10px;
  padding-right: 10px;
}

</style>



@extends('layouts.user-nav')

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif


    @php
    $time= date('H:i', strtotime('3 hours'));
    $day=date("l");
    $date= date("d/M/Y");





    @endphp
    <div class="container-xxl">
      <form method="POST" action="{{ route('checkIn') }}">


          @csrf
      <div class='time'> <?php echo $time ?>Hrs</div>

      <div class='date'><?php echo $day ?>,<?php echo $date ?></div>
      <br>
      <div class="buttonSuccess">

        <button type="submit" class="btn btn-success">Time In</button>


      </div>
</form>


       </div>



@endsection
