@extends('componentes.main')
@section('form-edit')
    @if(session('status'))
        <div class="grid grid-cols-6 gap-4 pt-5 pr-5 pl-5">
            <div class="bg-principal-normal col-start-2 col-span-4 rounded text-white py-5 shadow-md " role="alert">
                <p class="font-bold text-center">{{ session('status') }}</p>
            </div>
        </div>
    @endif
    <div class="flex flex-col sm:px-10 md:px-80">
        <form action="{{ route('livros.update',$livro->id) }}" method="POST"
              class="form bg-white p-6 my-10 relative shadow-md rounded ">
            @method('PUT')
            @csrf
            <div class="">
                <h3 class="text-2xl text-gray-500 font-light ">Editar</h3>
                <p class="text-gray-300">{{ $livro->nome_livro }}</p>
            </div>
            <hr>
            <div class="flex space-x-5 mt-3">
                <input type="text" name="nome_livro" value="{{ $livro->nome_livro }}" placeholder="Nome Livro"
                       class="shadow focus:outline-none focus:ring-1  p-2 rounded w-full">
            </div>
            <div class="flex space-x-5 mt-3">
                <select name="tipo_livro" class="shadow focus:outline-none w-1/2 focus:ring-1  p-2 rounded">
                    <option value="{{ $livro->tipo_livro }}">{{ $livro->tipo_livro }}</option>
                    <option value="Free">Free</option>
                    <option value="Pago">Pago</option>
                    <option value="Premium">Premium</option>
                </select>
                <input type="text" name="preco_livro" value="{{ $livro->preco_livro }}" placeholder="Valor R$"
                       class="shadow focus:outline-none focus:ring-1 p-2 w-1/2 rounded">
            </div>
            <div class="flex mt-5">
                <button
                    class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-secondaria-normal hover:bg-secondaria-normal hover:bg-secondaria-normal hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                    <span class="mx-auto">Alterar</span>
                </button>
            </div>

        </form>
    </div>



@endsection
