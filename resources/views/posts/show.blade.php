{{-- resources/views/posts/show.blade.php --}}
@extends('layouts.main')

@section('content')
    <article class="mx-8">
        <div class="shadow-lg rounded-lg overflow-hidden m-10 border-2">
            <h1 class="text-3xl mb-1 break-words pt-10 pl-10 pr-10">
                {{ $post->title }}
            </h1>

            <div class="mb-4 pl-10">
                <p class="bg-green-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-6 inline mr-1" viewBox="0 0 16 16">
                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                    </svg>
                    {{ $post->like_count }} likes
                </p>

            
                <p class="bg-orange-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2">
                    <svg class="w-6 h-6 inline mr-1" viewBox="0 0 20 20">
                        <path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                    </svg>
                    {{ $post->view_count }} views
                </p>

            </div>

            <div class="my-4 pl-10">
                    <a class="bg-pink-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 hover:bg-pink-300"
                        href="{{ route('tags.show', ['tag' => $post->tag->name]) }}">
                        {{ $post->tag->name }}
                    </a>

                    <a class="bg-pink-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 hover:bg-pink-300"
                        href="{{ route('organizationTags.show', ['organizationTag' => $post->organizationTag->name]) }}" >
                        {{ $post->organizationTag->name }}
                    </a>
            </div>

            <div>
                <p class="pl-10 font-bold" style="display:inline">
                    By 
                </p>
                @if($post->status)
                    <p class="pl-1 text-cyan-400 font-bold underline underline-offset-4" style="display:inline">
                        anonymous
                    </p>
                @else
                    <p class="pl-1 text-cyan-400 font-bold underline underline-offset-4" style="display:inline">
                        {{ $post->user->name }}
                    </p>
                @endif
                    <p class="pl-1 font-bold" style="display:inline">
                        สถานะ : {{$post->progression}}
                    </p>
            </div>

            <br/>

            <div class="relative py-4">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-b border-gray-300"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-white px-4 text-sm text-gray-500"></span>
                </div>
            </div>

            <div>
                <p class="pl-10 font-bold" style="display:inline">
                    Description : 
                    </p>
                <p class="text-gray-900 font-normal pl-2 mb-8 break-words " style="display:inline">
                    {{ $post->description }}
                </p>
            </div>

            <div>
            @foreach($post->images as $image)
                <div class="flex justify-center">
                    <img src="{{ asset('images/'.$image->title) }}" alt=""  />
                </div>
            @endforeach
            </div>
        </div>
        
        <div>
            <div class="relative py-4">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-b border-gray-300"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-white px-4 text-sm text-gray-500 ">Action</span>
                </div>
            </div>
            @can('update', $post)
                <div class="my-4">
                    <a class="app-button-blue" href="{{ route('posts.edit', ['post' => $post->id]) }}">
                        Edit this post
                    </a>
                </div>
            @endcan
            <div class="my-4">
                <a class="app-button-blue">
                    like
                </a>
            </div>
        </div>


    </article>



{{--    <div class="w-11/12 lg:w-2/6 mx-auto">--}}
{{--        <div class="bg-gray-200 dark:bg-gray-700 h-1 flex items-center justify-between">--}}
{{--            <div class="w-1/3 bg-indigo-700 h-1 flex items-center">--}}
{{--                <div class="bg-indigo-700 h-6 w-6 rounded-full shadow flex items-center justify-center">--}}
{{--                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/thin_with_steps-svg1.svg" alt="check"/>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="w-1/3 flex justify-between bg-indigo-700 h-1 items-center relative">--}}
{{--                <div class="absolute right-0 -mr-2">--}}
{{--                    <div class="relative bg-white dark:bg-gray-800 shadow-lg px-2 py-1 rounded mt-16 -mr-12">--}}
{{--                        <svg class="absolute top-0 -mt-1 w-full right-0 left-0 text-white dark:text-gray-800" width="16px" height="8px" viewBox="0 0 16 8" version="1.1" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                <g id="Progress-Bars" transform="translate(-322.000000, -198.000000)" fill="currentColor">--}}
{{--                                    <g id="Group-4" transform="translate(310.000000, 198.000000)">--}}
{{--                                        <polygon id="Triangle" points="20 0 28 8 12 8"></polygon>--}}
{{--                                    </g>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                        </svg>--}}
{{--                        <p tabindex="0" class="focus:outline-none text-indigo-700 dark:text-indigo-400 text-xs font-bold">กำลังดำเนินการ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="bg-indigo-700 h-6 w-6 rounded-full shadow flex items-center justify-center -ml-2">--}}
{{--                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/thin_with_steps-svg1.svg" alt="check"/>--}}
{{--                </div>--}}
{{--                <div class="bg-white dark:bg-gray-700 h-6 w-6 rounded-full shadow flex items-center justify-center -mr-3 relative">--}}
{{--                    <div class="h-3 w-3 bg-indigo-700 rounded-full"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="w-1/3 flex justify-end">--}}
{{--                <div class="bg-white dark:bg-gray-700 h-6 w-6 rounded-full shadow"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




    @if($post->statusTrackers)
        <section class="mt-8 mx-16">
            <div class="relative py-4">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-b border-gray-300"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-white px-4 text-sm text-gray-500">Status</span>
                </div>
            </div>



            @can('updateStatus', $post)
                <form action="{{ route('posts.statusTrackers.store', ['post' => $post->id]) }}" method="post">
                    @csrf
                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                        <textarea name="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="app-button">Confirm</button>
                    </div>

                </form>
            @endcan

            @foreach($post->statusTrackers->sortBy('created_at') as $statusTracker)
                <div class="mb-2 block p-6 w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 ">
                    <p class="bg-orange-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2">
                        {{ $statusTracker->created_at }}
                    </p>
                    <div class="text-lg pl-3">
                        {{ $statusTracker->message }}
                    </div>
                </div>
            @endforeach
        </section>

    @endif

    @if ($post->comments)
        <section class="mt-8 mx-16">

            <div class="relative py-4">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-b border-gray-300"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-white px-4 text-sm text-gray-500">Comments</span>
                </div>
            </div>

            <form action="{{ route('posts.comments.store', ['post' => $post->id]) }}" method="post">
                @csrf
                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                    <textarea name="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                </div>
                <div class="mt-2">
                    <button type="submit" class="app-button-orange">Comment</button>
                </div>

            </form>

            <h1 class="text-3xl mb-2">{{ $post->comments->count() }} Comments</h1>

            @foreach($post->comments->sortByDesc('created_at') as $comment)
                <div class="mb-2 block p-6 w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 ">
                    <p class="bg-orange-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2">
                        {{ $comment->created_at->diffForHumans() }}
                    </p>
                    <div class="text-lg pl-3">
                        {{ $comment->message }}
                    </div>
                </div>
            @endforeach
        </section>
    @endif
@endsection
