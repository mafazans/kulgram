@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contacts</div>
                <div class="panel-body">
				<p><a class="btn btn-primary" href="{{ route('contacts.create') }}">Tambah</a></p>
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Pekerjaan</th>
							</tr>
						</thead>
						<tbody>
						<?php $no = 1; ?>
						@foreach($contacts as $contact)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $contact->nama }}</td>
								<td>{{ $contact->alamat }}</td>
								<td>{{ $contact->pekerjaan }}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection