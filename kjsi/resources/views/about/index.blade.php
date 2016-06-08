@extends('layout') 

@section('konten')

@foreach($Lpj as $key => $value)

	<table style="width:80%; text-align:center;" class="table table-hover table-bordered">
	  <tr>
	    <th style="text-align:center;">ID</th>
	    <th style="text-align:center;">Nama</th> 
	    <th style="text-align:center;">Status</th>
	    <th style="text-align:center;">Keterangan</th>
	  </tr>
	  <tr>
	    <td>{{$value->id_lpj}}</td>
	    <td>{{$value->id_lpj}}</td> 
	    <td>{{$value->status_lpj}}</td>
	    <td><a href="1/edit">Keterangan</a></td>
	  </tr>
	</table>
@endforeach

@stop