@extends('layouts.main')

@section('content')
<div class="heading flex justify-between text-xl px-2 py-2 border-b-2 border-gray-300">
  <div class="">
    <span class="text-gray-900">Create Polling Booth for {{ $pollingDivision->name }}</span>
    <span class="text-xs text-gray-800 capitalize"></span>
  </div>

  <a class="" href="{{ URL::previous() }}">
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded inline-flex items-center outline-none">
      <svg class=" w-6 h-6 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M19 7v6c0 1.103-.896 2-2 2H3v-3h13V8H5v2L1 6.5 5 3v2h12a2 2 0 012 2z"/></svg>
      <span class="font-semibold">Back</span>
    </button>
  </a>  {{-- end of button --}}
</div> {{-- end of header  --}}

<form class="mx-auto w-full max-w-lg mx-8 my-8 px-4 py-4 bg-white shadow-lg rounded-lg" method="post" action="{{ route('pollingbooth.store') }}">
  @csrf

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full  px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
        Polling Booth Name
      </label>
      <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-name" type="text" placeholder="Colombo" value="{{ old('name') }}">
      @error('name')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full  px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-number">
        Booth Number
      </label>
      <input name="number" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('number') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-name" type="text" placeholder="" value="{{ old('number') }}">
      @error('number')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
    </div>
  </div>

  <input type="hidden" name="polling_division_id" value="{{ $pollingDivision->id }}">

  <div class="flex justify-end">
    <button class="mt-2 py-2 px-4 bg-blue-500 hover:bg-blue-400 text-white font-bold rounded inline-flex items-center outline-none">
      <svg class=" w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
      </svg>
      <span class="font-semibold">Add</span>
    </button>
  </div>


</form>
@endsection
