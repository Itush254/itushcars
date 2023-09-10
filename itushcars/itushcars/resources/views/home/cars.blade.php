   <section class="gallery_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="gallery_taital">Our Vehicle Fleet</h1>
            </div>
         </div>
         <div class="gallery_section_2">
            

            <div class="row">
               {{-- cars-container --}}
               @foreach ($cars as $carspaginated)
               <div class="col-md-4">
                  <div class="gallery_box">
                     <div class="gallery_img"><img src="cars/{{$carspaginated->image1}}"></div>
                     <div class="car-details">
                        <div class="title-class">
                           <h3 class="types_text">{{$carspaginated->title}}</h3>
                           <i class="heart-icon-class fas fa-heart"></i>
                           <span>25</span>
                        </div>

                        <div class="info">
                           <i class="fas fa-user"></i>
                           <span>{{$carspaginated->seats}}</span>      
                           <i class="fas fa-car"></i>
                           <span>{{$carspaginated->category}}</span>                     
                        </div>
                        
                        <hr class="separator">

                        <div class="additional-info">
                           <p class="looking_text">Daily rate from <br>
                              @if($carspaginated->discount_price!=null)
                              <span style="text-decoration: line-through; margin-right:20px; color:red" class="amount-class">${{$carspaginated->price}}</span>
                              
                              <span class="amount-class"><br>Discounted Price ${{$carspaginated->discount_price}}</span>
                          

                              @else
                              <span class="amount-class">${{$carspaginated->price}}</span>

                              @endif
                           </p>
                           <a style="height: auto; width: 175px" class="btn btn-success" href="#">Hire Now</a>
                       </div>
                     </div>
                  </div>
               </div>
               @endforeach              
                                    
               {{-- <div class="col-md-4">
                  <div class="gallery_box">
                     <div class="gallery_img"><img src="images/img-2.png"></div>
                     <h3 class="types_text">Toyota car</h3>
                       <p class="looking_text">Start per day $4500</p>
                     <div class="read_bt"><a href="#">Book Now</a></div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gallery_box">
                     <div class="gallery_img"><img src="images/img-3.png"></div>
                     <h3 class="types_text">Toyota car</h3>
                       <p class="looking_text">Start per day $4500</p>
                     <div class="read_bt"><a href="#">Book Now</a></div>
                  </div>
               </div> --}}
            </div>
               <div>
                  <span style="padding-top: 20px; position:">
                     {{-- {!!$cars->appends(Request::all())->links()!!} --}}
                     {!!$cars->withQueryString()->links('pagination::bootstrap-5')!!}
                  </span>
               </div>
         </div>
      </div>
   </section>
