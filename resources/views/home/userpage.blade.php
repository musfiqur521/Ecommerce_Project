<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Musfiqur - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer">

      </script>
   
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('home.slider')
                  <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('home.why')
           <!-- end why section -->
      
      <!-- arrival section -->
      @include('home.new_arival')
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('home.product')
           <!-- end product section -->

         <!--Comment and reply system starts here -->

            <div style="text-align: center; padding-bottom: 30px;">
               <h1 style="font-size: 30px; text-align: center; padding-top: 20px;">
                  Comments</h1>
               
                  <form action="{{url('add_comment')}}" method="POST">

                  @csrf 
                  
               <textarea style="height: 150px; width: 600px;" 
                  placeholder="Comment something here" name="comment"></textarea>
                  <br>

                   <input type="submit" class="btn btn-primary" value="Comment">
               
               </form>

            </div>

            <div style="padding-left: 20%;">
               <h1 style="font-size: 20px; padding-bottom: 20px;">All Comments
               </h1>

                @foreach($comment as $comment)

               <div>

                  <b>{{$comment->name}}</b>
                  <p>{{$comment->comment}}</p>
                  <a style="color: blue;" href="javascript::void(0);"
                  onclick="reply(this)" data-commented=
                  "{{$comment->id}}">Reply</a>
               
               </div>

                @endforeach

             

               <div style="display: none;" class="replyDiv">

               <textarea style="height: 100px; width: 500px;" placeholder="write something here"></textarea>
               <br>
               <a href="" class="btn btn-primary">Reply</a>
            
               <a href="" class="btn" onclick="reply_close(this)">Close</a>

              </div>


            </div>

           


          <!--Comment and reply system Ends here -->

      <!-- subscribe section -->
      @include('home.subscribe')
      
      <!-- end subscribe section -->
      <!-- client section -->
      @include('home.client')
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>

      <script type="text/javascript">
         
            function reply(caller)
            {
               $('.replyDiv').insertAfter($(caller));

               $('.replyDiv').show();

            }

            function reply_close(caller)
            {
              

               $('.replyDiv').hide();

            }
         
      </script>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>