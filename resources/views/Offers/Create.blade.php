<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                    <li class="nav-item avctive">
                        <a class="nav-link active" aria-current="page" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }}</a>
                    </li>
                    @endforeach
                        {{--
                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li>
                                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                @endforeach--}}


                </ul>
            </div>
        </div>
    </nav>
    @if(Session::has("success"))
    <div class="alert alert-success" role="alert">
        {{Session::get("success")}}
    </div>
    @endif
    <br>
 <form method="post" action="{{Route('offers.store')}}" style="width: 500px;height: auto; border: #c8cbcf 2px solid;border-radius: 5px; margin-left: 20% ;padding: 20px 30px">
     @csrf
      {{--@csrf=<input name="_token" value="{{csrf_token()}}">--}}
    <h1>{{__('masseges.Add your offfer')}}</h1>
          <div class="form-group">
              <label for="exampleInputEmail1">{{__("masseges.name fr")}} :</label>
              <input type="text" class="form-control" name="name_fr" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{__('masseges.pl name')}}">
                   @error('name_fr')
              <small  class="form-text text-danger">{{$message}}</small>
              @enderror()
          </div>
     {{--name 2--}}
     <div class="form-group">
         <label for="exampleInputEmail1">{{__("masseges.name en")}} :</label>
         <input type="text" class="form-control" name="name_en" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{__('masseges.pl name')}}">
         @error('name_en')
         <small  class="form-text text-danger">{{$message}}</small>
         @enderror()
     </div>


          <div class="form-group">
              <label for="exampleInputPassword1">{{__("masseges.price")}}  :</label>
              <input type="text" class="form-control" name="price" id="exampleInputPassword1" placeholder="{{__('masseges.pl price')}}">
              @error('price')
              <small  class="form-text text-danger">{{$message}}</small>
              @enderror()
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">{{__("masseges.details fr")}}  :</label>
              <input type="text" class="form-control" name="details_fr" id="exampleInputPassword1" placeholder="{{__('masseges.pl details')}}">
              @error('details_fr')
              <small  class="form-text text-danger">{{$message}}</small>
              @enderror()
          </div>

     <div class="form-group">
         <label for="exampleInputPassword1">{{__("masseges.details en")}}  :</label>
         <input type="text" class="form-control" name="details_en" id="exampleInputPassword1" placeholder="{{__('masseges.pl details')}}">
         @error('details_en')
         <small  class="form-text text-danger">{{$message}}</small>
         @enderror()
     </div>

          <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">{{__("masseges.save offer")}} </button>
      </form>

      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </body>
</html>
