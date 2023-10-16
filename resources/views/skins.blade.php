@extends('layouts.app')

@section('content')
    <div class="select-container">
        <label for="nameSelect">Select Skin:</label>
        <select id="nameSelect"></select>
    </div>

    <div class="slider-skins">
        <div class="slider-for-skins" id="slidesContainer">
        </div>
        <button id="prevBtn"></button>
        <button id="nextBtn"></button>
    </div>
@endsection
