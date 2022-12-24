<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?= route_to('users.index'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Find Out!</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= route_to('users.create'); ?>">
                        <i class="bi bi-circle"></i><span>Form</span>
                    </a>
                </li>
                <li>
                    <a href="pages-contact.html">
                        <i class="bi bi-circle"></i><span>Contact</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

    </ul>

</aside><!-- End Sidebar-->