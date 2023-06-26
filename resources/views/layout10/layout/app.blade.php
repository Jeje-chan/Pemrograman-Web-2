@include('layout10.layout.top')
{{-- include untuk memanggil file lain dan menggunakan code dari file lain --}}
<main>
{{-- ini isi konten --}}
        @yield('content')
        {{-- panggil section halaman --}}
</main>
@include('layout10.layout.bottom')