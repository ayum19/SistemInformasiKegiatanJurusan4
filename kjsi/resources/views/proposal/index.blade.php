@extends('layout') 

@section('konten')

    <h1>Proposal</h1>

    <p>
        <a href="{{ route('proposal.create') }}" >Tambah Proposal</a>
    </p>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
              <th class="text-center">#</th>
              <th class="text-center">Judul Proposal</th>
              <th class="text-center">Status</th>
              <th class="text-center">Tanggal Pengajuan</th>
              <th class="text-center">Tanggal Persetujuan</th>
              <th class="text-center">Keterangan</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($proposals as $proposal)
            <tr>
                <th class="text-center">{{ $no++ }} </th>
                <td class="text-center">{{ $proposal['judul'] }}</td>
                <td class="text-center">{{ $proposal['status_proposal'] }}</td>
                <td class="text-center">{{ $proposal['tanggal_pengajuan'] }}</td>
                <td class="text-center">{{ $proposal['tanggal_persetujuan'] }}</td>
                <td><a href="proposal/{{ $proposal['id_proposal'] }}/edit" class="btn btn-primary">Edit</a> <a href="proposal/{{ $proposal['id_proposal'] }}/show" class="btn btn-primary">Detail</a></td>
            </tr>


        {!! Form::close() !!}
        @endforeach
        </tbody>
    </table>
@stop