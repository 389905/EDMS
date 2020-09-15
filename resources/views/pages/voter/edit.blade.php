@extends('layouts.main')

@section('content')
<div class="heading flex justify-between text-xl px-2 py-2 border-b-2 border-gray-300">
  <div class="">
    <span class="text-gray-900">Edit {{ $voter->name }}</span>
    <span class="text-xs text-gray-800 capitalize"></span>
  </div>

  <a class="" href="{{ URL::previous() }}">
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded inline-flex items-center outline-none">
      <svg class=" w-6 h-6 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M19 7v6c0 1.103-.896 2-2 2H3v-3h13V8H5v2L1 6.5 5 3v2h12a2 2 0 012 2z"/></svg>
      <span class="font-semibold">Back</span>
    </button>
  </a>  {{-- end of button --}}
</div> {{-- end of header  --}}


<form class=" mx-8 my-8 px-4 py-4 bg-white shadow-lg rounded-lg" method="post" action="{{ route('voter.update', $voter) }}">
  @csrf
  @method('put')
  <div class="flex -mx-3 mb-6">
    <div class="px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-house_number">
        House Number
      </label>
      <input name="house_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('house_number') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-house_number" type="text" placeholder="" value="{{ $voter->house_number }}">
      @error('house_number')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
    </div>

    <div class="w-1/4  px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
        Name
      </label>
      <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-name" type="text" placeholder="Colombo" value="{{ $voter->name }}">
      @error('name')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
    </div>

    <div class="w-1/4 px-3 ">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
        Gender
      </label>
      <div class="relative">
        <select name="gender" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-gender">
            <option class="capitalize" value="M" {{ $voter->gender === 'M' ? 'selected':'' }}>Male</option>
            <option class="capitalize" value="F" {{ $voter->gender === 'F' ? 'selected':'' }}>Female</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

    <div class="w-1/4 px-3 ">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-race">
        Race
      </label>
      <div class="relative">
        <select name="race" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-gender">
            <option class="capitalize" value="" {{ $voter->race === '' ? 'selected':'' }}></option>
            <option class="capitalize" value="Sinhala" {{ $voter->race === 'Sinhala' ? 'selected':'' }}>Sinhala</option>
            <option class="capitalize" value="Tamil" {{ $voter->race === 'Tamil' ? 'selected':'' }}>Tamil</option>
            <option class="capitalize" value="Muslim" {{ $voter->race === 'Muslim' ? 'selected':'' }}>Muslim</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

  </div>

  <div class="flex -mx-3 mb-6">

    <div class="w-1/4  px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-nic">
        NIC
      </label>
      <input name="nic" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('nic') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-name" type="text" placeholder="NIC" value="{{ $voter->nic }}">
      @error('nic')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
    </div>

    <div class="w-1/4  px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-occupation">
        Occupation
      </label>
      <input name="occupation" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('occupation') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-name" type="text" placeholder="Occupation" value="">
      @error('occupation')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
    </div>

    <div class="w-1/4  px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-nic">
        Likely to Vote for
      </label>
      <div class="relative">
        <select name="party" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-gender">
            <option class="capitalize" value="">N/A</option>
            <option class="capitalize" value="">SJB</option>
            <option class="capitalize" value="">SLPP</option>
            <option class="capitalize" value="">UNP</option>
            <option class="capitalize" value="">NPF</option>
            <option class="capitalize" value="">SLFP</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

  </div>


  <div class="flex justify-end">
    <button class="mt-2 py-2 px-4 bg-green-500 hover:bg-green-400 text-white font-bold rounded inline-flex items-center outline-none">
      <svg class=" w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
      </svg>
      <span class="font-semibold">Update</span>
    </button>
  </div>


</form>
@endsection
