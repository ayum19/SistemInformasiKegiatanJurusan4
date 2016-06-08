@extends('layout') 

@section('konten')

<!-- <form> -->

<div class="tabbable">

	<ul class="nav nav-tabs">

		<li class="active">
			<a href="#data" data-toggle="tab">Data</a>
        </li>
        <li>
			<a href="#danamasuk" data-toggle="tab">Dana Masuk</a>
        </li>
        <li>
			<a href="#danakeluar" data-toggle="tab">Dana Keluar</a>
        </li>

	</ul>

	<div class="tab-content">

		<div class="tab-pane active" id="data">
			<form>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Nama LPJ</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" value="{{ old('name') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">File</label>
					<div class="col-md-6">
						<input type="email" class="form-control" name="email" value="{{ old('email') }}">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
							Submit
						</button>
					</div>
				</div>
			
			</form>
			

		</div>

		<div class="tab-pane" id="danamasuk">
			<form>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Tanggal</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Keterangan</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password_confirmation">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Oleh</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Jumlah</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password_confirmation">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Total</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password_confirmation">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
							Submit
						</button>
					</div>
				</div>
				
			</form>

		</div>

		<div class="tab-pane" id="danakeluar">
			<form>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Tanggal</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Keterangan</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password_confirmation">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Oleh</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Jumlah</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password_confirmation">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Total</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password_confirmation">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
							Submit
						</button>
					</div>
				</div>
				
			</form>

		</div>
	</div>
</div>

<!-- </form> -->	
@stop