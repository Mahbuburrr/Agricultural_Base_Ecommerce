<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
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
      <title>agro service</title>
      

      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
      <!-- @include('home.is') -->
      <!-- end why section -->
      
      <!-- arrival section -->
      <!-- @include('home.new_arrival') -->
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('home.product')
      <!-- end product section -->

      <div style="text-align: center; padding-bottom:30px; background:rgb(230, 255, 153)">

      <h1 style="text-align: center; font-size:32px; padding-bottom:15px;">Comments</h1>
      <form action="{{url('add_comment')}}" method="POST">
         @csrf

      <textarea style="height: 150px;width:600px;background:	rgb(128, 255, 191)" name="comment" id="" cols="30" rows="10"></textarea><br>
      <input type="submit" class="btn btn-primary" value="comment">
      </form>
      </div>

      <div style="padding-left: 20%;background:rgb(230, 255, 153)">

      <h1 style="font-size: 20px; padding-bottom:20px">All Comments</h1>
@foreach($comment as $comment)
      <div>
         <b>{{$comment->name}}</b>
         <p>{{$comment->comment}}</p>

         <a style="color: brown;" href="javascript::void(0)" onclick="reply(this)" data-commentid="{{$comment->id}}">Reply</a>

         @foreach($reply as $rep)
         @if($rep->comment_id==$comment->id)
         <div style="padding-left: 3%; padding-top:10px; padding-bottom:10px">
            <b>{{$rep->name}}</b>
            <p>{{$rep->reply}}</p>
            <a style="color: brown;" href="javascript::void(0)" onclick="reply(this)" data-commentid="{{$comment->id}}">Reply</a>
         </div>
         @endif
         @endforeach
      </div>
@endforeach
      
      <div style="display: none;" class="replyDiv">

      <form action="{{url('add_reply')}}" method="POST">
         @csrf
      <input type="text" id="commentId" name="commentId" hidden="">
      <textarea name="reply" style="height: 100px;width:500px" placeholder="write something here"></textarea>
      <br><button type="submit" class="btn btn-warning">reply</button>
      <a class="btn btn-danger" href="javascript::void(0)" onclick="reply_close(this)">close</a>


      </form>
      </div>
      </div>

      @include('home.contact')
    

      <!-- subscribe section -->
      <!-- @include('home.subscribe') -->
      <!-- end subscribe section -->
      <!-- client section -->
      <!-- @include('home.client') -->
      <!-- end client section -->
      <!-- footer start -->


      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">Agro <a href="https://html.design/">Web-Service</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">Mahbubur Rahman</a>
         
         </p>
      </div>

      <script>
         function reply(caller){

            document.getElementById('commentId').value=$(caller).attr('data-commentid');
            $('.replyDiv').insertAfter($(caller));
            $('.replyDiv').show();
         }

         function reply_close(caller){


$('.replyDiv').hide();
}
      </script>

<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>




      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>

      <script>
var botmanWidget = {
    aboutText:'wrbappfix', 
};
</script>


   </body>
   <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</html>