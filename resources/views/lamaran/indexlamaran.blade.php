<x-layout>
    <x-slot name="title">
        Data Lamaran Kerja
    </x-slot>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="card-title mb-0">Data Lamaran Kerja</h4>
                <a href="{{ route('tambah-lamaran') }}" class="btn btn-primary btn-sm">
                    <i class="mdi mdi-plus-circle"></i> Tambah Data
                </a>
            </div>
            <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th> No </th>
                    <th> Nama Perusahaan</th>
                    <th> Posisi yang Dilamar</th>
                    <th> Portal Lamaran </th>
                    <th> Tanggal Melamar </th>
                    <th> Status Lamaran </th>
                    <th> Keterangan </th>
                    <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($lamarans as $lamaran)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $lamaran->nama_perusahaan }}</td>
                    <td>{{ $lamaran->posisi_dilamar }}</td>
                    <td>{{ $lamaran->Portal->nama_portal }}</td>
                    <td>{{ $lamaran->tanggal_lamar }}</td>
                    <td>{{ $lamaran->status }}</td>
                    <td>{{ $lamaran->keterangan }}</td>
                    <td><div class="d-flex align-items-center" style="gap: 8px;">
                            <a href={{ route('lamaran.edit', $lamaran->id) }} 
                            class="btn btn-inverse-primary btn-icon d-flex align-items-center justify-content-center"
                            style="width:38px; height:38px;">
                            <i class="mdi mdi-pencil"></i>
                            </a>

                            <form action="{{ route('lamaran.destroy', $lamaran->id) }}"
                                method="POST" class="m-0 p-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-inverse-danger btn-icon d-flex align-items-center justify-content-center"
                                        style="width:38px; height:38px;"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="8" class="py-2 px-4 border-b text-center">Data Tidak Ditemukan</td>
                </tr>
                @endforelse
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</x-layout>