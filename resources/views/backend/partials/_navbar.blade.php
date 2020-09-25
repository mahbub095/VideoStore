<div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
        <h5 class="centered">Sam Soffes</h5>
        <li class="mt">
            <a class="active" href="{{route('admin')}}">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-desktop"></i>
                <span>Category</span>
            </a>
            <ul class="sub">
                <li><a href="{{route('category.create')}}">Add</a></li>
                <li><a href="buttons.html">All</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span>Video</span>
            </a>
            <ul class="sub">
                <li><a href="{{route('video.create')}}">Add</a></li>
                <li><a href="calendar.html">All</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-book"></i>
                <span>Extra Pages</span>
            </a>
            <ul class="sub">
                <li><a href="blank.html">Blank Page</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="lock_screen.html">Lock Screen</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="invoice.html">Invoice</a></li>
                <li><a href="pricing_table.html">Pricing Table</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="404.html">404 Error</a></li>
                <li><a href="500.html">500 Error</a></li>
            </ul>
        </li>

    </ul>
    <!-- sidebar menu end-->
</div>
