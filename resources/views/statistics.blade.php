@extends('layouts.app')

@section('content')
    <h1 class="user-stats">User Statistics</h1>
    <div id="inputContainer">
        <label for="steamIdInput">Enter Steam ID:</label>
        <input type="text" id="steamIdInput">
        <button class="aBtn id="fetchDataBtn">Fetch Achievements</button>
    </div>
    <div id="achievementsContainer">
    </div>

@endsection
