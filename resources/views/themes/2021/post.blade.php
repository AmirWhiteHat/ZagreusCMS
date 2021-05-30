<!DOCTYPE html>
<html lang="en">
@themeInclude('partials.head')
<body>
    @themeInclude('partials.header')
    <section class='container mt-4'>
        <div class='grid md:grid-cols-12 sm:grid-cols-1 gap-5'>
            <div class="md:col-span-8">
                <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 mb-3">
                    @if ($post->cover) 
                        <img class="object-cover w-full h-128" src="{{$post->cover}}" alt="Article">
                    @endif
                    <div class="p-6">
                        <div>
                            <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">{{ $post->category->title ?? '-' }}</span>
                            <a href="{{ route('module.blog.posts.openBySlug', $post->slug) }}" class="block mt-2 text-2xl font-semibold text-gray-800 dark:text-white hover:text-gray-600 hover:underline">{{ $post->title }}</a>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{!! $post->content !!}</p>
                        </div>

                        <div class="mt-4 flex justify-between">
                            <div class="flex items-center">
                                <div class="flex items-center">
                                    <img class="object-cover h-10 rounded-full" src="https://zagreus.company/assets/images/ZagreusDevs-logo.svg" alt="Avatar">
                                    <a href="#" class="mx-2 font-semibold text-gray-700 dark:text-gray-200">{{ $post->user->full_name }}</a>
                                </div>
                                <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">{{ $post->created_at->ago() }}</span>
                            </div>

                        </div>
                    </div>
                </div>
                @if ($comments->count() == 0)
                    <div class="rounded shadow-md p-3 text-white text-lg bg-blue-400 mb-3">{{__('There is no comment submitted yet, be the first one!')}}</div>
                @else
                    @themeInclude('partials.comments', compact('comments'))
                @endif

                <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 mb-3">
                    <div class="p-6">
                        <h4 class="h4 mt-3">{{__('Submit your comment')}}</h4>
                        <hr>
                        @themeInclude('partials.comment-form', compact('post'))
                    </div>
                </div>

            </div>
            <div class="md:col-span-4"> @themeInclude("partials.sidebar") </div>
        </div>
    </section>
    @themeInclude('partials.footer')
</body>
</html>