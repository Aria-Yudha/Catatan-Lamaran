<x-layout>
    <x-slot name="title">
        Selamat Datang
    </x-slot>
     <div class="row justify-content-center">
    <div class="col-md-10 text-center">
      <div class="card p-5 shadow-sm">
        <h2 class="mb-3">💼 Aplikasi Pencatatan Lamaran Kerja Pribadi</h2>
        <p class="text-muted mb-4">
          Aplikasi ini membantu Anda mencatat dan memantau semua lamaran kerja yang telah diajukan secara mudah dan terorganisir.
          Anda dapat mencatat posisi yang dilamar, portal lowongan yang digunakan, tanggal melamar, serta memantau status lamaran 
          tanpa perlu mencatat manual di spreadsheet.
        </p>

        <div class="my-4">
          <img src="{{ asset('assets/images/dashboard-illustration.svg') }}" 
               alt="Dashboard Illustration" 
               class="img-fluid" 
               style="max-width: 500px;">
        </div>

        <p class="text-secondary">
          Kelola dan pantau proses pencarian kerja Anda dengan lebih efektif mulai hari ini.
        </p>

        {{-- Hanya tampilkan informasi login jika user belum login --}}
        @if(!Auth::check())
          <p class="text-muted mt-4">
            Silakan login melalui menu di sidebar untuk mulai menggunakan aplikasi.
          </p>
        @endif
      </div>
    </div>
  </div>
</x-layout>
