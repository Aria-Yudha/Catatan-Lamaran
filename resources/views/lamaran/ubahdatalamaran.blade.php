<x-layout>
    <x-slot name="title">Tambah Data Portal Kerja</x-slot>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Form Tambah Data Portal Kerja</h4>
            <form class="forms-sample" method="POST" action="{{ route('lamaran.update', $lamaran->id) }}">
                @csrf
                @method("PATCH")
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" class="form-control" value="{{ $lamaran->nama_perusahaan }}">
                </div>
                <div class="form-group">
                    <label>Posisi Pekerjaan</label>
                    <input type="text" name="posisi_dilamar" class="form-control" value="{{ $lamaran->posisi_dilamar }}">
                </div>
               <div class="form-group">
                    <label for="exampleSelectGender">Portal Lowongan Kerja</label>
                    <select class="form-control" name="id_portal">
                        <option value="{{ $lamaran->portal->id }}" selected>
                            {{ $lamaran->portal->nama_portal }}
                        </option>
                        @foreach ($portal as $por)
                            @if ($por->id !== $lamaran->portal->id)
                                <option value="{{ $por->id }}">{{ $por->nama_portal }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Melamar</label>
                    <input type="date" name="tanggal_lamar" class="form-control" value="{{ $lamaran->tanggal_lamar }}">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Status Lowongan Kerja</label>
                    <select class="form-control" name="status">
                          <option>{{ $lamaran->status }}</option>
                          <option value="Sudah Apply">Sudah Apply</option>
                          <option value="Diproses">Diproses</option>
                          <option value="Wawancara">Wawancara</option>
                          <option value="Ditolak">Ditolak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="{{ $lamaran->keterangan }}">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="{{ route('portal-lamaran') }}">Cancel</a>
            </form>
            </div>
        </div>
    </div>
</x-layout>