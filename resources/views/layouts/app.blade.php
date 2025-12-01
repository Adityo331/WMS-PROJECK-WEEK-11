<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMS Inventory | Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #bad9f7; /* Light gray background */
            color: #448dd6;
        }
        .navbar {
            background-color: #406db0; /* White navbar */
            border-bottom: 1px solid #1f568d;
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand {
            font-weight: 700;
            color: #007bff !important; /* Primary blue */
        }
        .nav-link {
            color: #495057 !important;
        }
        .nav-link:hover {
            color: #007bff !important;
        }
        .card {
            border: none;
            border-radius: 0.75rem;
            box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,.05);
        }
        h1, h2, h3 {
            color: #343a40;
            font-weight: 600;
        }
        .btn-primary { background-color: #007bff; border-color: #007bff; }
        .btn-success { background-color: #28a745; border-color: #28a745; }
        .btn-warning { background-color: #ffc107; border-color: #ffc107; color: #343a40; }
        .btn-danger { background-color: #dc3545; border-color: #dc3545; }
        .table thead {
            background-color: #007bff;
            color: rgb(41, 176, 217);
        }
        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
        footer {
            background-color: #ffffff;
            border-top: 1px solid #dee2e6;
            box-shadow: 0 -2px 4px rgba(0,0,0,.04);
            color: #6c757d;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #000000;">
        <div class="container">
            <a class="navbar-brand" href="{{ route('products.index') }}">
                <i class="fas fa-boxes me-2"></i> WMS Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-cube me-1"></i> Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        @yield('content')
    </div>

    <footer class="text-center py-3 mt-5">
        <p class="mb-0">&copy; {{ date('Y') }} WMS Project | Implemented with Laravel</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
