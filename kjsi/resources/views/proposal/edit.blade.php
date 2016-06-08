@extends('layout') 

@section('konten')


{!! Form::model($proposal,[
	'route' => ['proposal.update', $proposal->id_proposal],
	'method'=>'PATCH',
	'class' => 'form-vertical']) !!}

				<div class="form-group">
					{!! Form::label('id_proposal', "Id Proposal", ['class' => 'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::text('id_proposal', null, ['class' => 'form-control disabled', 'placeholder' => 'Judul']) !!}
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('judul', "Judul", ['class' => 'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Judul']) !!}
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('latar_belakang', "Latar Belakang", ['class' => 'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::textarea('latar_belakang', null, ['class' => 'form-control', 'placeholder' => 'Latar Belakang']) !!}
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('tujuan', "Tujuan", ['class' => 'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::textarea('tujuan', null, ['class' => 'form-control', 'placeholder' => 'Tujuan']) !!}
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('tema', "Tema", ['class' => 'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::textarea('tema', null, ['class' => 'form-control', 'placeholder' => 'Tema']) !!}
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('kegiatan', "Kegiatan", ['class' => 'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::textarea('kegiatan', null, ['class' => 'form-control', 'placeholder' => 'Kegiatan']) !!}
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('peserta', "Peserta", ['class' => 'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::textarea('peserta', null, ['class' => 'form-control', 'placeholder' => 'Peserta']) !!}
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('waktu', "Waktu", ['class' => 'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::textarea('waktu', null, ['class' => 'form-control', 'placeholder' => 'Waktu']) !!}
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('tempat', "Tempat", ['class' => 'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::text('tempat', null, ['class' => 'form-control', 'placeholder' => 'Tempat']) !!}
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('susunan_acara', "Susunan Acara", ['class' => 'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::textarea('susunan_acara', null, ['class' => 'form-control', 'placeholder' => 'Susunan Acara']) !!}
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('id_koporganisasi', "Id_Koporganisasi", ['class' => 'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::text('id_koporganisasi', null, ['class' => 'form-control', 'placeholder' => 'Id_Koporganisasi']) !!}
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('tanggal_pengajuan', "Tanggal_Pengajuan", ['class' => 'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
							{!! Form::text('tanggal_pengajuan', null, ['class' => 'form-control', 'placeholder' => 'Id_Koporganisasi']) !!}
						<input type="date" class="form-control" name="tanggal_pengajuan">
					</div>
				</div>

				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				        {!! Form::submit('Tambah', ['class'=>'btn btn-primary']) !!}
				    </div>
				</div>
{!! Form::close() !!}
@stop