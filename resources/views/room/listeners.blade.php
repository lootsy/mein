<div class="mt-10 sm:mt-12">
    <div class="max-w-7xl mx-auto px-4 text-center sm:px-6 lg:px-8">
        <div class="space-y-8 sm:space-y-10">
            <div class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl">
                <h2 class="text-xl font-extrabold tracking-tight">
                    Publikum
                </h2>
            </div>
            <ul
                class="mx-auto grid grid-cols-2 gap-x-4 gap-y-6 sm:grid-cols-3 lg:grid-cols-4 md:gap-x-6 lg:max-w-5xl lg:gap-x-8 lg:gap-y-12 xl:grid-cols-6">
                <template x-for="user in listeners()">
                    <li>
                        <div class="space-y-2">
                            <span class="inline-block relative">
                                <div class="">
                                    <button @click="$wire.emit('modalUser', user.id)">
                                        <img class="mx-auto h-16 w-16 rounded-full lg:w-20 lg:h-20"
                                            :class="user.connected ? '' : 'opacity-30'" :src="user.image" alt="" />
                                    </button>
                                    <span x-show="user.hand"
                                        class="absolute -top-1 -right-1 bg-indigo-600 rounded-lg text-gray-200">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                                        </svg>
                                    </span>
                                </div>
                            </span>

                            <div>
                                <div class="text-xs font-medium">
                                    <h3 x-text="user.nickname"></h3>
                                </div>
                            </div>
                        </div>
                    </li>
                </template>
            </ul>
        </div>
    </div>
</div>
