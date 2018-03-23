

<header>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/recipy">Recipy</a>
        </div>

        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="?controller=ingredients&action=index">Manage Ingredients</a></li>
                <li><a href="?controller=recipes&action=index">Manage Recipes</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.nav-collapse -->
    </nav>
</header>