<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{route('main.dashboard')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.support_raise_support.main">{{ trans('staff::admin.dashboard') }}</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">{{ trans('staff::admin.employees') }}</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="dashboard-ecommerce.html" data-i18n="nav.dash.ecommerce">{{ trans('staff::admin.employees_data') }}</a></li>
              <li><a class="menu-item" href="dashboard-crypto.html" data-i18n="nav.dash.crypto">{{ trans('staff::admin.advanced_search') }}</a></li>
              <li><a class="menu-item" href="dashboard-sales.html" data-i18n="nav.dash.sales">{{ trans('staff::admin.employee_attachment') }}</a></li>
              <li><a class="menu-item" href="dashboard-sales.html" data-i18n="nav.dash.sales">{{ trans('staff::admin.reports') }}</a></li>
              <li><a class="menu-item" href="dashboard-sales.html" data-i18n="nav.dash.sales">{{ trans('staff::admin.employees_deleted') }}</a></li>
            </ul>
        </li>

      </ul>
    </div>
  </div>
