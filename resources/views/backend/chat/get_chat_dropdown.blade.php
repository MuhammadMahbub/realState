@foreach ($all_chats as $item)
    @if ($item->user_id == Auth::id())
        <div class="chat-message-right pb-4">
            <div>
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                <div class="text-muted small text-nowrap mt-2">2:33 am</div>
            </div>
            <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                <div class="font-weight-bold mb-1">{{ $item->user_id ?? '' }}</div>
                {{ $item->message ?? '' }}
            </div>
        </div>
    @else
        <div class="chat-message-left pb-4">
            <div>
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                <div class="text-muted small text-nowrap mt-2">2:34 am</div>
            </div>
            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                <div class="font-weight-bold mb-1">{{ $item->user_id ?? '' }}</div>
                {{ $item->message ?? '' }}
            </div>
        </div>
    @endif
@endforeach

