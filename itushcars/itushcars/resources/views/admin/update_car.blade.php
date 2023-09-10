<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
    @include('admin.css')

    <style type="text/css">
    .div-center
    {
      text-align: center;
      padding-top: 40px;
    }
    .font_size
    {
      font-size: 40px;
      padding-bottom: 40px;
    }
    .text_color
    {
      color: black;
      padding-bottom: 10px;
    }
    
    label
    {
      display: inline-block;
      width: 200px;
    }

    .div-design
    {
      padding-bottom: 10px;
    }

    </style>
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              {{session()->get('message')}}
            </div>

            @endif
            <div class="div-center">
              <h2 class="font_size">Edit Car Details</h2>

              <form action="{{url('/update_car_confirm', $cars->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

              <div class="div-design">
                <label for="">Car Title :</label>
                <input class="text_color" type="text" name="title" placeholder="Write Your Car Title..." required="" value="{{$cars->title}}">
              </div>

              <div class="div-design">
                <label for="">Car   Description :</label>
                <input class="text_color" type="text" name="description" placeholder="Write Your Car description..." required="" value="{{$cars->description}}">
              </div>

              <div class="div-design">
                <label for="">Car Make :</label>
                <input class="text_color" type="text" name="make" placeholder="Add Your Car Make..." required="" value="{{$cars->make}}">
              </div>

              <div class="div-design">
                <label for="">Car Model :</label>
                <input class="text_color" type="text" name="model" placeholder="Add Your Car Model..." required="" value="{{$cars->model}}">
              </div>

              <div class="div-design">
                <label for="">Car Seats :</label>
                <input class="text_color" type="number" name="seats" placeholder="Number of Seats..." required="" value="{{$cars->seats}}">
              </div>

              <div class="div-design">
                <label for="">Number of days :</label>
                <input class="text_color" type="number" name="period" placeholder="add days..." value="{{$cars->period}}">
              </div>

              <div class="div-design">
                <label for="">Car Price :</label>
                <input class="text_color" type="number" name="price" placeholder="Add Your Car price..." required="" value="{{$cars->price}}">
              </div>

              <div class="div-design">
                <label for="">Discount Price :</label>
                <input class="text_color" type="number" name="discount_price" placeholder="Discount..." value="{{$cars->discount_price}}">
              </div>

              <div class="div-design">
                <label for="">Car Category :</label>
                <select class="text_color" name="category" required="">
                  <option  value="{{$cars->category}}" selected="">{{$cars->category}}</option>

                  @foreach ($category as $category)
                  <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                  @endforeach
                  
                </select>
              </div>

              <div class="div-design">
                <label for="">Current Car Image1 :</label>
                <img style="margin: auto; width:100px; height:100px;" src="/cars/{{$cars->image1}}" name="image1" required="">
              </div>

              <div class="div-design">
                <label for="">Change Car Image1 :</label>
                <input type="file" name="image1">
              </div>

              <div class="div-design">
                <label for="">Current Car Image2 :</label>
                <img style="margin: auto; width:100px; height:100px;" src="/cars/{{$cars->image2}}" name="image2" required="">
              </div>

              <div class="div-design">
                <label for="">Change Car Image2 :</label>
                <input type="file" name="image2">
              </div>

              <div class="div-design">
                <label for="">Current Car Image3 :</label>
                <img style="margin: auto; width:100px; height:100px;" src="/cars/{{$cars->image3}}" name="image3" required="">
              </div>

              <div class="div-design">
                <label for="">Change Car Image3 :</label>
                <input type="file" name="image3">
              </div>

              <div class="div-design">
                <input type="submit" value="Update Car Details" class="btn btn-primary">
              </div>

            </form>

            </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>