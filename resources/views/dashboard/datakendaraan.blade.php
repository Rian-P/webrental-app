@extends('dashboard.layouts.app')

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <p class="text-xl "> data kendaraan </p><br>
            <br><br>
            <div>
                <a>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        tambah </button>
                </a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                nama kendaraan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                image
                            </th>
                            <th>
                                type
                            </th>
                            <th>
                                plat nomor
                            </th>
                            <th>
                                tahun
                            </th>
                            <th>
                                harga 12 jam
                            </th>
                            <th>
                                harga 24 jam
                            </th>
                            <th>
                                deskripsi
                            </th>
                            <th>
                                aksi
                            </th>
                        </tr>
                    </thead>
                    @foreach ($mobils as $p)
                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $p->nama_kendaraan }}
                                </td>
                                <td>
                                    <img src="{{ asset('/images/mobil/' . $p->image) }} "width="200px" height="200px" </td>
                                <td class="px-6 py-4">
                                    {{ $p->type }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->nopol }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->tahun }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->harga_12_jam }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->harga_24_jam }}
                                </td>
                                <td class="px-6 py-4">
                                    {!!$p->deskripsi_mobil!!}
                                </td>
                                <td>
                                    <div class="mb-2">
                                        <a data-bs-toggle="modal" data-bs-target="#EditModal{{ $p->id_mobil }}"
                                            type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            edit </a>

                                    </div>
                                    <div>
                                        <a href="/datakendaraan/hapus/{{ $p->id_mobil }}"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            hapus </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>

                        <!-- UPDATE MODAL -->
                        <div class="modal fade" id="EditModal{{ $p->id_mobil }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/datakendaraan/update/{{ $p->id_mobil }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            {{-- @method('put') --}}
                                            {{-- <input type="hidden" name="id_mobil" value="{{$p->id_mobil}}"> --}}
                                            <label for="nama_kendaraan"
                                                class="block  text-sm font-medium text-gray-900 dark:text-white">
                                                nama_kendaran</label>
                                            <input type="text" name="nama_kendaraan" value="{{ $p->nama_kendaraan }}"
                                                required="required"
                                                class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                            {{-- <label for="image"
                                                class="block  text-sm font-medium text-gray-900 dark:text-white">image</label>
                                            <input type="hidden" name="tmp_kendaraan" value="{{ $p->image }}">
                                            <input type="file" name="image"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> --}}

                                            <label for="type"
                                                class="block  text-sm font-medium text-gray-900 dark:text-white"> type
                                            </label>
                                            <input type="text" name="type" value="{{ $p->type }}"
                                                required="required"
                                                class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <label for="nopol"
                                                class="block  text-sm font-medium text-gray-900 dark:text-white"> nopol
                                            </label>
                                            <input type="text" name="nopol" value="{{ $p->nopol }}"
                                                required="required"
                                                class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <label for="tahun"
                                                class="block text-sm font-medium text-gray-900 dark:text-white"> tahun
                                            </label>
                                            <input type="text" id="tahun" name="tahun" value="{{ $p->tahun }}"
                                                required="required"
                                                class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <label for="harga"
                                                class="block text-sm font-medium text-gray-900 dark:text-white"> harga 12
                                                jam
                                            </label>
                                            <input type="text" name="harga" value="{{ $p->harga_12_jam }}"
                                                required="required"
                                                class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <label for="harga"
                                                class="block text-sm font-medium text-gray-900 dark:text-white"> harga 24
                                                jam
                                            </label>
                                            <input type="text" name="harga" value="{{ $p->harga_24_jam }}"
                                                required="required"
                                                class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                            <label for="deskripsi mobil"
                                                class="block  text-sm font-medium text-gray-900 dark:text-white">
                                                deskripsi_mobil</label>
                                            <input type="text" name="deskripsi_mobil" value="{{ $p->deskripsi_mobil }}"
                                                required="required"
                                                class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

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
                        {{-- 
                     <!-- Main modal -->
            <div id="EditModal{{ $p->id_mobil }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            edit data kendaraan
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="EditModal_{{$p->id_mobil}}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                       <!-- form start -->
          <form action="/datakendaraan/update/{{ $p->id_mobil }}"  method="post" enctype="multipart/form-data">
           
             @csrf
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div>
                            <label for="nama_kendaraan"
                                class="block  text-sm font-medium text-gray-900 dark:text-white">  nama_kendaran</label>
                            <input type="text"  name="nama_kendaraan" value="{{$p->nama_kendaraan}}"  required="required"
                                class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        
                            <label for="image"
                            class="block  text-sm font-medium text-gray-900 dark:text-white">image</label>
                        <input type="file"  name="image" value="{{$p->image}}"   required="required"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                 
                            <label for="type"
                                class="block  text-sm font-medium text-gray-900 dark:text-white"> type </label>
                            <input type="text"   name="type" value="{{$p->type}}"  required="required"
                                class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="nopol"
                                class="block  text-sm font-medium text-gray-900 dark:text-white">  nopol </label>
                            <input type="text"  name="nopol" value="{{$p->nopol}}"  required="required"
                                class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="tahun"
                                class="block text-sm font-medium text-gray-900 dark:text-white">  tahun </label>
                            <input type="text" id="tahun" name="tahun" value="{{$p->tahun}}"  required="required"
                                class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="harga"
                                class="block text-sm font-medium text-gray-900 dark:text-white">  harga </label>
                            <input type="text" name="harga" value="{{$p->harga}}"  required="required"
                                class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="deskripsi mobil"
                                class="block  text-sm font-medium text-gray-900 dark:text-white">  deskripsi_mobil</label>
                            <input type="text" name="deskripsi_mobil" value="{{$p->deskripsi_mobil}}" required="required"
                                class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      
                            </div>
                      

                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                submit</button>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
                    @endforeach
                </table>
            </div>

            <!-- Main modal -->
            {{-- <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                <div class="relative w-full h-full max-w-2xl md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                penambahan data kendaraan
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
                           <!-- form start -->
              <form action="/datakendaraan/createmobil"  method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <input type="hidden" name="id" id="id" value="">
                            <div>
                                <label for="nama_kendaraan" value=""
                                    class="block  text-sm font-medium text-gray-900 dark:text-white">  nama_kendaran</label>
                                <input type="text" id="nama_kendaraan" name="nama_kendaraan"  required="required"
                                    class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            
                                <label for="image"
                                class="block  text-sm font-medium text-gray-900 dark:text-white">image</label>
                            <input type="file" id="base-input"  name="image"  required="required"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     
                                <label for="type"
                                    class="block  text-sm font-medium text-gray-900 dark:text-white"> type </label>
                                <input type="text" id="small-input"  name="type"  required="required"
                                    class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <label for="nopol"
                                    class="block  text-sm font-medium text-gray-900 dark:text-white">  nopol </label>
                                <input type="text" id="small-input" name="nopol" required="required"
                                    class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <label for="tahun"
                                    class="block text-sm font-medium text-gray-900 dark:text-white">  tahun </label>
                                <input type="text" id="tahun" name="tahun" required="required"
                                    class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <label for="harga"
                                    class="block text-sm font-medium text-gray-900 dark:text-white">  harga </label>
                                <input type="text" id="small-input" name="harga" required="required"
                                    class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <label for="deskripsi mobil"
                                    class="block  text-sm font-medium text-gray-900 dark:text-white">  deskripsi_mobil</label>
                                <input type="text" id="small-input" name="deskripsi_mobil" required="required"
                                    class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          
                                </div>
                          

                            <!-- Modal footer -->
                            <div
                                class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="staticModal" type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}

            <!-- INSERT MODAL -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/datakendaraan/createmobil" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <label for="nama_kendaraan"
                                    class="block  text-sm font-medium text-gray-900 dark:text-white"> nama_kendaran</label>
                                <input type="text" name="nama_kendaraan" required="required"
                                    class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <label for="image"
                                    class="block  text-sm font-medium text-gray-900 dark:text-white">image</label>
                                <input type="file" name="image" required="required"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <label for="type" class="block  text-sm font-medium text-gray-900 dark:text-white">
                                    type </label>
                                <input type="text" name="type" required="required"
                                    class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="nopol" class="block  text-sm font-medium text-gray-900 dark:text-white">
                                    nopol </label>
                                <input type="text" name="nopol" required="required"
                                    class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="tahun" class="block text-sm font-medium text-gray-900 dark:text-white">
                                    tahun </label>
                                <input type="text" id="tahun" name="tahun" required="required"
                                    class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="harga_12_jam" class="block text-sm font-medium text-gray-900 dark:text-white">
                                    harga 12 jam </label>
                                <input type="text" name="harga_12_jam" required="required"
                                    class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="harga_24_jam" class="block text-sm font-medium text-gray-900 dark:text-white">
                                    harga 24 jam </label>
                                <input type="text" name="harga_24_jam" required="required"
                                    class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <label for="deskripsi mobil"
                                    class="block  text-sm font-medium text-gray-900 dark:text-white">
                                    deskripsi_mobil</label>
                                <input id="deskripsi_mobil" type="hidden" name="deskripsi_mobil">
                                <trix-editor input="deskripsi_mobil"></trix-editor>
                                <div class="modal-footer">

                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Save changes</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    @endsection
