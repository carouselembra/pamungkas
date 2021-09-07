<?php 
$number = 1
?>
@foreach($data as $data)
<tr>
<td class="align-top">
    <input type="checkbox" name='ids' class="checkBoxClass" value="{{ $data->id }}">
</td>
<td class="align-top col-4">
    <a href=""><h6 class="mb-2">Sasaran {{ $number }}</h6></a>
    <div style="white-space: normal;">{{ $data->sasaran }}</div>
</td>
<?php 
$number_ikk = 1
?>
@foreach($data->ikkTarget as $data_ikk)
@if ($number_ikk <> 1)                        
<tr>
    <td class="align-top {{ $number_ikk <> 1 ? 'hide-border-top' : '' }}"></td>
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
    <td class="align-top col-1 {{ $number_ikk <> 1 ? 'hide-border-top' : '' }}">
        <button class="btn-output btn-custom" data-toggle="modal" data-target="#tambahOutput" data-sasaran="{{ $data_ikk->sasaran_id }}">
            + Output
        </button>
    </td>
    <td class="align-top col-1 {{ $number_ikk <> 1 ? 'hide-border-top' : '' }}">
    <div class="d-flex justify-content-center">
        <button type="button" class="btn-edit-output btn btn-secondary pl-2 pr-2 mr-3" data-toggle="modal" data-target="#editOutput" data-edit="{{ $data_ikk->id }}">
        <strong><i class="fa fa-pencil m-0" aria-hidden="true"></i></strong>
        </button>

        <button type="button" class="btn-delete btn btn-secondary pl-2 pr-2" data-token="{{ csrf_token() }}" data-delete="{{ $data_ikk->id }}">
        <strong><span aria-hidden="true">&times;</span></strong>
        </button>
    </div>
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