<div class="fixed inset-x-0 bottom-0">
    <div class="bg-gray-600 h-20">
        <div class="mx-auto py-1 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center space-x-8 sm:space-x-16">
                <div x-data x-show="$wire.handVisible" x-cloak>
                    <div class="inline-flex relative">
                        <button wire:click="raiseHand()" type="button"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-2 py-2 text-base font-medium rounded-md">
                            <svg class="h-9 w-9 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11">
                                </path>
                            </svg>
                            <!-- <div class="text-gray-300 text-sm text-center">Hand</div> -->
                        </button>
                        <span class="hidden">
                            <button type="button"
                                class="block rounded-md px-1 py-2 h-14 text-sm font-medium text-gray-300 hover:bg-gray-700 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500"
                                id="option-menu-button" aria-expanded="true" aria-haspopup="true">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="h-6 w-6 rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div class="hidden absolute right-0 -mt-32 w-14 ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="option-menu-button"
                                tabindex="-1">
                                <div class="flex space-x-2">
                                    <button type="button"
                                        class="text-gray-500 bg-gray-200 hover:bg-gray-700 hover:text-white group block px-2 py-2 text-base font-medium rounded-md">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart"
                                            class="h-9 w-9 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M462.3 62.71c-54.5-46.5-136.1-38.99-186.6 13.27l-19.69 20.61l-19.71-20.61C195.6 33.85 113.3 8.71 49.76 62.71C-13.11 116.2-16.31 212.5 39.81 270.5l193.2 199.7C239.3 476.7 247.8 480 255.9 480c8.25 0 16.33-3.25 22.58-9.751l193.6-199.8C528.5 212.5 525.1 116.2 462.3 62.71zM449.3 248.2l-192.9 199.9L62.76 248.2C24.39 208.7 16.39 133.2 70.51 87.09C125.3 40.21 189.8 74.22 213.3 98.59l42.75 44.13l42.75-44.13c23.13-24 88.13-58 142.8-11.5C495.5 133.1 487.6 208.6 449.3 248.2z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button type="button"
                                        class="text-gray-500 bg-gray-200 hover:bg-gray-700 hover:text-white group block px-2 py-2 text-base font-medium rounded-md">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                            data-icon="hand-horns" class="h-9 w-9 mx-auto" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M360 64c-30.88 0-56 25.12-56 56v61.62C296.7 178.1 288.6 176 280 176c-12.16 0-23.35 4.002-32.54 10.62C237.6 170.7 220.1 160 200 160C191.4 160 183.3 162.1 176 165.6V56C176 25.12 150.9 0 120 0S64 25.12 64 56v210.2C36.07 273.5 16 298.9 16 328v64c0 19.89 9 38.3 24.72 50.52l46.03 35.81C114.7 500 149.6 512 184.9 512H264c83.81 0 152-68.19 152-152v-240C416 89.13 390.9 64 360 64zM280 208c13.22 0 24 10.77 24 24v96c0 13.23-10.78 24-24 24S256 341.2 256 328v-96C256 218.8 266.8 208 280 208zM200 192C213.2 192 224 202.8 224 216v32.99C214.3 243.3 203.1 240.1 191.5 240.1c-4.243 0-8.548 .4312-12.87 1.334L176 241.1V216C176 202.8 186.8 192 200 192zM120 32C133.2 32 144 42.77 144 56v192.8L96 259.1V56C96 42.77 106.8 32 120 32zM384 360c0 66.17-53.84 120-120 120H184.9c-28.28 0-56.19-9.562-78.56-26.94l-46.03-35.8C52.63 411.3 48 401.8 48 392v-64c0-15 10.62-28.16 25.28-31.3l111.9-23.98c2.195-.4532 4.387-.6713 6.55-.6713c15.81 0 32.23 12.47 32.23 31.99c0 14.75-10.29 28.04-25.28 31.26l-74.06 15.86c-7.528 1.603-12.67 8.24-12.67 15.63c0 9.602 8.066 16.03 16 16.03c1.112 0 2.236-.1205 3.355-.3713l74.06-15.86c9.676-2.076 18.22-6.408 25.56-12.1C240.5 371.1 258.8 384 280 384c30.88 0 56-25.12 56-56v-96c0-1.824-.3672-3.547-.5391-5.326C335.6 225.8 336 224.9 336 224V120C336 106.8 346.8 96 360 96S384 106.8 384 120V360z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <div x-data>
                    <button x-show="!$wire.webrtc" type="button" wire:click="$emit('toggleListen'); $store.webrtc_video.room_connect()"
                        class="hover:bg-gray-700 text-gray-300 group items-center px-2 py-2 text-base font-medium rounded-md block">

                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-play"
                            class="h-12 w-12 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM372.5 276.5l-144 88C224.7 366.8 220.3 368 216 368c-13.69 0-24-11.2-24-24V168C192 155.3 202.2 144 216 144c4.344 0 8.678 1.176 12.51 3.516l144 88C379.6 239.9 384 247.6 384 256C384 264.4 379.6 272.1 372.5 276.5z">
                            </path>
                        </svg>
                    </button>
                    <div x-show="$wire.webrtc" x-cloak class="flex">
                        <button type="button" x-show="!$store.webrtc.muted" @click="$store.webrtc.mute()"
                            class="hover:bg-gray-700 text-gray-300 group items-center px-2 py-2 text-base font-medium rounded-md block"
                            title="Mikrofon deaktivieren">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="microphone"
                                class="h-12 w-12 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512">
                                <path fill="currentColor"
                                    d="M192 352c53.03 0 96-42.97 96-96v-160c0-53.03-42.97-96-96-96s-96 42.97-96 96v160C96 309 138.1 352 192 352zM344 192C330.7 192 320 202.7 320 215.1V256c0 73.33-61.97 132.4-136.3 127.7c-66.08-4.169-119.7-66.59-119.7-132.8L64 215.1C64 202.7 53.25 192 40 192S16 202.7 16 215.1v32.15c0 89.66 63.97 169.6 152 181.7V464H128c-18.19 0-32.84 15.18-31.96 33.57C96.43 505.8 103.8 512 112 512h160c8.222 0 15.57-6.216 15.96-14.43C288.8 479.2 274.2 464 256 464h-40v-33.77C301.7 418.5 368 344.9 368 256V215.1C368 202.7 357.3 192 344 192z">
                                </path>
                            </svg>
                        </button>
                        <button type="button" x-show="$store.webrtc.muted" @click="$store.webrtc.unmute()"
                            class="hover:bg-gray-700 text-red-400 group items-center px-2 py-2 text-base font-medium rounded-md block"
                            title="Mikrofon aktivieren">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="microphone-slash"
                                class="h-12 w-12 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512">
                                <path fill="currentColor"
                                    d="M383.1 464l-39.1-.0001v-33.77c20.6-2.824 39.98-9.402 57.69-18.72l-43.26-33.91c-14.66 4.65-30.28 7.179-46.68 6.144C245.7 379.6 191.1 317.1 191.1 250.9V247.2L143.1 209.5l.0001 38.61c0 89.65 63.97 169.6 151.1 181.7v34.15l-40 .0001c-17.67 0-31.1 14.33-31.1 31.1C223.1 504.8 231.2 512 239.1 512h159.1c8.838 0 15.1-7.164 15.1-15.1C415.1 478.3 401.7 464 383.1 464zM630.8 469.1l-159.3-124.9c15.37-25.94 24.53-55.91 24.53-88.21V216c0-13.25-10.75-24-23.1-24c-13.25 0-24 10.75-24 24l-.0001 39.1c0 21.12-5.559 40.77-14.77 58.24l-25.72-20.16c5.234-11.68 8.493-24.42 8.493-38.08l-.001-155.1c0-52.57-40.52-98.41-93.07-99.97c-54.37-1.617-98.93 41.95-98.93 95.95l0 54.25L38.81 5.111C34.41 1.673 29.19 0 24.03 0C16.91 0 9.839 3.158 5.12 9.189c-8.187 10.44-6.37 25.53 4.068 33.7l591.1 463.1c10.5 8.203 25.57 6.328 33.69-4.078C643.1 492.4 641.2 477.3 630.8 469.1z">
                                </path>
                            </svg>
                        </button>
                        <button type="button" wire:click="$emit('toggleOptions')"
                            class="hover:bg-gray-700 text-gray-300 group items-center px-2 py-2 text-base font-medium rounded-md block ml-5">
                            <svg class="h-10 w-10 mx-auto" aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M64 192C28.61 192 0 220.6 0 256s28.61 64 64 64s64-28.62 64-64S99.39 192 64 192zM256 192C220.6 192 192 220.6 192 256s28.61 64 64 64s64-28.62 64-64S291.4 192 256 192zM448 192c-35.39 0-64 28.62-64 64s28.61 64 64 64s64-28.62 64-64S483.4 192 448 192z">
                                </path>
                            </svg>
                        </button>
                        <button type="button" @click="$store.webrtc.hangup()"
                            onclick="window.top.confirm('Raum wirklich verlassen?') || event.stopImmediatePropagation()"
                            class="hidden hover:bg-gray-300 text-gray-500 group items-center px-2 py-2 text-base font-medium rounded-md block ml-5">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-stop"
                                class="h-10 w-10 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M256 0C114.6 0 0 114.6 0 256c0 141.4 114.6 256 256 256s256-114.6 256-256C512 114.6 397.4 0 256 0zM352 328c0 13.2-10.8 24-24 24h-144C170.8 352 160 341.2 160 328v-144C160 170.8 170.8 160 184 160h144C341.2 160 352 170.8 352 184V328z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <button wire:click="$emit('toggleChat')" type="button" title="Chat/Next/Rooms"
                        class="{{ $chat ? 'bg-gray-700' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white group block px-2 py-2 text-base font-medium rounded-md">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="screen-users"
                            class="h-9 w-9 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path fill="currentColor"
                                d="M96 64h448v160c24.62 0 47 9.625 64 25V49.63c0-27.38-21.5-49.63-48-49.63h-480c-26.5 0-48 22.25-48 49.63v199.4c17-15.38 39.38-25 64-25V64zM256.2 320c0 35.26 28.57 63.85 63.79 63.98C355.2 383.8 383.8 355.3 383.8 320S355.2 256.2 320 256C284.8 256.2 256.2 284.7 256.2 320zM343.8 416h-47.5C256.4 416 224 449.5 224 490.7C224 502.4 233.3 512 244.8 512h150.3C406.7 512 416 502.4 416 490.7C416 449.5 383.6 416 343.8 416zM567.8 416h-47.5C480.4 416 448 449.5 448 490.7C448 502.4 457.3 512 468.8 512h150.3C630.7 512 640 502.4 640 490.7C640 449.5 607.6 416 567.8 416zM480.2 320c0 35.26 28.57 63.85 63.79 63.98C579.2 383.8 607.8 355.3 607.8 320S579.2 256.2 544 256C508.8 256.2 480.2 284.7 480.2 320zM32.21 320c0 35.26 28.57 63.85 63.79 63.98C131.2 383.8 159.8 355.3 159.8 320S131.2 256.2 96 256C60.78 256.2 32.21 284.7 32.21 320zM119.8 416h-47.5C32.42 416 0 449.5 0 490.7C0 502.4 9.34 512 20.83 512h150.3C182.7 512 192 502.4 192 490.7C192 449.5 159.6 416 119.8 416z">
                            </path>
                        </svg>
                        {{-- <div class="text-gray-300 text-sm text-center">Chat</div> --}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
