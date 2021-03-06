<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">{{ app_name() }}</a>
</div>
<div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li class="{{ active_class(if_route(['frontend.index'])) }}">
            <a href="/">首页</a>
        </li>
        <li class="{{ active_class(if_route(['cms.news'])) }}">
            <a href="{!! route('cms.news') !!}">最新</a>
        </li>
        {{--<li><a href="#contact">Contact</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
            </ul>
        </li>--}}
    </ul>
    <form class="navbar-form navbar-left search-form" action="{!! route('cms.search') !!}" method="get" data-url="{!! route('cms.search') !!}">
        <div class="input-group">
            <input type="text" placeholder="电影" class="form-control" id="search-input" value="@yield('keyword', '')">
            <span class="input-group-btn">
                <button type="submit" class="btn">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
</div><!--/.nav-collapse -->