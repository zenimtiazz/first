@extends('layouts.app')
@section('content')

<header class="relative flex items-center justify-center h-screen mb-12 overflow-hidden">
  <div
    class="relative z-30 p-5 text-6xl text-white bg-blue-300 bg-opacity-50 rounded-xl">
    Welcome to my website!
  </div>
 
</div>
  <video
    autoplay
    loop
    muted
    class="absolute z-10 w-auto min-w-full min-h-full max-w-none"
  >
    <source
      src="{{ url('Iphone - 2967.mp4') }}"
      
      type="video/mp4"
    />
    Your browser does not support the video tag.
  </video>
</header>
@endsection