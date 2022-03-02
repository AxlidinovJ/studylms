<?php
$this->title  = "Cartaga";
$this->params['title'] = $this->title; 
$this->params['breadscrumb'] = $this->title;
?>


<!-- <section class="cart-content-block container"> -->
    <!-- cart form -->
    <form action="#" class="cart-form">
        <div class="table-wrap">
            <!-- cart data table -->
            <table class="table tab-full-responsive cart-data-table font-lato">
                <thead class="hidden-xs">
                    <tr>
                        <th class="col01">Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td data-title="Product" class="col01">
                            <div>
                                <a href="#" class="btn-remove fas fa-times"><span class="sr-only">remove</span></a>
                                <div class="pro-name-wrap">
                                    <div class="alignleft no-shrink hidden-xs">
                                        <img src="https://picsum.photos/45/50" alt="image description">
                                    </div>
                                    <div class="descr-wrap">
                                        <h3 class="fw-normal">Wirebound Notebook</h3>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td data-title="Price"><span><strong class="price element-block"> $68.00</strong></span></td>
                        <td data-title="Quantity">
                            <div>
                                <div class="quantity">
                                    <input type="number" class="form-control" min="1" value="2">
                                </div>
                            </div>
                        </td>
                        <td data-title="Total"><span><strong class="element-block price"> $68.00</strong></span></td>
                    </tr>
                        
                </tbody>
            </table>
        </div>
     
    </form>
<!-- </section> -->

