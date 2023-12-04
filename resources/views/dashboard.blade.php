<x-app-layout>
    <style>
        *{
            font-size: 20px !important;
        }
    </style>
    @if (Auth::user()->role == 'admin' or Auth::user()->role == 'teacher')
    <form action="{{URL('posts/addpost')}}" style="background-color:#1ca9c9">
        <div class="font-semibold text-xl text-gray-800 leading-tight " style="display: inline">
            <label >
                <textarea dir="rtl" v-model="comment" name="body" placeholder="متن پست " style="border-radius:5px;height: 52px;width:70%;margin-top:10px;margin-left:10px;" required>
                </textarea>
                <button style="height: 52px;margin-bottom:10px ;margin-top:-10px ! important;margin-left:30px;  background-color: rgb(123, 230, 57); padding: 5px;color: #021704; text-align: center;  border-radius: 5px;" type="submit"> ارسال پست</button>
    </label>
</div>
    </form>
    @endif
    @if (Auth::user()->role == '0')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <b
                            style="font-size:30px;color:#002244 ;display:inline-block ;font-family:Arabic Typesetting, serif; !important ">
                            .اطلاعات شما در سیستم ثبت شده است.درصورت تایید اکانت شما توسط ادمین می توانید از مزایای
                            سیستم بهره مند شوید
                        </b>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (Auth::user()->role != '0')

    <div dir="rtl" class="mt-16"  style="margin-bottom:5px" >
        <div class="grid grid-cols-3 md:grid-cols-3 gap-6 lg:gap-8" >

        @foreach ($posts as $post )

            <div dir="rtl" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="background-color:#b1c5d3;font-family:Arabic Typesetting, seri;font-size:30px">
                <div >

                    <div class="h-10 w-16 bg-red-50 flex items-center justify-center rounded-full" style="background-color: #008080">
                        {{$post->arole}}
                    </div>
                    <h2 class="mt-6 text-xl font-semibold text-gray-900" style="margin-top: 10px;margin-right:21px;color: rgb(34, 81, 39)">{{'کاربر'.':'.$post->author}}</h2>
                    <p class="mt-4 text-gray-100 text-sm leading-relaxed" style="font-size: 25px;">  <a href="{{URL('postshow',$post)}}">{{$post->body}} </a></p>
                    <p  class="mt-4 text-gray-100 text-sm leading-relaxed" style="font-size: 17px">{{$post->created_at}}</p>
                    <p class="mt-4 text-gray-100 text-sm leading-relaxed" >
                        @if(Auth::user()->role == 'admin' or Auth::user()->id ==$post->user_id)
                        <a href="{{URL('posts/destroy',$post)}}"><b style="border-radius:10px;background-color:rgb(235, 220, 220) ! important;color:red;font-size:25px">حذف پست</b></a>
                        <a href="{{URL('posts/edpost',$post)}}"><b style="border-radius:5px;background-color:rgb(235, 220, 220) ! important;color:#5F9EA0;font-size:25px;margin-right:20px"> ویرایش</b></a>

                        @endif

                    </p>

                 </div>


            </div>
            @endforeach


        </div>
    </div>
    @endif



    {{-- --}}
</x-app-layout>
