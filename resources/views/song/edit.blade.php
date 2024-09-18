<x-app-layout>
    <div class="container mx-auto max-w-lg mt-10 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Edit Song</h1>
        <form action="{{ route('song.update', $song->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
                <input value="{{ $song->title }}" type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" id="name" name="title" required>
            </div>
            <div class="form-group">
                <label for="tag" class="block text-sm font-medium text-gray-700">Artist</label>
                <input value="{{ $song->genre }}" type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" id="tag" name="artist" required>
            </div>
            <div class="form-group">
                <label for="tag" class="block text-sm font-medium text-gray-700">Genre</label>
                <input value="{{ $song->genre }}" type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" id="tag" name="genre" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Edit Song
            </button>
        </form>
    </div>
</x-app-layout>
