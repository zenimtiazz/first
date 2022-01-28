@extends('layouts.app')
@section('content')

<header class="relative flex items-center justify-center h-screen mb-12 overflow-hidden">
  <div
    class="relative z-30 p-5 text-3xl text-white bg-black-300 bg-opacity-50 rounded-xl">
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
      src="https://vod-progressive.akamaized.net/exp=1643411610~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F3256%2F5%2F141283020%2F423064707.mp4~hmac=237eab56a1b30573c9e776507c3aba461418285995899400b7c2f463bc49f45d/vimeo-prod-skyfire-std-us/01/3256/5/141283020/423064707.mp4?filename=Futuristic+-+896.mp4"
      type="video/mp4"
    />
    Your browser does not support the video tag.
  </video>
</header>
@endsection