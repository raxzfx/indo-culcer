<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tradision</title>
    @vite(['resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&family=Sigmar&display=swap" rel="stylesheet">
    <style>
        .h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: #B6142C;
        }
        .h6 {
            font-family: 'poppins', sans-serif;
        }
        .footer {
            background-color: #540F0F;
        }
        .putih {
            color: #fbfbfb;
        }
        .merah {
            background-color: #B6142C;
        }
        </style>
</head>
<body class="h6 d-flex flex-column min-vh-100">
@extends('layouts.app')
@section('title', "Indonesian Tradision's")
@section('content')
<nav class="navbar navbar-expand-lg merah py-4">
  <div class="container-fluid">
    <a class="navbar-brand fs-2 fw-bold text-white" href="#">Indo Culcer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
  <div class="container-fluid justify-content-end h6 ms-auto me-5">
    <a class="navbar-brand text-white me-4" href="#">home</a>
    <a class="navbar-brand text-white me-4" href="#">dashboard</a>
    <a class="navbar-brand text-white me-4" href="#">culture</a>
  </div>
</nav>

<div class="container py-5">
  <h1 class="text-center text-danger fw-bold mb-4 h1">Indonesian Tradision's</h1>

  <div class="container mb-5">
    <div class="d-flex justify-content-end">
      <span class="input-group-text border-end border"><i class="bi bi-search"></i></span>
      <input type="text" class="form-control" style="max-width: 300px;" placeholder="Search tradisions">
    </div>
  </div>

  <div class="row g-4">
    @if (!empty($tradisions))
      @foreach ($tradisions as $item)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card border-0 rounded-5">
            <div class="ratio ratio-1x1">
              <img src="{{ $item['main_image'] ?? 'https://source.unsplash.com/400x300/?tradition' }}" class="card-img-top rounded-5 object-fit-cover" alt="{{ $item['name'] ?? 'Indonesian Tradition' }}">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title h6">{{ $item['name'] ?? 'Tradition Name' }}</h5>
              <p class="text-muted mb-0">{{ $item['city'] ?? 'Origin City' }}</p>
            </div>
          </div>
        </div>
      @endforeach
    @else
      <div class="col-12">
        <div class="alert alert-info text-center" role="alert">
          Belum ada tradisi yang tersedia.
        </div>
      </div>
    @endif
  </div>
</div>
<footer class="footer text-white py-5 mt-auto">
  <div class="container text-center">
    <p class="mb-0">&copy; 2025 IndoCulcer</p>
  </div>
</footer>
@endsection

</body>
</html>