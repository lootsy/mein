<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Wegweiser') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div
            class="rounded-lg bg-gray-200 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px">
            <div
                class="rounded-tl-lg rounded-tr-lg sm:rounded-tr-none relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">

                <div class="mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="/user/workadventure/login" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Workadventure
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                       Login in unsere digitale Podstock Welt
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
                    aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>

            <div
                class="sm:rounded-tr-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">

                <div class="mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="/stream/aussenbuehne" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Livestreams
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
                    aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>

            <div
                class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                <div class="mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="/room/technik-test" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Techniktest
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Falls du deine Technik testen möchtest, sind in diesem Raum immer mal wieder Personen um dir zu helfen.
                        Evtl. kurz beim Infodesk bescheid sagen.
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
                    aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>

            <div
                class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                <div class="mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="/room/infodesk" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Infodesk
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Du hast noch Fragen? Hier ist die passende Anlaufstelle.
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
                    aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>



        </div>

    </div>
</x-app-layout>
