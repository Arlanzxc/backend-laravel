<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-4 text-right">
                <a href="{{ route('articles.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                    Create Article
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @forelse($articles as $article)
                        <div class="mb-6 pb-6 border-b border-gray-200 last:border-0 last:pb-0 last:mb-0">
                            <h3 class="text-2xl font-bold">{{ $article->title }}</h3>
                            <p class="text-sm text-gray-500 mb-2">
                                By <span class="font-semibold">{{ $article->user->name }}</span> | {{ $article->created_at->format('M d, Y') }}
                            </p>
                            <p class="mt-2 text-gray-700">{{ Str::limit($article->content, 200) }}</p>
                            <div class="mt-6 pt-4 border-t border-gray-100 flex justify-end gap-3">
                                
                                @can('update', $article)
                                    <a href="{{ route('articles.edit', $article) }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 transition ease-in-out duration-150">
                                        ✏️ Edit
                                    </a>
                                @endcan

                                @can('delete', $article)
                                    <form method="POST" action="{{ route('articles.destroy', $article) }}" class="m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 shadow-sm transition ease-in-out duration-150" onclick="return confirm('Are you sure you want to delete this article?')">
                                            🗑️ Delete
                                        </button>
                                    </form>
                                @endcan
                                
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 text-center py-4">No articles found. Be the first to write one!</p>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</x-app-layout>