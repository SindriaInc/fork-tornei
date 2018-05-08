
@section('sidebar')

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        @foreach ($sidebar as $side_route => $side)
          <li class="nav-item{{ Route::currentRouteName() == $side_route ? " active" : "" }}" data-toggle="tooltip" data-placement="right" title="{{ $side['name'] }}">
            <a class="nav-link" href="{{ route($side_route) }}">
              <i class="fa fa-fw fa-{{ isset($side['icon']) ? $side['icon'] : 'link' }}"></i>
              <span class="nav-link-text">{{ $side['name'] }}</span>
            </a>
          </li>
        @endforeach
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
@endsection