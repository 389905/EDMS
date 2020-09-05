@extends('layouts.main')

@section('content')
<div class="heading flex justify-between text-xl px-2 py-2 border-b-2 border-gray-300">
  <div class="">
    <span class="text-gray-900">Users</span>
    <span class="text-xs text-gray-800 capitalize">| Manage System Users</span>
  </div>

  <a class="" href="{{ route('user.create') }}">
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded inline-flex items-center outline-none">
      <svg class=" w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
      </svg>
      <span class="font-semibold">Add</span>
    </button>
  </a>
</div> {{-- end of header  --}}

@if(Session::has('success'))
<div class="mx-auto mt-2 w-1/2 px-4 py-3 flex items-center bg-green-100 text-green-700 text-sm font-semibold rounded border" role="alert">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
  </svg>
  <p>{{ Session::get('success') }}</p>
</div>
@endif

<div class="mt-4 flex flex-col xl:w-6/12 mx-auto">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
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
                Email
              </th>
              <th class="px-6 py-3 bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Role
              </th>
              <th class="px-6 py-3 bg-gray-700"></th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

            @foreach ($users as $key => $user)

            <tr>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-sm leading-5 font-medium text-gray-900">
                      {{ $user->id }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="leading-5 text-gray-900">{{ $user->name }}</div>
                <div class="text-sm leading-5 text-gray-500">Default Province</div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                {{ $user->email }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-xs leading-5 text-gray-500 uppercase tracking-wide">
                {{ $user->roles->first()->name }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                <a href="{{ route('user.edit', $user) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
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
