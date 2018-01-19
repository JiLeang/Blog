 <nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img src="#" alt="MyBlog"/>
                    </a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Discuss</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Share</a>
                </div> 
            <div class="navbar-end">
                @if(Auth::guest())

                    <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                    <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link ">
                        {{ Auth::user()->name }}</a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            <span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>Profile
                        </a>
                        <a class="navbar-item">
                            <span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>Notification
                        </a>
                        <a href="{{route('manage.dashboard')}}" class="navbar-item">
                            <span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>Manage
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logoutForm').submit();">
                            <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>Logout
                        </a>
                        @include('_includes.forms.logout')
                    </div>
                @endif
                    </div>
            </div>
        </nav>