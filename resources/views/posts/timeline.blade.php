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
    <body>
      
      <style>  
        .title{
          margin: 5%;
          text-align: center;
          font-size: 3rem;
          font-weight: 100;
        }
        
        .like {
  display: inline-block;
  width: 8rem; // <- Edit these value according to
  height: 8rem; // <- your ability to love unconditionally
  border-radius: 50%;
  background: rgba(20, 20, 20, 0.5);
  position: relative;
  cursor: pointer;
  transition: background-color 0.25s ease;
  overflow: hidden;
}

/* Global Button Hover Style for our like/unlike el */
.like:hover {
  background: #fff;
  transition: background-color 0.25s ease;
}

/* Liked/Unliked states of our like icon */
.liked .like-icon-state {
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewbox='0 0 100 100'><path fill='%23de3618' d='M50,88.87 C76.67,70.46 90,53.9 90,39.17 C90,17.08 63.12,3.84 50,27.63 C38.875,3.85 10,17.08 10,39.17 C10,53.9 23.33,70.46 50,88.87 Z'/></svg>");
}

.unliked .like-icon-state {
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewbox='0 0 100 100'><path fill='none' stroke='%23666' stroke-width='5' d='M50,88.87 C76.67,70.46 90,53.9 90,39.17 C90,17.08 63.12,3.84 50,27.63 C38.875,3.85 10,17.08 10,39.17 C10,53.9 23.33,70.46 50,88.87 Z'/></svg>");
}

.like span {
  text-indent:-1000px;
  fone-size:1px;
}

/* Global aspects of the like icon (holding our icon state view) */
.like-icon {
  background-size: contain;
  position: absolute;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  top: 15%;
  right: 15%;
  bottom: 15%;
  left: 15%;
}

.liked .like-icon-state {
  transform: scale(0);
}

/* Set initial opacity and attach the like animation  */
.liked .like-icon-state {
  opacity: 0;
  animation: 1.2s like-animation both cubic-bezier(0.45, 0.05, 0.55, 0.95);
}

@keyframes like-animation {
  0% {
    transform: scale(0);
  }
  15% {
    transform: scale(1.25);
  }
  32% {
    transform: scale(0.95);
  }
  50% {
    transform: scale(1);
    opacity: 1;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}

/* Set initial opacity and attach the unlike animation  */
.unliked .like-icon-state {
  opacity: 0;
  animation: 1.2s unlike-animation both cubic-bezier(0.45, 0.05, 0.55, 0.95);
}

@keyframes unlike-animation {
  0% {
    transform: scale(0);
  }
  15% {
    transform: scale(1.1);
  }
  30% {
    transform: scale(0.98);
  }
  45% {
    transform: scale(1);
    opacity: 1;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}

/* Pop a small animation of the background on like */
.liked {
  background: #e2e2e2;
  animation: 1.2s liked-bg-animation both;
}

@keyframes liked-bg-animation {
  0% {
    transform: scale(0);
  }
  15% {
    transform: scale(1.1);
  }
  30% {
    transform: scale(0.95);
  }
  50% {
    transform: scale(1);
    opacity: 1;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}


/* Pop a more discreet animation of the background on unlike */
.unliked {
  animation: 1.2s unliked-bg-animation both;
}


@keyframes unliked-bg-animation {
  0% {
    transform: scale(0);
  }
  10% {
    transform: scale(.70);
  }
  30% {
    transform: scale(0.95);
  }
  50% {
    transform: scale(1);
    opacity: 1;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}


/* Pseudo el for our ring animation */
.like::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border-radius: 50%;
  border: 1px solid rgba(255, 255, 255, 0.75);
  transform: scale(0);
}

/* Apply animation to the ring el */
.liked::before {
  animation: 1.2s bg-ring-animation both;
}

@keyframes bg-ring-animation {
  0% {
    transform: scale(0);
    opacity: 0;
  }
  10% {
    transform: scale(1.5);
    opacity: 0.25;
  }
  15% {
    transform: scale(2);
    opacity: 0.15;
  }
  45% {
    transform: scale(3.25);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 0;
  }
}

// Animation when loading 
// in htmx land the default class is .htmx-request
// instead of .saving

.saving::after {
  content: '';
  box-sizing: border-box;
  position: absolute;
  top: 20%;
  left: 20%;
  width: 60%;
  height: 60%;
  border: .15em solid rgba(100,100,100,.5);
  border-radius: 50%;
  border-right-color: transparent;
  border-top-color: transparent;
  animation: spin-animation 400ms infinite linear;
}


@keyframes spin-animation {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}
        
　　　</style>
    
      <h2 class="title">マッチングサイト（仮）</h2>
        <hr>
          <div class="flex flex-wrap bg-white w-full h-screen">
            <div class="w-3/12 bg-white rounded p-3 shadow-lg">
                <div class="flex items-center space-x-4 p-2 mb-5">
                  <img>
                    <div>
                        <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">Jett</h4>
                        <span class="text-sm tracking-wide flex items-center space-x-1">
                            <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg><span class="text-gray-600">Verified</span>
                        </span>
                    </div>
                </div>
                <ul class="space-y-2 text-sm">
                  <li>
                      <a href="/posts/timeline" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                          <span class="text-gray-600">
                              <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                          </span>
                          <span>タイムライン</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                          <span class="text-gray-600">
                              <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                              </svg>
                          </span>
                          <span>通知</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                          <span class="text-gray-600">
                              <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                              </svg>
                          </span>
                          <span>メッセージ</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                          <span class="text-gray-600">
                              <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                              </svg>
                          </span>
                          <span>プロフィール</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                          <span class="text-gray-600">
                              <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                              </svg>
                          </span>
                          <span>情報</span>
                      </a>
                  </li>
                  <li>
                      <a href="/posts/like" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                          <span class="text-gray-600">
                              <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                              </svg>
                          </span>
                          <span>いいね</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                          <span class="text-gray-600">
                              <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                              </svg>
                          </span>
                          <span>設定</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                          <span class="text-gray-600">
                              <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                              </svg>
                          </span>
                          <span>ログアウト</span>
                      </a>
                  </li>
                </ul>
            </div>
          </div>

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
  　</body>
</html>