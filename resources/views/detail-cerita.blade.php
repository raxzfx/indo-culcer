<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndoCulcer - Platform Pelestarian Budaya Indonesia</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="bg-danger bg-opacity-75 py-3">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="bg-purple bg-opacity-75 rounded-bottom shadow px-3 py-2 text-center">
                        <h1 class="fs-4 fw-bold text-white mb-0">Indo culcer</h1>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="text-white text-decoration-none mx-3">action 1</a>
                        <a href="#" class="text-white text-decoration-none mx-3">action 2</a>
                        <a href="#" class="text-white text-decoration-none mx-3">action 3</a>
                    </div>
                </div>
            </div>

            <!-- Hero image -->
            <div class="position-relative mt-3 mb-4 text-center">
                <img src="{{ asset('images/gunungz.jpg') }}" alt="Hero Image" class="card-img-top w-100 rounded" style="height: 350px; object-fit: cover;">
            </div>
        </div>
    </header>

    <!-- Main content -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center fw-bold text-danger mb-4 fs-1">{{ $data['judul'] }}</h2>
            <div class="mx-auto" style="max-width: 1000px;">
                <p style="text-align: justify;">{{ $data['isi'] }}</p>
            </div>
        </div>
    </section>

    <!-- Recommendation articles -->
    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="text-center text-danger mb-4">recommendation article</h3>
            <div class="row">

                @foreach ($lotData as $article)
                    <!-- Recommendation Card 1 -->
                    <div class="col-md-3 mb-4">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/sawahz.jpg') }}" class="card-img-top" alt="Recommendation image">
                            <div class="card-body">
                                <span class="text-danger fw-bold small">{{ $article['kategori'] }}</span>
                                <h5 class="card-title fw-bold">{{ $article['judul'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; 2025 IndoCulcer - Platform Pelestarian Budaya Indonesia</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
