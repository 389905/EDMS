@extends('layouts.main')

@section('content')

<div class="flex items-center justify-between heading text-xl px-2 py-2 border-b-2 border-gray-400">
  <div class="">
    <span class="text-gray-900 font-semibold">{{ $pollingDivision->name }}</span> Polling Division
    <span class="text-xs text-gray-800 capitalize">| All the data of {{ $pollingDivision->name }}.</span>
  </div>

  <div class="mr-2 text-sm">
    <a href="{{ route('district.show', $pollingDivision->district) }}">{{ $pollingDivision->district->name }}</a> DST / {{ $pollingDivision->name }} PD
  </div>
</div>

<div class="mt-4 my-4 grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
  <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
    <div class="p-4 flex items-center">
      <div class="p-3 rounded-full text-orange-500 dark:text-orange-100 bg-orange-100 dark:bg-orange-500 mr-4">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
          <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Total registered voters</p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ $pollingDivision->voters->count() }}
        </p>
      </div>
    </div>
  </div>
  <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
    <div class="p-4 flex items-center">
      <div class="p-3 rounded-full text-green-500 dark:text-green-100 bg-green-100 dark:bg-green-500 mr-4">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
          <path fill-rule="evenodd"d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Divisional Secretariats
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ $pollingDivision->divSecs->count() }}
        </p>
      </div>
    </div>
  </div>
  <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
    <div class="p-4 flex items-center">
      <div class="p-3 rounded-full text-blue-500 dark:text-blue-100 bg-blue-100 dark:bg-blue-500 mr-4">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
          <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Grama Niladhari Divisions
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ $pollingDivision->gnDivisions->count() }}
        </p>
      </div>
    </div>
  </div>

</div> {{-- end of stats --}}


@if(Session::has('success'))
<div class="mt-2 w-1/2 px-4 py-3 flex items-center bg-green-100 text-green-700 text-sm font-semibold rounded border" role="alert">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
  </svg>
  <p>{{ Session::get('success') }}</p>
</div>
@endif

<div class="flex justify-start">
  <div class="w-full">
    <!-- post card -->
    <div class="flex justify-between mx-4 my-4 max-w-md md:max-w-2xl">
      <h2 class="ml-4 text-lg text-gray-800 font-semibold">Divisional Secretariats</h2>
      <a class="text-blue-500 font-semibold hover:text-blue-400 px-2 cursor-not-allowed" href="#">Add new</a>
    </div>

    {{-- Divisional Secretariats --}}
    @foreach ($pollingDivision->divSecs as $key => $divSec)
      <div class="flex bg-white shadow-lg rounded-lg mx-4 my-4 max-w-md md:max-w-2xl "><!--horizantil margin is just for display-->
         <div class="flex items-start px-4 py-6 w-full">
            <img
              class="w-12 h-12 rounded-full object-cover mr-4 shadow"
              src="https://cdn4.iconfinder.com/data/icons/elections-polling/614/4543_-_Giving_Vote-512.png"
              alt="avatar">
            <div class="w-full ">
               <div class="flex items-center justify-between ">
                  <a href="{{ route('divsec.show', $divSec) }}" class="text-lg font-semibold text-gray-900 -mt-1">{{ $divSec->name }}</a>
                  <small class="text-sm text-gray-700">Last updated {{ $divSec->updated_at->diffForHumans() }}</small>
               </div>
               <p class="text-gray-700">Created {{ $divSec->created_at->diffForHumans() }}</p>
               <p class="mt-3 text-gray-700 text-sm ">
                  <span class="text-gray-600 text-xs uppercase">Grama Niladhari Division(s): </span> {{ $divSec->gnDivisions->pluck('name')->implode(', ',) }}
               </p>

               <div class="mt-4 flex items-center float-right">
                 <div class="flex mr-2 text-sm">
                   <a class="text-green-600 font-semibold hover:text-green-400 cursor-not-allowed" href="#">Update</a>
                   <form class="ml-4" action="#" method="post">
                     @csrf
                     @method('delete')
                     <button type="submit" class="cursor-not-allowed text-red-500 hover:text-red-400 font-semibold focus:outline-none" >Delete</button>
                   </form>
                 </div>
              </div>

            </div>
         </div>
      </div>
      @endforeach
  </div>

  <div class="w-full">
    <!-- post card -->
    <div class="flex justify-between mx-4 my-4 max-w-md md:max-w-2xl">
      <h2 class="ml-4 text-lg text-gray-800 font-semibold">Polling Booths</h2>
      <a class="text-blue-500 font-semibold hover:text-blue-400 px-2" href="{{ route('pollingbooth.create', $pollingDivision) }}">Add new</a>
    </div>

    <div class="mt-4 mb-4 flex">
      <div class="-my-2 overflow-x-auto ">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead>
                <tr>
                  <th class="px-6 py-3 bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    #
                  </th>
                  <th class="px-6 py-3 bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Name
                  </th>
                  <th class="px-6 py-3 bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Last Updated
                  </th>
                  <th class="px-6 py-3 bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Added On
                  </th>
                  <th class="px-6 py-3 bg-gray-700"></th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">

                @foreach ($pollingBooths as $key => $pollingBooth)

                <tr>
                  <td class="px-6 py-4 whitespace-no-wrap">
                    <div class="flex items-center">
                      <div class="ml-4">
                        <div class="text-sm leading-5 font-medium text-gray-900">
                          {{ $pollingBooth->id }}
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap">
                    <div class="leading-5 text-gray-900">
                      <a href="{{ route('pollingbooth.show', $pollingBooth) }}">{{ $pollingBooth->name }}</a>
                    </div>
                    <div class="text-sm leading-5 text-gray-500">Divisional Secretariats</div>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                    {{ $pollingBooth->updated_at }}
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                    {{ $pollingBooth->created_at }}
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                    <a href="{{ route('pollingbooth.edit', $pollingBooth) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  </td>
                </tr>

                @endforeach

                <!-- More rows... -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
