@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Modifica Dati Progetto</h1>

        @include('admin.projects.partials.btn_indietro')

        <div class="row justify-content-center mt-5">
            <div class="col-6 mb-5">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $project->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="img">Immagine</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
        

                    <div class="mb-3">
                        <label for="content" class="form-label">Descrizione:</label>
                        <textarea class="form-control" id="content" rows="3" name="content">{{ old('content', $project->content) }}</textarea>
                    </div>

                    <button class="btn btn-success" type="submit">Modifica</button>

                </form>
            </div>
        </div>
    </div>


@endsection
