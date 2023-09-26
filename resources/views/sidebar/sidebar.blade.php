<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="{{set_active(['home'])}}">
                    <a href="{{ route('home') }}"><i class="feather-grid"></i><span>Dashboard</span></a>
                </li>

                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu {{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-shield-alt"></i>
                        <span>User Management</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('list/users') }}" class="{{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">List Users</a></li>
                    </ul>
                </li>
                @endif

                <!-- <li class="submenu {{set_active(['student/list','student/grid','student/add/page'])}} {{ (request()->is('student/edit/*')) ? 'active' : '' }} {{ (request()->is('student/profile/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span> Students</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('student/list') }}"  class="{{set_active(['student/list','student/grid'])}}">Student List</a></li>
                        <li><a href="{{ route('student/add/page') }}" class="{{set_active(['student/add/page'])}}">Student Add</a></li>
                        <li><a class="{{ (request()->is('student/edit/*')) ? 'active' : '' }}">Student Edit</a></li>
                        <li><a href=""  class="{{ (request()->is('student/profile/*')) ? 'active' : '' }}">Student View</a></li>
                    </ul>
                </li> -->

                <li class="submenu {{set_active(['client/list','client/add/page'])}}">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span> Clients Logo</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('client/list') }}"  class="{{set_active(['student/list','client/list'])}}">Client List</a></li>
                        <li><a href="{{ route('client/add/page') }}" class="{{set_active(['client/add/page'])}}">Client Add</a></li>
                    </ul>
                </li>

                <li class="submenu {{set_active(['career/list','career/add/page'])}}">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span> Career</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('career/list') }}"  class="{{set_active(['career/list','career/list'])}}">Career List</a></li>
                        <li><a href="{{ route('career/add/page') }}" class="{{set_active(['career/add/page'])}}">Career Add</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span> Pages</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="subjects.html">Pages List</a></li>
                        <li><a href="add-subject.html">Page Add</a></li>
                        <li><a href="edit-subject.html">Page Edit</a></li>
                    </ul>
                </li>

                <!-- <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span> Home Banner</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="subjects.html">Banner List</a></li>
                        <li><a href="add-subject.html">Banner Add</a></li>
                        <li><a href="edit-subject.html">Banner Edit</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span> Client Testimonial</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="subjects.html">Testimonial List</a></li>
                        <li><a href="add-subject.html">Testimonial Add</a></li>
                        <li><a href="edit-subject.html">Testimonial Edit</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span> SRS Articles</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="subjects.html">News List</a></li>
                        <li><a href="add-subject.html">News Add</a></li>
                        <li><a href="edit-subject.html">News Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span> Brand Management</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="subjects.html">Brand List</a></li>
                        <li><a href="add-subject.html">Brand Add</a></li>
                        <li><a href="edit-subject.html">Brand Edit</a></li>
                    </ul>
                </li>
                
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span> Component</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="subjects.html">Component List</a></li>
                        <li><a href="add-subject.html">Component Add</a></li>
                        <li><a href="edit-subject.html">Component Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span> SRS Blogs</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="subjects.html">blog List</a></li>
                        <li><a href="add-subject.html">Blog Add</a></li>
                        <li><a href="edit-subject.html">Blog Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span> SRS Blogs</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="subjects.html">blog List</a></li>
                        <li><a href="add-subject.html">Blog Add</a></li>
                        <li><a href="edit-subject.html">Blog Edit</a></li>
                    </ul>
                </li> -->
                
                <li class="{{set_active(['setting/page'])}}">
                    <a href="{{ route('setting/page') }}"><i class="fas fa-cog"></i><span>Website Settings</span></a>
                </li>

                
            </ul>
        </div>
    </div>
</div>