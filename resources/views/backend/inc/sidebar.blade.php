<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html"
                        aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item pt-2 d-lg-none d-xl-none">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="inbox.html"
                        aria-expanded="false">
                        <i class="far fa-envelope" aria-hidden="true"></i>
                        <span class="hide-menu">Message</span>
                    </a>
                </li>
                <li class="sidebar-item pt-2 d-lg-none d-xl-none">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.html"
                        aria-expanded="false">
                        <i class="far fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>
                <li class="sidebar-item pt-2 d-lg-none d-xl-none">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="notification.html"
                        aria-expanded="false">
                        <i class="far fa-bell" aria-hidden="true"></i>
                        <span class="hide-menu">Notifications</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.all_users') }}"
                        aria-expanded="false">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <span class="hide-menu">Users</span>
                    </a>
                </li>
                <li class="sidebar-item dropdown">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle"
                        aria-expanded="false" data-bs-toggle="dropdown">
                        <i class="fa fa-th-large" aria-hidden="true"></i>
                        <span class="hide-menu">Property Management</span>
                    </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('property_category.index') }}">Property Category</a></li>
                        <li><a class="dropdown-item" href="{{ route('property_type.index') }}">Property Type</a></li>
                        <li><a class="dropdown-item" href="{{ route('property.index') }}">Property List</a></li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('testimonial.index') }}"
                        aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <span class="hide-menu">Testimonial</span>
                    </a>
                </li>

                <li class="sidebar-item dropdown">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle"
                        aria-expanded="false" data-bs-toggle="dropdown">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="hide-menu">News</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('news_category.index') }}">News Category</a></li>
                        <li><a class="dropdown-item" href="{{ route('news.index') }}">News</a></li>
                        <li><a class="dropdown-item" href="tenants.html">Comments</a></li>
                    </ul>
                </li>

                <li class="sidebar-item dropdown">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle"
                        aria-expanded="false" data-bs-toggle="dropdown">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="hide-menu">Users Management</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="agents.html">Agents Management</a></li>
                        <li><a class="dropdown-item" href="landlords.html">Landlords Management</a></li>
                        <li><a class="dropdown-item" href="tenants.html">Tenants Management</a></li>
                        <li><a class="dropdown-item" href="contractors.html">Contractors Management</a></li>
                        <li><a class="dropdown-item" href="service-provider.html">Service Providers Management</a></li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="role.html"
                        aria-expanded="false">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        <span class="hide-menu">Role Management</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="content.html"
                        aria-expanded="false">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                        <span class="hide-menu">Content Management</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="expenses.html"
                        aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <span class="hide-menu">Expenses Management</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="revenue.html"
                        aria-expanded="false">
                        <i class="fa fa-dollar" aria-hidden="true"><strong style="font-size: 20px;">&#x24; </strong></i>
                        <span class="hide-menu">Revenue History</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="payments.html"
                        aria-expanded="false">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                        <span class="hide-menu">Payments & Payout</span>
                    </a>
                </li>
                <li class="sidebar-item dropdown">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle"
                        aria-expanded="false" data-bs-toggle="dropdown">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <span class="hide-menu">Marketing Tools</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="advertisements.html">Create Advertisement</a></li>
                        <li><a class="dropdown-item" href="push-notification.html">Create Push-Notifications</a></li>
                        <li><a class="dropdown-item" href="announcement.html">Create Announcement</a></li>
                    </ul>
                </li>
                <li class="sidebar-item dropdown">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle"
                        aria-expanded="false" data-bs-toggle="dropdown">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span class="hide-menu">Support</span>
                    </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                        <li><a class="dropdown-item" href="help.html">Help & Faqs</a></li>
                        <li><a class="dropdown-item" href="feedback.html">Give Us Feedback</a></li>
                    </ul>
                </li>
                <li class="text-center p-20 upgrade-btn">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="btn d-grid btn-danger text-white" target="_blank"> Sign Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>