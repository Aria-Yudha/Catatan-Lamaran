<x-layout>
    <x-slot name="title">Ubah Data Portal Kerja</x-slot>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Form Ubah Data Portal Kerja</h4>
            <form class="forms-sample" method="POST" action="{{ route('portal.update', $portal->id) }}">
                @csrf
                @method("PATCH")
                <div class="form-group">
                <label for="exampleInputName1">Nama Portal Lowongan Pekerjaan</label>
                <input type="text" name="nama_portal" class="form-control" value="{{ $portal->nama_portal }}">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="{{ route('portal-lamaran') }}">Cancel</a>
            </form>
            </div>
        </div>
    </div>
</x-layout>