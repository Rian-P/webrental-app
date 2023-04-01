
@extends('landing.layouts.app')

@section('content')
   <!-- hero -->
   <section class="text-black-600 body-font my-16 mx-auto px-5 md:max-w-6xl">
    <div class="text-xl">
    <p>transaksi </p>
    </div>
    <table class="w-4/5 text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-900 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Mobil
                </th>
                <th scope="col" class="px-6 py-3">
                    waktu pengambilan
                </th>
                <th scope="col" class="px-6 py-3">
                    waktu pengembalian
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">diterima</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ryan
                </th>
                <td class="px-6 py-4">
ayla
                </td>
                <td class="px-6 py-4">
                    09/03/2023
                </td>
                <td class="px-6 py-4">
                    09/03/2023
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">diterima</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ryan
                </th>
                <td class="px-6 py-4">
ayla
                </td>
                <td class="px-6 py-4">
                    09/03/2023
                </td>
                <td class="px-6 py-4">
                    09/03/2023
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">diterima</a>
                </td>
            </tr>
           
           
        </tbody>
    </table>
  </div>
</section>
<!-- hero -->
<!-- component -->
<section>
  
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
 

</section>
<section>
    <div class="flex flex-col justify-center items-center h-[100vh]">
        <div class="relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
            <div class="mt-2 mb-8 w-full">
                <h4 class="px-2 text-xl font-bold text-navy-700 dark:text-white">
                General Information
                </h4>
                <p class="mt-2 px-2 text-base text-gray-600">
                As we live, our hearts turn colder. Cause pain is what we go through
                as we become older. We get insulted by others, lose trust for those
                others. We get back stabbed by friends. It becomes harder for us to
                give others a hand. We get our heart broken by people we love, even
                that we give them all...
                </p>
            </div> 
            <div class="grid grid-cols-2 gap-4 px-2 w-full">
                <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                <p class="text-sm text-gray-600">Education</p>
                <p class="text-base font-medium text-navy-700 dark:text-white">
                    Stanford University
                </p>
                </div>

                <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                <p class="text-sm text-gray-600">Languages</p>
                <p class="text-base font-medium text-navy-700 dark:text-white">
                    English, Spanish, Italian
                </p>
                </div>

                <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                <p class="text-sm text-gray-600">Department</p>
                <p class="text-base font-medium text-navy-700 dark:text-white">
                    Product Design
                </p>
                </div>

                <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                <p class="text-sm text-gray-600">Work History</p>
                <p class="text-base font-medium text-navy-700 dark:text-white">
                    English, Spanish, Italian
                </p>
                </div>

                <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                <p class="text-sm text-gray-600">Organization</p>
                <p class="text-base font-medium text-navy-700 dark:text-white">
                    Simmmple Web LLC
                </p>
                </div>

                <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                <p class="text-sm text-gray-600">Birthday</p>
                <p class="text-base font-medium text-navy-700 dark:text-white">
                    20 July 1986
                </p>
                </div>
            </div>
        </div>  
        <p class="font-normal text-navy-700 mt-20 mx-auto w-max">Profile Card component from <a href="https://horizon-ui.com?ref=tailwindcomponents.com" target="_blank" class="text-brand-500 font-bold">Horizon UI Tailwind React</a></p>  
    </div>
</section>


 
@endsection