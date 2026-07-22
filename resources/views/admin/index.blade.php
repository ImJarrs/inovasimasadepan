@include('admin.template.header')

<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 id="typed-text" style="text-align: center; font-size: 50px; font-weight: 600;"></h1>
</div>
<!-- /.container-fluid -->

@include('admin.template.footer')

<!-- Tambahkan Typed.js dari CDN -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typed = new Typed("#typed-text", {
        strings: ["Welcome!"], // Teks yang akan diketik
        typeSpeed: 100, // Kecepatan mengetik (lebih kecil = lebih cepat)
        backSpeed: 50, // Kecepatan menghapus
        startDelay: 500, // Delay sebelum mulai mengetik
        backDelay: 1500, // Delay sebelum menghapus
        loop: true, // Agar terus berulang
        showCursor: false, // Menampilkan kursor
        cursorChar: "|", // Bentuk kursor
    });
</script>
