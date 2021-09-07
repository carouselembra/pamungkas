@extends('templates/main')
@section('css')
<style type="text/css">
  .hide-border-top{
    border-top: rgba(255, 255, 255, 0) !important;
}
</style>
<link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}">

@endsection
@section('active')
    active
@endsection
@section('page-title')
    Penetapan Tujuan
@endsection
@section('content')
<div class="row page-title-header">
    <div class="col-12">
        <ul class="nav nav-custom nav-justified mb-2 justify-content-center">
            <li class="nav-item">
                <a href="{{ route('penetapan') }}"  class="nav-link rounded-0 pt-2 pb-2"> 
                    <span class="d-none d-sm-inline">Input Data</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('penetapan.penilaian') }}" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                    <span class="d-none d-sm-inline">Penilaian</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    
    @if (auth()->user()->role == 'superadmin' || auth()->user()->role == 'admin')
    
    @endif
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card b-radius card-noborder">
        <div class="card-body">
            <div class="row">
                <table class="table">
                    <thead class="head-table">
                      <tr>
                        
                        <th> Sasaran </th>
                        <th> IKK </th>
                        <th> Target </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $number = 1
                      ?>
                      @foreach($data as $data)
                      <tr>
                        
                        <td class="align-top col-4">
                          <a href="" class="btn-edit-sasaran" data-toggle="modal" data-target="#editSasaran" data-edit="{{ $data->id }}"><h6 class="mb-2">Sasaran {{ $number }}</h6></a>
                          <div style="white-space: normal;">{{ $data->sasaran }}</div>
                        </td>
                        <?php 
                        $number_ikk = 1
                        ?>
                        @foreach($data->ikkTarget as $data_ikk)
                        @if ($number_ikk <> 1)                        
                        <tr>
                          
                          <td class="align-top col-4 {{ $number_ikk <> 1 ? 'hide-border-top' : '' }}"></td>
                        @endif
                          <td class="align-top col-4 {{ $number_ikk <> 1 ? 'hide-border-top' : '' }}">
                            <h6 class="mb-2">IKK {{ $number_ikk }}</h6>
                            <div style="white-space: normal;">{{ $data_ikk->ikk }}</div>
                          </td>
                          <td class="align-top col-2 {{ $number_ikk <> 1 ? 'hide-border-top' : '' }}">
                            <h6 class="mb-2">Target {{ $number_ikk }}</h6>
                            <div style="white-space: normal;">{{ $data_ikk->target }} {{ $data_ikk->satuan }}</div>
                          </td>
                          
                        @if ($number_ikk <> 1)
                          </tr>
                        @endif
      
                        <?php 
                        $number_ikk ++;
                        ?>
                        @endforeach  
                      </tr>
                      <?php 
                      $number ++;
                      ?>
                      @endforeach                  
                    </tbody>
                  </table>
            </div>
        </div>
        </div>
    </div>
    <div class="d-flex col-12 justify-content-end" style="margin-top: 1.7em">
      <a href="{{ route('penetapan.penilaian') }}" type="button" class="btn btn-filter-custom" style="margin-right: 0.8em">Simpan <i class="fa fa-chevron-right"></i></a>
    </div>
</div>



@endsection


@section('script')
<script src="{{ asset('js/dashboard/script.js') }}"></script>
<script src="{{ asset('plugins/js/Chart.min.js') }}"></script>
<script src="{{ asset('plugins/js/ChartRadius.js') }}"></script>
<script type="text/javascript">

@if ($message = Session::get('berhasil_input'))
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

@if ($message = Session::get('delete_success'))
  swal(
      "Berhasil!",
      "{{ $message }}",
      "success"
  );
@endif  

// tambah output
$(document).on('click', '.btn-output', function(){
  
  var data_sasaran = $(this).data('sasaran');
  $.ajax({
    method: "GET",
    url: "{{ url('/penetapan/addoutput') }}/" + data_sasaran,
    success:function(response)
    {
      $('input[name=sasaran_id]').val(response.data.id);
      $('textarea[name=sasaran_output]').val(response.data.sasaran);        
      validator.resetForm();
    }
  });
});

// edit Output
$(document).on('click', '.btn-edit-output', function(){
  
  var data_edit = $(this).data('edit');
  $.ajax({
    method: "GET",
    url: "{{ url('/penetapan/editoutput') }}/" + data_edit,
    success:function(response)
    {
    
      $('input[name=edit_id]').val(response.data.id);
      $('textarea[name=edit_sasaran_output]').val(response.data.sasaran.sasaran);
      $('textarea[name=edit_ikk]').val(response.data.ikk);
      $('input[name=edit_target]').val(response.data.target);
      $('input[name=edit_satuan]').val(response.data.satuan);
      validator.resetForm();
    }
  });
});

// edit Sasaran
$(document).on('click', '.btn-edit-sasaran', function(){
  
  var data_edit = $(this).data('edit');
  $.ajax({
    method: "GET",
    url: "{{ url('/penetapan/editsasaran') }}/" + data_edit,
    success:function(response)
    {
      console.log(response)
      $('input[name=edit_sasaran_id]').val(response.data.id);
      $('textarea[name=edit_sasaran]').val(response.data.sasaran);
      validator.resetForm();
    }
  });
});

// delete output
$(document).on('click', '.btn-delete', function(e){
  e.preventDefault();
  var data_delete = $(this).attr('data-delete');
  var data_token = $(this).attr('data-token');
  swal({
    title: "Apa Anda Yakin?",
    text: "IKK dan Target akan terhapus, klik oke untuk melanjutkan",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      
      $.ajax({
        url:'{{ route("penetapan.deleteoutput") }}',
        type:'DELETE',
        data:{
          ids:data_delete,
          _token:data_token
        },
        success:function(data){
          console.log(data);
          swal(
            {
              title: "Berhasil",
              text: "IKK dan Target berhasil dihapus",
              icon: "success",
            }).then(
              $('tbody').html(data)
            )
        }
      })
    }
  });
});

$(document).on('click', '#chkCheckAll', function(){
      $('.checkBoxClass').prop('checked',$(this).prop('checked'));
});

$(document).on('click', '#deleteAllSelectedSasaran', function(e){
  e.preventDefault();
  var allids = [];
  $('input:checkbox[name=ids]:checked').each(function(){
    allids.push($(this).val())
  });
  if(allids == ""){
    swal("Gagal!",
    "Kamu belum memilih sasaran yang akan dihapus",
    "error");
  } else {
    swal({
      title: "Apa Anda Yakin?",
      text: "Sasaran akan terhapus, klik oke untuk melanjutkan",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          url:'{{ route("penetapan.deletesasaran") }}',
          type:'DELETE',
          data:{
            ids:allids,
            _token:$('input[name=_token]').val()
          },
          success:function(data){
            swal(
              {
                title: "Berhasil",
                text: "Sasaran berhasil dihapus",
                icon: "success",
              }).then(
                $('tbody').html(data)
              )
          }
        })
      }
    });
  };
});

</script>
@endsection