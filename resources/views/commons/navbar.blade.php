<header>
    <nav class='navbar navbar-inverse navbar-static-top'>
        <div class='container'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#newtask' arial-extends='false'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand' href='/'>TaskList</a>
                </div>        
        
        
        <div class='collapse navbar-collapse' id='newtask'>
            <ul class='nav navbar-nav navbar-right'>
                
                @if(Auth::check())
                <li><a href='#'>User</a></li>
                <li class='dropdown'>
                <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='ture' aria-expanded='false'>{{Auth::user()->name}}<span class='caret'></span></a>    
                <ul class='dropdown-menu'>
                    <li><a href='#'>My Profile</a></li>
                    <li class='divider' role='separetor'></li>
                    <li>{!! link_to_route('logout.get','Logout') !!}</li>
                </ul>
                
                </li>
                
                
                @else
                <li>{!! link_to_route('signup.get','Signup') !!}</li>
                <li>{!! link_to_route('login','Login') !!}</li>
                @endif
            </ul> 
            </div>
        </div>
    </nav>
</header>