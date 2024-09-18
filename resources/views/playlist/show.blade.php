<x-app-layout>
    <div class="w-full rounded overflow-hidden shadow-lg p-4 bg-white mb-4">
            <div class="flex justify-between">
                <div>       
                    <a class="font-bold text-xl mb-2" href="{{ route('playlist.show', $playlist->id) }}">
                        {{ $playlist->name }}
                    </a>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block shadow-lg bg-gray-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $playlist->tag }}</span>
                    </div>
                </div>
                <div>
                    <a href="{{ route('playlist.edit', $playlist->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                        Edit
                    </a>
                    <form action="{{ route('playlist.destroy', $playlist->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            <div class="px-6 pt-4 pb-2">
                <h1>Songs</h1>
                <table class="w-full table-auto">
                    <tbody>
                        @foreach($playlist->songs as $song)
                            <tr>
                                <td class="border px-4 py-2">
                                    {{ $song->title }} | {{ $song->artist }}

                                    <form action="{{ route('playlist.removesong', $playlist->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        <input type="hidden" name="song" value="{{ $song->id }}">
                                        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                            Remove
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <form action="{{ route('playlist.addsong', $playlist->id) }}" method="POST" class="inline-block">
                    @csrf
                    <label for="song">Choose a song:</label>
                    <select name="song" id="song">
                        @foreach($allSongs as $song)
                            <option value="{{ $song->id }}">{{ $song->title }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Add
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
