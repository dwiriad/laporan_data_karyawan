<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Karyawan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data Karyawan</h4>
		<h6><a target="_blank" href="">www.kepegawaian.com</a></h5>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>NIP</th>
                <th>Divisi</th>
				<th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
				<th>Status</th>
                <th>Golongan Darah</th>
                <th>Telepon</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Pekerjaan</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($data_karyawan as $p)
			<tr>
				<td>{{ $i++ }}</td>
                <td>{{$p->nip}}</td>
                <td>{{$p->bidang_divisi->name}}</td>
				<td>{{ $p->nip }}</td>
                <td>{{ $p->bidang_divisi->name }}</td>
                <td>{{ $p->name }}</td>                        <td>{{ $p->tempat_lahir }}</td>
                <td>{{ $p->tanggal_lahir }}</td>
                <td>{{ $p->jenis_kelamin->name }}</td>
                <td>{{ $p->agama->name }}</td>                    <td>{{ $p->status->name }}</td>
                <td>{{ $p->gol->name }}</td>
                <td>{{ $p->telp }}</td>
                <td>{{ $p->alamat }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
