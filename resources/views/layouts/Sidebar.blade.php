@extends('layouts.app')

@section('Sidebar')
     
  <aside class="sidebar">
        <div class="sidebar-header">
            <h3><i class="fas fa-cube"></i>AdminPro</h3>
        </div>
        
        <ul class="nav-menu">
            <li class="nav-item active">
                <a href="#" class="nav-link active">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span class="menu-text">Users</span>
                    <span class="badge">3</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-box-open"></i>
                    <span class="menu-text">Products</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="menu-text">Orders</span>
                    <span class="badge">5</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-chart-line"></i>
                    <span class="menu-text">Analytics</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-cog"></i>
                    <span class="menu-text">Settings</span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Security</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Notifications</a>
                    </li>
                </ul>
            </li>
        </ul>
        
       
    </aside>

 @endsection