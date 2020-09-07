@extends('layouts.main')

@section('content')

<div class="flex items-center justify-between heading text-xl px-2 py-2 border-b-2 border-gray-400">
  <div class="">
    <span class="text-gray-900 font-semibold">{{ $divSec->name }}</span> Divisional Secretariat
    <span class="text-xs text-gray-800 capitalize">| All the data of {{ $divSec->name }} of {{ $divSec->pollingDivision->name }} Polling Division.</span>
  </div>

  <div class="mr-2 text-sm">
    <a href="{{ route('district.show', $divSec->pollingDivision->district) }}">{{ $divSec->pollingDivision->district->name }}</a> <span class="text-gray-700">DST</span> /
    <a href="{{ route('pollingDivision.show', $divSec->pollingDivision) }}">{{ $divSec->pollingDivision->name }}</a> <span class="text-gray-700">PD</span> /
    {{ $divSec->name }} <span class="text-gray-700">DS</span>
  </div>
</div>

<div class="mt-4 my-4 grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
  <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
    <div class="p-4 flex items-center">
      <div class="p-3 rounded-full text-green-500 dark:text-green-100 bg-green-100 dark:bg-green-500 mr-4">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
          <path fill-rule="evenodd"d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Grama Niladhari Divisions
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ $divSec->gnDivisions->count() }}
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
          Villages
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ $divSec->villages->count() }}
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

<!-- post card -->
<div class="flex justify-between mx-4 my-4 max-w-md md:max-w-2xl">
  <h2 class="ml-4 text-lg text-gray-800 font-semibold">Grama Niladhari Divisions</h2>
  <a class="text-blue-500 font-semibold hover:text-blue-400 px-2" href="{{ route('gndivision.create', $divSec) }}">Add new</a>
</div>

{{-- Divisional Secretariats --}}
@foreach ($divSec->gnDivisions as $key => $gnDivision)
  <div class="flex bg-white shadow-lg rounded-lg mx-4 my-4 max-w-md md:max-w-2xl "><!--horizantil margin is just for display-->
     <div class="flex items-start px-4 py-6 w-full">
        <img
          class="w-12 h-12 rounded-full object-cover mr-4 shadow"
          src="https://cdn4.iconfinder.com/data/icons/elections-polling/614/4543_-_Giving_Vote-512.png"
          alt="avatar">
        <div class="w-full ">
           <div class="flex items-center justify-between ">
              <a href="{{ route('gndivision.show', $gnDivision) }}" class="text-lg font-semibold text-gray-900 -mt-1">{{ $gnDivision->name }}</a>
              <small class="text-sm text-gray-700">Last updated {{ $gnDivision->updated_at->diffForHumans() }}</small>
           </div>
           <p class="text-gray-700">Created {{ $gnDivision->created_at->diffForHumans() }}</p>
           <p class="mt-3 text-gray-700 text-sm ">
              <span class="text-gray-600 text-xs uppercase">Villages: </span> {{ $gnDivision->villages->pluck('name')->implode(', ',) }}
           </p>

           <div class="mt-4 flex items-center float-right">
             <div class="flex mr-2 text-sm">
               <a class="text-green-600 font-semibold hover:text-green-400" href="{{ route('gndivision.edit', $gnDivision) }}">Update</a>
               <form class="ml-4" action="{{ route('gndivision.destroy', $gnDivision) }}" method="post">
                 @csrf
                 @method('delete')
                 <button type="submit" class="text-red-500 hover:text-red-400 font-semibold focus:outline-none" onclick="return confirm('Are you sure you want to delete {{ $gnDivision->name }}?');">Delete</button>
               </form>
             </div>
          </div>

        </div>
     </div>
  </div>
@endforeach

@endsection
