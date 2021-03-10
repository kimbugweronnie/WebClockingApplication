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


.skillBox {
  box-sizing: border-box;
  width: 100%;
  margin: 1px;
}
.skillBox p {
  text-transform: uppercase;
  margin: 0 0 10px;
  padding: 0px;
  /* font-weight: bold; */
}
.skillBox p:nth-child(2) {
  float: right;
  position: relative;
  top: -25px;
}
.skill {
  background-color: #99d6ff;
  padding: 4px;
  box-sizing: border-box;
  /* border: 1px solid black; */
  border-radius: 2px;
}
.skill_level {
  background: #33adff;
  width: 100px;
  height: 10px;
}
.navbar  {
  font-weight: 100;
}
.col {
  background-color: #33adff;
}
.time{
  font-size: 75px;
}
.date{
  padding-left: 75px;
}
.buttonSuccess {
  padding-left: 85px;
}

.btn{
  background-color: #39ac73;
  padding-left: 35px;
}
.navbar-text{
  color:white;
}
.container-xxl{
  border-width: thin;
  padding-left: 530px;
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


@php
$time= date('H:i', strtotime('3 hours'));

$day=date("l");
$month= date("F");
$abbrev=substr($month,0,3);
$year= date("Y");


@endphp

<script>
function exportTasks(_this) {
   let _url = $(_this).data('href');
   window.location.href = _url;
}
var popover = new bootstrap.Popover(document.querySelector('.example-popover'), {
container: 'body'
})

</script>
<title>Web Clocking</title>
</head>
<body>
  @extends('layouts.app')
  @section('content')
  <div class="row">
    <div class="col-sm-6">
      <h5 class="card-title">Users</h5>
      <div class="card" style="background-color: #33adff" >
        <div class="card-body">
          <h5 class="card-title">Admin</h5>
          <p class="card-text">info@trailanalytics.com</p>

        </div>
      </div>
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Trail Support</h5>
          <p class="card-text">support@trailanalytics.com</p>

        </div>
      </div>
      <br>
      <h5 class="card-title">Punctuality Analysis</h5>
      <div class="card" >
        <div class="card-body">


          <div class="skillBox">
            <p>Early</p>
            <p>34%</p>
            <div class="skill">
              <div class="skill_level" style="width:34%"></div>
            </div>
          </div>

          <div class="skillBox">
            <p>Late</p>
            <p>85%</p>
            <div class="skill">
              <div class="skill_level" style="width:85%"></div>
            </div>
          </div>
        </div>


      </div>
    </div>


    <div class="col-sm-6">
      <h5 class="card-title">Logs for <?php echo $abbrev ?>,<?php echo $year ?></h5>
      <div class="card ">
        <div class="card-header">
          <!-- <form method="GET" action="{{ route('csvReport') }}">
            @csrf -->
          <!-- <button type="submit" class="btn btn-success">Export to Excel</button> -->
          <span data-href="/csvReport" id="export" class="btn btn-success " onclick="exportTasks(event.target);">Export</span>

        </form>
  <br>

    </div>
        <div class="card-body">

          <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col">TimeIn</th>
            <th scope="col">TimeOut</th>
          </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
          <tr>
            <td>{{$record->name}}</td>
            <td>{{$record->date}}</td>
            <td>{{$record->timeIn}}</td>
            <td>{{$record->timeOut}}</td>
          </tr>

          @endforeach

        </tbody>
      </table>


        </div>
      </div>
    </div>
  </div>


@endsection




      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
  </html>
