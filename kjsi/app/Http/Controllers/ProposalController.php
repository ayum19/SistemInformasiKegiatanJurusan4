<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Proposal;
use App\Dana;
use App\Kop_Organisasi;

class ProposalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$Proposal = Proposal::all();
		//$dana = Dana::all();
		//$x = array($Lpj,$dana);
		$proposals= Proposal::all();
		$no=1;
		return view('proposal.index', compact('proposals', 'no'));//->with('Proposal',$Proposal);//->with('dana',$dana);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('proposal.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//if(Input('id'))
		//{
			//$proposal=Proposal::all();

			//$id_proposal = Proposal::get('id_proposal');
			//$judul = Proposal::get('judul');
			//$latar_belakang = Proposal::get('latar_belakang');
			//$tujuan = Proposal::get('tujuan');
			//$tema = Proposal::get('tema');
			//$kegiatan = Proposal::get('kegiatan');
			//$peserta = Proposal::get('peserta');
			//$waktu = Proposal::get('waktu');
			//$tempat = Proposal::get('tempat');
			//$susunan_acara = Proposal::get('susunan_acara');
			//$id_koporganisasi = Proposal::get('id_koporganisasi');
			//$tanggal_pengajuan = Proposal::get('tanggal_pengajuan');

			//Proposal::create($proposal);
			$proposal = new Proposal;
			//$login = new Login;
			$proposal->id_proposal = $request->id_proposal;
			$proposal->judul = $request->judul;
			$proposal->latar_belakang = $request->latar_belakang;
			$proposal->tujuan = $request->tujuan;
			$proposal->tema = $request->tema;
			$proposal->kegiatan = $request->kegiatan;
			$proposal->peserta = $request->peserta;
			$proposal->waktu = $request->waktu;
			$proposal->tempat = $request->tempat;
			$proposal->susunan_acara = $request->susunan_acara;
			$proposal->id_koporganisasi = $request->id_koporganisasi;
			$proposal->tanggal_pengajuan = $request->tanggal_pengajuan;
			$proposal->save();
			//return $proposal;
			//$login->level = 2;
			//$login->save();
			return redirect('proposal');
			//return Redirect('proposal'.Input::get('id'));
		//}
		//else
		//{
			//return Redirect('create');//->withErrors(['ID sudah ada!']);
		//}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$proposal = Proposal::find($id);
		return view ('proposal.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// $proposal->id_proposal = $id_proposal [$proposal->id_proposal];
		$proposal = Proposal::find($id);
		//return dd($proposal);
		return view('proposal.edit',compact('proposal'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
			$proposal = Proposal::findOrFail($id);
			// dd($proposal);
			//$login = new Login;
			
			$proposal->judul = $request->judul;
			$proposal->latar_belakang = $request->latar_belakang;
			$proposal->tujuan = $request->tujuan;
			$proposal->tema = $request->tema;
			$proposal->kegiatan = $request->kegiatan;
			$proposal->peserta = $request->peserta;
			$proposal->waktu = $request->waktu;
			$proposal->tempat = $request->tempat;
			$proposal->susunan_acara = $request->susunan_acara;
			$proposal->id_koporganisasi = $request->id_koporganisasi;
			$proposal->tanggal_pengajuan = $request->tanggal_pengajuan;
			$proposal->save();

			return redirect('proposal');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
