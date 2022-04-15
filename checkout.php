<?php include('header-inner.php') ?>
<div class="main-wrapper inner--page">
   <section class="checkout-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
               <div class="order-summary">
                  <div class="heading-text border-bottom">
                     <h5>Order summary</h5>
                     <h3>Pizza Inn</h3>
                     <text>3 products from Burger King</text>
                  </div>
                  <div class="order-form">
                     <form>
                        <div class="form-group">
                           <text>Delivery Address</text>
                           <input type="text" name="delivery-address" placeholder="Search Street, buildings or town">
                        </div>  
                        <div class="form-group">
                           <text>Delivery Instructions</text>
                           <textarea name="delivery-Instructions" placeholder="Delivery Details"></textarea>
                        </div>                    
                     </form>
                  </div>
                  <div class="payment-info">
                     <text>Payment information</text>
                     <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                           <a id="tab-PayPal" href="#pane-PayPal" class="nav-link active" data-toggle="tab" role="tab">PayPal <small>TM</small></a>
                        </li>
                        <li class="nav-item">
                           <a id="tab-Credit-Card" href="#pane-Credit-Card" class="nav-link" data-toggle="tab" role="tab">Credit-Card</a>
                        </li>
                        <li class="nav-item">
                           <a id="tab-Personal-Balance" href="#pane-Personal-Balance" class="nav-link" data-toggle="tab" role="tab">Personal Balance</a>
                        </li>
                     </ul>
                     <div id="content" class="tab-content" role="tablist">
                        
                        <div id="pane-PayPal" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-PayPal">
                           <div class="card-header" role="tab" id="heading-PayPal">
                              <h5 class="mb-0">
                                 <!-- Note: `data-parent` removed from here -->
                                 <a data-toggle="collapse" href="#collapse-PayPal" aria-expanded="true" aria-controls="collapse-PayPal">
                                 PayPal <small>TM</small>
                                 </a>
                              </h5>
                           </div>
                           <!-- Note: New place of `data-parent` -->
                           <div id="collapse-PayPal" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-PayPal">
                              <div class="card-body">
                                  <p>Your available Personal Balance is $40</p>
                              </div>
                           </div>
                        </div>
                        <div id="pane-Credit-Card" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-Credit-Card">
                           <div class="card-header" role="tab" id="heading-Credit-Card">
                              <h5 class="mb-0">
                                 <!-- Note: `data-parent` removed from here -->
                                 <a data-toggle="collapse" href="#collapse-Credit-Card" aria-expanded="true" aria-controls="collapse-Credit-Card">
                                 Credit-Card
                                 </a>
                              </h5>
                           </div>
                           <!-- Note: New place of `data-parent` -->
                           <div id="collapse-Credit-Card" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-Credit-Card">
                              <div class="card-body">
                                  <p>Your available Personal Balance is $50</p>
                              </div>
                           </div>
                        </div>
                        <div id="pane-Personal-Balance" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-Personal-Balance">
                           <div class="card-header" role="tab" id="heading-Personal-Balance">
                              <h5 class="mb-0">
                                 <!-- Note: `data-parent` removed from here -->
                                 <a data-toggle="collapse" href="#collapse-Personal-Balance" aria-expanded="true" aria-controls="collapse-Personal-Balance">
                                 Personal Balance
                                 </a>
                              </h5>
                           </div>
                           <!-- Note: New place of `data-parent` -->
                           <div id="collapse-Personal-Balance" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-Personal-Balance">
                              <div class="card-body">
                                  <p>Your available Personal Balance is $60</p>
                              </div>
                           </div>
                        </div>               
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
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