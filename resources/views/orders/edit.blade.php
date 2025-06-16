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
                    <h3>New Order</h3>
                    <p>Fill out the form to create a new customer order</p>
                </div>
            </div>
            
            <div class="form-content">
                <form action="" method="POST" class="order-form" autocomplete="off">
                    @csrf
                    
                    <div class="form-header">
                        <h2>Order Information</h2>
                        <div class="header-bar"></div>
                    </div>

                    <div class="form-group floating-label">
                        <input type="text" id="customer_name" name="name" class="form-input" required>
                        <label for="customer_name">Customer Name</label>
                        <div class="focus-border"></div>
                        <i class="fas fa-user input-icon"></i>
                    </div>

                    <div class="form-group floating-label">
                        <input type="date" id="date" name="customer_date" class="form-input" required>
                        <label for="date">Order Date</label>
                        <div class="focus-border"></div>
                        <i class="far fa-calendar-alt input-icon"></i>
                    </div>

                    <div class="form-group floating-label">
                        <input type="number" id="amount" name="customer_amount" step="0.01" class="form-input" required>
                        <label for="amount">Amount ($)</label>
                        <div class="focus-border"></div>
                        <i class="fas fa-dollar-sign input-icon"></i>
                    </div>

                    <div class="form-group floating-label select-group">
                        <select id="status" name="customer_status" class="form-input" required>
                            <option value="" disabled selected></option>
                            <option value="Pending">Pending</option>
                            <option value="Processing">Processing</option>
                            <option value="Completed">Completed</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                        <label for="status">Order Status</label>
                        <div class="focus-border"></div>
                        <i class="fas fa-tag input-icon"></i>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-secondary">
                            <i class="fas fa-undo"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Submit Order
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<style>
    /* Modern Professional Form Styling */
    :root {
        --primary-color: #4361ee;
        --secondary-color: #3f37c9;
        --accent-color: #4895ef;
        --light-gray: #f8f9fa;
        --medium-gray: #e9ecef;
        --dark-gray: #495057;
        --text-color: #212529;
        --white: #ffffff;
        --success-color: #4cc9f0;
        --error-color: #f72585;
    }

    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: calc(100vh - 120px);
        padding: 2rem;
        background-color: var(--light-gray);
    }

    .form-card {
        display: flex;
        width: 100%;
        max-width: 900px;
        background: var(--white);
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .form-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
    }

    .form-preview {
        flex: 1;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        padding: 3rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: var(--white);
        text-align: center;
    }

    .form-preview i {
        font-size: 4rem;
        margin-bottom: 1.5rem;
        color: rgba(255, 255, 255, 0.9);
    }

    .form-preview h3 {
        font-size: 1.8rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .form-preview p {
        font-size: 1rem;
        opacity: 0.9;
        line-height: 1.6;
    }

    .form-content {
        flex: 1.5;
        padding: 3rem;
    }

    .form-header {
        margin-bottom: 2rem;
    }

    .form-header h2 {
        font-size: 1.5rem;
        color: var(--text-color);
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .header-bar {
        width: 50px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        border-radius: 2px;
    }

    .order-form {
        display: flex;
        flex-direction: column;
    }

    .form-group {
        position: relative;
        margin-bottom: 1.8rem;
    }

    .floating-label {
        position: relative;
    }

    .form-input {
        width: 100%;
        padding: 1rem 1rem 1rem 2.5rem;
        font-size: 1rem;
        color: var(--text-color);
        border: 1px solid var(--medium-gray);
        border-radius: 6px;
        outline: none;
        background-color: var(--light-gray);
        transition: all 0.3s ease;
    }

    .form-input:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
    }

    .floating-label label {
        position: absolute;
        top: 1rem;
        left: 2.5rem;
        font-size: 1rem;
        color: var(--dark-gray);
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .form-input:focus + label,
    .form-input:not(:placeholder-shown) + label {
        top: -0.6rem;
        left: 0.8rem;
        font-size: 0.8rem;
        background-color: var(--white);
        padding: 0 0.5rem;
        color: var(--primary-color);
    }

    .input-icon {
        position: absolute;
        left: 1rem;
        top: 1rem;
        color: var(--dark-gray);
        transition: all 0.3s ease;
    }

    .form-input:focus ~ .input-icon {
        color: var(--primary-color);
    }

    .focus-border {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transition: width 0.4s ease;
    }

    .form-input:focus ~ .focus-border {
        width: 100%;
    }

    .select-group {
        position: relative;
    }

    .select-group select {
        appearance: none;
        padding-right: 2.5rem;
    }

    .select-arrow {
        position: absolute;
        right: 1rem;
        top: 1rem;
        color: var(--dark-gray);
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .form-input:focus ~ .select-arrow {
        color: var(--primary-color);
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn {
        padding: 0.8rem 1.5rem;
        font-size: 1rem;
        font-weight: 500;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        border: none;
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: var(--white);
        box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 7px 20px rgba(67, 97, 238, 0.4);
    }

    .btn-secondary {
        background-color: var(--medium-gray);
        color: var(--dark-gray);
    }

    .btn-secondary:hover {
        background-color: #d1d7e0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .form-card {
            flex-direction: column;
        }
        
        .form-preview {
            padding: 2rem;
        }
        
        .form-content {
            padding: 2rem;
        }
    }

    /* Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .form-group {
        animation: fadeInUp 0.5s ease forwards;
        opacity: 0;
    }

    .form-group:nth-child(1) { animation-delay: 0.1s; }
    .form-group:nth-child(2) { animation-delay: 0.2s; }
    .form-group:nth-child(3) { animation-delay: 0.3s; }
    .form-group:nth-child(4) { animation-delay: 0.4s; }
    .form-actions { animation-delay: 0.5s; }
</style>


@endsection