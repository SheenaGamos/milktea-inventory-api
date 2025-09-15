<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Milk Tea Inventory Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        .logo-text {
            font-weight: 700;
            font-size: 1.8rem;
            color: #007bff; /* Blue */
            letter-spacing: 2px;
            user-select: none;
        }
        .nav-link {
            font-weight: 600;
            color: #28a745; /* Green */
        }
        .nav-link.active, .nav-link:hover {
            color: #dc3545; /* Red */
            text-decoration: underline;
        }
        .btn-3d {
            background: linear-gradient(145deg, #007bff, #0056b3);
            border: none;
            color: white;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
            transition: all 0.2s ease-in-out;
        }
        .btn-3d:hover {
            background: linear-gradient(145deg, #0056b3, #007bff);
            box-shadow: 0 6px 8px rgba(0,0,0,0.5);
            transform: translateY(-2px);
        }
        .sidebar {
            height: 100vh;
            background-color: white;
            border-right: 1px solid #dee2e6;
            padding-top: 1rem;
        }
        .content-area {
            padding: 2rem;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <nav class="sidebar d-flex flex-column p-3">
            <div class="mb-4 text-center logo-text">
                Milk Tea Inventory Management
            </div>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('dashboard.products') }}" class="nav-link {{ request()->routeIs('dashboard.products') ? 'active' : '' }}">
                        Products
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.categories') }}" class="nav-link {{ request()->routeIs('dashboard.categories') ? 'active' : '' }}">
                        Categories
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.users') }}" class="nav-link {{ request()->routeIs('dashboard.users') ? 'active' : '' }}">
                        Users
                    </a>
                </li>
            </ul>
        </nav>
        <main class="content-area flex-grow-1">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
