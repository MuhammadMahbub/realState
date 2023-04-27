@extends('backend.layouts.master')

@section('title', "Dashbord - BPS DASHBOARD")



@section('content')

<style type="text/css">
    .chat-online {
        color: #34ce57
    }

    .chat-offline {
        color: #e4606d
    }

    .chat-messages {
        display: flex;
        flex-direction: column;
        max-height: 800px;
        overflow-y: scroll
    }

    .chat-message-left,
    .chat-message-right {
        display: flex;
        flex-shrink: 0
    }

    .chat-message-left {
        margin-right: auto
    }

    .chat-message-right {
        flex-direction: row-reverse;
        margin-left: auto
    }
    .py-3 {
        padding-top: 1rem!important;
        padding-bottom: 1rem!important;
    }
    .px-4 {
        padding-right: 1.5rem!important;
        padding-left: 1.5rem!important;
    }
    .flex-grow-0 {
        flex-grow: 0!important;
    }
    .border-top {
        border-top: 1px solid #dee2e6!important;
    }                                                                                                   
</style>

<!-- White Box -->
<div class="white-box">
    <main class="content">
        <div class=" p-0">
            <div class="card">
                <div class="row g-0">
                    <div class="col-12 col-lg-6 col-xl-5" style="border-right: 2px #D3D3D3 solid;">

                        <div class="px-4 d-none d-md-block">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <input type="text" class="form-control my-3" placeholder="Search messages..." style="height: 50px;">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Sharon Lessman
                                    <div class="small"><span class="fas fa-circle chat-online"></span> What makes it...</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle mr-1" alt="Christina Mason" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Christina Mason
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> How much?...</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Fiona Green" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Fiona Green
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> Are you there...</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle mr-1" alt="Doris Wilder" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Doris Wilder
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> What this special...</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle mr-1" alt="Haley Kennedy" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Haley Kennedy
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> No, i don't need it...</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Jennifer Chang" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Jennifer Chang
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> How do you think...</div>
                                </div>
                            </div>
                        </a>

                        <hr class="d-block d-lg-none mt-1 mb-0">
                    </div>

                    <div class="col-12 col-lg-6 col-xl-7">
                        <div class="py-2 px-4 border-bottom d-none d-lg-block">
                            <div class="d-flex align-items-center py-1">
                                <div class="position-relative">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                </div>
                                <div class="flex-grow-1 pl-3">
                                    <strong>Sharon Lessman</strong>
                                    <div class="text-muted small"><em>Typing...</em></div>
                                </div>
                                <div>
                                    <button class="btn btn-light border btn-lg px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button>
                                </div>
                            </div>
                        </div>

                        <div class="position-relative">
                            <div class="chat-messages p-4 get_chat_dropdown">

                                @include('backend.chat.get_chat_dropdown')

                            </div>
                        </div>

                        <div class="flex-grow-0 py-3 px-4 border-top">
                            <div class="input-group">
                                <textarea class="form-control reply" rows="1" aria-label="With textarea" placeholder="Type a message here..." name="message"></textarea>
                                <button type="submit" class="btn btn-primary message_submit">Send</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<!-- White Box -->

@endsection



@push('scripts')
<script>
    $(document).ready(function() {

        setInterval(() => {
            renderReply()
        }, 1000);

        $('.message_submit').click(function() {

            var reply_message = $('.reply').val();
            // console.log(reply_message);
            $.ajax({
                type: 'POST',
                url: "{{ route('get.message') }}",
                data: {
                    reply_message: reply_message,
                },
                success: function(data) {
                    $('.reply').val('');
                    renderReply();
                    // $("html, body").animate({
                    //     scrollTop: $('html, body').get(0).scrollHeight
                    // }, 1000);
                }
            })
        });

        function renderReply(){

            $.ajax({
                type: 'POST',
                url: "{{ route('get.message.render') }}",
                success: function(data) {
                    console.log(data);
                    $('.get_chat_dropdown').html(data.data)
                }
            })
        }
    })
</script>
@endpush