@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Boking 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('bk.update',$book->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}<br>

			  		<div class="form-group {{ $errors->has('tanggal_boking') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal_boking</label>	
			  			<input type="date" name="tanggal_boking" class="form-control" value="{{ $book->tanggal_boking }}"  required>
			  			@if ($errors->has('tanggal_boking'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_boking') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_mobil') ? ' has-error' : '' }}">
			  			<label class="control-label">id_mobil</label>	
			  			<input type="text" name="id_mobil" class="form-control"  value="{{ $book->id_mobil }}"  required>
			  			@if ($errors->has('id_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_mobil') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Your Name</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $book->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Your Addres</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $book->alamat }}"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
			  			<label class="control-label">Phone Number</label>	
			  			<input type="text" name="no_hp" class="form-control" value="{{ $book->no_hp }}"  required>
			  			@if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection