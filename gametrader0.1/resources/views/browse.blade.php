@extends('layouts.app')

@section('content')

    <div class="container">
    
        <div class="row">
            <div class="col-md-3 browse-filters">
                <div class="panel panel-default">
                    <div class="panel-heading">Filters</div>
                    <div class="panel-body">

                        <h4 id="toggle-console" class="toggle-filter">Consoles<a href="#" class="dropdown-filter"><span id="toggle-arrow-console" class="glyphicon glyphicon-menu-right toggle-rotate"></span></a></h4> 

                        <div id="consoles-toggle">
                            <div class="check">
                                <label><input type="checkbox" name="optradio">PS4</label>
                            </div>
                            <div class="check">
                                <label><input type="checkbox" name="optradio">XBOX</label>
                            </div>
                            <div class="check">
                                <label><input type="checkbox" name="optradio">XBOX</label>
                            </div>
                        </div>

                        <h4  id="toggle-genre" class="toggle-filter">Genres<a href="#" class="dropdown-filter"><span id="toggle-arrow-genre" class="glyphicon glyphicon-menu-right toggle-rotate"></span></a></h4> 

                        <div id="genres-toggle">
                            <div class="check">
                                <label><input type="checkbox" name="optradio">FPS</label>
                            </div>
                            <div class="check">
                                <label><input type="checkbox" name="optradio">RPG</label>
                            </div>
                            <div class="check">
                                <label><input type="checkbox" name="optradio">MMORPG</label>
                            </div>
                        </div>
                        <ul>
                        @foreach($games as $game)

                            <li>naam : {{ $game->name }}</li>
                            <li>console: {{ $game->console }}</li>
                            <li>genre: {{ $game->genre }}</li>

                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-9 ">

                <div class="panel panel-default">
                    <div class="panel-heading">Games</div>
                    <div class="panel-body panel-browse">
                        <div class="row row-center">
                        <div class="col-md-4 col-center game-preview">
                            <img class="preview-image" src="{{ URL::asset('img/game_preview.png') }}">
                            <div class="preview-descr">
                                <h5 class="game-title"><span class="bold">The Last Of Us</span></h5>
                                <p><span class="bold">Console:</span> PS4</p>
                                <p><span class="bold">Genre:</span> RPG</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-center game-preview">
                            <img class="preview-image" src="{{ URL::asset('img/game_preview.png') }}">
                            <div class="preview-descr">
                                <h5 class="game-title"><span class="bold">The Last Of Us</span></h5>
                                <p><span class="bold">Console:</span> PS4</p>
                                <p><span class="bold">Genre:</span> RPG</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-center game-preview">
                            <img class="preview-image" src="{{ URL::asset('img/game_preview.png') }}">
                            <div class="preview-descr">
                                <h5 class="game-title"><span class="bold">The Last Of Us</span></h5>
                                <p><span class="bold">Console:</span> PS4</p>
                                <p><span class="bold">Genre:</span> RPG</p>
                            </div>
                        </div>
                                                <div class="col-md-4 col-center game-preview">
                            <img class="preview-image" src="{{ URL::asset('img/game_preview.png') }}">
                            <div class="preview-descr">
                                <h5 class="game-title"><span class="bold">The Last Of Us</span></h5>
                                <p><span class="bold">Console:</span> PS4</p>
                                <p><span class="bold">Genre:</span> RPG</p>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
                
            </div>
        </div>

    </div>

@endsection
