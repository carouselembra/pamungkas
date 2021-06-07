@extends('templates/main')
@section('css')
<link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
@endsection
@section('active')
    active
@endsection
@section('page-title')
    Pencapaian Tujuan
@endsection
@section('content')
<div class="row page-title-header">
    <div class="col-12">
        <ul class="nav nav-custom nav-justified mb-2 justify-content-center">
            <li class="nav-item">
                <a href="{{ url('/tujuan') }}" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active"> 
                    <span class="d-none d-sm-inline">Input Data</span>
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
              + Kegiatan
            </button>
        </div>
    </div>
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card b-radius card-noborder">
        <div class="card-body">
            <div class="row">
                <table class="table table-striped">
                    <thead class="head-table">
                      <tr>
                        <th> Sasaran </th>
                        <th> IKK </th>
                        <th> Target </th>
                        <th>  </th>
                        <th>  </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-top"> <strong> Sasaran 1 </strong></br></br>
                            Terbentuknya peraturan </br> perundang-undangan yang </br>berkeadilan, bermanfaat dan </br>berkepastian hukum </td>
                        <td class="align-top">
                            <strong> IKK 1 </strong></br></br>
                            Jumlah peraturan </br> perundang-undangan yang </br> terbentuk sesuai dengan </br> rencana pembentukan </br> peraturan perundang-undangan
                        </td>
                        <td class="align-top">
                            <strong> Target 1 </strong></br></br>
                            7 Peraturan
                        </td>
                        <td class="align-top">
                            <button class="btn-custom ml-3" data-toggle="modal" data-target="#tambahResponden">
                                + Realisasi
                              </button>
                        </td>
                        <td class="align-top">
                            <i class="fa fa-ellipsis-v"></i>
                          </td>
                      </tr>
                      <tr>
                        <td class="align-top"> <strong> Sasaran 2 </strong></br></br>
                            Terbentuknya peraturan </br> perundang-undangan yang </br>berkeadilan, bermanfaat dan </br>berkepastian hukum </td>
                        <td class="align-top">
                            <strong> IKK 2 </strong></br></br>
                            Jumlah peraturan </br> perundang-undangan yang </br> terbentuk sesuai dengan </br> rencana pembentukan </br> peraturan perundang-undangan
                            </br></br><strong> IKK 3 </strong></br></br>
                            Persentasesatuan kerja yang </br>pengelolaan keuangannya </br>sudah sesuai dengan </br>Standar Akuntansi Pemerintahan.
                        </td>
                        <td class="align-top">
                            <strong> Target 2 </strong></br></br>
                            6 Peraturan
                            </br></br></br></br></br></br><strong> Target 3 </strong></br></br>
                            93 %
                        </td>
                        <td class="align-top">
                            <button class="btn-custom ml-3" data-toggle="modal" data-target="#tambahResponden">
                                + Realisasi
                              </button> </br></br></br></br></br></br>
                              <button class="btn-custom ml-3" data-toggle="modal" data-target="#tambahResponden">
                                + Realisasi
                              </button>
                        </td>
                        <td class="align-top">
                            <i class="fa fa-ellipsis-v"></i></br></br></br></br></br></br></br>
                            <i class="fa fa-ellipsis-v"></i>
                          </td>
                      </tr>
                      <tr>
                        <td class="align-top"> <strong> Sasaran 3 </strong></br></br>
                            Terbentuknya peraturan </br> perundang-undangan yang </br>berkeadilan, bermanfaat dan </br>berkepastian hukum </td>
                        <td class="align-top">
                            <strong> IKK 4 </strong></br></br>
                            Jumlah peraturan </br> perundang-undangan yang </br> terbentuk sesuai dengan </br> rencana pembentukan </br> peraturan perundang-undangan
                        </td>
                        <td class="align-top">
                            <strong> Target 4 </strong></br></br>
                            9 Peraturan
                        </td>
                        <td class="align-top">
                            <button class="btn-custom ml-3" data-toggle="modal" data-target="#tambahResponden">
                                + Realisasi
                              </button>
                        </td>
                        <td class="align-top">
                            <i class="fa fa-ellipsis-v"></i>
                          </td>
                      </tr>
                  
                    </tbody>
                  </table>
            </div>
        </div>
        </div>
    </div>
    {{-- <div class="d-flex col-12 justify-content-end" style="margin-top: 1.7em">
      <a href="{{ url('/struktur/kuesioner') }}" type="button" class="btn btn-filter-custom" style="margin-right: 0.8em">Penilaian <i class="fa fa-chevron-right"></i></a>
    </div> --}}
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