@extends('layouts.app')

@include('layouts.Sidebar')

@section('Main_Content')
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

    <!-- Order Form Section -->


    <div class="form-container">
        <div class="form-card">
            <div class="form-preview">
                <div class="preview-content">
                    <i class="fas fa-shopping-bag"></i>
                    <h3>Update Order</h3>
                    <p>Edit order details and submit your changes.</p>

                </div>
            </div>

            <div class="form-content">
                <form action="{{route('order.update',$order_edit->id)}}" method="POST" class="order-form" autocomplete="off">
                    @csrf

                    <div class="form-header">
                        <h2>Order Information</h2>
                        <div class="header-bar"></div>
                    </div>

                    <div class="form-group floating-label">
                        <input type="text" id="customer_name" value="{{$order_edit->customer_name}}" name="name"
                            class="form-input" required>
                        <label for="customer_name">Customer Name</label>
                        <div class="focus-border"></div>
                        <i class="fas fa-user input-icon"></i>
                    </div>

                    <div class="form-group floating-label">
                        <input type="date" id="date" value="{{$order_edit->date}}" name="customer_date"
                            class="form-input" required>
                        <label for="date">Order Date</label>
                        <div class="focus-border"></div>
                        <i class="far fa-calendar-alt input-icon"></i>
                    </div>

                    <div class="form-group floating-label">
                        <input type="number" id="amount" value="{{$order_edit->amount}}" name="customer_amount"
                            step="0.01" class="form-input" required>
                        <label for="amount">Amount ($)</label>
                        <div class="focus-border"></div>
                        <i class="fas fa-dollar-sign input-icon"></i>
                    </div>

                    <div class="form-group floating-label select-group">
                        <select id="status" name="customer_status" class="form-input" required>
                            <option value="" disabled {{ !isset($order_edit->status) ? 'selected' : '' }}></option>
                            <option value="Pending" {{ isset($order_edit->status) && $order_edit->status == 'Pending' ?
                                'selected' : '' }}>Pending</option>
                            <option value="Processing" {{ isset($order_edit->status) && $order_edit->status ==
                                'Processing' ? 'selected' : '' }}>Processing</option>
                            <option value="Completed" {{ isset($order_edit->status) && $order_edit->status ==
                                'Completed' ? 'selected' : '' }}>Completed</option>
                            <option value="Cancelled" {{ isset($order_edit->status) && $order_edit->status ==
                                'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                        <label for="status">Order Status</label>
                        <div class="focus-border"></div>
                        <i class="fas fa-tag input-icon"></i>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="form-actions">

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Update Order
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<style>

</style>


@endsection