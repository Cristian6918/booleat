@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">





            {{-- Form --}}
            <form action="{{ route('admin.plates.update', $plate->id) }}" method="POST" enctype='multipart/form-data'>
                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label for="name" class="form-label">Nome Piatto</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Nome piatto" name='name' value="{{ old('name', $plate->name) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">

                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="name"
                        placeholder="Descrizione" name='description'
                        value="{{ old('description', $plate->description) }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">

                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" step="any" class="form-control @error('price') is-invalid @enderror"
                        id="name" placeholder="Prezzo" name='price' value="{{ old('price', $plate->price) }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">

                    <label for="visible" class="form-label">Disponibile</label>
                    <input class="radio" type="radio" value="1" name='visible' checked />
                    <label for="visible" class="form-label">Non diponibile</label>
                    <input class="radio" type="radio" value="0" name='visible' />

                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Image</label>
                    <input type="file" name='cover' />
                    <img src="{{ asset('storage/' . $plate->image) }}" alt="">


                    @error('cover')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </div>
            </form>


        </div>
    </div>
@endsection
