<div class="container-fluid d-flex navbar-top">
    <div class="container">
        <div class="row">

            <div class="col-8">
                <ul>
                    <li>GAMEK</li>
                    <li>KENH14</li>
                    <li>CAFEBIZ</li>
                </ul>
            </div>
            <div class="col-4 d-flex">
                @if (Auth::check())
            <li><a style="color: #CCC" href="/admin">Xin chào <span class="text-white">{{ Auth::user()->name }} </span></a></li>
                @else
                <li><a class="text-white" href="/login">Đăng nhập / Đăng ký</a></li>
                @endif
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light" id="navbar-bottom">
    <div class="container">
        <a class="navbar-brand logo-genk" href="#">
            <img src="{{asset('images/logo.png')}}" alt="logo">
        </a>
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars "></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @if(isset($categories))
                @foreach ($categories as $cate)
                    <li class="nav-item ">
                    <a class="text-white" href="{{ route('get.list.post', $cate->slug) }}">{{ $cate->name }}</a>
                    </li>
                @endforeach
                @endif
                {{-- <li class="nav-item dropdown">
                    <a class="fas fa-bars text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> --}}
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0" style="padding-left: 10px">
                <input class="form-control mr-sm-2" type="search" placeholder="Nhập nội dung tìm kiếm..."
                    style="width: 210px;" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search text-white"
                        style="font-size: 24px;"></i></button>
            </form> --}}
        </div>
    </div>
</nav>
