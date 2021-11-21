<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{route('tasks')}}"><img src="{{asset('images/logo.svg')}}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{route('tasks')}}"><img src="{{asset('images/logo-mini.svg')}}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
            <form action="{{route('logout')}}" method="post" >
@csrf
                <input  type="submit"  class="btn btn-danger" value="Вихід">
            </form>
        </ul>

    </div>
</nav>
