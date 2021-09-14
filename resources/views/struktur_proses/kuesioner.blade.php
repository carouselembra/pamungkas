@extends('templates/main')
@section('css')
<link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">
<style>
    .hide-tab-section{
        display: none;
    }
</style>
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
                <a href="{{ url('/struktur/kuesioner') }}"  class="nav-link rounded-0 pt-2 pb-2 active" >
                    <span class="d-none d-sm-inline">Penilaian</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <form method="POST" action="{{ url('struktur/kuesioner/create') }}" name="create_jawaban_s_p" enctype="multipart/form-data">
            @csrf
            <?php
                $number=1;
                $total_number= $form_data->count();
            ?>
            @foreach($form_data as $data)
            <div class="tab-section-{{ $number }}  {{ $number != 1 ? "hide-tab-section" : ""}}">
                <div class="p-3 ml-4 mt-2">
                    <h5 class="card-title mb-0">{{$data->uraian_unsur}}</h5>
                </div>
                <div class="card b-radius card-noborder">
                    @foreach($data->subUnsur as $subUnsur)
                    <div class="card-header p-3">
                        <h5 class="mb-0">{{$subUnsur->kd_unsur}}.{{$subUnsur->kd_sub_unsur}} {{$subUnsur->uraian_sub_unsur}}</h5>
                    </div>
                        @foreach($subUnsur->parameter as $parameter)
                        <div class="card-body p-3 mb-2">
                            
                            <h6 class="mt-1 ml-3">{{$parameter->kd_parameter}}. {{$parameter->uraian_parameter}}</h6>
                            
                            @foreach($parameter->kriteria as $kriteria)
                            <input type="hidden" name="jawaban[{{$kriteria->id}}]" value="">
                            <input type="hidden" name="unsur_id[{{$kriteria->id}}]" value="{{$data->id}}">
                            <input type="hidden" name="sub_unsur_id[{{$kriteria->id}}]" value="{{$subUnsur->id}}">
                            <input type="hidden" name="parameter_id[{{$kriteria->id}}]" value="{{$parameter->id}}">
                            <input type="hidden" name="kriteria_id[{{$kriteria->id}}]" value="{{$kriteria->id}}">
                            <input type="hidden" name="tipe_kuesioner[{{$kriteria->id}}]" value="{{$tipe}}">
                            <input type="hidden" name="mapping_id[{{$kriteria->id}}]" value="{{$mapping_id}}">
                            <div class="form-radio ml-5 p-0">
                                <label class="form-check-label">
                                <input required type="radio" class="form-check-input" name="jawaban[{{$kriteria->id}}]" id="jawaban[{{$kriteria->id}}]" value="5"> {{$kriteria->kriteria_a}} <i class="input-helper"></i></label>
                            </div>
                            <div class="form-radio ml-5">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jawaban[{{$kriteria->id}}]" id="jawaban[{{$kriteria->id}}]" value="4" > {{$kriteria->kriteria_b}} <i class="input-helper"></i></label>
                            </div>
                            <div class="form-radio ml-5">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jawaban[{{$kriteria->id}}]" id="jawaban[{{$kriteria->id}}]" value="3" > {{$kriteria->kriteria_c}} <i class="input-helper"></i></label>
                            </div>
                            <div class="form-radio ml-5">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jawaban[{{$kriteria->id}}]" id="jawaban[{{$kriteria->id}}]" value="2" > {{$kriteria->kriteria_d}} <i class="input-helper"></i></label>
                            </div>
                            <div class="form-radio ml-5">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jawaban[{{$kriteria->id}}]" id="jawaban[{{$kriteria->id}}]" value="1" > {{$kriteria->kriteria_e}} <i class="input-helper"></i></label>
                            </div>
                            </div>
                            
                            @endforeach
                        @endforeach
                    @endforeach
                </div>
                @if ($number == $total_number)
                <div class="d-flex col-12 justify-content-between" style="margin-top: 1.7em">
                    <button class="btn btn-filter-custom prev-slide-{{ $total_number }}" type="button"><i class="fa fa-chevron-left mr-1"></i> Kembali</button>
                    <button  type="submit" class="btn btn-filter-custom" style="margin-right: 0.8em"><i class="mdi mdi-content-save"></i> Kirim</button>
                </div>
                @elseif ($number==1)
                <div class="d-flex col-12 justify-content-end" style="margin-top: 1.7em">
                    <button class="btn btn-filter-custom next-slide-{{ $number }}" type="button">Lanjut<i class="fa fa-chevron-right ml-1"></i></button>
                </div>
                @else
                <div class="d-flex col-12 justify-content-between" style="margin-top: 1.7em">
                    <button class="btn btn-filter-custom prev-slide-{{ $number }}" type="button"><i class="fa fa-chevron-left mr-1"></i>Kembali</button>
                    <button class="btn btn-filter-custom next-slide-{{ $number }}" type="button">Lanjut<i class="fa fa-chevron-right ml-1"></i></button>
                </div>
                @endif
            </div>
            <?php
            $number++ 
            ?>
            @endforeach
            <div class="form-group row mb-0">
            
        </form>
    </div>
</div>



@endsection


@section('script')
<script src="{{ asset('js/dashboard/script.js') }}"></script>
<script src="{{ asset('js/jquery_steps/jquery.steps.min.js') }}"></script>
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

@for ($i=1;$i<=$total_number;$i++)
    $(document).on('click', '.prev-slide-{{ $i }}', function(){
            
        $('.tab-section-{{ $i }}').addClass('hide-tab-section');
        $('.tab-section-{{ $i }}').addClass('hide-tab-section');
        $('.tab-section-{{ $i-1 }}').removeClass('hide-tab-section');
        $('.tab-section-{{ $i-1 }}').removeClass('hide-tab-section');
    });

    $(document).on('click', '.next-slide-{{ $i }}', function(){
                
        $('.tab-section-{{ $i }}').addClass('hide-tab-section');
        $('.tab-section-{{ $i }}').addClass('hide-tab-section');
        $('.tab-section-{{ $i+1 }}').removeClass('hide-tab-section');
        $('.tab-section-{{ $i+1 }}').removeClass('hide-tab-section');
    });
@endfor

</script>
@endsection