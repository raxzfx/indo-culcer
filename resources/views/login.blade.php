
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
      .body{
        font-family: 'Poppins', sans-serif;
      }
      .btn-merahd {
        background-color: #b6142c !important;
        color: #fbfbfb !important;
      }
      .text-hitam {
        color: #161f28;
      }
    </style><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body class="vh-100 body">
  <div class="container-fluid h-100">
      <div class="row h-100">
        <!-- Form Section -->
        <div class="col-md-6 d-flex align-items-center justify-content-center bg-light">
          <div class="w-75 mt-n3">
            <h2 class="body mb-4 text-center text-hitam">Welcome!</h2>
            <form>
              <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                <span class="input-group-text border-end border border-black"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control border border-black" id="email" placeholder="">
                </div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                <span class="input-group-text border-end border border-black"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control border border-black" id="password" placeholder="">
                </div>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
              </div>
              <button type="submit" class="btn btn-merahd w-100 rounded-pill ">Login</button>
              <h6 class="text-center mt-4 mb-3 fw-light">or continue with</h6>
              <div class="d-flex justify-content-center mt-3 gap-3">
                <a href="#" class="d-flex align-items-center justify-content-center rounded-circle me-3 shadow-sm p-3 mb-5 bg-body rounded" style="width: 65px; height: 65px; background-color: #fbfbfb;">
                  <img src="https://img.icons8.com/?size=100&id=17949&format=png&color=000000" alt="Google" width="32" height="32"/>
                </a>
                 <a href="#" class="d-flex align-items-center justify-content-center rounded-circle me-3 shadow-sm p-3 mb-5 bg-body rounded" style="width: 65px; height: 65px; background-color: #fbfbfb;">
                  <img src="https://img.icons8.com/?size=100&id=uLWV5A9vXIPu&format=png&color=000000" alt="Google" width="39" height="39"/>
                </a>
              </div>
              <h6 class="text-center">Don't have an account? <em class="text-danger text-decoration-underline"> sign up here</em></h6>
            </form>
          </div>
        </div>        
        <div class="col-md-6 d-none d-md-block p-0">
          <img src="{{ asset('images/logo.png') }}" class="img-full" alt="Gambar Contoh" width="100%" height="100%">
        </div>
      </div>
    </div>
</body>
</html>
