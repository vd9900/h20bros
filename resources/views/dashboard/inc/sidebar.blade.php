<!-- Left Sidenav -->
<div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu">
        <li>
            <a href="{{route('dashboard')}}"><i class="ti-bar-chart"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
		<li>
            <a href="javascript: void(0);"><i class="ti-image"></i><span>Blog Editor</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{route('blog.create')}}"><i class="ti-control-record"></i>Add Blog</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('blog.list')}}"><i class="ti-control-record"></i>Blog List</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="ti-gallery"></i><span>Gallery</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{route('gallery.create')}}"><i class="ti-control-record"></i>Add Gallery</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('gallery.list')}}"><i class="ti-control-record"></i>Gallery List</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="ti-gallery"></i><span>Service Areas</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{route('service-areas.create')}}"><i class="ti-control-record"></i>Add Service Area</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('areas.list')}}"><i class="ti-control-record"></i>Service Areas List</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('requests.list')}}"><i class="ti-bar-chart"></i><span>Requests</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
        <li>
            <a href="{{route('payments.list')}}"><i class="ti-bar-chart"></i><span>Payments</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>

        <li>
            <a href="javascript: void(0);"><i class="ti-gallery"></i><span>Invoices</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{route('invoices.create')}}"><i class="ti-control-record"></i>Create</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('invoices.index')}}"><i class="ti-control-record"></i>List</a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- end left-sidenav-->
