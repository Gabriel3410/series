<x-layout title='Nova Série'>
    
    <form action="{{ route('series.store') }}" method="post">
        @csrf   
        <div class="row mb-3">
              
            <div class="col-8">
                <label for="nome" class="form-label">nome:</label>
                <input type="text"
                    autofocus
                    name="nome" 
                    id="nome" 
                    class="form-control" 
                    value="{{ old('nome') }}">
            </div>

            <div class="col-2">
                <label for="seasonQty" class="form-label">Nº Temporadas:</label>
                <input type="text"
                    name="seasonQty" 
                    id="seasonQty" 
                    class="form-control" 
                    value="{{ old('seasonQty') }}">
            </div>

            <div class="col-2">
                <label for="episodePerSeason" class="form-label">eps/ Temporadas:</label>
                <input type="text"
                    name="episodePerSeason" 
                    id="episodePerSeason" 
                    class="form-control" 
                    value="{{ old('episodePerSeason') }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

</x-layout>
