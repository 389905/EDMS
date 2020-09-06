@extends('layouts.main')

@section('content')
<div class="heading text-xl px-2 py-2 border-b-2 border-gray-400">
  <span class="text-gray-900">Districts List</span>
  <span class="text-xs text-gray-800 capitalize">| All {{ count($districts) }} districts in Sri Lanka</span>
</div>

<div class="mx-auto mt-4 mb-4 flex flex-col xl:w-8/12">
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
                Last Updated
              </th>
              <th class="px-6 py-3 bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Added On
              </th>
              <th class="px-6 py-3 bg-gray-700"></th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

            @foreach ($districts as $key => $district)

            <tr>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-sm leading-5 font-medium text-gray-900">
                      {{ $district->id }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="leading-5 text-gray-900">
                  <a href="{{ route('district.show', $district) }}">{{ $district->name }}</a>
                </div>
                <div class="text-sm leading-5 text-gray-500">{{ $district->divSecs->count() }} Divisional Secretariats</div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                {{ $district->updated_at }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                {{ $district->created_at }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
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
