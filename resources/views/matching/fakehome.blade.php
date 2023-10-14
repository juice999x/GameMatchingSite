<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>ホーム</title>
    <head>
        <meta charset="utf-8">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('/css/style.css')  }}" rel="stylesheet" >
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="like.js"></script>
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
       <h2 class="title">マッチングサイト（仮）</h2>
        <hr>
        
        <div class="flex flex-wrap bg-white w-full h-screen">
            <div class="w-2/12 bg-white rounded p-3 shadow-lg">
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="/login" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <span>タイムライン</span>
                        </a>
                    </li>
                    <li>
                        <a href="/login" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </span>
                            <span>投稿する</span>
                        </a>
                    </li>
                    <li>
                        <a href="/login" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class=" text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </span>
                            <span>あなたへのいいね</span>
                        </a>
                    </li>
                    <li>
                        <a href="/login" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <span>プロフィール</span>
                        </a>
                    </li>
                </ul>
            </div>
        
            <div class="w-9/12">
                <div class="p-4 text-gray-500">
                    <div class="w-8/12 md:w-7/12 lg:6/12 mx-auto relative py-20">
                        <h1 class="text-3xl text-center font-bold text-blue-500">タイムライン</h1>
                        
                          　@foreach ($timelines as $timeline)
                            <div class="border-l-2 mt-10">
                            @if ($timeline->id % 5 == 1)
                            <!-- Card 1 -->
                                <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-blue-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
                              <!-- Dot Follwing the Left Vertical Line -->
                                    <div class="w-5 h-5 bg-blue-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
                    
                              <!-- Line that connecting the box with the vertical line -->
                                    <div class="w-10 h-1 bg-blue-300 absolute -left-10 z-0"></div>
                
                              <!-- Content that showing in the box -->
                                    <div class="flex-auto">
                                        <h1 class="text-2xl font-bold text-center">{{ $users->name }}</h1>
                                        <h1 class="text=lg font-bold text-center">性別: {{ $timeline->looking_for_sex }}</h1>
                                        <h1 class="text=lg font-bold text-center">人数: {{ $timeline->number_of_people }}</h1>
                                        <h1 class="text-xl font-bold text-center border-b">募集するゲーム: {{$timeline->intrested_in }}</h1>
                                        <h1 class="text=lg font-bold text-center whitespace-pre-line">コメント: 
                                        {{ $timeline->self_introduction }}</h1>
                                    </div>
                                    <button class="hover:text-gray-300" onclick="like({{$timeline->id}})">いいね</button>
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
                                    <div class="flex-auto">
                                        <h1 class="text-2xl font-bold text-center">{{ $users->name }}</h1>
                                        <h1 class="text=lg font-bold text-center">性別: {{ $timeline->looking_for_sex }}</h1>
                                        <h1 class="text=lg font-bold text-center">人数: {{ $timeline->number_of_people }}</h1>
                                        <h1 class="text-xl font-bold text-center border-b">募集するゲーム: {{$timeline->intrested_in }}</h1>
                                        <h1 class="text=lg font-bold text-center whitespace-pre-line">コメント: 
                                        {{ $timeline->self_introduction }}</h1>
                                    </div>
                                    <button class="hover:text-gray-300" onclick="like({{$timeline->id}})">いいね</button>
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
                                    <div class="flex-auto">
                                        <h1 class="text-2xl font-bold text-center">{{ $users->name }}</h1>
                                        <h1 class="text=lg font-bold text-center">性別: {{ $timeline->looking_for_sex }}</h1>
                                        <h1 class="text=lg font-bold text-center">人数: {{ $timeline->number_of_people }}</h1>
                                        <h1 class="text-xl font-bold text-center border-b">募集するゲーム: {{$timeline->intrested_in }}</h1>
                                        <h1 class="text=lg font-bold text-center whitespace-pre-line">コメント: 
                                        {{ $timeline->self_introduction }}</h1>
                                    </div>
                                    <button class="hover:text-gray-300" onclick="like({{$timeline->id}})">いいね</button>
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
                                    <div class="flex-auto">
                                        <h1 class="text-2xl font-bold text-center">{{ $users->name }}</h1>
                                        <h1 class="text=lg font-bold text-center">性別: {{ $timeline->looking_for_sex }}</h1>
                                        <h1 class="text=lg font-bold text-center">人数: {{ $timeline->number_of_people }}</h1>
                                        <h1 class="text-xl font-bold text-center border-b">募集するゲーム: {{$timeline->intrested_in }}</h1>
                                        <h1 class="text=lg font-bold text-center whitespace-pre-line">コメント: 
                                        {{ $timeline->self_introduction }}</h1>
                                    </div>
                                    <button class="hover:text-gray-300" onclick="like({{$timeline->id}})">いいね</button>
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
                                    <div class="flex-auto">
                                        <h1 class="text-2xl font-bold text-center">{{ $users->name }}</h1>
                                        <h1 class="text=lg font-bold text-center">性別: {{ $timeline->looking_for_sex }}</h1>
                                        <h1 class="text=lg font-bold text-center">人数: {{ $timeline->number_of_people }}</h1>
                                        <h1 class="text-xl font-bold text-center border-b">募集するゲーム: {{$timeline->intrested_in }}</h1>
                                        <h1 class="text=lg font-bold text-center whitespace-pre-line">コメント: 
                                        {{ $timeline->self_introduction }}</h1>
                                    </div>
                                    <button class="hover:text-gray-300" onclick="like({{$timeline->id}})">いいね</button>
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