<?php include('header-inner.php') ?>
<div class="main-wrapper inner--page myaccount" style="background-color: #eff0f2;">  
   <section class="category-tabs">
      <div class="container">
         <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12">
               <h3>Categories</h3>
               <ul id="tabs" class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                     <a id="tab-Dashboard" href="#pane-Dashboard" class="nav-link active" data-toggle="tab" role="tab"><i class="fas fa-tachometer-alt"></i> Dashboard</a>                           
                  </li>
                  <li class="nav-item">
                     <a id="tab-Order" href="#pane-Order" class="nav-link" data-toggle="tab" role="tab"><i class="fas fa-dolly"></i> Order</a>
                  </li>
                  <li class="nav-item">
                     <a id="tab-Account-Setting" href="#pane-Account-Setting" class="nav-link" data-toggle="tab" role="tab"><i class="fas fa-user-cog"></i> Account Setting</a>
                  </li>
                  <li class="nav-item">
                     <a id="tab-Review" href="#pane-Review" class="nav-link" data-toggle="tab" role="tab"><i class="fas fa-star-half-alt"></i> Review</a>
                  </li>
                  <li class="nav-item">
                     <a id="tab-Logout" href="#pane-Logout" class="nav-link" data-toggle="tab" role="tab"><i class="fas fa-sign-out-alt"></i> Logout</a>
                  </li>                  
               </ul>

               <div id="content" class="tab-content" role="tablist">
                  <div id="pane-Dashboard" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-Dashboard">
                     <div class="card-header" role="tab" id="heading-Dashboard">
                        <h5 class="mb-0">
                           
                           <a data-toggle="collapse" href="#collapse-Dashboard" aria-expanded="true" aria-controls="collapse-Dashboard">
                           Dashboard
                           </a>
                        </h5>
                     </div>
                     
                     <div id="collapse-Dashboard" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-Dashboard">
                        <div class="card-body">
                           <div class="row category-listing">        
                              <div class="col-lg-6 col-md-12 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <img src="images/Dragon-Express.png" width="120" height="120" alt="dragon express">
                                    </div>
                                    <div class="right">
                                       <h4>Dragon Express</h4>
                                       <p>Apple Juice, Carrot Juice, Ice Cream</p>
                                       <div class="apps-block">
                                           <a href="#" class="primary-btn"> See Menu</a>
                                         </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <img src="images/pizza-italian.png" width="120" height="120" alt="pizza italian">
                                    </div>
                                    <div class="right">
                                       <h4>Restaurant Demo</h4>
                                       <p>Apple Juice, Carrot Juice, Ice Cream</p>
                                       <div class="apps-block">
                                           <a href="#" class="primary-btn"> See Menu</a>
                                         </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <img src="images/jet.png" width="120" height="120" alt="jet">
                                    </div>
                                    <div class="right">
                                       <h4>Jet’s Kitchen</h4>
                                       <p>Apple Juice, Carrot Juice, Ice Cream</p>
                                       <div class="apps-block">
                                           <a href="#" class="primary-btn"> See Menu</a>
                                         </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <img src="images/golden-chick.png" width="120" height="120" alt="Golden chick">
                                    </div>
                                    <div class="right">
                                       <h4>Golden Chick Fries</h4>
                                       <p>Apple Juice, Carrot Juice, Ice Cream</p>
                                       <div class="apps-block">
                                           <a href="#" class="primary-btn"> See Menu</a>
                                         </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <img src="images/natural-healthy.png" width="120" height="120" alt="Natural Healthy">
                                    </div>
                                    <div class="right">
                                       <h4>Nature Healthy Food</h4>
                                       <p>Apple Juice, Carrot Juice, Ice Cream</p>
                                       <div class="apps-block">
                                           <a href="#" class="primary-btn"> See Menu</a>
                                         </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <img src="images/burger-king.png" width="120" height="120" alt="Burger King">
                                    </div>
                                    <div class="right">
                                       <h4>Burger King</h4>
                                       <p>Apple Juice, Carrot Juice, Ice Cream</p>
                                       <div class="apps-block">
                                           <a href="#" class="primary-btn"> See Menu</a>
                                         </div>
                                    </div>
                                 </div>
                              </div>         
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="pane-Order" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-Order">
                     <div class="card-header" role="tab" id="heading-Order">
                        <h5 class="mb-0">
                           <!-- Note: `data-parent` removed from here -->
                           <a data-toggle="collapse" href="#collapse-Order" aria-expanded="true" aria-controls="collapse-Order">
                           Order
                           </a>
                        </h5>
                     </div>
                     <!-- Note: New place of `data-parent` -->
                     <div id="collapse-Order" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-Order">
                        <div class="card-body">
                           <div class="row category-listing">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <span class="badge badge-success">Completed</span>
                                       <a href="#"><img src="images/italian-img.png" width="120" height="120" alt="Italian Image"></a>
                                    </div>
                                    <div class="right">
                                       <h4><a href="#">Pasta</a></h4>
                                       <text>Totnes, Devon, England</text>
                                       <p class="mt-1"><span class="colorgreen"><b>$4.39</b></span> | <span> Qty: 3</span></p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <span class="badge badge-danger">Canceled</span>
                                       <a href="#"><img src="images/italian-img.png" width="120" height="120" alt="Italian Image"></a>
                                    </div>
                                    <div class="right">
                                       <h4><a href="#">Pasta</a></h4>
                                       <text>Totnes, Devon, England</text>
                                       <p class="mt-1"><span class="colorgreen"><b>$4.39</b></span> | <span> Qty: 3</span></p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <span class="badge badge-danger">Canceled</span>
                                       <a href="#"><img src="images/italian-img.png" width="120" height="120" alt="Italian Image"></a>
                                    </div>
                                    <div class="right">
                                       <h4><a href="#">Pasta</a></h4>
                                       <text>Totnes, Devon, England</text>
                                       <p class="mt-1"><span class="colorgreen"><b>$4.39</b></span> | <span> Qty: 3</span></p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <span class="badge badge-danger">Canceled</span>
                                       <a href="#"><img src="images/italian-img.png" width="120" height="120" alt="Italian Image"></a>
                                    </div>
                                    <div class="right">
                                       <h4><a href="#">Pasta</a></h4>
                                       <text>Totnes, Devon, England</text>
                                       <p class="mt-1"><span class="colorgreen"><b>$4.39</b></span> | <span> Qty: 3</span></p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <span class="badge badge-danger">Canceled</span>
                                       <a href="#"><img src="images/italian-img.png" width="120" height="120" alt="Italian Image"></a>
                                    </div>
                                    <div class="right">
                                       <h4><a href="#">Pasta</a></h4>
                                       <text>Totnes, Devon, England</text>
                                       <p class="mt-1"><span class="colorgreen"><b>$4.39</b></span> | <span> Qty: 3</span></p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <span class="badge badge-danger">Canceled</span>
                                       <a href="#"><img src="images/italian-img.png" width="120" height="120" alt="Italian Image"></a>
                                    </div>
                                    <div class="right">
                                       <h4><a href="#">Pasta</a></h4>
                                       <text>Totnes, Devon, England</text>
                                       <p class="mt-1"><span class="colorgreen"><b>$4.39</b></span> | <span> Qty: 3</span></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="pane-Account-Setting" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-Account-Setting">
                     <div class="card-header" role="tab" id="heading-Account-Setting">
                        <h5 class="mb-0">
                           <!-- Note: `data-parent` removed from here -->
                           <a data-toggle="collapse" href="#collapse-Account-Setting" aria-expanded="true" aria-controls="collapse-Account-Setting">
                           Account Setting
                           </a>
                        </h5>
                     </div>
                     <!-- Note: New place of `data-parent` -->
                     <div id="collapse-Account-Setting" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-Account-Setting">
                        <div class="card-body">
                           <form>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <text>Name</text>
                                       <input type="text" name="yourname">
                                    </div>
                                 </div>                              
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <text>Phone</text>
                                       <input type="text" name="phonenumber">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <text>Email</text>
                                       <input type="email" name="emaiaddress">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <text>State</text>
                                       <select>
                                          <option>New york</option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                       </select>
                                    </div>
                                 </div>                     
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <text>City</text>
                                       <select>
                                          <option>New york</option>
                                          <option></option>
                                          <option></option>
                                          <option></option>
                                       </select>
                                    </div>
                                 </div>                              
                                 <div class="col-lg-12">
                                    <button class="primary-btn">Save</button>
                                 </div>
                              </div>               
                           </form>
                        </div>
                     </div>
                  </div>
                  <div id="pane-Review" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-Review">
                     <div class="card-header" role="tab" id="heading-Review">
                        <h5 class="mb-0">
                           <!-- Note: `data-parent` removed from here -->
                           <a data-toggle="collapse" href="#collapse-Review" aria-expanded="true" aria-controls="collapse-Review">
                           Review
                           </a>
                        </h5>
                     </div>
                     <!-- Note: New place of `data-parent` -->
                     <div id="collapse-Review" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-Review">
                        <div class="card-body">
                           <div class="row category-listing">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="category-item">
                                    <div class="left">
                                       <a href="#"><img src="images/italian-img.png" width="120" height="120" alt="Italian Image"></a>
                                    </div>
                                    <div class="right">
                                       <h4><a href="#">Pasta</a></h4>
                                       <text>Totnes, Devon, England</text>
                                       <p class="mt-1"><span class="colorgreen"><b>$4.39</b></span> | <span> Qty: 3</span></p>
                                       <div class="review-order">                                    
                                          <div class="review" itemscope>
                                            <h4>Rate this order</h4>
                                            <div class="rating rating--interactive" itemprop="reviewRating">
                                              <form action="#" class="clearfix">
                                                <button class="star" type="button" name="5" itemprop="bestRating">
                                                  <span class="sr-only">Rate 5 star</span>
                                                </button>
                                                <button class="star" type="button" name="4">
                                                  <span class="sr-only">Rate 4 star</span>
                                                </button>
                                                <button class="star" type="button" name="3">
                                                  <span class="sr-only">Rate 3 star</span>
                                                </button>
                                                <button class="star" type="button" name="2">
                                                  <span class="sr-only">Rate 2 star</span>
                                                </button>
                                                <button class="star" type="button" name="1" itemprop="worstRating">
                                                  <span class="sr-only">Rate 1 star</span>
                                                </button>
                                              </form>
                                            </div>
                                          </div>
                                          <a href="#" class="transparent-green-btn">Save</a>
                                       </div>
                                    </div>
                                 </div>                           
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>               
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
            	<div class="your-order-card">
            		<div class="card-head">
   	         		<h5>Your Order</h5>
   	         		<h4>Burger King</h4>
   	         		<a href="#" class="primary-btn"><span>Checkout</span> <span>$15.93</span></a>
            		</div>
            		<div class="order-listing">
            			<ul>
            				<li>
   		         			<p><span>1x</span> Sausage, Egg & Cro...</p>
   		         			<button>Remove</button>
   		         			<price>$4.39</price>
   	         			</li>
   	         			<li>
   		         			<p><span>1x</span> Sausage, Egg & Cro...</p>
   		         			<button>Remove</button>
   		         			<price>$4.39</price>
   	         			</li>
   	         			<li>
   		         			<p><span>1x</span> Sausage, Egg & Cro...</p>
   		         			<button>Remove</button>
   		         			<price>$4.39</price>
   	         			</li>
            			</ul>
            		</div>

            	</div>
            </div>
         </div>
      </div>
   </section>
</div>
<?php include('footer.php') ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Choose Size & Flavour</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="size">
            <h4>Select the size</h4>
            <select>
               <option>Small</option>
               <option>Large</option>
               <option>Medium</option>
            </select>
            <button id="plus">+</button> 
            <span id="number">0</span> 
            <button id="minus">-</button>            
         </div>
         <div class="flavour">
            <h4>Select the flavour</h4>
            <select>
               <option>Black Currant</option>
               <option>Black Currant</option>
               <option>Black Currant</option>
            </select>
         </div>
         <div class="total">
            <span>Totals</span>
            <price>$25</price>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="secondary-btn" data-dismiss="modal">Back</button>
        <button type="button" class="primary-btn">Add to Cart</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
   $("#plus").on('click', function() {
   $("#number").html(parseInt($('#number').html(), 10)+1);
});
$("#minus").on('click', function() {
   $("#number").html(parseInt($('#number').html(), 10)-1)
});
</script>