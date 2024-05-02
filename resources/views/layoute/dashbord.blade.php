<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">




</head>

<body>


    <div class="div-h ">

<div >
        <form action="{{ route('logout') }} " style="display:inline;"  method="post">
            @csrf
            <img src="{{asset('img/logout.jpg')}}"  style="width:24px; hieght:24px; " alt="">
            <input  class="gradient-button"  type="submit" value="logout">
        </form>
        <form action="{{ route('profile.edit') }} " style="display:inline;"  method="get">
            @csrf

            <img src="{{asset('img/profile.jpg')}}" style="width:24px; hieght:24px; " alt="">
            <input class="gradient-button"  type="submit" value="Profile">
        </form>
    </div>
        <center>
            @if (session('buy'))
            <div class="custom-alert success " style="width: 20%">
                {{ session('buy') }}
            </div>
        @endif

            @if (session('msg'))
                <div class="custom-alert success " style="width: 20%">
                    {{ session('msg') }}
                </div>
            @endif
            {{ session('key') }}
            <img class="img" style="width:100px ; heigth:100px;" src="{{ asset('img/icon1.png') }}" alt="">
            <h1 class="h1">Manga store</h1>
            <button type="button" class="custom-button">
                <img class="img1" id="show" src="{{ asset('img/cart.png') }}"
                    style="width: 64px; heigth:64px;" alt="">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    @php
                        use App\Models\Addcard;

                    @endphp
                    {{ Addcard::count() }}
                </span>



            </button>
        </center>
    </div>





    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav">
                <h4>Genres</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li class="all-link">All</li>
                    <li><a class="custom-link" href="{{ route('Action') }}">Action</a></li>
                    <li><a class="custom-link" href="{{ route('Adventure') }}">Adventure</a></li>
                    <li><a class="custom-link" href="{{ route('Thriller') }}">Thriller</a></li>
                </ul><br>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>

                </div>
            </div>


            {{-- poppup --}}
            <div id="popup" class="modal class="scrollable-area">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Item added to cart!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="input"></div>

                            <p>Continue shopping or proceed to checkout.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form action="{{route('destroy')}}" method="post">
                                @csrf
                                <button type="submit" class="top-button">Delete all</button>
                            </form>
                            <br>
                            <a href="{{route('command')}}" class="custo-button">Command</a>

                        </div>
                    </div>
                </div>
            </div>
            {{-- endpopup --}}


            @yield('layout')


            <footer class="container-fluid bg-dark text-light">
                <div class="container py-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>About Us</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida aliquam
                                massa, sit amet auctor turpis volutpat ac.</p>
                        </div>
                        <div class="col-md-3">
                            <h5>Links</h5>
                            <ul class="list-unstyled" >
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5>Contact Us</h5>
                            <p>123 Main Street, City, Country</p>
                            <p>Email: info@example.com</p>
                            <p>Phone: +1 123 4567890</p>
                        </div>
                    </div>
                    <hr>
                    <p class="text-center">&copy; 2023 Manga Store. All rights reserved.</p>
                </div>
            </footer>

            <script>
                $(document).ready(function() {

                    $('.img1').click(function() {
                        $('#popup').modal('show');
                    });

                });
                $(document).ready(function() {
                    $('#show').click(function() {
                        $.ajax({
                            url: "{{ route('field') }}",
                            type: "get",
                            success: function(response) {
                                $('#input').html(response);
                                $('#field').fadeIn();


                            }
                        })
                    })
                })
            </script>

</body>

</html>
