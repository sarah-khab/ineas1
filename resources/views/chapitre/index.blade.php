@extends('layouts.admin')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">

            Creer chapitre

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    <div class="card-tools">
                        <a href="{{ route('chapitre.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create chapitre</a>
                    </div>
                </div>

              
            </div>
        </div>
    </div>
@endsection