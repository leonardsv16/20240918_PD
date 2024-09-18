<x-app-layout>
    <style>
        /* Inspired by twitter.com/marina_uiux */
        .button {
            font-size: 17px;
            border-radius: 12px;
            background: linear-gradient(180deg, rgb(56, 56, 56) 0%, rgb(36, 36, 36) 66%, rgb(41, 41, 41) 100%);
            color: rgb(218, 218, 218);
            border: none;
            padding: 2px;
            font-weight: 700;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .button span {
            border-radius: 10px;
            padding: 0.8em 1.3em;
            padding-right: 1.2em;
            text-shadow: 0px 0px 20px #4b4b4b;
            width: 100%;
            display: flex;
            align-items: center;
            gap: 12px;
            color: inherit;
            transition: all 0.3s;
            background-color: rgb(29, 29, 29);
            background-image: radial-gradient(at 95% 89%, rgb(15, 15, 15) 0px, transparent 50%), radial-gradient(at 0% 100%, rgb(17, 17, 17) 0px, transparent 50%), radial-gradient(at 0% 0%, rgb(29, 29, 29) 0px, transparent 50%);
        }

        .button:hover span {
            background-color: rgb(26, 25, 25);
        }

        .button-overlay {
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: repeating-conic-gradient(rgb(48, 47, 47) 0.0000001%, rgb(51, 51, 51) 0.000104%) 60% 60%/600% 600%;
            filter: opacity(10%) contrast(105%);
            -webkit-filter: opacity(10%) contrast(105%);
        }

        .button svg {
            width: 15px;
            height: 15px;
        }
    </style>

    <div class="flex justify-end mb-4">
        <a href="{{ route('song.create') }}" class="button">
            <div class="button-overlay"></div>
            <span>Create Song <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 53 58" height="58" width="53">
                <path stroke-width="9" stroke="currentColor" d="M44.25 36.3612L17.25 51.9497C11.5833 55.2213 4.5 51.1318 4.50001 44.5885L4.50001 13.4115C4.50001 6.86824 11.5833 2.77868 17.25 6.05033L44.25 21.6388C49.9167 24.9104 49.9167 33.0896 44.25 36.3612Z"></path>
            </svg></span>
        </a>
    </div>
    <div class="gap-6">
        @foreach ($songs as $song)
        <div class="w-full rounded overflow-hidden shadow-lg p-4 bg-white mb-4">
            <div class="flex justify-between">
                <div>       
                    <a class=" hover:drop-shadow transform hover:bg-gray-100 font-bold text-xl mb-2" href="{{ route('song.show', $song->id) }}">
                        {{ $song->title }}
                    </a>     
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block shadow-lg bg-gray-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $song->artist }}</span>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block shadow-lg bg-gray-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $song->genre }}</span>
                    </div>
                </div>
                <div>
                    <a href="{{ route('song.show', $song->id) }}" class="bg-blue-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                        View
                    </a>
                    <a href="{{ route('song.edit', $song->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                        Edit
                    </a>
                    <a href="{{ route('song.destroy', $song->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                        Delete
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
