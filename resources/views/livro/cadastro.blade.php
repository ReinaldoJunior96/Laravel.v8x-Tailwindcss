@extends('componentes.main')
@section('form-cadastro')
    <div class="">
        <form action="{{ route('livros.store') }}" method="POST" class="form bg-white p-6 my-10 relative">
            @csrf
            <h3 class="text-2xl text-gray-900 font-semibold ">Cadastro</h3>
            <p class="text-gray-600"> Insira novos livros para sua biblioteca vitural!</p>
            <div class="flex space-x-5 mt-3">
                <input type="text" name="nome_livro" placeholder="Nome Livro" class="shadow focus:outline-none focus:ring-1  p-2 rounded w-full">
                <select name="tipo_livro" id="" class="shadow focus:outline-none focus:ring-1  p-2 rounded">
                    <option selected>Selecione</option>
                    <option value="">Free</option>
                    <option value="">Pago</option>
                    <option value="">Premium</option>
                </select>
                <input type="text" name="valor_livro" placeholder="Valor R$" class="shadow focus:outline-none focus:ring-1 p-2 rounded">
            </div>
            <div class="flex mt-5">
                    <button
                        class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-secondaria-normal hover:bg-secondaria-normal hover:bg-secondaria-normal hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                        <span class="mx-auto">Cadastro</span>
                    </button>
            </div>

        </form>
    </div>

@endsection
