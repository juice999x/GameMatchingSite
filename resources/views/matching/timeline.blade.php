<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>タイムライン</title>
    <head>
        <meta charset="utf-8">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" >
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('/js/like.js') }}" defer></script>
    </head>
    
    <style>
        .title{
          margin: 5%;
          text-align: center;
          font-size: 3rem;
          font-weight: 100;
        }
    </style>

   <body>
       <h2 class="title">ゲームマッチングサイト: ゲマゲマ</h2>
        <hr>
        
        <div class="flex flex-wrap bg-white w-full h-screen">
            <div class="w-2/12 bg-white rounded p-3 shadow-lg">
                <div class="flex items-center space-x-4 p-2 mb-5">
                    <img style="height: 60px; width:60px;" src="{{ $users->image_url }}" class="rounded-full flex justify-center" onerror="this.src='null';" alt="プロフィール画像"/>
                    <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">{{ $users->name }}</h4>
                </div>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="/timeline" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <span>タイムライン</span>
                        </a>
                    </li>
                    <li>
                        <a href="/matching/posts" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </span>
                            <span>投稿する</span>
                        </a>
                    </li>
                    <li>
                        <a href="/matching/likes/{{ $users->id }}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class=" text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </span>
                            <span>あなたへのいいね</span>
                        </a>
                    </li>
                    <li>
                        <a href="/matching/userprofiles/{{ $users->id }}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <span>プロフィール</span>
                        </a>
                    </li>
                    <li>
                        <form method="post" action="{{ route('logout') }}">
                        @csrf
                            <a class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                                <span class="text-gray-600">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                </span>
                                <div>
                                    <button
                                    onclick="event.preventDefault(); this.closest('form').submit();">ログアウト
                                    </button>
                                </div>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        
            <div class="w-9/12">
                <div class="p-4 text-gray-500">
                    <div class="w-8/12 md:w-7/12 lg:6/12 mx-auto relative py-20">
                        <h1 class="text-3xl text-center font-bold text-blue-500">募集要項タイムライン</h1>
                        
                          　@foreach ($timelines as $timeline)
                            <div class="border-l-2 mt-10">
                            @if ($timeline->id % 5 == 1)
                            <!-- Card 1 -->
                                <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-blue-500 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
                              <!-- Dot Follwing the Left Vertical Line -->
                                    <div class="w-5 h-5 bg-blue-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                    
                              <!-- Line that connecting the box with the vertical line -->
                                    <div class="w-10 h-1 bg-blue-300 absolute -left-10 z-0"></div>
                
                              <!-- Content that showing in the box -->
                                    <img style="height: 60px; width:60px;" src="{{ $users->image_url }}" class="rounded-full flex justify-center" onerror="this.src='null';" alt="プロフィール画像"/>
                                    <div class="flex-auto">
                                        <h1 class="text-xl font-bold text-center mb-3">気になったらいいねしてみよう！</h1>
                                        <h1 class="text=lg font-bold text-center">性別: {{ $timeline->looking_for_sex }}</h1>
                                        <h1 class="text=lg font-bold text-center">募集人数: {{ $timeline->number_of_people }}</h1>
                                        <h1 class="text-xl font-bold text-center border-b">募集するゲーム: {{$timeline->intrested_in }}</h1>
                                        <h1 class="text=lg font-bold text-center whitespace-pre-line">コメント: 
                                        {{ $timeline->self_introduction }}</h1>
                                    </div>
                                    <button onclick="like({{$timeline->id}})">
                                        <svg class="w-9 h-9 hover:text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
                           
                            @if ($timeline->id % 5 == 2)
                            <!-- Card 2 -->
                                <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-pink-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
                              <!-- Dot Follwing the Left Vertical Line -->
                                    <div class="w-5 h-5 bg-pink-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                    
                              <!-- Line that connecting the box with the vertical line -->
                                    <div class="w-10 h-1 bg-pink-300 absolute -left-10 z-0"></div>
                
                          <!-- Content that showing in the box -->
                                    <img style="height: 60px; width:60px;" src="{{ $users->image_url }}" class="rounded-full flex justify-center" onerror="this.src='null';" alt="プロフィール画像"/>
                                    <div class="flex-auto">
                                        <h1 class="text-xl font-bold text-center mb-3">気になったらいいねしてみよう！</h1>
                                        <h1 class="text=lg font-bold text-center">性別: {{ $timeline->looking_for_sex }}</h1>
                                        <h1 class="text=lg font-bold text-center">募集人数: {{ $timeline->number_of_people }}</h1>
                                        <h1 class="text-xl font-bold text-center border-b">募集するゲーム: {{$timeline->intrested_in }}</h1>
                                        <h1 class="text=lg font-bold text-center whitespace-pre-line">コメント: 
                                        {{ $timeline->self_introduction }}</h1>
                                    </div>
                                    <button onclick="like({{$timeline->id}})">
                                        <svg class="w-9 h-9 hover:text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
                
                            @if ($timeline->id % 5 == 3)
                            <!-- Card 3 -->
                                <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-green-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
                              <!-- Dot Follwing the Left Vertical Line -->
                                    <div class="w-5 h-5 bg-green-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                    
                              <!-- Line that connecting the box with the vertical line -->
                                    <div class="w-10 h-1 bg-green-300 absolute -left-10 z-0"></div>
                
                              <!-- Content that showing in the box -->
                                    <img style="height: 60px; width:60px;" src="{{ $users->image_url }}" class="rounded-full flex justify-center" onerror="this.src='null';" alt="プロフィール画像"/>
                                    <div class="flex-auto">
                                        <h1 class="text-xl font-bold text-center mb-3">気になったらいいねしてみよう！</h1>
                                        <h1 class="text=lg font-bold text-center">性別: {{ $timeline->looking_for_sex }}</h1>
                                        <h1 class="text=lg font-bold text-center">募集人数: {{ $timeline->number_of_people }}</h1>
                                        <h1 class="text-xl font-bold text-center border-b">募集するゲーム: {{$timeline->intrested_in }}</h1>
                                        <h1 class="text=lg font-bold text-center whitespace-pre-line">コメント: 
                                        {{ $timeline->self_introduction }}</h1>
                                    </div>
                                    <button onclick="like({{$timeline->id}})">
                                        <svg class="w-9 h-9 hover:text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
                    
                            @if ($timeline->id % 5 == 4)
                            <!-- Card 4 -->
                                <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-purple-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
                              <!-- Dot Follwing the Left Vertical Line -->
                                    <div class="w-5 h-5 bg-purple-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                    
                              <!-- Line that connecting the box with the vertical line -->
                                    <div class="w-10 h-1 bg-purple-300 absolute -left-10 z-0"></div>
                
                              <!-- Content that showing in the box -->
                                    <img style="height: 60px; width:60px;" src="{{ $users->image_url }}" class="rounded-full flex justify-center" onerror="this.src='null';" alt="プロフィール画像"/>
                                    <div class="flex-auto">
                                        <h1 class="text-xl font-bold text-center mb-3">気になったらいいねしてみよう！</h1>
                                        <h1 class="text=lg font-bold text-center">性別: {{ $timeline->looking_for_sex }}</h1>
                                        <h1 class="text=lg font-bold text-center">募集人数: {{ $timeline->number_of_people }}</h1>
                                        <h1 class="text-xl font-bold text-center border-b">募集するゲーム: {{$timeline->intrested_in }}</h1>
                                        <h1 class="text=lg font-bold text-center whitespace-pre-line">コメント: 
                                        {{ $timeline->self_introduction }}</h1>
                                    </div>
                                    <button onclick="like({{$timeline->id}})">
                                        <svg class="w-9 h-9 hover:text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
                
                            @if ($timeline->id % 5 == 0)
                            <!-- Card 5 -->
                                <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-yellow-600 text-white rounded mb-10 flex-col md:flex-row">
                              <!-- Dot Follwing the Left Vertical Line -->
                                    <div class="w-5 h-5 bg-yellow-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 -mt-2 md:mt-0"></div>
                    
                              <!-- Line that connecting the box with the vertical line -->
                                    <div class="w-10 h-1 bg-yellow-300 absolute -left-10 z-0"></div>
                  
                                <!-- Content that showing in the box -->
                                    <img style="height: 60px; width:60px;" src="{{ $users->image_url }}" class="rounded-full flex justify-center" onerror="this.src='null';" alt="プロフィール画像"/>
                                    <div class="flex-auto">
                                        <h1 class="text-xl font-bold text-center mb-3">気になったらいいねしてみよう！</h1>
                                        <h1 class="text=lg font-bold text-center">性別: {{ $timeline->looking_for_sex }}</h1>
                                        <h1 class="text=lg font-bold text-center">募集人数: {{ $timeline->number_of_people }}</h1>
                                        <h1 class="text-xl font-bold text-center border-b">募集するゲーム: {{$timeline->intrested_in }}</h1>
                                        <h1 class="text=lg font-bold text-center whitespace-pre-line">コメント: 
                                        {{ $timeline->self_introduction }}</h1>
                                    </div>
                                    <button onclick="like({{$timeline->id}})">
                                        <svg class="w-9 h-9 hover:text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </button>
                                </div>
                              @endif
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>