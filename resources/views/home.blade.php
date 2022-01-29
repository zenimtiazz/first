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
      src="https://vod-progressive.akamaized.net/exp=1643470095~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F3267%2F6%2F166339073%2F530016613.mp4~hmac=57870c7d1c93da2474cd55ee805130d2d01512cb564b213fbd7d932a660e666d/vimeo-prod-skyfire-std-us/01/3267/6/166339073/530016613.mp4?filename=Computer+Keyboard+-+3188.mp4"
      type="video/mp4"
    />
    Your browser does not support the video tag.
  </video>
</header>
@endsection