@include('admin.layout.top')
{{-- include untuk memanggil file lain dan menggunakan code dari file lain --}}
@include('admin.layout.menu')
<div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
{{-- ini isi konten --}}
        @yield('content')
        {{-- panggil section halaman --}}
    </div>
</main>
</div>
</div>
@include('admin.layout.bottom')