@extends('layouts.master')

@section('content')



    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs margin-bottom-60">
        <div class="container">
            <h1 class="pull-left">Pricing Page</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
                <li><a href="">Pages</a> <span class="divider">/</span></li>
                <li class="active">Pricing</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container">
        <div class="row-fluid">
            <!-- Pricing -->
            <div class="row-fluid margin-bottom-40">
                <div class="span3 pricing hover-effect">
                    <div class="pricing-head">
                        <h3>Begginer <span>Officia deserunt mollitia</span></h3>
                        <h4><i>$</i>5<i>.49</i> <span>Per Month</span></h4>
                    </div>
                    <ul class="pricing-content unstyled">
                        <li><i class="icon-tags"></i> At vero eos</li>
                        <li><i class="icon-asterisk"></i> No Support</li>
                        <li><i class="icon-heart"></i> Fusce condimentum</li>
                        <li><i class="icon-star"></i> Ut non libero</li>
                        <li><i class="icon-shopping-cart"></i> Consecte adiping elit</li>
                    </ul>
                    <div class="pricing-footer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</p>
                        <button type="submit">Order Now</button>
                    </div>
                </div>
                <div class="span3 pricing hover-effect">
                    <div class="pricing-head">
                        <h3>Pro Unify <span>Officia deserunt mollitia</span></h3>
                        <h4><i>$</i>8<i>.69</i> <span>Per Month</span></h4>
                    </div>
                    <ul class="pricing-content unstyled">
                        <li><i class="icon-tags"></i> At vero eos</li>
                        <li><i class="icon-asterisk"></i> No Support</li>
                        <li><i class="icon-heart"></i> Fusce condimentum</li>
                        <li><i class="icon-star"></i> Ut non libero</li>
                        <li><i class="icon-shopping-cart"></i> Consecte adiping elit</li>
                    </ul>
                    <div class="pricing-footer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</p>
                        <button type="submit">Order Now</button>
                    </div>
                </div>
                <div class="span3 pricing hover-effect">
                    <div class="pricing-head">
                        <h3>Expert <span>Officia deserunt mollitia</span></h3>
                        <h4><i>$</i>13<i>.99</i> <span>Per Month</span></h4>
                    </div>
                    <ul class="pricing-content unstyled">
                        <li><i class="icon-tags"></i> At vero eos</li>
                        <li><i class="icon-asterisk"></i> No Support</li>
                        <li><i class="icon-heart"></i> Fusce condimentum</li>
                        <li><i class="icon-star"></i> Ut non libero</li>
                        <li><i class="icon-shopping-cart"></i> Consecte adiping elit</li>
                    </ul>
                    <div class="pricing-footer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</p>
                        <button type="submit">Order Now</button>
                    </div>
                </div>
                <div class="span3 pricing hover-effect">
                    <div class="pricing-head">
                        <h3>Hi-Tech<span>Officia deserunt mollitia</span></h3>
                        <h4><i>$</i>99<i>.00</i> <span>Per Month</span></h4>
                    </div>
                    <ul class="pricing-content unstyled">
                        <li><i class="icon-tags"></i> At vero eos</li>
                        <li><i class="icon-asterisk"></i> No Support</li>
                        <li><i class="icon-heart"></i> Fusce condimentum</li>
                        <li><i class="icon-star"></i> Ut non libero</li>
                        <li><i class="icon-shopping-cart"></i> Consecte adiping elit</li>
                    </ul>
                    <div class="pricing-footer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</p>
                        <button type="submit">Order Now</button>
                    </div>
                </div>
            </div><!--/row-fluid-->
            <!--//End Pricing -->

            <hr class="margin-bottom-60" />

            <!-- Pricing "No Spacing"-->
            <div class="row-fluid no-space-pricing">
                <div class="span3 pricing">
                    <div class="pricing-head">
                        <h3>Begginer <span>Officia deserunt mollitia</span></h3>
                        <h4><i>$</i>5<i>.49</i> <span>Per Month</span></h4>
                    </div>
                    <ul class="pricing-content unstyled">
                        <li><i class="icon-tags"></i> At vero eos</li>
                        <li><i class="icon-asterisk"></i> No Support</li>
                        <li><i class="icon-heart"></i> Fusce condimentum</li>
                        <li><i class="icon-star"></i> Ut non libero</li>
                        <li><i class="icon-shopping-cart"></i> Consecte adiping elit</li>
                    </ul>
                    <div class="pricing-footer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</p>
                        <button type="submit">Order Now</button>
                    </div>
                </div>
                <div class="span3 pricing">
                    <div class="pricing-head">
                        <h3>Pro Unify <span>Officia deserunt mollitia</span></h3>
                        <h4><i>$</i>8<i>.69</i> <span>Per Month</span></h4>
                    </div>
                    <ul class="pricing-content unstyled">
                        <li><i class="icon-tags"></i> At vero eos</li>
                        <li><i class="icon-asterisk"></i> No Support</li>
                        <li><i class="icon-heart"></i> Fusce condimentum</li>
                        <li><i class="icon-star"></i> Ut non libero</li>
                        <li><i class="icon-shopping-cart"></i> Consecte adiping elit</li>
                    </ul>
                    <div class="pricing-footer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</p>
                        <button type="submit">Order Now</button>
                    </div>
                </div>
                <div class="span3 pricing">
                    <div class="pricing-head">
                        <h3>Expert <span>Officia deserunt mollitia</span></h3>
                        <h4><i>$</i>13<i>.99</i> <span>Per Month</span></h4>
                    </div>
                    <ul class="pricing-content unstyled">
                        <li><i class="icon-tags"></i> At vero eos</li>
                        <li><i class="icon-asterisk"></i> No Support</li>
                        <li><i class="icon-heart"></i> Fusce condimentum</li>
                        <li><i class="icon-star"></i> Ut non libero</li>
                        <li><i class="icon-shopping-cart"></i> Consecte adiping elit</li>
                    </ul>
                    <div class="pricing-footer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</p>
                        <button type="submit">Order Now</button>
                    </div>
                </div>
                <div class="span3 pricing">
                    <div class="pricing-head">
                        <h3>Hi-Tech<span>Officia deserunt mollitia</span></h3>
                        <h4><i>$</i>99<i>.00</i> <span>Per Month</span></h4>
                    </div>
                    <ul class="pricing-content unstyled">
                        <li><i class="icon-tags"></i> At vero eos</li>
                        <li><i class="icon-asterisk"></i> No Support</li>
                        <li><i class="icon-heart"></i> Fusce condimentum</li>
                        <li><i class="icon-star"></i> Ut non libero</li>
                        <li><i class="icon-shopping-cart"></i> Consecte adiping elit</li>
                    </ul>
                    <div class="pricing-footer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .</p>
                        <button type="submit">Order Now</button>
                    </div>
                </div>
            </div><!--/row-fluid-->
            <!--//End Pricing "No Spacing" -->
        </div><!--/row-fluid-->
    </div><!--/container-->
    <!--=== End Content Part ===-->


@stop