<header>
    <nav class="navbar navbar-light bg-light justify-content-between fixed-top">
        <a class="navbar-brand" href="/">GN</a>
        <form class="form-inline" action="{{ action('ContentController@searchAction') }}" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="text">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </nav>
</header>
