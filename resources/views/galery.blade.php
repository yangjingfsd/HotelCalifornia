@extends('main')
@section('content')

<div style="text-align:center;padding:20px 0;">
<div>
@include('hotel')
</div>
<div>
<img src="{{ asset('styles/img/041.webp') }}" class="img-fluid" alt="Hotel California" title="Hotel California" />
</div>
</div>
@endsection