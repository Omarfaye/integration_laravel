<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            Admin <b class="font-black">One</b>
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li class="active">
                <a href="index.html">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Examples</p>
        <ul class="menu-list">
            <li>
                <a class="dropdown">
                    <span class="icon"><i class="mdi mdi-view-list"></i></span>
                    <span class="menu-item-label">Configuration</span>
                    <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('users.index')  }}">
                            <span>User</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('roles.index')}}">
                            <span>Role and permission</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</aside>

