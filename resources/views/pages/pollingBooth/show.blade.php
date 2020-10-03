@extends('layouts.main')

@section('content')

<div class="flex items-center justify-between heading text-xl px-2 py-2 border-b-2 border-gray-400">
  <div class="">
    <span class="text-gray-900 font-semibold">{{ $pollingBooth->name }}</span> Polling Booth
    <span class="text-xs text-gray-800 capitalize">| of {{ $pollingBooth->pollingDivision->name }} polling division.</span>
  </div>

  <div class="mr-2 text-sm">
    <a href="{{ route('district.show', $pollingBooth->pollingDivision->district) }}">{{ $pollingBooth->pollingDivision->district->name }}</a> <span class="text-gray-700">DST</span> /
    <a href="{{ route('pollingDivision.show', $pollingBooth->pollingDivision) }}">{{ $pollingBooth->pollingDivision->name }}</a> <span class="text-gray-700">PD</span> /
    {{ $pollingBooth->name }} <span class="text-gray-700">PB</span>
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
          Voters
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ $pollingBooth->voters->count() }}
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
  <h2 class="ml-4 text-lg text-gray-800 font-semibold">Voters</h2>
</div>

<form class="mx-8 my-8 px-4 py-4 bg-white shadow-lg rounded-lg" method="post" action="{{ route('voter.store') }}">
  @csrf

  <div class="flex justify-start items-center -mx-3 ">
    <div class="w-1/4 px-3 mb-6 md:mb-0 ">
      <input name="house_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-house_number" type="text" placeholder="House Number" value="{{ old('house_number') }}">
      @error('house_number')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
    </div>

    <div class="w-full px-3 mb-6 md:mb-0">
      <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-name" type="text" placeholder="Name" value="{{ old('name') }}">
      @error('name')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
    </div>

    <div class="w-1/4 px-3 mb-6 md:mb-0 ">
      <input name="nic" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('nic') border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-nic" type="text" placeholder="NIC" value="{{ old('nic') }}">
      @error('nic')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <div class="relative">
        <select name="gender" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-gender">
            <option class="capitalize" value="M">Male</option>
            <option class="capitalize" value="F">Female</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <div class="relative">
        <select name="race" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-race">
            <option class="capitalize" value=""></option>
            <option class="capitalize" value="Sinhala">Sinhala</option>
            <option class="capitalize" value="Tamil">Tamil</option>
            <option class="capitalize" value="Muslim">Muslim</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <div class="relative">
        <select name="village_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-role">
            @foreach ($pollingBooth->pollingDivision->villages as $key => $village)
              <option class="capitalize" @if(session('village_id') == $village->id) selected  @endif value="{{ $village->id }}">{{ $village->name }}</option>
            @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

    <input type="hidden" name="polling_booth_id" value="{{ $pollingBooth->id }}">

    <button type="submit" class="w-1/6 text-blue-500 font-semibold hover:text-blue-400 px-2">Add</button>
  </div>



</form>

{{-- Voters --}}
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
                House Number
              </th>
              <th class="px-6 py-3 bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th class="px-6 py-3 bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Gender
              </th>
              <th class="px-6 py-3 bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Race
              </th>
              <th class="px-6 py-3 bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                NIC
              </th>
              <th class="px-6 py-3 bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Village
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




            @foreach ($voters as $key => $voter)

            <tr>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-sm leading-5 font-medium text-gray-900">
                      {{ $voter->id }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">
                {{ $voter->house_number }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="leading-5 text-gray-900 font-semibold">
                  <a href="{{ route('voter.show', $voter) }}">{{ $voter->name }}</a>
                </div>
                <div class="text-sm leading-5 text-gray-500">Divisional Secretariats</div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">
                {{ $voter->gender }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">
                {{ $voter->race }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">
                {{ $voter->nic }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">
                {{ $voter->village->name }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">
                {{ $voter->updated_at }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">
                {{ $voter->created_at }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                <a href="{{ route('voter.edit', $voter) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
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

@endsection
