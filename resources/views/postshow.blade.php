<x-app-layout>
    <style>
        *{
            font-size: 20px !important;
        }
    </style>
    @if (Auth::user()->role != '0')
        <div class="mt-16">
            <div dir="rtl" class="grid grid-cols-3 md:grid-cols-1 gap-6 lg:gap-8" >
                <div dir="rtl" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="background-color:#b1c5d3;;font-family:Arabic Typesetting, seri;font-size:30px">
                    <div >
                        <div class="h-10 w-16 bg-red-50 flex items-center justify-center rounded-full" style="background-color: #008080;border-radius:90px ! important">
                            {{$post->arole}}
                        </div>
                        <a href="{{URL('postshow/usid',$post->user_id)}}"><h2 class="mt-6 text-xl font-semibold text-gray-900" style="margin-top: 10px;margin-right:21px;color: rgb(113, 6, 99)">{{'کاربر'.':'.$post->author}}</h2></a>
                        <p class="mt-4 text-gray-100 text-sm leading-relaxed" style="font-size: 25px;">  {{$post->body}} </p>
                        <p dir="ltr" class="mt-4 text-gray-100 text-sm leading-relaxed" style="font-size: 17px">{{$post->created_at}}</p>
                        <p class="mt-4 text-gray-100 text-sm leading-relaxed" >
                           @if(Auth::user()->role == 'admin' or Auth::user()->id ==$post->user_id)
                               <a href="{{URL('posts/destroy',$post)}}"><b style="background-color:rgb(235, 220, 220) ! important;color:red;font-size:25px">حذف پست</b></a>
                               <a href="{{URL('posts/edpost',$post)}}"><b style="background-color:rgb(235, 220, 220) ! important;color:#5F9EA0;font-size:25px;margin-right:20px"> ویرایش</b></a>

                               @endif
                        </p>
                     </div>
                </div>
            </div>
        </div>
        <div dir="rtl">
            <style>
                @import url('https://fonts.googleapis.com/css?family=Noto+Serif:400,700');
                {
                    font-size:20px;
                }
                body {
                    background-color: #fafafa;
                    font-family: 'Noto Serif', serif;
                }

                .comment-container {
                    width: 60%;
                    margin: 2rem auto;
                }

                a {
                    color: #c40030;
                    background-color: transparent;
                    -webkit-text-decoration-skip: objects;
                }

                .v-btn {
                    align-items: center;
                    border-radius: 2px;
                    display: inline-flex;
                    height: 36px;
                    flex: 0 0 auto;
                    font-size: 14px;
                    font-weight: 700;
                    justify-content: center;
                    margin: 6px 8px;
                    min-width: 88px;
                    outline: 0;
                    text-transform: uppercase;
                    text-decoration: none;
                    transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1), color 1ms;
                    position: relative;
                    vertical-align: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                    padding: 0 16px;
                }

                .v-btn:before {
                    border-radius: inherit;
                    color: inherit;
                    content: "";
                    position: absolute;
                    left: 0;
                    top: 0;
                    height: 100%;
                    opacity: 0.12;
                    transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
                    width: 100%;
                }

                .v-btn:focus,
                .v-btn:hover {
                    position: relative;
                }

                .v-btn:focus:before,
                .v-btn:hover:before {
                    background-color: currentColor;
                }

                .v-btn__content {
                    align-items: center;
                    border-radius: inherit;
                    color: inherit;
                    display: flex;
                    flex: 1 0 auto;
                    justify-content: center;
                    margin: 0 auto;
                    position: relative;
                    transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
                    white-space: nowrap;
                    width: inherit;
                }

                .v-btn:not(.v-btn--depressed):not(.v-btn--flat) {
                    will-change: box-shadow;
                    box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
                }

                .v-btn:not(.v-btn--depressed):not(.v-btn--flat):active {
                    box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
                }

                .avatar {
                    width: 50px;
                    height: 50px;
                    margin-left: -42px;
                    border-radius: 50%;
                }

                .v-avatar {
                    align-items: center;
                    border-radius: 50%;
                    display: inline-flex;
                    justify-content: center;
                    position: relative;
                    text-align: center;
                    vertical-align: middle;
                }

                .v-avatar img {
                    border-radius: 50%;
                    display: inline-flex;
                    height: inherit;
                    width: inherit;
                    object-fit: cover;
                }

                .v-card {
                    text-decoration: none;
                }

                .v-card> :first-child:not(.v-btn):not(.v-chip) {
                    border-top-left-radius: inherit;
                    border-top-right-radius: inherit;
                }

                .v-card> :last-child:not(.v-btn):not(.v-chip) {
                    border-bottom-left-radius: inherit;
                    border-bottom-right-radius: inherit;
                }

                .v-sheet {
                    display: block;
                    border-radius: 2px;
                    position: relative;
                }

                .v-dialog__container {
                    display: inline-block;
                    vertical-align: middle;
                }

                .elevation-2 {
                    box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12) !important;
                }

                *,
                 :after,
                 :before {
                    box-sizing: inherit;
                }

                 :after,
                 :before {
                    text-decoration: inherit;
                    vertical-align: inherit;
                }

                * {
                    background-repeat: no-repeat;
                    padding: 0;
                    margin: 0;
                }

                a:active,
                a:hover {
                    outline-width: 0;
                }

                button {
                    font: inherit;
                    overflow: visible;
                    text-transform: none;
                    background-color: transparent;
                    border-style: none;
                    color: inherit;
                }

                [type="button"]::-moz-focus-inner,
                button::-moz-focus-inner {
                    border-style: 0;
                    padding: 0;
                }

                [type="button"]::-moz-focus-inner,
                button:-moz-focusring {
                    outline: 0;
                    border: 0;
                }

                button,
                html [type="button"] {
                    -webkit-appearance: button;
                }

                img {
                    border-style: none;
                }

                 ::-ms-clear,
                 ::-ms-reveal {
                    display: none;
                }

                .headline {
                    font-weight: 400;
                    letter-spacing: normal !important;
                    font-size: 24px !important;
                    line-height: 32px !important;
                }

                .title {
                    font-size: 20px !important;
                    font-weight: 700;
                    line-height: 1 !important;
                    letter-spacing: 0.02em !important;
                }

                .caption {
                    font-weight: 400;
                    font-size: 12px !important;
                }

                .theme--light.v-btn {
                    color: rgba(0, 0, 0, 0.87);
                }

                .theme--light.v-btn:not(.v-btn--icon):not(.v-btn--flat) {
                    background-color: #f5f5f5;
                }

                .theme--light .v-card {
                    box-shadow: rgba(0, 0, 0, 0.11) 0 15px 30px 0px, rgba(0, 0, 0, 0.08) 0 5px 15px 0 !important;
                }

                .theme--light.application .v-card {
                    box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.11), 0 5px 15px 0 rgba(0, 0, 0, 0.08) !important;
                    color: #102c3c !important;
                }

                .theme--light.v-card,
                .theme--light.v-sheet {
                    background-color: #fff;
                    border-color: #fff;
                    color: rgba(0, 0, 0, 0.87);
                }

                a,
                a:hover {
                    text-decoration: none !important;
                }

                .wrapper {
                    overflow: auto;
                }

                .answers {
                    padding-left: 64px;
                }

                .comment {
                    overflow-y: auto;
                    margin-left: 32px;
                    margin-right: 16px;
                }

                .comment p {
                    font-size: 14px;
                    margin-bottom: 0px;
                }

                .displayName {
                    margin-left: 24px;
                }

                .actions {
                    display: flex;
                    flex: 1;
                    flex-direction: row;
                    justify-content: flex-end;
                }

                .google-span[data-v-35838f51] {
                    font-size: 14px;
                    color: rgba(0, 0, 0, 0.54);
                }

                .google-button[data-v-35838f51] {
                    background-color: #fff;
                    height: 40px;
                    margin: 0;
                }

                .headline {
                    margin-left: 32px;
                }

                .sign-in-wrapper {
                    margin-top: 5px;
                    margin-left: 32px;
                }

                .error-message {
                    font-style: oblique;
                    color: #c40030;
                }

                 ::-moz-selection,
                 ::selection {
                    background-color: #b3d4fc;
                    color: #000;
                    text-shadow: none;
                }

                .card,
                .card {
                    padding: 27px 16px;
                    margin-bottom: 10px;
                    display: flex;
                    flex-direction: column;
                }

                .application a,
                [type="button"],
                button {
                    cursor: pointer;
                }

                @media screen and (max-width: 640px) {
                    .comment-container {
                        width: 90%;
                    }
                    .comments {
                        padding: 32px;
                    }
                }
            </style>

<div class="header">
    <div class="h-10 w-15 mt:5 bg-red-50 flex items-center justify-center rounded-full" style="margin-bottom:10px;background-color: #004687;margin-top:5px">
    <span style="font-size: 30px ! important ;margin-top:5px">بخش نظرات</span>
</div>
            <div class="comment-container theme--light">
                <div class="comments"  >

                    @foreach ($comments as $comment)
                    @foreach ($users as $user)
                    @if($user->id==$comment->user_id)
                        <div class="card v-card v-sheet theme--light elevation-2" style="background-color:  #B0C4DE; !important;border-radius: 15px;">
                            <div class="header">
                                <div class="h-7 w-12 mb-10 flex items-center justify-center rounded-full" style="margin-bottom:1px;margin-top:-20px;background-color:#4b44ae;">
                                    <a href="{{URL('postshow/usid',$user->id)}}"><span style="font-size: 30px ! important">
                                   <b style="color:black">{{$user->name}}</b>
                                </span></a>
                            </div>
                           </div>
                           <div dir="ltr" class="header">
                            <div class="h-7 w-12 mb-10 bg-red-50 flex items-center justify-center rounded-full" style="margin-bottom:1px;margin-top:-20px;background-color: #0093AF;border-radius:70px">
                            <span style="font-size: 20px ! important;margin-top:-10px">
                                @if($user->role=='admin')ادمین @endif
                                @if($user->role=='parent')والد @endif
                                @if($user->role=='teacher')معلم @endif
                            </span>
                        </div>
                       </div>
                            <!---->
                            <div class="wrapper comment">
                                <p style="font-size:25px ! important;color:#191970 ! important;display: inline;border-radius: 5px;margin-right:10px"><b style="margin-right:5px">{{$comment->body}}</b></p>
                            </div>
                            <span  dir="ltr" class="displayName caption" style="font-size: 15px  ! important;color:  #0C2340;margin-top:-10px"  >{{$comment->created_at}}</span>
                            @if(Auth::user()->role == 'admin' or Auth::user()->id ==$comment->user_id)
                            <div style="display: inline">
                            <a href="{{URL('postshow/destroyc',$comment)}}"><b style="background-color:rgb(235, 220, 220) ! important;color:red;font-size:25px">حذف </b></a>
                            <a href="{{URL('postshow/edcomment',[$comment,$post])}}"><b style="background-color:rgb(235, 220, 220) ! important;color:#5F9EA0;font-size:25px;margin-right:20px"> ویرایش</b></a>
                            @endif
                        </div>
                        </div>

                        @endif
                        @endforeach
                        @endforeach
                        <!---->
                    </div>
                    <form action="{{URL('postshow/addc',$post)}}"  >
                        <div  style="background-color: #5D8AA8;border-radius:25px ! important" class="card v-card v-sheet theme--light elevation-2">
                            <span class="headline">
                            <textarea name="body" placeholder="متن کامنت " style="border-radius:25px;height: 31px;width:90%;"></textarea>
                        </span>
                            <div class="sign-in-wrapper">
                            <p  class="caption disclaimer" style="width:80%;font-size:35px ! important"> <button style="margin-right:20px;display: inline-block;  background-color: rgb(123, 230, 57); padding: 5px;color: #021704; text-align: center;  border-radius: 5px;" type="submit"> ثبت نظر</button></p>
                            </div>
                            <!---->
                        </div>
                    </form>
                </div>
            </div>
    @endif






    <a href="https://github.com/sponsors/taylorotwell"
        class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
        </svg>
        Sponsor
    </a>


    {{-- --}}
</x-app-layout>
