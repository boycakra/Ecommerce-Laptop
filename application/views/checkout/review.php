<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Checkout - Order Review</h1>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div id="checkout" class="col-lg-9">
              <div class="box">
                <form method="get" action="<?= base_url('checkout/review/addReview') ?>">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item"><a href="<?php echo base_url('checkout/address')?>" class="nav-link"> <i class="fa fa-map-marker"></i><br>Address</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('checkout/deliver')?>" class="nav-link"><i class="fa fa-truck"></i><br>Delivery Method</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('checkout/payment')?>" class="nav-link"><i class="fa fa-money"></i><br>Payment Method</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('checkout/review')?>" class="nav-link active"><i class="fa fa-eye"></i><br>Order Review</a></li>
                  </ul>
                </form>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Unit price</th>
                          <th>Discount</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#"><img src="img/detailsquare.jpg" alt="White Blouse Armani"></a></td>
                          <td><a href="#">White Blouse Armani</a></td>
                          <td>2</td>
                          <td>$123.00</td>
                          <td>$0.00</td>
                          <td>$246.00</td>
                        </tr>
                        <tr>
                          <td><a href="#"><img src="img/basketsquare.jpg" alt="Black Blouse Armani"></a></td>
                          <td><a href="#">Black Blouse Armani</a></td>
                          <td>1</td>
                          <td>$200.00</td>
                          <td>$0.00</td>
                          <td>$200.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th>$446.00</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                  <div class="left-col"><a href="<?php echo base_url('checkout/payment')?>" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Back to payment method</a></div>
                  <div class="right-col">
                  <a href="<?php echo base_url('checkout/invoice')?>" class="btn btn-secondary mt-0"><i class="fa fa-chevron-right"></i>Place the Order</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>