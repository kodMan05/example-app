<!DOCTYPE html>
<html>
<head>
    <title>Sistem Template Blade Laravel</title>
</head>
<body>
    <header>
        <h2>Blog Belajar Laravel - Teknologi Rekayasa Internet</h2>
        <nav>
            <a href="/blog">HOME</a>
            <a href="/blog/tentang">TENTANG</a>
            <a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>
    <hr/>
    <br/>
    <br/>

    <!-- bagian judul halaman blog -->
    <h3> @yield('judul_halaman') </h3>

    <!-- bagian konten blog -->
    @yield('konten')

    <br/>
    <br/>
    <hr/>
    <footer>
        <p>&copy; www.belajarlaravel.com. 2023</p>
    </footer>
</body>
</html>