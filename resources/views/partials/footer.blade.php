            </div>

            <a href="#" id="back-to-top"></a>

            <footer class="text-light">

                <div class="container">

                    <div class="row g-custom-x">

                        <div class="col-md-4">
                            <div class="widget">
                                <h5>About Rentaly</h5>
                                <p>Welcome to our innovative trip-sharing platform, where drivers and passengers come together to create seamless travel experiences. At our company, drivers have the opportunity to post their upcoming trips, specifying the departure and destination points, as well as the available seats in their vehicles.... <a href="{{ route('about') }}" class="text-success">Read more.</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h5>Quick Links</h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="widget">
                                        <ul>
                                            <li><a href="{{ route('about') }}">About</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                            <li><a href="{{ route('trips') }}">All Trips</a></li>
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                            <li><a href="{{ route('faqs') }}">Faqs</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="widget">
                                <h5>Contact Info</h5>
                                <address class="s1">
                                    <span><i class="id-color fa fa-map-marker fa-lg"></i>Mirpur Azad Kashmir</span>
                                    <span><i class="id-color fa fa-phone fa-lg"></i>+92 347 9987166</span>
                                    <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@tripshare.com</a></span>
                                </address>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="subfooter">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="">

                                    <div class="de-flex-col text-center">
                                        <a href="#">
                                        Copyright 2023 - Trip Share. All Rights Reserved.
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </footer>

        </div>

        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/designesia.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgiM7ogCAA2Y5pgSk2KXZfxF5S_1jsptA&amp;libraries=places&amp;callback=initPlaces" async="" defer=""></script>
        <script>
            $(document).ready(function(){
                $('ul.chat-box.chatContainerScroll').scrollTop($('ul.chat-box.chatContainerScroll')[0].scrollHeight);
            });

            $(document).on("keypress", "#sendMessage", function(e){
                if(e.which == 13){
                    var inputVal = $(this).val();
                    
                    if (inputVal == '') {
                        alert("Please write something to start chat.");
                    } else {

                        var driver_id = $("#driver_id").val();
                        var passenger_id = $("#passenger_id").val();
                        // console.log(driver_id);
                        $.ajax({
                          headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          },
                          url:"{{ route('sendcustomermessage') }}",
                          method:"POST",
                          data:{driver_id:driver_id,passenger_id:passenger_id,inputVal:inputVal},
                            success:function(data) {
                                var audio = new Audio("{{ asset('message.wav') }}");
                                audio.play();
                                var response = JSON.parse(data);
                                console.log(response);
                                var img = $("#userprofile_picture").val();
                                var customerName = $("#userName").val();
                                var msg = '<li class="chat-right"><div class="chat-hour"> Delivered</div><div class="chat-text bg-primary text-white">' + inputVal + '</div><div class="chat-avatar"><img src="' + img + '" alt="Retail Admin"><div class="chat-name">' + customerName + '</div></div></li>'

                                if (response.statuscode == 200) {
                                    $(".chat-box.chatContainerScroll").append(msg);
                                    $('ul.chat-box.chatContainerScroll').scrollTop($('ul.chat-box.chatContainerScroll')[0].scrollHeight);
                                    $("#sendMessage").val('');
                                } else {
                                    toastr["error"](response.message);
                                }

                            }
                        });

                    }

                }
            });
            $(document).on("keypress", "#sendMessageFrmDriver", function(e){
                if(e.which == 13){
                    var inputVal = $(this).val();
                    
                    if (inputVal == '') {
                        alert("Please write something to start chat.");
                    } else {

                        var driver_id = $("#driver_id").val();
                        var passenger_id = $("#passenger_id").val();
                        // console.log(driver_id);
                        $.ajax({
                          headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          },
                          url:"{{ route('senddrivermessage') }}",
                          method:"POST",
                          data:{driver_id:driver_id,passenger_id:passenger_id,inputVal:inputVal},
                            success:function(data) {
                                var audio = new Audio("{{ asset('message.wav') }}");
                                audio.play();
                                var response = JSON.parse(data);
                                console.log(response);
                                var img = $("#userprofile_picture").val();
                                var customerName = $("#userName").val();
                                var msg = '<li class="chat-right"><div class="chat-hour"> Delivered</div><div class="chat-text bg-primary text-white">' + inputVal + '</div><div class="chat-avatar"><img src="' + img + '" alt="Retail Admin"><div class="chat-name">' + customerName + '</div></div></li>'

                                if (response.statuscode == 200) {
                                    $(".chat-box.chatContainerScroll").append(msg);
                                    $('ul.chat-box.chatContainerScroll').scrollTop($('ul.chat-box.chatContainerScroll')[0].scrollHeight);
                                    $("#sendMessageFrmDriver").val('');
                                } else {
                                    toastr["error"](response.message);
                                }

                            }
                        });

                    }

                }
            });
        </script>

    </body>
    
</html>