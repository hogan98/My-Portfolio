
<div id="contact" class="contact-box">
    <p class="headings mt-4">Contact</p>
    <div class="contact-form">
        <div class="form-info">
            <p class="contact-header">Contact me at:</p>
            <p class="contact-text mt-5">Contact via Email: <a href="mailto:ianreeves19981@gmail.com">ianreeves19981@gmail.com</a></p>
            <p class="contact-text">Alternatively, complete the form below :</p>
        </div>
        
        <form wire:submit="save">
            @if ($status)
                <div>{{ $status }}</div>
            @endif
            <input type="text" wire:model="name" placeholder="Your Name">
            @error('name')
				<div class="alert">{{ $message }}</div>
			@enderror

            <input type="email" wire:model="email" placeholder="Email Address">
            @error('email')
				<div class="alert">{{ $message }}</div>
			@enderror
            <textarea name="message" wire:model="message" placeholder="Message" cols="20" rows="6"></textarea>
             @error('message')
				<div class="alert">{{ $message }}</div>
			@enderror
            <button type="submit" class="contact-btn ">Send Message</button>
        </form>
    </div>
</div>