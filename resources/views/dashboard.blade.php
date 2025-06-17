@extends('layouts.app')


@section('Sidebar')

<aside class="sidebar">
    <div class="sidebar-header">
        <h3><i class="fas fa-cube"></i> AdminPro</h3>
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
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id}}</td>
                        <td>{{ $order->customer_name}}</td>
                        <td>{{ $order->date}}</td>
                        <td>{{ $order->amount}}</td>
                        <td>{{ $order->status}}</td>
                        <td>
                            <a href="{{route('order.edit',$order->id)}}" class="action-btn edit" title="Edit"><i
                                    class="fas fa-edit"></i></a>

                            <form action="{{ route('order.destroy', $order->id) }}" method="POST"
                                class="delete-form d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn delete-btn" title="Delete"
                                    style="background: none; border: none; padding: 0; color: red;">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{$orders->links('pagination::bootstrap-5')}}
            </div>

           
        </div>
    </div>



    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2025 AdminPro Dashboard. All rights reserved. | Developed by Shahar Yar</p>
    </div>

</main>
@endsection