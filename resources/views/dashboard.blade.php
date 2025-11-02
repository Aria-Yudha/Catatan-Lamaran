<x-layout>
      <x-slot name="title">
      Dashboard
      </x-slot>
      <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $totalDilamar }}</h3>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-briefcase-check icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Lowongan yang Dilamar</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $totalDiproses }}</h3>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-progress-clock icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Lowongan yang Diproses</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $totalWawancara }}</h3>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-info">
                    <span class="mdi mdi-earth icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Lowongan Tahap Wawancara</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $totalPortal }}</h3>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-info">
                    <span class="mdi mdi-earth icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Portal Lowongan Pekerjaan</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="card-title mb-0">Lamaran Terbaru</h4>
                <p class="text-muted mb-0">5 terakhir</p>
              </div>

              <div class="preview-list">
                @foreach ($lamaranTerbaru as $lamaran)
                <div class="preview-item border-bottom">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-primary">
                      <i class="mdi mdi-briefcase"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-sm-flex flex-grow">
                    <div class="flex-grow">
                      <h6 class="preview-subject mb-1">{{ $lamaran->posisi_dilamar ?? '-' }}</h6>
                      <p class="text-muted mb-0">
                        Portal: {{ $lamaran->portal->nama_portal ?? 'Tidak diketahui' }}
                      </p>
                    </div>
                    <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                      <p class="text-muted mb-0">{{ $lamaran->status ?? 'Belum diketahui' }}</p>
                      <p class="text-muted small">{{ $lamaran->created_at->diffForHumans() }}</p>
                    </div>
                  </div>
                </div>
                @endforeach

                @if($lamaranTerbaru->isEmpty())
                <p class="text-center text-muted my-3">Belum ada lamaran yang diajukan.</p>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
</x-layout>