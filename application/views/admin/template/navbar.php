<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$page = $components[2];

$page_id = $this->input->get('page_id');


?>
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="<?= base_url('dashboard') ?>" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li class="menu-title" key="t-apps">Management</li>

                <li> <a href="<?= base_url('blog_All') ?>" class="waves-effect">
                <i class="bx bx-file"></i>All Blog </a>
                </li>   
                <li> <a href="<?= base_url('service_All') ?>" class="waves-effect">
                <i class="bx bx-file"></i>All Service </a>
                </li>   
              
                <li class="menu-title" key="t-apps">Queries</li>
                <li>
                    <a href="<?= base_url('contact_query') ?>" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-file-manager">Contact</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('appointment_query') ?>" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-file-manager">Appointment Query</span>
                    </a>
                </li>
              
            </ul>
        </div>
    </div>
</div>