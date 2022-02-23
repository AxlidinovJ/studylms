<?php
$this->title  = "Cartaga";
$this->params['title'] = $this->title; 
$this->params['breadscrumb'] = $this->title;
?>


<section class="cart-content-block container">
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
                                        <img src="http://placehold.it/45x50" alt="image description">
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
                    <tr>
                        <td data-title="Product" class="col01">
                            <div>
                                <a href="#" class="btn-remove fas fa-times"><span class="sr-only">remove</span></a>
                                <div class="pro-name-wrap">
                                    <div class="alignleft no-shrink hidden-xs">
                                        <img src="http://placehold.it/45x50" alt="image description">
                                    </div>
                                    <div class="descr-wrap">
                                        <h3 class="fw-normal">Compact Stabler - Blue</h3>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td data-title="Price"><span><strong class="price element-block"> $19.00</strong></span></td>
                        <td data-title="Quantity">
                            <div>
                                <div class="quantity">
                                    <input type="number" class="form-control" min="1" value="1">
                                </div>
                            </div>
                        </td>
                        <td data-title="Total"><span><strong class="element-block price"> $19.00</strong></span></td>
                    </tr>
                    <tr>
                        <td data-title="Product" class="col01">
                            <div>
                                <a href="#" class="btn-remove fas fa-times"><span class="sr-only">remove</span></a>
                                <div class="pro-name-wrap">
                                    <div class="alignleft no-shrink hidden-xs">
                                        <img src="http://placehold.it/45x50" alt="image description">
                                    </div>
                                    <div class="descr-wrap">
                                        <h3 class="fw-normal">Wooden Pencil Yellow</h3>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td data-title="Price"><span><strong class="price element-block">$£22.00</strong></span></td>
                        <td data-title="Quantity">
                            <div>
                                <div class="quantity">
                                    <input type="number" class="form-control" min="1" value="1">
                                </div>
                            </div>
                        </td>
                        <td data-title="Total"><span><strong class="element-block price">$£22.00</strong></span></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="btn-actions">
                            <div>
                                <div class="coupon-wrap">
                                    <input type="text" class="form-control" placeholder="Coupon Code">
                                    <a href="#" class="btn btn-default font-lato fw-normal text-uppercase">Apply
                                        Coupon</a>
                                </div>
                            </div>
                        </td>
                        <td colspan="2" class="text-right btn-actions">
                            <div>
                                <a href="#" class="btn btn-default font-lato fw-normal text-uppercase">Update Cart</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-10 col-md-offset-6 col-md-6">
                <h2>Cart Totals</h2>
                <div class="table-wrap">
                    <!-- table cart total -->
                    <table class="table table-cart-total">
                        <tbody>
                            <tr>
                                <td class="font-lato fw-bold">Subtotal</td>
                                <td><strong class="price">£95.00</strong></td>
                            </tr>
                            <tr>
                                <td class="font-lato fw-bold">Shipping</td>
                                <td>
                                    <!-- radio list -->
                                    <ul class="list-unstyled radio-list">
                                        <li>
                                            <input type="radio" class="customFormReset" id="rad01" name="asd"
                                                checked="">
                                            <label for="rad01" class="custom-radio-wrap fw-normal">Free Shipping</label>
                                        </li>
                                        <li>
                                            <input type="radio" class="customFormReset" name="asd" id="rad02">
                                            <label for="rad02" class="custom-radio-wrap fw-normal">Flat Rate:
                                                $10.00</label>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn-calculate">Calculate Shipping</a>
                                    <div class="form-group">
                                        <select data-placeholder="Country" class="chosen-select-no-single"
                                            style="display: none;">
                                            <option value="1">Germany</option>
                                            <option value="1">Germany</option>
                                            <option value="1">Germany</option>
                                            <option value="1">Germany</option>
                                        </select>
                                        <div class="chosen-container chosen-container-single chosen-container-single-nosearch"
                                            title="" style="width: 261px;"><a class="chosen-single">
                                                <span>Germany</span>
                                                <div><b></b></div>
                                            </a>
                                            <div class="chosen-drop">
                                                <div class="chosen-search">
                                                    <input class="chosen-search-input" type="text" autocomplete="off"
                                                        readonly="">
                                                </div>
                                                <ul class="chosen-results"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select data-placeholder="Select an option…" class="chosen-select-no-single"
                                            style="display: none;">
                                            <option value="1">Select an option…</option>
                                            <option value="1">Select an option…</option>
                                            <option value="1">Select an option…</option>
                                            <option value="1">Select an option…</option>
                                        </select>
                                        <div class="chosen-container chosen-container-single chosen-container-single-nosearch"
                                            title="" style="width: 261px;"><a class="chosen-single chosen-default">
                                                <span>Select an option…</span>
                                                <div><b></b></div>
                                            </a>
                                            <div class="chosen-drop">
                                                <div class="chosen-search">
                                                    <input class="chosen-search-input" type="text" autocomplete="off"
                                                        readonly="">
                                                </div>
                                                <ul class="chosen-results"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="element-block form-control"
                                            placeholder="Postcode / ZIP">
                                    </div>
                                    <button type="button" class="btn btn-default font-lato text-uppercase">Update
                                        Totals</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td><strong class="price">$105.00</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button type="submit"
                    class="btn btn-warning btn-theme font-lato fw-bold text-uppercase element-block">Proceed to
                    checkout</button>
            </div>
        </div>
    </form>
</section>