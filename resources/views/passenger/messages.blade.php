@extends('layouts.app')

    @section('content')
    <style>

        .users-container {
            position: relative;
            border-right: 1px solid #e6ecf3;
            height: 500px;
            overflow-y: scroll;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        .chat-box.chatContainerScroll {
            height: 420px;
            overflow-y: scroll;
            overflow-x: hidden;
            background: #EFF3F6;
            padding: 20px;
        }
        .users {
            padding: 0;
        }
        .users .person {
            position: relative;
            width: 100%;
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #f0f4f8;
        }
        .users .person:hover {
            background-color: #f7f7f7;
        }
        .users .person.active-user {
            background-color: #ffffff;
            /* Fallback Color */
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f7f9fb), to(#ffffff));
            /* Saf4+, Chrome */
            background-image: -webkit-linear-gradient(right, #f7f9fb, #ffffff);
            /* Chrome 10+, Saf5.1+, iOS 5+ */
            background-image: -moz-linear-gradient(right, #f7f9fb, #ffffff);
            /* FF3.6 */
            background-image: -ms-linear-gradient(right, #f7f9fb, #ffffff);
            /* IE10 */
            background-image: -o-linear-gradient(right, #f7f9fb, #ffffff);
            /* Opera 11.10+ */
            background-image: linear-gradient(right, #f7f9fb, #ffffff);
        }
        .users .person:last-child {
            border-bottom: 0;
        }
        .users .person .user {
            display: inline-block;
            position: relative;
            margin-right: 10px;
        }
        .users .person .user img {
            width: 48px;
            height: 48px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
        }
        .users .person .user .status {
            width: 10px;
            height: 10px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            background: #e6ecf3;
            position: absolute;
            top: 0;
            right: 0;
        }
        .users .person .user .status.online {
            background: #9ec94a;
        }
        .users .person .user .status.offline {
            background: #c4d2e2;
        }
        .users .person .user .status.away {
            background: #f9be52;
        }
        .users .person .user .status.busy {
            background: #fd7274;
        }
        .users .person p.name-time {
            font-weight: 600;
            font-size: .85rem;
            display: inline-block;
        }
        .users .person p.name-time .time {
            font-weight: 400;
            font-size: .7rem;
            text-align: right;
            color: #8796af;
        }
        @media (max-width: 980px) {
            li.person.Delivered .name-time .name:after {
                content: "•";
                font-size: 27px;
                padding-left: 8px;
                color: green;
                position: absolute;
                top: 0;
                right: 16px;
            }
            .users .person .user img {
                width: 30px;
                height: 30px;
            }
            /*.users .person p.name-time {
                display: none;
            }*/
            .users .person p.name-time {
                font-size: 5px !important;
            }
            .users .person p.name-time .time {
                display: none;
            }
            .mobileSellers, ul.users {
                width: 100%;
                height: 100px;
            }
            .mobileCHatBox {
                width: 100%;
            }
            ul.users{
                overflow-x: scroll;
                display: flex;
            }
            ul.users .person {
                width: 20%;
            }
        }
        .chat-container {
            position: relative;
            padding: 1rem;
        }
        .chat-container li.chat-left,
        .chat-container li.chat-right {
            display: flex;
            flex: 1;
            flex-direction: row;
            margin-bottom: 40px;
        }
        .chat-container li img {
            width: 48px;
            height: 48px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            border-radius: 30px;
        }
        .chat-container li .chat-avatar {
            margin-right: 20px;
        }
        .chat-container li.chat-right {
            justify-content: flex-end;
        }
        .chat-container li.chat-right > .chat-avatar {
            margin-left: 20px;
            margin-right: 0;
        }
        .chat-container li .chat-name {
            font-size: .75rem;
            color: #999999;
            text-align: center;
        }
        .chat-container li.chat-left > .chat-text {
            background: #3A4AAC !important;
            color: white !important;
            height: fit-content;
            margin-top: 10px;
            -webkit-box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
        .chat-container li .chat-text {
            padding: .4rem 1rem;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            background: #ffffff;
            font-weight: 300;
            line-height: 150%;
            position: relative;
        }
        .chat-container li .chat-text:before {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            top: 10px;
            left: -20px;
            border: 10px solid;
            border-color: transparent #3A4AAC transparent transparent;
        }
        .chat-container li.chat-right > .chat-text {
            text-align: right;
            background: white !important;
            color: #7c7c7c !important;
            -webkit-box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
            height: fit-content;
            margin-top: 10px;
        }
        .chat-container li.chat-right > .chat-text:before {
            right: -20px;
            border-color: transparent transparent transparent #ffffff;
            left: inherit;
        }
        .chat-container li .chat-hour {
            padding: 0;
            margin-bottom: 10px;
            font-size: .75rem;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin: 0 0 0 15px;
        }
        .chat-container li .chat-hour > span {
            font-size: 16px;
            color: #9ec94a;
        }
        .chat-container li.chat-right > .chat-hour {
            margin: 0 15px 0 0;
        }
        li.person.Delivered .name-time .name:after {
            content: "•";
            font-size: 30px;
            padding-left: 8px;
            color: green;
        }

        li.person.Delivered {
            background: #ededed;
        }
        @media (max-width: 767px) {
            .chat-container li.chat-left,
            .chat-container li.chat-right {
                flex-direction: column;
                margin-bottom: 30px;
            }
            .chat-container li img {
                width: 32px;
                height: 32px;
            }
            .chat-container li.chat-left .chat-avatar {
                margin: 0 0 5px 0;
                display: flex;
                align-items: center;
            }
            .chat-container li.chat-left .chat-hour {
                justify-content: flex-end;
            }
            .chat-container li.chat-left .chat-name {
                margin-left: 5px;
            }
            .chat-container li.chat-right .chat-avatar {
                order: -1;
                margin: 0 0 5px 0;
                align-items: center;
                display: flex;
                justify-content: right;
                flex-direction: row-reverse;
            }
            .chat-container li.chat-right .chat-hour {
                justify-content: flex-start;
                order: 2;
            }
            .chat-container li.chat-right .chat-name {
                margin-right: 5px;
            }
            .chat-container li .chat-text {
                font-size: .8rem;
            }
        }
        .chat-form {
            padding: 15px;
            width: 100%;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ffffff;
            border-top: 1px solid white;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
    </style>

    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('images/background/14.jpg') }}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Messenger</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>

    <section id="section-cars" class="bg-gray-100">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 mb30">
                    @include("partials/sidebar")
                </div>

                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="row">

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 mobileSellers">
                                    <div class="users-container">
                                        <ul class="users">
                                            
                                            <?php
                                                if (Request::is('dashboard/messages/*') AND count($chats) == 0) {
                                                    ?>
                                                    <li class="person Delivered" data-chat="person1" onclick="location.href='{{ route('messageseller', ['id'=> $driver->id ]) }}';">
                                                        <div class="user">
                                                            <img src="{{ $driver->profile_picture }}" class="img-thumbnail">
                                                        </div>
                                                        <p class="name-time">
                                                            <span class="name">
                                                                {{ substr($driver->name, 0, 10) }}...
                                                            </span>
                                                        </p>
                                                    </li>
                                                    <?php
                                                }
                                            ?>
                                            @if(count($messages) > 0)
                                                @foreach($messages as $message)
                                                @php
                                                    $sellr = App\Models\User::where('id', $message->driver_id)->select('name', 'profile_picture')->first();
                                                @endphp

                                                    <li class="person {{ $message->status }}" data-chat="person1" onclick="location.href='{{ route('messageseller', ['id'=> $message->driver_id ]) }}';">
                                                        <div class="user">
                                                            <img src="{{ $sellr->profile_picture }}" class="img-thumbnail">
                                                        </div>
                                                        <p class="name-time">
                                                            <span class="name">
                                                                {{ substr($sellr->name, 0, 10) }}...
                                                            </span>
                                                        </p>
                                                    </li>
                                                @endforeach
                                            @else
                                                <!-- <p>No Chat Started.</p> -->
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9 mobileCHatBox">
                                    <div class="chat-container">

                                        @if(isset($chats))

                                            <ul class="chat-box chatContainerScroll">
                                            <?php
                                                if (Request::is('dashboard/messages/*')) {
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-md-4 offset-md-4 text-center">
                                                            <img src="{{ $driver->profile_picture }}" class="img-thumbnail" style="width: 70px;">
                                                            <p style="font-size: 10px;">{{ $driver->name }}</p>
                                                        </div>
                                                    </div>
                                                    <?php       
                                                }
                                            ?>
                                            @foreach($chats as $chat)
                                                @if($chat->transmitter == 'Passenger')
                                                    <li class="chat-right">
                                                        <div class="chat-hour">
                                                            {{ $chat->created_at->diffForHumans() }} <br>{{ $chat->status }}
                                                        </div>
                                                        <div class="chat-text bg-primary text-white">
                                                            {{ $chat->message }}
                                                        </div>
                                                        <div class="chat-avatar">
                                                            <img src="{{ $user->profile_picture }}" alt="Retail Admin">
                                                            <span class="d-flex" style="font-size: 10px;">me</span>
                                                        </div>
                                                    </li>
                                                @else
                                                    <li class="chat-left">
                                                        <div class="chat-avatar">
                                                            <img src="{{ $driver->profile_picture }}" alt="Retail Admin">
                                                            <span class="d-flex" style="font-size: 10px;">{{ $driver->name }}</span>
                                                        </div>
                                                        <div class="chat-text bg-light">
                                                            {{ $chat->message }}
                                                        </div>
                                                        <div class="chat-hour">
                                                            {{ $chat->created_at->diffForHumans() }}
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                            </ul>
                                            <input type="hidden" id="driver_id" value="<?php echo $driver->id; ?>">
                                            <input type="hidden" id="passenger_id" value="<?php echo session('user_id'); ?>">
                                            <input type="hidden" id="userName" value="<?php echo $user->name; ?>">
                                            <input type="hidden" id="userprofile_picture" value="<?php echo $user->profile_picture; ?>">
                                            <div class="form-group mt-3 mb-0">
                                                <input id="sendMessage" type="text" placeholder="Type your message here..." class="form-control">
                                            </div>
                                        @else
                                            <div class="row pt-5">
                                                <div class="col-md-12 text-center pt-5">
                                                    <!-- <h4 class="pt-5"><i class="fa fa-comments" aria-hidden="true"></i> Start a Conversation</h4> -->
                                                </div>
                                            </div>
                                        @endif
                                        
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    
                </div>

            </div>

        </div>

    </section>
    
@endsection