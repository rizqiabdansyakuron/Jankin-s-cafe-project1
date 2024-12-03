<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Kopi - Landing Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .hero {
            background-image: url('https://images.unsplash.com/photo-1692299108021-fe4d9af6536a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            color: rgb(255, 255, 255);
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#" > Jacking's coffee  </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1>Jacking's Coffee</h1>
            <p> Est 2019</p>
            <a href="{{ route('menu') }}" class="btn btn-primary btn-lg text-white" style="background: #7c6d5c">Menu</a>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">About Us</h2>
            <img
                src="https://plus.unsplash.com/premium_photo-1674931348749-d22ce850b4cb?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Jacking's Coffee"
                style="display: block; margin: 0 auto; width: 500px; height: 300px; object-fit: cover; border-radius: 10px;">
            <p class="text-center text-muted">

            </p>
            <p> <h3>
                Selamat datang di Jacking's Coffee </h3>
            </p>
            <p>
                Didirikan pada tahun 2019, Jacking's Coffee dibangun dengan misi sederhana namun mendalam: menyatukan orang-orang melalui secangkir kopi yang sempurna
                Sebagai UMKM lokal yang bangga, kami berdedikasi untuk menciptakan pengalaman minum kopi yang luar biasa sekaligus mendukung komunitas kami
                Di Jacking's Coffee, kami percaya bahwa kopi lebih dari sekadar minuman—melainkan sebuah cerita. Dari biji kopi pilihan yang bersumber dari petani lokal
                hingga campuran kopi yang dibuat dengan cinta, setiap tegukan mencerminkan komitmen kami terhadap kualitas, keberlanjutan, dan hubungan yang hangat.
                Kedai kopi kami yang nyaman menawarkan tempat yang nyaman di mana Anda dapat bersantai, bekerja, atau bercengkrama dengan teman-teman.
                Baik Anda menikmati espresso khas kami atau menikmati kue kering yang baru dipanggang, kami bertujuan untuk membuat setiap kunjungan Anda istimewa
                Terima kasih telah menjadi bagian dari perjalanan kami. Bersama-sama, mari kita nikmati hidup, satu cangkir setiap hari.
            </p>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Our Product</h2>
            <div class="row mt-4">
                <!-- Product 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://i.pinimg.com/originals/b3/f9/ec/b3f9ec10537a01aaeca68cecf2bd1a81.gif"
                            class="card-img-top" alt="Kopi Arabica">
                        <div class="card-body">
                            <h5 class="card-title">Kopi Arabica</h5>
                            <p class="card-text">Aroma khas dengan rasa lembut dan sedikit asam.</p>
                            <a href="#" class="btn btn-primary btn-lg text-white" style="background: #7c6d5c">buy</a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://i.pinimg.com/originals/b3/f9/ec/b3f9ec10537a01aaeca68cecf2bd1a81.gif"
                            class="card-img-top" alt="Kopi Robusta">
                        <div class="card-body">
                            <h5 class="card-title">Kopi Robusta</h5>
                            <p class="card-text">Rasa kuat dan sedikit pahit, cocok untuk pecinta kopi pekat.</p>
                            <a href="#" class="btn btn-primary btn-lg text-white" style="background: #7c6d5c">buy</a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://i.pinimg.com/originals/b3/f9/ec/b3f9ec10537a01aaeca68cecf2bd1a81.gif"
                            class="card-img-top" alt="Kopi Luwak">
                        <div class="card-body">
                            <h5 class="card-title">Kopi Luwak</h5>
                            <p class="card-text">Kopi eksotis dengan proses alami oleh luwak.</p>
                            <a href="#" class="btn btn-primary btn-lg text-white" style="background: #7c6d5c">buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
<section id="gallery" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Our Gallery</h2>
        <div class="row g-3">
            <!-- Image 1 -->
            <div class="col-6 col-md-4">
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=400&auto=format&fit=crop"
                     class="img-fluid rounded shadow"
                     alt="Coffee Shop Interior">
            </div>
            <!-- Image 2 -->
            <div class="col-6 col-md-4">
                <img src="https://i.pinimg.com/736x/62/69/0e/62690e357b1565a5a26f42185585ac8e.jpg"
                     class="img-fluid rounded shadow"
                     alt="Cup of Coffee">
            </div>
            <!-- Image 3 -->
            <div class="col-6 col-md-4">
                <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?q=80&w=400&auto=format&fit=crop"
                     class="img-fluid rounded shadow"
                     alt="Coffee Beans">
            </div>
            <!-- Image 4 -->
            <div class="col-6 col-md-4">
                <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096?q=80&w=400&auto=format&fit=crop"
                     class="img-fluid rounded shadow"
                     alt="Barista Making Coffee">
            </div>
            <!-- Image 5 -->
            <div class="col-6 col-md-4">
                <img src="https://i.pinimg.com/736x/ea/5e/83/ea5e83f9da5d19ae0a8d9c9fd2b6f900.jpg"
                     class="img-fluid rounded shadow"
                     alt="Latte Art">
            </div>
            <!-- Image 6 -->
            <div class="col-6 col-md-4">
                <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=400&auto=format&fit=crop"
                     class="img-fluid rounded shadow"
                     alt="Coffee Shop Vibes">
            </div>
        </div>
    </div>
</section>

 <!-- contact us -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center">Contact Us</h2>
        <p class="text-center mb-4">ola, need help ?</p>

            <div class="col-md-6">
                <h5>Contact Info</h5>
                <ul class="list-unstyled">
                    <li><strong>Address:</strong> Jl. Kopi Sejati No. 123, pekanbaru, Indonesia</li>
                    <li><strong>Phone:</strong> +62 812 3456 7890</li>
                    <li><strong>Email:</strong> info@jackingcoffee.com</li>
                </ul>
                <h5>Follow Us</h5>
                <div class="d-flex gap-3">
                    <a href="#" class="text-dark"><i class="bi bi-facebook"></i> Facebook</a>
                    <a href="#" class="text-dark"><i class="bi bi-instagram"></i> Instagram</a>
                    <a href="#" class="text-dark"><i class="bi bi-twitter"></i> Twitter</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="py-3 bg-dark text-white text-center">
        <p>© 2024 UMKM Kopi. Semua Hak Dilindungi oleh kelompok kami.</p>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
