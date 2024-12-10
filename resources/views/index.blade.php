<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepsodent</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-white">

<header class="fixed w-full top-0 right-0 z-50 flex items-center justify-between bg-white shadow-lg p-4 px-10">
    <div class="logo">
        <img src="ASSET/Pepsodent-Logo.png" alt="Pepsodent Logo" class="w-24">
    </div>
    <nav class="navbar flex space-x-4">
        <a href="#home" class="text-gray-700 font-semibold uppercase hover:text-red-600">Home</a>
        <a href="#shop" class="text-gray-700 font-semibold uppercase hover:text-red-600">Produk</a>
        <a href="#delivery" class="text-gray-700 font-semibold uppercase hover:text-red-600">Misi</a>
        <a href="#tips" class="text-gray-700 font-semibold uppercase hover:text-red-600">Tips</a>
        <a href="#about" class="text-gray-700 font-semibold uppercase hover:text-red-600">About</a>
        <a href="#customer-care" class="text-gray-700 font-semibold uppercase hover:text-red-600">Customer Careline</a>
        <a href="{{ route('login') }}" class="text-gray-700 font-semibold uppercase hover:text-red-600">Login</a>
    </nav>
</header>

<section id="home" class="flex flex-wrap items-center justify-between min-h-screen px-10 py-20 justify-center bg-white">
    <div class="home-text flex-1">
        <span class="text-gray-700 font-semibold uppercase my-3 px-20 sm:px-30">Welcome To</span>
        <h1 class="text-5xl text-red-600 font-extrabold my-3 px-20 sm:px-30">Pepsodent</h1>
        <h2 class="text-2xl font-semibold text-gray-700 uppercase my-3 px-20 sm:px-30">Mau Gigi Sehat?</h2>
        <h2 class="text-2xl font-semibold text-gray-700 uppercase my-2 px-20 sm:px-30">Pepsodent Solusinya !!</h2>
        <a href="{{ route ('about') }}" class="inline-block  my-2 ml-20 px-10 py-2 border-2 border-red-600 rounded-full text-red-600 font-medium hover:bg-red-600 hover:text-white transition">About Me</a>
     
    </div>
    </div>
    <div class="apa flex-1">
        <img src="ASSET/Pepsodent-Logo.png" alt="Pepsodent Logo" class="max-w-xl mb-6">
    </div>
</section>

<section id="shop" class="py-20 px-10">
    <div class="text-center mb-10">
        <span class="text-3xl text-black-600 font-semibold">Jadilah bagian dari kami</span>
        <h1 class="text-6xl text-blue-900 font-bold">Get Your Own Here</h1>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="bg-red-600 p-5 rounded-lg shadow-lg">
            <div class="box-img">
                <img src="ASSET/m.png" alt="Pasta Gigi Pepsodent" class="w-full h-32 object-cover">
            </div>
            <h4 class="text-white font-semibold mt-2">Pasta Gigi Pepsodent Pencegah Gigi Berlubang</h4>
            <span class="text-white font-medium">20 k</span>
            <a href="#" class="inline-block mt-2 px-4 py-2 bg-white text-red-600 rounded-full">Beli Sekarang</a>
        </div>
        <div class="bg-red-600 p-5 rounded-lg shadow-lg">
            <div class="box-img">
                <img src="ASSET/h.png" alt="Pasta Gigi Pepsodent Complete" class="w-full h-32 object-cover">
            </div>
            <h4 class="text-white font-semibold mt-2">Pasta Gigi Pepsodent Complete 8 Herbal Ekstrak Lemon</h4>
            <span class="text-white font-medium">29 k</span>
            <a href="#" class="inline-block mt-2 px-4 py-2 bg-white text-red-600 rounded-full">Beli Sekarang</a>
        </div>
        <div class="bg-red-600 p-5 rounded-lg shadow-lg">
            <div class="box-img">
                <img src="ASSET/b.png" alt="Pasta Gigi Pepsodent Multi Protection" class="w-full h-32 object-cover">
            </div>
            <h4 class="text-white font-semibold mt-2">Pasta Gigi Pepsodent Complete 8 Multi Protection</h4>
            <span class="text-white font-medium">23 k</span>
            <a href="#" class="inline-block mt-2 px-4 py-2 bg-white text-red-600 rounded-full">Beli Sekarang</a>
        </div>
    </div>
    <div class="text-center mt-10">
        <a href="#" class="inline-block px-6 py-2 border-2 border-red-600 rounded-full text-red-600 font-medium hover:bg-red-600 hover:text-white">Tampilkan Produk Lainnya</a>
    </div>
</section>

<section id="delivery" class="py-20 px-10 bg-gray-50">
    <div class="text-center mb-10">
        <h1 class="text-6xl text-blue-900 font-bold">Program Kami</h1>
    </div>
    <div class="flex flex-col items-center text-center">
      <img src="ASSET/SLIDE 1.png" alt="Program Kami" class="w-full max-w-6xl mb-7">
        <span class="text-gray-600 mb-4 text justify">Pepsodent menyediakan konsultasi kesehatan gigi dan mulut GRATIS via ponsel. Tanyakan semua hal mengenai kesehatan gigi dan mulut pada dokter gigi melalui layanan konsultasi gratis kami. Selama lebih dari 25 tahun, Pepsodent telah menjalankan misi untuk menyebarkan kebiasaan menyikat gigi yang baik. Kini Pepsodent mempermudah akses untuk konsultasi gigi sehingga siapapun bisa segera mendapat perawatan ketika sakit gigi atau rasa tidak nyaman muncul. Pepsodent percaya akan pentingnya perawatan gigi yang berkualitas dalam jangkauan semua orang.</span>
        <h4 class="text-1xl text-gray-800 font-semibold text-justify">Jangan tunggu sampai sakit gigi #KonsultasiGigiSekarang</h4>
        <a href="#" class="inline-block mt-4 px-6 py-2 bg-red-600 text-white rounded-full">Pelajari Lebih Lanjut</a>
    </div>
</section>

<section id="testimonials" class="py-20 px-10">
    <div class="text-center mb-10">
        <h1 class="text-6xl text-blue-900 font-bold">Testimoni</h1>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="bg-gray-100 p-5 rounded-lg shadow-lg text-center">
            <img src="ASSET/tes aldo.png" alt="Aldoo" class="w-36 h-36 rounded-full mx-auto mb-4">
            <h3 class="text-gray-800 font-semibold">Aldoo &#128525;</h3>
            <p class="text-gray-600">Produknya Murah dan Berkualitas BNGTT &#128525;</p>
        </div>
        <div class="bg-gray-100 p-5 rounded-lg shadow-lg text-center">
            <img src="ASSET/tes farah.png" alt="Farah" class="w-36 h-36 rounded-full mx-auto mb-4">
            <h3 class="text-gray-800 font-semibold">Farah Syakirah</h3>
            <p class="text-gray-600">Solusi Gigi Sehat !! &#128151;</p>
        </div>
        <div class="bg-gray-100 p-5 rounded-lg shadow-lg text-center">
            <img src="ASSET/tes satya.png" alt="Mamas Satya" class="w-36 h-36 rounded-full mx-auto mb-4">
            <h3 class="text-gray-800 font-semibold">Mamas Satya</h3>
            <p class="text-gray-600">Keluarga Saya Sangat Suka Menggunakan Pepsodent &#128525;</p>
        </div>
    </div>
</section>

<section id="health-tips" class="py-20 px-10 bg-gray-50">
    <div class="text-center mb-10">
        <h1 class="text-6xl text-blue-900 font-bold">Kesehatan Gigi dan Mulut</h1>
        <p class="text-gray-600">Temukan tips praktis untuk merawat kesehatan gigi dan mulut dari Pepsodent</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="bg-white p-5 rounded-lg shadow-lg text-center">
            <img src="ASSET/1.png" alt="Tip 1" class="mb-4">
            <h5 class="font-semibold">Cara Mengobati Sakit Gigi yang Terbukti dan Ampuh</h5>
            <p class="text-gray-600">Cara mengobati sakit gigi paling ampuh, cara menghilangkan sakit gigi berlubang, dan mengatasi sakit gigi secara tradisional.</p>
        </div>
        <div class="bg-white p-5 rounded-lg shadow-lg text-center">
            <img src="ASSET/2.png" alt="Tip 2" class="mb-4">
            <h5 class="font-semibold">Inilah Penyebab Gusi Bengkak</h5>
            <p class="text-gray-600">Ketahui penyebab gusi bengkak dan bagaimana cara mengatasi gusi bengkak.</p>
        </div>
        <div class="bg-white p-5 rounded-lg shadow-lg text-center">
            <img src="ASSET/3.png" alt="Tip 3" class="mb-4">
            <h5 class="font-semibold">Penyebab Karies Gigi</h5>
            <p class="text-gray-600">Penyebab karies gigi kadang datang tanpa disadari. Mengetahui penyebab dan cara mengatasinya adalah cara terbaik bebas dari karies gigi.</p>
        </div>
    </div>
</section>

<footer class="py-10 bg-gray-100">
    <div class="text-center">
        <div class="flex justify-center space-x-4 mb-4">
            <a href="#" class="text-gray-600 hover:text-red-600"><i class='bx bxl-facebook'></i></a>
            <a href="#" class="text-gray-600 hover:text-red-600"><i class='bx bxl-instagram'></i></a>
            <a href="#" class="text-gray-600 hover:text-red-600"><i class='bx bxl-youtube'></i></a>
        </div>
        <div class="links mb-4">
            <a href="#" class="text-gray-600 hover:text-red-600 mx-2">Privacy Policy</a>
            <a href="#" class="text-gray-600 hover:text-red-600 mx-2">Terms Of Use</a>
            <a href="#" class="text-gray-600 hover:text-red-600 mx-2">Our Company</a>
        </div>
        <p class="text-gray-600">&copy; CarpoolVenom All Rights Reserved</p>
    </div>
</footer>

</body>
</html>