@extends('templates/main')
@section('css')
<link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
@endsection
@section('active')
    active
@endsection
@section('page-title')
    Struktur dan Proses
@endsection
@section('content')
<div class="row page-title-header">
    <div class="col-12">
        <ul class="nav nav-custom nav-justified mb-2 justify-content-center">
            <li class="nav-item">
                <a href="{{ url('/struktur') }}" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active"> 
                    <span class="d-none d-sm-inline">Responden</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/struktur/kuesioner') }}" class="nav-link rounded-0 pt-2 pb-2">
                    <span class="d-none d-sm-inline">Penilaian</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="row page-title-header">
        <div class="col-12">
            <button class="btn-custom ml-3" data-toggle="modal" data-target="#tambahResponden">
              + Responden
            </button>
        </div>
    </div>
    @if (auth()->user()->role == 'superadmin' || auth()->user()->role == 'admin')
    <div class="row modal-group">
        <div class="modal fade" id="tambahResponden" tabindex="-1" role="dialog" aria-labelledby="tambahRespondenLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form name="tambah_responden" action="{{ url('/struktur/responden/add') }}" method="POST">
                @csrf
                <div class="modal-header">
                  <h5 class="modal-title" id="tambahRespondenLabel">Tambah Responden</h5>
                  <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Nama Responden</label>
                            <select class="form-control form-control-lg" name="user">
                              <option value="">-- Pilih Responden --</option>
                              @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->nama}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kuesioner</label>
                            <select class="form-control form-control-lg" name="kuesioner">
                              <option value="">-- Pilih Kuesioner --</option>
                              @foreach ($tipe_kuesioner as $kuesioner)
                                <option value="{{$kuesioner->id}}">{{$kuesioner->tipe_kuesioner}} - {{$kuesioner->uraian_tipe_kuesioner}}</option>
                              @endforeach
                            </select>
                        </div>
                        @if (auth()->user()->role == 'superadmin')
                        <div class="form-group">
                            <label>Satker</label>
                            <select class="form-control form-control-lg" name="satker">
                              <option value="">-- Pilih Satker --</option>
                              @foreach ($satkers as $satker)
                                <option value="{{$satker->id}}">{{$satker->nama_satker}}</option>
                              @endforeach
                            </select>
                        </div>
                        @endif

                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-simpan"><i class="mdi mdi-content-save"></i> Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    @endif
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card b-radius card-noborder">
        <div class="card-body">
            <div class="row">
                <table class="table table-striped">
                    <thead class="head-table">
                      <tr>
                        <th> No </th>
                        <th> User </th>
                        <th> Nama </th>
                        <th> Email </th>
                        <th> Jenis Kuesioner </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $number = 1 ?>
                      @foreach ($responden as $responden)
                      <tr>
                        <td> {{$number}} </td>
                        <td class="py-1">
                          <img src="{{ asset('pictures/' . $responden->user->foto) }}" alt="image">
                        </td>
                        <td>{{$responden->user->nama}}</td>
                        <td>
                          {{$responden->user->email}}
                        </td>
                        <td style="
                        display:inline-block;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        max-width: 15em;">{{$responden->kuesioner->tipe_kuesioner}} - {{$responden->kuesioner->uraian_tipe_kuesioner}}</td>
                      </tr>
                      <?php $number++ ?>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        </div>
    </div>
    <div class="d-flex col-12 justify-content-end" style="margin-top: 1.7em">
      <a href="{{ url('/struktur/kuesioner') }}" type="button" class="btn btn-filter-custom" style="margin-right: 0.8em">Penilaian <i class="fa fa-chevron-right"></i></a>
    </div>
</div>



@endsection


@section('script')
<script src="{{ asset('js/dashboard/script.js') }}"></script>
<script src="{{ asset('plugins/js/Chart.min.js') }}"></script>
<script src="{{ asset('plugins/js/ChartRadius.js') }}"></script>
<script type="text/javascript">

@if ($message = Session::get('add_responden_success'))
  swal(
      "Berhasil!",
      "{{ $message }}",
      "success"
  );
@endif

@if ($message = Session::get('add_responden_exist'))
  swal(
      "Gagal!",
      "{{ $message }}",
      "error"
  );
@endif

@if ($message = Session::get('add_responden_kosong'))
  swal(
      "Gagal!",
      "{{ $message }}",
      "error"
  );
@endif

@if ($message = Session::get('add_responden_no_access'))
  swal(
      "Gagal!",
      "{{ $message }}",
      "error"
  );
@endif

</script>
@endsection