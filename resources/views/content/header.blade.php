<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @if($array['active'] == 'home')
                <a class="navbar-brand active" href="/user">User-Admin</a>
            @else
                <a class="navbar-brand" href="/user">User-Admin</a>
            @endif
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if($array['active'] == 'add')
                    <li class="active" id="nav"><a href="/user/create">Add</a></li>
                @else
                    <li id="nav"><a href="/user/create">Add</a></li>
                @endif

                @if($array['active'] == 'list')
                    <li class="active" id="nav"><a href="/user/list">List</a></li>
                @else
                    <li id="nav"><a href="/user/list">List</a></li>
                @endif

                @if($array['active'] == 'contact')
                    <li class="active" id="nav"><a href="/user/contact">Contact</a></li>
                @else
                    <li id="nav"><a href="/user/contact">Contact</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>