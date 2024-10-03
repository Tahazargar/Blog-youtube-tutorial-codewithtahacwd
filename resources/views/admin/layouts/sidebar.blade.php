<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.dashboard') }}"
                        aria-expanded="false"
                    ><i class="mdi mdi-view-dashboard"></i
                        ><span class="hide-menu">Dashboard</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.posts.index') }}"
                        aria-expanded="false"
                    ><i class="mdi mdi-receipt"></i
                        ><span class="hide-menu">Posts</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.categories.index') }}"
                        aria-expanded="false"
                    ><i class="mdi mdi-relative-scale"></i
                        ><span class="hide-menu">Categories</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.tags.index') }}"
                        aria-expanded="false"
                    ><i class="mdi mdi-blur-linear"></i
                        ><span class="hide-menu">Tags</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.users.index') }}"
                        aria-expanded="false"
                    ><i class="mdi mdi-account-multiple"></i
                        ><span class="hide-menu">Users</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.setting.index') }}"
                        aria-expanded="false"
                    ><i class="mdi mdi-pencil"></i
                        ><span class="hide-menu">Setting</span></a
                    >
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
