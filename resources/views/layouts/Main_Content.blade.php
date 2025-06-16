
@extends('layouts.app')


@section('Main_Content')

  <!-- Main Content -->
 <main class="main-content">
    <!-- Header -->
    <div class="header">
        <div class="d-flex align-items-center">
            <button class="menu-toggle d-lg-none">
                <i class="fas fa-bars"></i>
            </button>
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>

        <div class="user-actions">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search...">
            </div>

            <div class="notification-bell">
                <i class="fas fa-bell"></i>
                <span class="notification-badge">3</span>
            </div>
        </div>
    </div>

    <!-- Cards Row -->
    <div class="cards-row">
        <div class="card fade-in" style="animation-delay: 0.1s;">
            <div class="card-body">
                <div class="card-icon users">
                    <i class="fas fa-users"></i>
                </div>
                <h6 class="card-title">Total Users</h6>
                <h3 class="card-value">1,254</h3>
                <div class="card-change positive">
                    <i class="fas fa-arrow-up"></i> 12.5% from last month
                </div>
            </div>
        </div>

        <div class="card fade-in" style="animation-delay: 0.2s;">
            <div class="card-body">
                <div class="card-icon products">
                    <i class="fas fa-box-open"></i>
                </div>
                <h6 class="card-title">Total Products</h6>
                <h3 class="card-value">568</h3>
                <div class="card-change positive">
                    <i class="fas fa-arrow-up"></i> 5.2% from last month
                </div>
            </div>
        </div>

        <div class="card fade-in" style="animation-delay: 0.3s;">
            <div class="card-body">
                <div class="card-icon orders">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h6 class="card-title">Total Orders</h6>
                <h3 class="card-value">1,024</h3>
                <div class="card-change negative">
                    <i class="fas fa-arrow-down"></i> 2.3% from last month
                </div>
            </div>
        </div>

        <div class="card fade-in" style="animation-delay: 0.4s;">
            <div class="card-body">
                <div class="card-icon revenue">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h6 class="card-title">Total Revenue</h6>
                <h3 class="card-value">$24,780</h3>
                <div class="card-change positive">
                    <i class="fas fa-arrow-up"></i> 8.7% from last month
                </div>
            </div>
        </div>
    </div>




    <!-- Content Area -->
    <div class="content-area fade-in">
        <div class="content-header">
            <h4 class="content-title">Recent Orders</h4>
            <div class="content-actions">
                <a href="{{route('order.create')}}"><button class="btn btn-sm btn-primary">Create New</button></a>
            </div>
        </div>


        {{--
        this is the eidt or delete buttun in action
        <a href="#" class="action-btn edit" title="Edit"><i class="fas fa-edit"></i></a>
        <a href="#" class="action-btn delete" title="Delete"><i class="fas fa-trash"></i></a>
        --}}

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>




                </tbody>

            </table>
        </div>

    </div>




    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2025 AdminPro Dashboard. All rights reserved. | Developed by Shahar Yar</p>
    </div>
</main>
    
@endsection