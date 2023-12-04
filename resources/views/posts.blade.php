<x-app-layout>
    @if (Auth::user()->role == 'admin' or Auth::user()->role == 'teacher')
    <form action="{{URL('posts/addpost')}}" style="background-color: rgb(236, 231, 231)">
        <div class="font-semibold text-xl text-gray-800 leading-tight ">
        <input dir="rtl" style="margin: 10px 0px;margin-left:30px;margin-right:20px;width:50%" type="text" placeholder="متن پست " value="" name="body" required>
        <button style="margin-left:10px;display: inline-block;  background-color: rgb(123, 230, 57); padding: 5px;color: #ffffff; text-align: center;  border-radius: 5px;" type="submit"> ارسال پست</button>
    </div>
    </form>
    @endif
    @if (Auth::user()->role == '0')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <b
                            style="font-size:30px;color:green ;display:inline-block ;font-family:Arabic Typesetting, serif; !important ">
                            .اطلاعات شما در سیستم ثبت شده است.درصورت تایید اکانت شما توسط ادمین می توانید از مزایای
                            سیستم بهره مند شوید
                        </b>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="mt-16">
        <div class="grid grid-cols-3 md:grid-cols-3 gap-6 lg:gap-8">

        @foreach ($posts as $post )


            <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">

                        {{$post->arole}}
                    </div>
                    <h2 class="mt-6 text-xl font-semibold text-gray-900">{{$post->author}}</h2>

                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                       {{$post->body}}
                    <br>

                    {{$post->created_at}}
                    </p>
                </div>
                @if(Auth::user()->role == 'admin' or Auth::user()->id ==$post->user_id)

                        <a href="{{URL('posts/destroy',$post)}}"><b style="margin-left:100px;color:red">حذف پست</b></a>
                @endif

            </div>
            @endforeach


        </div>
    </div>

    <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
        </svg>
        Sponsor
    </a>


    {{-- --}}
</x-app-layout>
