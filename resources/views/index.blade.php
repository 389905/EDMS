@extends('layouts.main')

@section('content')
<div class="heading text-xl px-2 py-2 border-b-2 border-gray-400">
  <span class="text-gray-900">Title goes here</span>
  <span class="text-xs text-gray-800 capitalize">| Subtitle goes here</span>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-64">
  <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-gray-100 text-sm font-mono subpixel-antialiased
              bg-gray-800  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
      <div class="top mb-2 flex">
          <div class="h-3 w-3 bg-red-500 rounded-full"></div>
          <div class="ml-2 h-3 w-3 bg-orange-300 rounded-full"></div>
          <div class="ml-2 h-3 w-3 bg-green-500 rounded-full"></div>
      </div>
      <div class="mt-4 flex">
          <span class="text-green-400">computer:~$</span>
          <p class="flex-1 typing items-center pl-2">
              apt-get start!
              <br>
          </p>
      </div>
  </div>
</div>
@endsection
