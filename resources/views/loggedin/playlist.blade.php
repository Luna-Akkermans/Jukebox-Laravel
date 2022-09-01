@extends('layouts.app')

@section('content')
{{-- MAKE SURE TO CREATE DB CONNECTION + FOUL PROOF + FOREACH FOR INFORMATION OUT OF THE DB CONNECTION --}}
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-6">
                <h2 class="d-inline">Playlist name</h2>
                <select class="form-select" aria-label="Default select example">
                    <option selected></option>

                  </select>
            </div>
            <div class="col-lg-4">
                <h2 class="d-inline">Create playlist</h2>
                <div class="input-group mb-3">
                    <button class="btn btn-success" type="button" id="button-addon1">+</button>
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
          current song
            </a>
            <a href="#" class="list-group-item list-group-item-action">A second link item</a>
          </div>
    </div>
@endsection
