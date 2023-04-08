@extends('dashboard.layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </head>

    <body>
        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                <p class="text-xl "> sopir </p><br>
                <br><br>
                <div>
                    <button data-modal-target="staticModal" data-modal-toggle="staticModal" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        tambah </button>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    nama sopir
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    alamat
                                </th>
                                <th>
                                    gender
                                </th>
                                <th>
                                    nomor hp
                                </th>
                                <th>
                                    status
                                </th>
                                <th>
                                    aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sopir as $data)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $data->nama_sopir }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $data->nomor_hp_sopir }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->alamat_sopir }}
                                    </td>
                                    <td>
                                        {{ $data->gender }}
                                    </td>
                                    <td>
                                        {{ $data->status }}
                                    </td>
                                    <td>
                                        <div class="mb-2">
                                            <a data-bs-toggle="modal" data-bs-target="#EditModal{{ $data->id_sopir }}"
                                                type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                edit </a>
                                            <a href="/datasopir/hapus/{{ $data->id_sopir }}"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                hapus </a>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="EditModal{{ $data->id_sopir }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/datasopir/update/{{ $data->id_sopir }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    {{-- @method('put') --}}
                                                    {{-- <input type="hidden" name="id_mobil" value="{{$p->id_mobil}}"> --}}
                                                    <label for="nama_kendaraan"
                                                        class="block  text-sm font-medium text-gray-900 dark:text-white">
                                                        Nama Sopir</label>
                                                    <input type="text" name="nama_sopir" value="{{ $data->nama_sopir }}"
                                                        required="required"
                                                        class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">


                                                    <label for="base-input"
                                                        class="block  text-sm font-medium text-gray-900 dark:text-white">gender</label>

                                                    <select id="countries" required="required" name="gender"
                                                        value="{{ $data->gender }}"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        required="required">
                                                        <option>-- pilih sebagai --</option>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                    <label for="nopol"
                                                        class="block  text-sm font-medium text-gray-900 dark:text-white">
                                                        Nomor Hp
                                                    </label>
                                                    <input type="text" name="nomor_hp_sopir"
                                                        value="{{ $data->nomor_hp_sopir }}" required="required"
                                                        class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <label for="small-input"
                                                        class="block  text-sm font-medium text-gray-900 dark:text-white">status</label>
                                                    <select id="countries" required="required" name="status"
                                                        value="{{ $data->status }}"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        required="required">
                                                        <option value="">pilih sebagai</option>
                                                        <option value="Aktif">Aktif</option>
                                                        <option value="Non Aktif">Non Aktif</option>
                                                    </select>
                                                    <label for="harga"
                                                        class="block text-sm font-medium text-gray-900 dark:text-white">
                                                        Alamat Sopir
                                                    </label>
                                                    <input type="text" name="alamat_sopir"
                                                        value="{{ $data->alamat_sopir }}" required="required"
                                                        class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">


                                                    <div class="modal-footer">
                                                        <button type="button"
                                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit"
                                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                            Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                    <div class="relative w-full h-full max-w-2xl md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Tambah Data Sopir
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="staticModal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <form action="/store" method="post">
                                    @csrf
                                    <div class="mb-6">
                                        <label for="large-input"
                                            class="block  text-sm font-medium text-gray-900 dark:text-white">nama sopir
                                        </label>
                                        <input type="text" id="large-input" name="nama_sopir"
                                            class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                        <label for="base-input"
                                            class="block  text-sm font-medium text-gray-900 dark:text-white">gender</label>
                                        <select id="countries" name="gender"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required="required">
                                            <option value="">-- pilih sebagai --</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <label for="small-input"
                                            class="block  text-sm font-medium text-gray-900 dark:text-white">alamat</label>
                                        <input type="text" id="small-input" name="alamat_sopir"
                                            class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required="required">

                                        <label for="small-input"
                                            class="block  text-sm font-medium text-gray-900 dark:text-white">nomor
                                            hp</label>
                                        <input type="text" id="small-input" name="nomor_hp_sopir"
                                            class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required="required">
                                        <label for="small-input"
                                            class="block  text-sm font-medium text-gray-900 dark:text-white">status</label>
                                        <select id="countries" name="status"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required="required">
                                            <option value="">pilih sebagai</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Non Aktif">Non Aktif</option>
                                        </select>
                                        <label for="small-input"
                                            class="block  text-sm font-medium text-gray-900 dark:text-white">password</label>
                                        <input type="password" id="small-input" name="password"
                                            class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required="required">
                                    </div>
                                    <div
                                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="staticModal" type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
