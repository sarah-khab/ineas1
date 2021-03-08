@extends('layouts.admin')

@section('title')
Create grille
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add new grille</h3>
      
    </div>
    <form method="POST" action="{{ route('grille.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">grille Name</label>
                <input type="text" name="name"  id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required placeholder="grille Name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Create Grille</button>
        </div>
    </form>
</div>
@endsection