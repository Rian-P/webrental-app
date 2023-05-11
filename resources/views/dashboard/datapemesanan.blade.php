@extends('dashboard.layouts.app')

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <p class="text-xl "> data pemesanan </p><br>
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
                            <th scope="col" class="px-2 py-3">
                                nama
                            </th>
                            <th scope="col" class="px-2 py-3">
                                nama kendaraan
                            </th>
                            <th scope="col" class="px-2 py-3">
                                kota tujuan
                            </th>
                            <th scope="col" class="px-2 py-3">
                                tanggal pengambilan
                            </th>
                            <th scope="col" class="px-2 py-3">
                                tanggal pengembalian
                            </th>
                            <th scope="col" class="px-2 py-3">
                                sopir
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu pengambilan
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu pengembalian
                            </th>
                            <th scope="col" class="px-2 py-3">
                                foto ktp
                            </th>
                            <th scope="col" class="px-2 py-3">
                                bukti tf
                            </th>
                            <th scope="col" class="px-2 py-3">
                                aksi
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemesanan as $data)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->nama_pelanggan }}
                                </th>
                                <td class="px-2 py-2">
                                    {{ $data->nama_kendaraan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->kota_tujuan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->tanggal_pengambilan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->tanggal_pengembalian }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->sopir }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->waktu_pengembalian }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->waktu_pengembalian }}
                                </td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('/images/' . $data->foto_ktp) }}" alt="Foto KTP">
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->bukti_tf }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->status }}
                                </td>
                                <td>
                                    <button data-modal-target="staticModal" data-modal-toggle="staticModal" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        aproved </button>
                                    <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        hapus </button>


                                </td>

                            </tr>

                    </tbody>
                </table>
            </div>
            <!-- Main modal -->
            <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                <div class="relative w-full h-full max-w-2xl md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                pemesanan
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
                        <div class="modal fade" id="EditModal{{ $data->id_pemesanan }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/datapemesanan/update/{{ $data->id_pemesanan }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            {{-- @method('put') --}}
                                            {{-- <input type="hidden" name="id_mobil" value="{{$p->id_mobil}}"> --}}
                                            <label for="nama_kendaraan"
                                                class="block  text-sm font-medium text-gray-900 dark:text-white">
                                                Nama pelanggan</label>
                                            <input type="text" name="nama_pelanggan" value="{{ $data->nama_pelanggan }}"
                                                required="required"
                                                class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <label for="nama_kendaraan"
                                                class="block  text-sm font-medium text-gray-900 dark:text-white">
                                                Nama kendaraan</label>
                                            <input type="text" name="nama_kendaraan" value="{{ $data->nama_kendaraan }}"
                                                required="required"
                                                class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <label for="nama_kendaraan"
                                                class="block  text-sm font-medium text-gray-900 dark:text-white">
                                                kota tujuan</label>
                                            <input type="text" name="kota_tujuan" value="{{ $data->kota_tujuan }}"
                                                required="required"
                                                class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <div class="flex items-center justify-center">
                                                <div class="relative mb-3 xl:w-96 bg-gray-50 " data-te-datepicker-init
                                                    data-te-input-wrapper-init>
                                                    <input type="text" name="tanggal_pengambilan"
                                                        class="peer block bg-gray-50 min-h-[auto] w-full rounded border-0  py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                        placeholder="Select a date" />
                                                    <label for="floatingInput"
                                                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">
                                                        pengambilan</label>
                                                </div>
                                                <div class="relative mb-3 xl:w-96 bg-gray-50 " data-te-datepicker-init
                                                    data-te-input-wrapper-init>
                                                    <input type="text" name="tanggal_pengembalian"
                                                        class="peer bg-gray-50 block min-h-[auto] w-full rounded border-0 py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                        placeholder="Select a date" />
                                                    <label for="floatingInput"
                                                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">
                                                        pengembalian</label>
                                                </div>
                                            </div>

                                            <div class="flex mb-2 items-center justify-center">
                                                <div class="relative  xl:w-96 bg-gray-50 " data-te-timepicker-init
                                                    data-te-input-wrapper-init>
                                                    <input type="text" name="waktu_pengambilan"
                                                        class="peer block bg-gray-50  rounded border-0  py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                        id="form1" />
                                                    <label for="form1"
                                                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">pengambilan</label>
                                                </div>
                                                <div class="relative  xl:w-96 bg-gray-50  " data-te-timepicker-init
                                                    data-te-input-wrapper-init>
                                                    <input type="text" name="waktu_pengembalian"
                                                        class="pee brlock  rounded border-0  bg-gray-50 py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                        id="form1" />
                                                    <label for="form1"
                                                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">pengembalian</label>
                                                </div>
                                            </div>

                                            <label for="sopir"
                                                class="block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-white">sopir</label>
                                            <select id="countries" name="sopir"
                                                class="bg-gray-50 mb-2 mr-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required="required">
                                                <option value="">-- pilih sopir --</option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                            <label for="foto_ktp"
                                                class="block  text-sm font-medium text-gray-900 dark:text-white">foto
                                                ktp</label>
                                            <input type="file" name="foto_ktp" required="required"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <label for="bukti_tf"
                                                class="block  text-sm font-medium text-gray-900 dark:text-white">bukti
                                                tf</label>
                                            <input type="file" name="bukti_tf" required="required"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                            <label for="sopir"
                                                class="block  text-sm font-medium text-gray-900 dark:text-white">
                                                status</label>
                                            <input type="text" name="sopir" value="{{ $data->status }}"
                                                required="required"
                                                class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

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

                    {{-- uploud --}}

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
                                <form action="/datapemesanan/createpemesanan" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}      
                                        <label for="nama_pelanggan"
                                        class="block  text-sm font-medium text-gray-900 dark:text-white">
                                        Nama pelanggan</label>
                                    <input type="text" name="nama_pelanggan" 
                                        required="required"
                                        class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <label for="nama_kendaraan"
                                        class="block  text-sm font-medium text-gray-900 dark:text-white">
                                        Nama kendaraan</label>
                                    <input type="text" name="nama_kendaraan" 
                                        required="required"
                                        class="block w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <label for="kota_tujuan"
                                        class="block  text-sm font-medium text-gray-900 dark:text-white">
                                        kota tujuan</label>
                                    <input type="text" name="kota_tujuan" 
                                        required="required"
                                        class="block mb-2 w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="flex items-center justify-center">
                                        <div class="relative mb-3 xl:w-96 bg-gray-50 " data-te-datepicker-init
                                            data-te-input-wrapper-init>
                                            <input type="text" name="tanggal_pengambilan"
                                                class="peer block bg-gray-50 min-h-[auto] w-full rounded border-0  py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                placeholder="Select a date" />
                                            <label for="floatingInput"
                                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">
                                                pengambilan</label>
                                        </div>
                                        <div class="relative mb-3 xl:w-96 bg-gray-50 " data-te-datepicker-init
                                            data-te-input-wrapper-init>
                                            <input type="text" name="tanggal_pengembalian"
                                                class="peer bg-gray-50 block min-h-[auto] w-full rounded border-0 py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                placeholder="Select a date" />
                                            <label for="floatingInput"
                                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">
                                                pengembalian</label>
                                        </div>
                                    </div>

                                    <div class="flex mb-2 items-center justify-center">
                                        <div class="relative  xl:w-96 bg-gray-50 " data-te-timepicker-init
                                            data-te-input-wrapper-init>
                                            <input type="text" name="waktu_pengambilan"
                                                class="peer block bg-gray-50  rounded border-0  py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                id="form1" />
                                            <label for="form1"
                                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">pengambilan</label>
                                        </div>
                                        <div class="relative  xl:w-96 bg-gray-50  " data-te-timepicker-init
                                            data-te-input-wrapper-init>
                                            <input type="text" name="waktu_pengembalian"
                                                class="pee brlock  rounded border-0  bg-gray-50 py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                id="form1" />
                                            <label for="form1"
                                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">pengembalian</label>
                                        </div>
                                    </div>

                                    <label for="sopir"
                                        class="block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-white">sopir</label>
                                    <select id="countries" name="sopir"
                                        class="bg-gray-50 mb-2 mr-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required="required">
                                        <option value="">-- pilih sopir --</option>
                                        <option value="agus">agus</option>
                                        <option value=""></option>
                                    </select>
                                    <label for="foto_ktp"
                                        class="block  text-sm font-medium text-gray-900 dark:text-white">foto
                                        ktp</label>
                                    <input type="file" name="foto_ktp" required="required"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <label for="bukti_tf"
                                        class="block  text-sm font-medium text-gray-900 dark:text-white">bukti
                                        tf</label>
                                    <input type="file" name="bukti_tf" required="required"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3">

                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            Simpan</button>
                                    </div>
                                </form>
                            </div>
    
                        </div>
                    </div>
                </div>
                </div>
            </div>
        @endsection
