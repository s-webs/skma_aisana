@php
    $labels = ['kk' => 'ҚАЗ', 'ru' => 'РУС', 'en' => 'ENG'];
@endphp

<header x-data="{ open:false }" @keydown.escape.window="open=false" class="flex relative z-[20]">
    <div class="container px-[30px] mx-auto pt-[30px]">
        <!-- Верхняя «пилюля» -->
        <div class="flex items-center justify-between shadow-xl rounded-[100px] overflow-hidden bg-white">
            <div class="flex items-center">
                <div class="bg-custom-main px-[48px] py-[15px] rounded-l-[100px]">
                    <a href="{{ route('home.index') }}"><img src="/assets/img/logo.png" alt="" class="h-[44px]"></a>
                </div>

                <!-- Десктоп-меню -->
                <nav class="hidden lg:block">
                    <ul class="flex items-center">
                        <li class="font-semibold text-[18px] ml-[30px]">
                            <a href="{{ route('home.index') }}" class="hover:text-custom-main duration-300">{{ __('public.home_page') }}</a>
                        </li>
                        <li class="font-semibold text-[18px] ml-[30px]">
                            <a href="{{ route('projects.index') }}"
                               class="hover:text-custom-main duration-300">{{ __('public.our_projects') }}</a>
                        </li>
                        <li class="font-semibold text-[18px] ml-[30px]">
                            <a href="{{ route('news.index') }}" class="hover:text-custom-main duration-300">{{ __('public.news') }}</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="flex items-center">
                <!-- Десктоп-языки -->
                <nav class="hidden lg:block">
                    <ul class="flex items-center">
                        @foreach($labels as $loc => $label)
                            <li class="font-semibold text-[18px] mr-[30px]">
                                <a href="{{ localized_switch_url($loc) }}"
                                   class="hover:text-custom-main duration-300 {{ app()->getLocale()===$loc ? 'underline' : '' }}">
                                    {{ $label }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>

                <!-- Кнопка бургера -->
                <button
                    type="button"
                    class="lg:hidden inline-flex items-center justify-center m-[10px] mr-[16px] p-3 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-custom-main"
                    @click="open = !open"
                    :aria-expanded="open"
                    aria-controls="mobileMenu"
                >
                    <span class="sr-only">Открыть меню</span>
                    <!-- Иконки -->
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Мобильная панель -->
        <div
            id="mobileMenu"
            x-cloak
            x-show="open"
            x-transition.origin.top
            class="lg:hidden mt-3 shadow-xl rounded-2xl overflow-hidden bg-white"
        >
            <nav>
                <ul class="flex flex-col p-4">
                    <li>
                        <a href="{{ route('home.index') }}"
                           class="block py-3 px-4 font-semibold hover:text-custom-main duration-300"
                           @click="open=false">Главная</a>
                    </li>
                    <li>
                        <a href="{{ route('projects.index') }}"
                           class="block py-3 px-4 font-semibold hover:text-custom-main duration-300"
                           @click="open=false">Проекты</a>
                    </li>
                    <li>
                        <a href="{{ route('news.index') }}"
                           class="block py-3 px-4 font-semibold hover:text-custom-main duration-300"
                           @click="open=false">Новости</a>
                    </li>
                </ul>
            </nav>
            <div class="border-t">
                <ul class="flex gap-2 p-4">
                    @foreach($labels as $loc => $label)
                        <li>
                            <a href="{{ localized_switch_url($loc) }}"
                               class="font-semibold hover:text-custom-main duration-300"
                               @click="open=false">{{ $label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>
