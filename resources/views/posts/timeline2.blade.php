<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('/css/style.css')  }}" rel="stylesheet" >
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            <div class="w-3/12 bg-white rounded p-3 shadow-lg">
                <div class="flex items-center space-x-4 p-2 mb-5">
                    <img class="h-12 rounded-full" src="http://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="James Bhatta">
                    <div>
                        <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">James Bhatta</h4>
                        <span class="text-sm tracking-wide flex items-center space-x-1">
                            <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg><span class="text-gray-600">Verified</span>
                        </span>
                    </div>
                </div>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                            </span>
                            <span>Notifications</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg>
                            </span>
                            <span>Personal messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span>My profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </span>
                            <span>My orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class=" text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </span>
                            <span>My wishlist</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>
                            </span>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                            <span>Change password</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                            </span>
                            <span>Logout</span>
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
                              <div class="flex-auto timelines">
                                  <div class="timeline">
                                    <h1 class="text-lg id">{{ $timeline->id }}</h1>
                                    <h1 class="text=lg font-bold self_introduction">{{ $timeline->self_introduction }}</h1>
                                    <h1 class="text-xl font-bold intrested_in">{{$timeline->intrested_in }}</h1>
                                    <h1 class="text-xs font-bold user_id">{{$timeline->user_id }}</h1>
                                  </div>
                              </div>
                              <a href="#" class="text-center text-white hover:text-gray-300">
                                <button x-data="{
                                  state: 'Unliked',
                                  usedKeyboard: false,
                                  async updateState(to) {
                                      this.state = 'Saving'
                                      await new Promise(resolve => setTimeout(resolve, 1000))
                                      this.state = to
                                  }
                                }"
                                :class="{
                                  'like unliked': state === 'Unliked',
                                  'like saving': state === 'Saving',
                                  'like liked': state === 'Liked',
                                  'focus:outline-none': !usedKeyboard
                                }"
                                @click="updateState(state === 'Unliked' ? 'Liked' : 'Unliked')" @keydown.window.tab="usedKeyboard = true">
                                  <span class="like-icon like-icon-state" aria-label="state" x-text="state" aria-live="polite">いいねする</span>
                                </button>
                              </a>
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
                                    <h1 class="text-lg id">{{ $timeline->id }}</h1>
                                    <h1 class="text=lg font-bold self_introduction">{{ $timeline->self_introduction }}</h1>
                                    <h1 class="text-xl font-bold intrested_in">{{$timeline->intrested_in }}</h1>
                                    <h1 class="text-xs font-bold user_id">{{$timeline->user_id }}</h1>
                              </div>
                              <a href="#" class="text-center text-white hover:text-gray-300">Download materials</a>
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
                                    <h1 class="text-lg id">{{ $timeline->id }}</h1>
                                    <h1 class="text=lg font-bold self_introduction">{{ $timeline->self_introduction }}</h1>
                                    <h1 class="text-xl font-bold intrested_in">{{$timeline->intrested_in }}</h1>
                                    <h1 class="text-xs font-bold user_id">{{$timeline->user_id }}</h1>
                              </div>
                              <a href="#" class="text-center text-white hover:text-gray-300">Download materials</a>
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
                                    <h1 class="text-lg id">{{ $timeline->id }}</h1>
                                    <h1 class="text=lg font-bold self_introduction">{{ $timeline->self_introduction }}</h1>
                                    <h1 class="text-xl font-bold intrested_in">{{$timeline->intrested_in }}</h1>
                                    <h1 class="text-xs font-bold user_id">{{$timeline->user_id }}</h1>
                              </div>
                              <a href="#" class="text-center text-white hover:text-gray-300">Download materials</a>
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
                                    <h1 class="text-lg id">{{ $timeline->id }}</h1>
                                    <h1 class="text=lg font-bold self_introduction">{{ $timeline->self_introduction }}</h1>
                                    <h1 class="text-xl font-bold intrested_in">{{$timeline->intrested_in }}</h1>
                                    <h1 class="text-xs font-bold user_id">{{$timeline->user_id }}</h1>
                                </div>
                                <a href="#" class="text-center text-white hover:text-gray-300">Download materials</a>
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