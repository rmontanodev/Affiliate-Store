@if(Auth::user()== '')
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('productos')}}">{{trans('messages.productos')}}</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link" href="{{route(('register'))}}"><i class="fas fa-user-plus"></i></a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route(('login'))}}"><i class="fas fa-sign-in-alt"></i></a>
            </li>
        </ul>
    </nav>
@elseif(Auth::user()->usertype_id == 2)
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{route('productos')}}">{{trans('messages.productos')}}</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>{{Auth::user()->fullname}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default"
                         aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#">{{trans('messages.micuenta')}} <i class="fas fa-user-cog"></i></a>
                        <a class="dropdown-item" href="{{route('logout')}}">{{trans('messages.logout')}} <i class="fas fa-sign-out-alt"></i></a>
                    </div>
                </li>
            </ul>
    </nav>
@endif