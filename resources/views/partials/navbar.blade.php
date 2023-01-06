<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4">
            <a class="blog-header-logo text-dark" href="{{url('/')}}">Blog</a>
        </div>
        <div class="col-5 d-flex justify-content-end align-items-center">
            <div class=" input-group">
                <form class="form-inline" action="{{url('/search')}}" method="post">
                    @csrf
                    <input type="text" name="search" class="form-control form-control-sm mr-2" placeholder="Search Your Content" >
                    <button class="btn btn-sm btn-md btn-outline-secondary" type="submit">Search</button>
                </form>
            </div>
            @auth
                <a class="btn btn-sm btn-outline-secondary mr-2" href="{{route('profile')}}">Profile</a>
                <a class="btn btn-sm btn-outline-secondary" href="{{route('logout')}}">Logout</a>
            @endauth
            @guest
                <a class="btn btn-sm btn-outline-secondary mr-2" href="{{route('register')}}">SignUp</a>
                <a class="btn btn-sm btn-outline-secondary" href="{{route('login')}}">Login</a>
            @endguest
        </div>
    </div>
</header>

<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @foreach($category as $cat)
        <a class="p-2 dropdown-item" href="{{url('category/'.$cat->category_slug)}}">{{$cat->name}}</a>
        @endforeach
    </nav>
</div>

<script>
    var height = window.screen.availHeight;
    var width = window.screen.availWidth;
</script>
