<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
    .center
    {
      margin: auto;
      width: 50%;
      border: 2px solid white;
      margin-top: 30px;
    }
    .font_size
    {
      text-align: center;
      font-size: 40px;
      padding-top: 10px;
    }
    .img_size
    {
      width: 200px;
      height: 150px;
    }
    .th_color
    {
      background: lightgreen;
    }
    .th_deg
    {
      padding: 6px;
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
            <h2 class="font_size">All Cars</h2>
            <table class="center">
              <tr class="th_color">
                <th class="th_deg">Car Name</th>
                <th class="th_deg">Car Description</th>
                <th class="th_deg">Make</th>
                <th class="th_deg">Model</th>
                <th class="th_deg">Category</th>
                <th class="th_deg">Seats</th>
                <th class="th_deg">Days Hired</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Discount Price</th>
                <th class="th_deg">Image 1</th>
                <th class="th_deg">Image 2</th>
                <th class="th_deg">Image 3</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Edit</th>
              </tr>

              @foreach ($cars as $cars)
              <tr>
                <td>{{$cars->title}}</td>
                <td>{{$cars->description}}</td>
                <td>{{$cars->make}}</td>
                <td>{{$cars->model}}</td>
                <td>{{$cars->category}}</td>
                <td>{{$cars->seats}}</td>
                <td>{{$cars->period}}</td>
                <td>{{$cars->price}}</td>
                <td>{{$cars->discount_price}}</td>
                <td><img class="img_size" src="/cars/{{$cars->image1}}"></td>
                <td><img class="img_size" src="/cars/{{$cars->image2}}"></td>
                <td><img class="img_size" src="/cars/{{$cars->image3}}"></td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this car?')" href="{{url('delete_car',$cars->id)}}">DELETE</a></td>
                <td><a class="btn btn-success" href="{{url('update_car',$cars->id)}}">UPDATE</a></td>
              </tr>
              @endforeach
            </table>
            

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