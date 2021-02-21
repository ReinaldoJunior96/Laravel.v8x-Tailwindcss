@extends('componentes.main')
@section('table-produtos')
    <!-- This example requires Tailwind CSS v2.0+ -->
    @if(session('status'))
        <div class="grid grid-cols-6 gap-4 pt-5 pr-5 pl-5">
            <div class="bg-principal-normal col-start-2 col-span-4 rounded text-white py-5 shadow-md " role="alert">
                <p class="font-bold text-center">{{ session('status') }}</p>
            </div>
        </div>
    @endif
    <div class="flex flex-col py-12 sm:px-6 lg:px-8 space-y-8">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Livro
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tipo
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Valor
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($livros as $l)
                            <tr>
                                <td class="px-2 py-5 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $l->nome_livro }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                  {{ $l->tipo_livro }}
                                </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    R$ {{ number_format($l->preco_livro, 2, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('livros.edit', $l->id) }}">
                                        <button type="submit"
                                                class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-principal-normal hover:border-principal-normal hover:bg-principal-normal hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                                            <span class="mx-auto">Edit</span>

                                        </button>
                                    </a>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <form id="destroy" action="{{ route('livros.destroy', $l->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit"
                                                class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                                            <span class="mx-auto">Remover</span>

                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        <!-- More items... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
