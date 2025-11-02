<x-layout>
    <x-slot name="title">Tambah Data Portal Kerja</x-slot>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Form Tambah Data Portal Kerja</h4>
            <form class="forms-sample" method="POST" action="{{ route('data-lamaran.store') }}">
                @csrf
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" class="form-control" id="exampleInputName1">
                </div>
                <div class="form-group">
                    <label>Posisi Pekerjaan</label>
                    <input type="text" name="posisi_dilamar" class="form-control" id="exampleInputName1">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Portal Lowongan Kerja</label>
                    <select class="form-control" name="id_portal">
                          <option>-- Silahkan Pilih --</option>
                          @foreach ($portals as $portal)
                          <option value="{{ $portal->id }}">{{ $portal->nama_portal }}</option>
                          @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Melamar</label>
                    <input type="date" name="tanggal_lamar" class="form-control" id="exampleInputName1">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="exampleInputName1">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="{{ route('portal-lamaran') }}">Cancel</a>
            </form>
            </div>
        </div>
    </div>
</x-layout>