<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>logged in</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-around">
        <a class="px-4 navbar-brand" href="#">Jukebox</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="form-inline my-2 my-lg-0 w-100 d-flex justify-content-end">
            <input class="form-control mr-sm-2" placeholder="Create playlist" >
            <button class=" mx-4 btn btn-success w-25" type="submit">Create playlist</button>
          </form>
          <ul class="navbar-nav mx-4">
            <li class="nav-item active">
              <a class="nav-link font-weight-bold" href="{{ url('/logout') }}">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container">

        <div class="row mt-5">
            {{-- Playlists create--}}
            <div class="col-lg-4">
                <form>
                    <div class="form-group">
                        <label for="InputName">Create playlist</label>
                        <input type="text" class="form-control" id="InputName" placeholder="Enter name">
                    </div>
                    <button type="submit" class="mt-1 btn btn-primary">Add</button>
                </form>


                <div>

                </div>

            </div>

            {{-- Playlists create--}}
            <div class="col-lg-4">
                <h4>Playlists:</h4>
                <ul>
                    <li>
                        test
                    </li>
                </ul>
            </div>

            {{-- curr playlist information--}}
            <div class="col-lg-4">
                <h4>Songs</h4>
                <ul>
                    <li>Song 1</li>
                </ul>
            </div>

        </div>

    </div>
    </div>


</body>

</html>
