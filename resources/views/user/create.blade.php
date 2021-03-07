@extends('layouts.admin')

@section('content')
<h1>new ueser</h1>

        <form action="{{ route('users.store') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user"></span>
                    </div>
                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="input-group mb-3">
                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                @foreach($roles as $role)
                <div class="form-check">
                    <input class="form-check-input" name="roles[]"
                 
                   type="checkbox" value="{{$role->id}}" id="{{$role->name}}">
                   <label class="form-check-label" for="{{$role->name}}">
                    {{$role->name}}
                   </label>
                </div>

                @endforeach
            </div>

            <div class="input-group mb-3">
                <button type="submit" class="btn btn-primary btn-block">Create user</button>
            </div>
        </form>
        
    </div>
    <!-- /.Register-card-body -->
</div>


@endsection