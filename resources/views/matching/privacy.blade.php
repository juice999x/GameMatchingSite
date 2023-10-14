<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>プライバシー</title>
    <head>
        <meta charset="utf-8">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('/css/style.css')  }}" rel="stylesheet" >
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body>
        <div class="flex flex-wrap bg-white w-full h-screen">
            <div class="w-2/12 bg-white rounded p-3 shadow-lg">
                <div class="flex items-center space-x-4 p-2 mb-5">
                    <img style="height: 60px; width:60px;" src="{{ $users->image_url }}" class="rounded-full flex justify-center" alt="画像が読み込めません。"/>
                    <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">{{ $users->name }}</h4>
                </div>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="/timeline" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
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
                    <x-guest-layout>
                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('パスワードをお忘れですか？メールアドレスから新たなパスワードを設定できるリンクを送ることができます。') }}
                        </div>
                    
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                    
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                    
                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('メールアドレス')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                    
                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button>
                                    {{ __('再設定用メールを送信する') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </x-guest-layout>
                </div>
            </div>
        </div>
    </body>
  </html>