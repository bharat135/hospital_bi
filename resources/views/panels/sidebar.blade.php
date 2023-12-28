@php
$configData = Helper::applClasses();
@endphp
<div
  class="main-menu menu-fixed {{ $configData['theme'] === 'dark' || $configData['theme'] === 'semi-dark' ? 'menu-dark' : 'menu-light' }} menu-accordion menu-shadow"
  data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item me-auto">
        <a class="navbar-brand" href="{{ url('/') }}">
          <span class="brand-logo">
            <img src="/images/logo/logo1.png" height="32"/>
          </span>
          <h2 class="brand-text">{{ config('app.name') }}</h2>
        </a>
      </li>
      <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pe-0" data-toggle="collapse">
          <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
          <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc"
            data-ticon="disc"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

      <!-- Dashboard -->
      <li class="nav-item {{ Route::currentRouteName() === 'dashboard-ecommerce' ? 'active' : '' }}" data-menu="dashboard-ecommerce">
        <a href="/" class="d-flex align-items-center">
          <i data-feather="home"></i>
          <span class="menu-title text-truncate">Dashboard</span>
        </a>
      </li>
  
      <!-- Patient -->
      @can('patient_access')
      <li class="nav-item has-sub">
        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
          <i data-feather="user"></i>
        <span class="menu-title text-truncate">Patient</span>
       
        </a>
          <ul class="menu-content">
            @can('patient_access')
            <li class="nav-item {{ Route::currentRouteName() === 'patient-index' ? 'active' : '' }}" data-menu="patient-index">
              <a href="/patient/index" class="d-flex align-items-center">
                <i data-feather="circle"></i>
                <span class="menu-title text-truncate">Manage Patients</span>
              </a>
            </li>
            @endcan
            @can('patient_create')
            <li class="nav-item {{ Route::currentRouteName() === 'patient-create' ? 'active' : '' }}" data-menu="patient-create">
              <a href="/patient/create" class="d-flex align-items-center">
                <i data-feather="circle"></i>
                <span class="menu-title text-truncate">Add Patient</span>
              </a>
            </li>
            @endcan
            @can('patient_call_status')
            <li class="nav-item {{ Route::currentRouteName() === 'patient-details' ? 'active' : '' }}" data-menu="patient-details">
              <a href="/patient/details" class="d-flex align-items-center">
                <i data-feather="circle"></i>
                <span class="menu-title text-truncate">Calling Status</span>
              </a>
            </li>
            @endcan 
            @can('scheduled_calls')
            <li class="nav-item {{ Route::currentRouteName() === 'schedule-index' ? 'active' : '' }}" data-menu="schedule-index">
              <a href="/schedule/index" class="d-flex align-items-center">
                <i data-feather="circle"></i>
                <span class="menu-title text-truncate">Scheduled Calls</span>
              </a>
            </li>
            @endcan
          </ul>
        </li>
      @endcan
      @can('calendar_access')
        <!-- Calendar -->
        <li class="nav-item {{ Route::currentRouteName() === 'app-calendar' ? 'active' : '' }}" data-menu="app-calendar">
          <a href="/app/calendar" class="d-flex align-items-center">
            <i data-feather="calendar"></i>
            <span class="menu-title text-truncate">Calendar</span>
          </a>
        </li>
      @endcan
      @role('admin')
      <!-- Calendar -->
      <li class="nav-item has-sub">
        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
          <i data-feather="target"></i>
        <span class="menu-title text-truncate">Campaign Management</span>
       
        </a>
          <ul class="menu-content">
            @can('marketing_sources_view')
            <li class="nav-item {{ Route::currentRouteName() === 'sources.index' ? 'active' : '' }}" data-menu="sources">
              <a href="/marketing/sources/index" class="d-flex align-items-center">
                <i data-feather="circle"></i>
                <span class="menu-title text-truncate">Marketing Sources</span>
              </a>
            </li>
            @endcan
            @can('marketing_sources_view')
            <li class="nav-item {{ Route::currentRouteName() === 'sources.tree' ? 'active' : '' }}" data-menu="tree">
              <a href="/marketing/sources/tree" class="d-flex align-items-center">
                <i data-feather="circle"></i>
                <span class="menu-title text-truncate">Marketing Sources Tree view</span>
              </a>
            </li>
            @endcan
            
            @can('campaign_view')
            <li class="nav-item {{ Route::currentRouteName() === 'campaign' ? 'active' : '' }}" data-menu="campaign">
              <a href="/patient/create" class="d-flex align-items-center">
                <i data-feather="circle"></i>
                <span class="menu-title text-truncate">Campaigns</span>
              </a>
            </li>
            @endcan          
          </ul>
        </li>
       <!-- User Management -->
   
       <li class="nav-item has-sub">
        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
          <i data-feather="user"></i>
        <span class="menu-title text-truncate">User Management</span>
       
        </a>
          <ul class="menu-content">
            <li class="nav-item {{ Route::currentRouteName() === 'register' ? 'active' : '' }}" data-menu="register">
              <a href="/register" class="d-flex align-items-center">
                <i data-feather="circle"></i>
                <span class="menu-title text-truncate">Add new user</span>
              </a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() === 'authorization-roles' ? 'active' : '' }}" data-menu="authorization-roles">
              <a href="/authorization/roles" class="d-flex align-items-center">
                <i data-feather="circle"></i>
                <span class="menu-title text-truncate">Roles</span>
              </a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() === 'authorization-permission' ? 'active' : '' }}" data-menu="authorization-permission">
              <a href="/authorization/permission" class="d-flex align-items-center">
                <i data-feather="circle"></i>
                <span class="menu-title text-truncate">Manage Permissions</span>
              </a>
            </li>            
          </ul>
        </li>
        @endrole
  
    </ul>

    
  </div>
</div>
<!-- END: Main Menu-->
