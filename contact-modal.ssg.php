<form action="https://formspree.io/f/moqypwjp" method="POST">
  <div class="absolute w-full h-full bg-black modal-mail-send bg-opacity-20">
    <div class="absolute bg-white">
      <div class="flex justify-end">
        <a class="close-modal"><img src="img/close-modal.svg" alt=""></a>
      </div>
      <div class="flex flex-col justify-around h-full font-normal modal-content esamanru">
        <div class="mt-3">
          <div class="text-2xl">이메일 발송</div>
        </div>
        <div>
          <label class="flex flex-col">
            이메일
            <input class="input-email" type="email" name="_replyto">
          </label>
        </div>
        <div>
          <label class="flex flex-col">
            내용
            <textarea class="textarea-text" name="message" style="resize:none;"></textarea>
          </label>
        </div>
        <button class="z-50 self-end text-white cursor-pointer bubbly-button btn-send-email" type="submit">발송</button>
      </div>
    </div>
  </div>
</form>