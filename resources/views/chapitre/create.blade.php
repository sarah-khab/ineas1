@extends('layouts.admin')

@section('title')
Create grille
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add new chapitre</h3>
      
    </div>
    <form method="POST" action="{{ route('chapitre.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">chapitre Name</label>
                <input type="text" name="chapitre"  id="chapitre" class="form-control @error('chapitre') is-invalid @enderror" value="{{ old('chapitre') }}" required placeholder="chapitre Name">
                @error('chapitre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Create chapitre</button>
        </div>
    </form>
</div>
@endsection