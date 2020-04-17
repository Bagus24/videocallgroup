@extends('layouts.app')
@section('content')
<div class="content">
   <div class="title m-b-md">
       Video Chat Rooms
   </div>


<form action="{{ url('room/create') }}" method="post">
{{ csrf_field() }}
    <input type="text" name="roomName">
    <button type="submit">Go</button>
</form>
   @if($rooms)
   @foreach ($rooms as $room)
       <a href="{{ url('/room/join/'.$room) }}">{{ $room }}</a>
   @endforeach
   @endif
</div>
@endsection