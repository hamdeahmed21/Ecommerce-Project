@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();

@endphp
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{asset('backend//images/logo-dark.png')}}" alt="">
                        <h3><b>Ecommerce</b> Admin</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li>
                <a href="index.html">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview {{ ($prefix == '/brand')?'active':'' }}  ">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Brands</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'all.brand')? 'active':'' }}"><a href="{{ route('all.brand') }}"><i class="ti-more"></i>All Brand</a></li>

                </ul>
            </li>

            <li class="treeview {{ ($prefix == '/category')?'active':'' }}  ">
                <a href="#">
                    <i data-feather="mail"></i> <span>Category </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'all.category')? 'active':'' }}"><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
                    <li class="{{ ($route == 'all.subcategory')? 'active':'' }}"><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>All SubCategory</a></li>
                    <li class="{{ ($route == 'all.subsubcategory')? 'active':'' }}"><a href="{{ route('all.subsubcategory') }}"><i class="ti-more"></i>All Sub->SubCategory</a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="hard-drive"></i>
                    <span>Content</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="content_typography.html"><i class="ti-more"></i>Typography</a></li>
                    <li><a href="content_media.html"><i class="ti-more"></i>Media</a></li>
                    <li><a href="content_grid.html"><i class="ti-more"></i>Grid</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="package"></i>
                    <span>Utilities</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="utilities_border.html"><i class="ti-more"></i>Border</a></li>
                    <li><a href="utilities_color.html"><i class="ti-more"></i>Color</a></li>
                    <li><a href="utilities_ribbons.html"><i class="ti-more"></i>Ribbons</a></li>
                    <li><a href="utilities_tab.html"><i class="ti-more"></i>Tabs</a></li>
                    <li><a href="utilities_animations.html"><i class="ti-more"></i>Animation</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="edit-2"></i>
                    <span>Icons</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="icons_fontawesome.html"><i class="ti-more"></i>Font Awesome</a></li>
                    <li><a href="icons_glyphicons.html"><i class="ti-more"></i>Glyphicons</a></li>
                    <li><a href="icons_material.html"><i class="ti-more"></i>Material Icons</a></li>
                    <li><a href="icons_themify.html"><i class="ti-more"></i>Themify Icons</a></li>
                    <li><a href="icons_simpleline.html"><i class="ti-more"></i>Simple Line Icons</a></li>
                    <li><a href="icons_cryptocoins.html"><i class="ti-more"></i>Cryptocoins Icons</a></li>
                    <li><a href="icons_flag.html"><i class="ti-more"></i>Flag Icons</a></li>
                    <li><a href="icons_weather.html"><i class="ti-more"></i>Weather Icons</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="inbox"></i>
                    <span>Forms</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="forms_advanced.html"><i class="ti-more"></i>Advanced Elements</a></li>
                    <li><a href="forms_editors.html"><i class="ti-more"></i>Editors</a></li>
                    <li><a href="forms_code_editor.html"><i class="ti-more"></i>Code Editor</a></li>
                    <li><a href="forms_validation.html"><i class="ti-more"></i>Form Validation</a></li>
                    <li><a href="forms_wizard.html"><i class="ti-more"></i>Form Wizard</a></li>
                    <li><a href="forms_general.html"><i class="ti-more"></i>General Elements</a></li>
                    <li><a href="forms_dropzone.html"><i class="ti-more"></i>Dropzone</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i data-feather="server"></i>
                    <span>Tables</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="tables_simple.html"><i class="ti-more"></i>Simple tables</a></li>
                    <li><a href="tables_data.html"><i class="ti-more"></i>Data tables</a></li>
                </ul>
            </li>

        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
</aside>
