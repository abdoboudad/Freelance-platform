<div wire:poll>
    {{-- Be like water. --}}
    <div class="card my-3">
        <div class="card-header">
            التعاليق
        </div>
        <div class="card-body">
            @forelse ($post->comments as $comment)
            <div class="d-flex justify-content-end align-items-start">
                <div class="card p-2 me-2">
                    <div>
                        <h5>{{ $comment->users->name }}</h5>
                    </div>
                    <p>{{ $comment->comment }}</p>
                </div>
                <img width="50px" height="50px"  src={{ url('imgs', $comment->users->details[0]->pathprofile ) }} style="border-radius: 50%;" alt="">
            </div>
            <hr>
            @empty
                <span> لا توجد تعاليق </span>
            @endforelse
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            اكتب تعليقك
        </div>
        <div class="m-auto py-2 w-75">
            <form wire:submit.prevent="comment">
                <textarea class="my-2 px-2 form-control" wire:model.defer="msg" name="comment" id="" style="width: 100%;height:150px;"></textarea>
                <button class="btn btn-secondary">ارسال</button>
            </form>
           </div>
        <div>
        </div>
    </div>
</div>
