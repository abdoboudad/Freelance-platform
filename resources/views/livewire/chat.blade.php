<div wire:poll>
    <div class="chat-container text-end">
        <div class="rom-chat">
            @forelse ($test as $msg)
            @if ($msg->getusers->name == Auth::user()->name)
                <div class="chat-message">
                    <div class="message-sender text-danger">{{ Auth::user()->name }}</div>
                    <div class="message-text">{{ $msg->message }}</div>
                </div>
            @else
                <div class="chat-message">
                    <div class="message-sender text-success">{{ $msg->getusers->name }}</div>
                    <div class="message-text">{{ $msg->message }}</div>
                </div> 
            @endif
        @empty
            
        @endforelse
        </div>
        
        <div class="chat-input mt-4">
            <form wire:submit.prevent='sendMessage'>
                <input type="text" wire:model.defer="msgtext" placeholder="Type your message...">
                <button type="submit">Send</button>
            </form>
          </div>
      </div>
      
</div>

