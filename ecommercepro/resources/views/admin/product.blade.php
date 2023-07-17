<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
      <style>

        .center{

            margin:auto;
            text-align:center;
        }
.h1size{

    font-size:40px;
    padding-bottom:30px;
}
.textcolor{
 
    color:black;
}
label{

    display:inline-block;
    width:200px;
}
.labels{

    margin:10px;
}
option{

   background-color:black;
}

      </style>
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="center">

            <h1 class="h1size">Add product</h1>
            <form action="{{url('/dataadd')}}" method="post" enctype="multipart/form-data">
                @csrf
                
            <div class="labels">
                <label for="title">Title</label>
                <input class="textcolor" type="text" name="title" placeholder="product title name" required="">
            </div>
            <div class="labels">
                <label for="title">description</label>
                <input class="textcolor" type="text" name="description" placeholder="product description name" required="">
            </div>
            <div class="labels">
                <label for="title">product price</label>
                <input class="textcolor" type="number" name="price" placeholder="product title price" required="">
            </div>
            <div class="labels">
                <label for="title">Quantity</label>
                <input class="textcolor" type="number" name="quantity" placeholder="product title quantity" required="">
            </div>
            <div class="labels">
                <label for="title">Discount_price</label>
                <input class="textcolor" type="number" name="discount_price" placeholder="product discount price" >
            </div>
            <div class="labels">
                <label for="title">category</label>
                <select class="text-color" name="category" id="">
                    <option  value="" selected="">Add category here</option>
                    @foreach($category as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="labels">
                <label for="title">Image</label>
                <input type="file" name="image">

               
            </div>
            <div class="labels">
                <label for="title">video</label>
                <input type="file" name="video" >

               
            </div>



            <div>
                <input type="submit" class="btn btn-primary">
            </div>
           
            </form>
            
            </div>
          </div>
        </div>
          
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script') 
    <!-- End custom js for this page -->
  </body>
</html>