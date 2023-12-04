<div dir="rtl" class="messenger-sendCard">
    <form id="message-form" method="POST" action="{{ route('send.message') }}" enctype="multipart/form-data">
        @csrf
        <button disabled='disabled' class="send-button" ><span class="fas fa-paper-plane"></span></button>
        <textarea style="font-size: 22px ! important" readonly='readonly' name="message" class="m-send app-scroll" placeholder="متن خودر را وارد کنید"></textarea>
        <button class="emoji-button"></span><span class="fas fa-smile"></button>
        <label><span class="fas fa-plus-circle"></span><input disabled='disabled' type="file" class="upload-attachment" name="file" accept=".{{implode(', .',config('chatify.attachments.allowed_images'))}}, .{{implode(', .',config('chatify.attachments.allowed_files'))}}" /></label>
    </form>
</div>
