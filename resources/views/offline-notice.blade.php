<div
    class="fixed bottom-5 w-full z-40 animate-slide-up-enter"
    wire:offline
>
    <style>
        .animate-slide-up-enter {
            animation: slide-up-enter 0.3s cubic-bezier(0.4, 0, 1, 1) forwards;
        }
        .animate-offline {
            animation: offline 1s 1s cubic-bezier(0, 0, 0.5, 1) infinite;
        }

        @keyframes slide-up-enter {
            0% {
                transform: translateY(100%);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes offline {
            75%, 100% {
                transform: scale(1.1);
                opacity: 0;
            }
        }
    </style>
    <div class="flex items-center justify-center ">
        <span class="animate-offline absolute inline-flex h-[120%] w-72 max-w-72 bg-red-600 text-white px-4 py-3 rounded-xl m-auto text-center text-sm items-center justify-center opacity-50"></span>
        <div class="bg-red-600 text-white px-4 py-3 rounded-xl w-72 m-auto text-center text-sm flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 me-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" ><path d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            {{ __('filament-offline-notice::offline-notice.connection_lost') }}
        </div>
    </div>
</div>
