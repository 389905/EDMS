@extends('layouts.main')

@section('content')
<div class="heading flex justify-between text-xl px-2 py-2 border-b-2 border-gray-300">
  <div class="">
    <span class="text-gray-900">Edit {{ $user->name }}</span>
    <span class="text-xs text-gray-800 capitalize"></span>
  </div>

  <a class="" href="{{ URL::previous() }}">
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded inline-flex items-center outline-none">
      <svg class=" w-6 h-6 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M19 7v6c0 1.103-.896 2-2 2H3v-3h13V8H5v2L1 6.5 5 3v2h12a2 2 0 012 2z"/></svg>
      <span class="font-semibold">Back</span>
    </button>
  </a>  {{-- end of button --}}
</div> {{-- end of header  --}}

<form class="mx-auto w-full max-w-lg mx-8 my-8 px-4 py-4 bg-white shadow-lg rounded-lg" method="post" action="{{ route('user.update', $user) }}">
  @csrf
  @method('put')
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full  px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
        Name
      </label>
      <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-name" type="text" placeholder="Jane" value="{{ $user->name }}">
      @error('name')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
    </div>

    <div class="w-full  px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
        Email
      </label>
      <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('email') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-email" type="text" placeholder="email@email.com" value="{{ $user->email }}">
      @error('email')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
    </div>

  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Password
      </label>
      <input name="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('password') border-red-500 @enderror border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
      @error('password')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
      <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
    </div>
  </div>

  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-role">
      Role
    </label>
    <div class="relative">
      <select name="role" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-role">
        @foreach ($roles as $key => $role)
          <option class="capitalize" value="{{ $role->id }}">{{ $role->name }}</option>
        @endforeach
      </select>
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
      </div>
    </div>
  </div>

  <div class="flex justify-end">
    <button class="mt-2 py-2 px-4 bg-orange-500 hover:bg-orange-400 text-white font-bold rounded inline-flex items-center focus:outline-none focus:shadow-outline">
      <svg class=" w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
      </svg>

      <span class="font-semibold ">Update</span>
    </button>
  </div>
</form>

<form class="mx-auto w-full max-w-lg " action="{{ route('user.destroy', $user) }}" method="post">
  @csrf
  @method('delete')
  <button type="submit" class="px-2 text-red-500 font-semibold float-right focus:outline-none focus:shadow-outline">
    Delete
  </button>
</form>
@endsection
