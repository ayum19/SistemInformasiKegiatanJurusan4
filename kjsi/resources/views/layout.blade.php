<html>
	<head>
		<title>Kegiatan Jurusan SI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<script src="/bootstrap/js/bootstrap.js" type="text/javascript"></script>
		<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="/bootstrap/js/jquery-1.11.1.min.js" type="text/javascript"></script>
		<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">


	</head>
	<body>
		<div>
			<table>
				<td>
					<img src="/img/logo-unand.jpg" width="100px" height="100px">
				</td>
				<td>
					<h2>Jurusan Sistem Informasi</h2>
					<h3>Fakultas Teknologi Informasi</h3>
					<h4>Universitas Andalas</h4>
				</td>
				
				
			</table>

		</div>

		<div>
			
            <div class="navbar navbar-inverse">
            	<ul class="nav navbar-nav navbar-right">
	                <li>
	                    <a href="#">Home</a>
	                </li>
					<li>
	                    <a href="{{ route('notif.index') }}">Notif</a>
	                </li>
	                <li>
	                    <a href="{{ route('proposal.index') }}">Proposal</a>
	                </li>
					<li>
	                    <a href="{{ route('lpj.index') }}">LPJ</a>
	                </li>
					<li>
	                    <a href="#">About</a>
	                </li>
	            </ul>
				
            </div>
			
		</div> <br><br><br><br>

		@if(Session::has('pesan'))
			<p>{{ Session::get('pesan') }}</p>
		@endif
		
		@yield('konten')

	</body>
</html>