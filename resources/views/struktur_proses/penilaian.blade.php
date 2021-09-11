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
                <a href="{{ url('/struktur') }}" class="nav-link rounded-0 pt-2 pb-2"> 
                    <span class="d-none d-sm-inline">Responden</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/struktur/kuesioner') }}" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active" >
                    <span class="d-none d-sm-inline">Penilaian</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        @if (count($mappings) == 0)
          <div class="alert m-2 b-radius alert-warning text-center">
            <h5>Maaf kamu tidak memiliki kewenangan untuk menggunakan menu ini!</h5>
          </div>
        @endif
        <div class="card b-radius card-noborder">
          @foreach ($mappings as $mapping)
          <div class="card-header p-3">
            <div class="d-flex justify-content-between">
              <a href="{{ url('/struktur/kuesioner/'.$mapping->id.'/'.$mapping->kuesioner->id) }}" class="col-11">
                {{$mapping->kuesioner->tipe_kuesioner}} - {{$mapping->kuesioner->uraian_tipe_kuesioner}}
              </a>
              @if ($mapping->jawaban_count)
                <label class="badge badge-success">Selesai</label>
              @else
                <label class="badge badge-danger">Proses</label>
              @endif
            </div>
          </div>
          @endforeach
        </div>
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

@if ($message = Session::get('berhasil_input'))
  swal(
      "Berhasil!",
      "{{ $message }}",
      "success"
  );
@endif
@if ($message = Session::get('exist_input'))
  swal(
      "Data sudah ada!",
      "{{ $message }}",
      "error"
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

@if ($message = Session::get('no_access'))
  swal(
      "Gagal!",
      "{{ $message }}",
      "error"
  );
@endif

</script>
@endsection