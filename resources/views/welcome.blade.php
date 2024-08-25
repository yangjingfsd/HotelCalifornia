@extends('main')
@section('content')
<?php

define('APIKEY','c480b8a9648bb7c45d2b70f5c330b966');
$location ='California%20city,%20CA,%20USA';
//            $location ='Farmington,CT,USA';
$url = "https://api.openweathermap.org/data/2.5/weather?q=$location&appid=".APIKEY."&units=metric";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$posts = json_decode($result,true);
curl_close($ch);

$tempdata = $posts['main'];
$weatherdata = ($posts['weather'])[0];

?>
<div class='text-white' style='background-color:#202124;text-align: center;' id='container'>
<br><br><br><br><br>
<h3>Welcome to</h3>
<h1 style='font-size:10vw'>Hotel California</h1>
<h4>&quot;<i>You can check out any time you like,</i></h4>
<h4><i>but you can never leave...</i>&quot;</h4>
<br><br>

<p> Weather: <?php echo $weatherdata['main']. ', ' . $weatherdata['description']; ?>; 
Temperature: <?php echo $tempdata['temp']; ?> &deg;C; Feel like: <?php echo $tempdata['feels_like']; ?> 
&deg;C; Wind Speed: <?php echo $posts['wind']['speed'] ?> m/s; Visibility: <?php echo $posts['visibility'] ?> m.
</p>
<p> Location: <?php echo str_replace('%20', ' ', $location); ?>. 
</p>

@if (session('successMsg'))
<div class='alert alert-sucess' role='alert'> {{ session('successMsg') }} </div>
@endif
<br><br>
@if (!session('successMsg'))
<br><br><br><br>
@endif
</div>
@endsection