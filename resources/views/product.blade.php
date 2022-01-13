@extends('layouts.user')
@section('main')

<!--Body Content-->
<div id="page-content" style="margin-top:130px;">
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">
                <div id="ProductSection-product-template" class="product-template__container prstyle3 container-fluid">
                    <!--#ProductSection-product-template-->
                    <div class="product-single product-single-1">
                    	<div class="left-content-product">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-details-img product-single__photos bottom">
                                        <div class="zoompro-wrap product-zoom-right pl-20">
                                            <div class="zoompro-span">
                                                <img class="blur-up lazyload zoompro" data-zoom-image="assets/images/product-detail-page/camelia-reversible-big1.jpg" alt="" src="{{ asset('usergueststyle/images/beautifes/Gambar/face wash.jpg') }}" />
                                            </div>
                                            <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-single__meta">
                                        <h1 class="product-single__title">TEA TREE & ROSEMARY FACE WASH </h1>
                                        <div class="product-nav clearfix">					
                                            <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="prInfoRow">
                                            <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                            <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                            <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                                        </div>
                                        <p class="product-single__price product-single__price-product-template">
                                            <span class="visually-hidden">Regular price</span>
                                            <s id="ComparePrice-product-template"><span class="money">$900.00</span></s>
                                            <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money">$788.00</span></span>
                                            </span>
                                            <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                                <span>You Save</span>
                                                <span id="SaveAmount-product-template" class="product-single__save-amount">
                                                <span class="money">$100.00</span>
                                                </span>
                                                <span class="off">(<span>16</span>%)</span>
                                            </span>  
                                        </p>
                                    <div class="product-single__description rte">
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                            <li>Sed ut perspiciatis unde omnis iste natus error sit</li>
                                            <li>Neque porro quisquam est qui dolorem ipsum quia dolor</li>
                                            <li>Lorem Ipsum is not simply random text.</li>
                                        </ul>
                                    </div>
                                    <div id="quantity_message">Hurry! Only  <span class="items">4</span>  left in stock.</div>
                                    
                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="product-form__item--quantity">
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>                                
                                            <div class="product-form__item--submit">
                                                <button type="button" name="add" class="btn product-form__cart-submit">
                                                    <span>Add to cart</span>
                                                </button>
                                            </div>
                                            <div class="shopify-payment-button" data-shopify="payment-button">
                                                <button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded">Buy it now</button>
                                            </div>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>
                                    <div class="display-table shareRow">
                                            <div class="display-table-cell medium-up--one-third">
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                                </div>
                                            </div>
                                            <div class="display-table-cell text-right">
                                                <div class="social-sharing">
                                                    <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                                        <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                                    </a>
                                                    <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                                    </a>
                                                    <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                                        <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                                    </a>
                                                    <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                                        <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                                    </a>
                                                    <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                                    </a>
                                                 </div>
                                            </div>
                                        </div>
                                </div>
                                </div>
                                <!--Product Tabs-->
                                <div class="tabs-listing">
                                    <ul class="product-tabs">
                                        <li rel="tab1"><a class="tablink">Product Details</a></li>
                                        <li rel="tab2"><a class="tablink">Product Reviews</a></li>
                                        <li rel="tab3"><a class="tablink">Size Chart</a></li>
                                        <li rel="tab4"><a class="tablink">Shipping &amp; Returns</a></li>
                                    </ul>
                                    <div class="tab-container">
                                        <div id="tab1" class="tab-content">
                                            <div class="product-description rte">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                                <ul>
                                                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                                  <li>Sed ut perspiciatis unde omnis iste natus error sit</li>
                                                  <li>Neque porro quisquam est qui dolorem ipsum quia dolor</li>
                                                  <li>Lorem Ipsum is not simply random text.</li>
                                                  <li>Free theme updates</li>
                                                </ul>
                                                <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>
                                                <p>You can change the position of any sections such as slider, banner, products, collection and so on by just dragging and dropping.&nbsp;</p>
                                                <h3>Lorem Ipsum is not simply random text.</h3>
<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                                <p>Change colors, fonts, banners, megamenus and more. Preview changes are live before saving them.</p>
                                                <h3>1914 translation by H. Rackham</h3>
                                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                                <h3>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                                <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
                                                <p>You can use variant style from colors, images or variant images. Also available differnt type of design styles and size.</p>
                                                <h3>Lorem Ipsum is not simply random text.</h3>
<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                                <h3>Proin ut lacus eget elit molestie posuere.</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                            </div>
                                        </div>
                                        
                                        <div id="tab2" class="tab-content">
                                            <div id="shopify-product-reviews">
                                                <div class="spr-container">
                                                    <div class="spr-header clearfix">
                                                        <div class="spr-summary">
                                                            <span class="product-review"><a class="reviewLink"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i> </a><span class="spr-summary-actions-togglereviews">Based on 6 reviews456</span></span>
                                                            <span class="spr-summary-actions">
                                                                <a href="#" class="spr-summary-actions-newreview btn">Write a review</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="spr-content">
                                                        <div class="spr-form clearfix">
                                                            <form method="post" action="#" id="new-review-form" class="new-review-form">
                                                                <h3 class="spr-form-title">Write a review</h3>
                                                                <fieldset class="spr-form-contact">
                                                                    <div class="spr-form-contact-name">
                                                                      <label class="spr-form-label" for="review_author_10508262282">Name</label>
                                                                      <input class="spr-form-input spr-form-input-text " id="review_author_10508262282" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                                    </div>
                                                                    <div class="spr-form-contact-email">
                                                                      <label class="spr-form-label" for="review_email_10508262282">Email</label>
                                                                      <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="spr-form-review">
                                                                  <div class="spr-form-review-rating">
                                                                    <label class="spr-form-label">Rating</label>
                                                                    <div class="spr-form-input spr-starrating">
                                                                      <div class="product-review"><a class="reviewLink" href="#"><i class="fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></a></div>
                                                                    </div>
                                                                  </div>
                                                            
                                                                  <div class="spr-form-review-title">
                                                                    <label class="spr-form-label" for="review_title_10508262282">Review Title</label>
                                                                    <input class="spr-form-input spr-form-input-text " id="review_title_10508262282" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                                  </div>
                                                            
                                                                  <div class="spr-form-review-body">
                                                                    <label class="spr-form-label" for="review_body_10508262282">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                                    <div class="spr-form-input">
                                                                      <textarea class="spr-form-input spr-form-input-textarea " id="review_body_10508262282" data-product-id="10508262282" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
                                                                    </div>
                                                                  </div>
                                                                </fieldset>
                                                                <fieldset class="spr-form-actions">
                                                                    <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                        <div class="spr-reviews">
                                                            <div class="spr-review">
                                                                <div class="spr-review-header">
                                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                                    <h3 class="spr-review-header-title">Lorem ipsum dolor sit amet</h3>
                                                                    <span class="spr-review-header-byline"><strong>dsacc</strong> on <strong>Apr 09, 2019</strong></span>
                                                                </div>
                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                                </div>
                                                            </div>
                                                            <div class="spr-review">
                                                              <div class="spr-review-header">
                                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                                <h3 class="spr-review-header-title">Lorem Ipsum is simply dummy text of the printing</h3>
                                                                <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span>
                                                              </div>
                                                        
                                                              <div class="spr-review-content">
                                                                <p class="spr-review-content-body"><br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.<br><br>
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                                                                </p>
                                                              </div>
                                                            </div>
                                                            <div class="spr-review">
                                                              <div class="spr-review-header">
                                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                                <h3 class="spr-review-header-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</h3>
                                                                <span class="spr-review-header-byline"><strong>quoctri1905</strong> on <strong>Dec 30, 2018</strong></span>
                                                              </div>
                                                        
                                                              <div class="spr-review-content">
                                                                <p class="spr-review-content-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.<br>
                                                                <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        <div id="tab3" class="tab-content">
                                            <h3>WOMEN'S BODY SIZING CHART</h3>
                                            <table>
                                              <tbody>
                                                <tr>
                                                  <th>Size</th>
                                                  <th>XS</th>
                                                  <th>S</th>
                                                  <th>M</th>
                                                  <th>L</th>
                                                  <th>XL</th>
                                                </tr>
                                                <tr>
                                                  <td>Chest</td>
                                                  <td>31" - 33"</td>
                                                  <td>33" - 35"</td>
                                                  <td>35" - 37"</td>
                                                  <td>37" - 39"</td>
                                                  <td>39" - 42"</td>
                                                </tr>
                                                <tr>
                                                  <td>Waist</td>
                                                  <td>24" - 26"</td>
                                                  <td>26" - 28"</td>
                                                  <td>28" - 30"</td>
                                                  <td>30" - 32"</td>
                                                  <td>32" - 35"</td>
                                                </tr>
                                                <tr>
                                                  <td>Hip</td>
                                                  <td>34" - 36"</td>
                                                  <td>36" - 38"</td>
                                                  <td>38" - 40"</td>
                                                  <td>40" - 42"</td>
                                                  <td>42" - 44"</td>
                                                </tr>
                                                <tr>
                                                  <td>Regular inseam</td>
                                                  <td>30"</td>
                                                  <td>30½"</td>
                                                  <td>31"</td>
                                                  <td>31½"</td>
                                                  <td>32"</td>
                                                </tr>
                                                <tr>
                                                  <td>Long (Tall) Inseam</td>
                                                  <td>31½"</td>
                                                  <td>32"</td>
                                                  <td>32½"</td>
                                                  <td>33"</td>
                                                  <td>33½"</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <h3>MEN'S BODY SIZING CHART</h3>
                                            <table>
                                              <tbody>
                                                <tr>
                                                  <th>Size</th>
                                                  <th>XS</th>
                                                  <th>S</th>
                                                  <th>M</th>
                                                  <th>L</th>
                                                  <th>XL</th>
                                                  <th>XXL</th>
                                                </tr>
                                                <tr>
                                                  <td>Chest</td>
                                                  <td>33" - 36"</td>
                                                  <td>36" - 39"</td>
                                                  <td>39" - 41"</td>
                                                  <td>41" - 43"</td>
                                                  <td>43" - 46"</td>
                                                  <td>46" - 49"</td>
                                                </tr>
                                                <tr>
                                                  <td>Waist</td>
                                                  <td>27" - 30"</td>
                                                  <td>30" - 33"</td>
                                                  <td>33" - 35"</td>
                                                  <td>36" - 38"</td>
                                                  <td>38" - 42"</td>
                                                  <td>42" - 45"</td>
                                                </tr>
                                                <tr>
                                                  <td>Hip</td>
                                                  <td>33" - 36"</td>
                                                  <td>36" - 39"</td>
                                                  <td>39" - 41"</td>
                                                  <td>41" - 43"</td>
                                                  <td>43" - 46"</td>
                                                  <td>46" - 49"</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <div class="text-center">
                                                <img src="assets/images/size.jpg" alt="" />
                                            </div>
                                      </div>
                                        
                                        <div id="tab4" class="tab-content">
                                            <h4>Returns Policy</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                                            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                                            <h4>Shipping</h4>
                                            <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus.  Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Product Tabs-->
                            </div>
                        </div>
                    	<!--End-product-single-->
                        <!--Product Sidebar-->
                        <div class="prSidebar sidebar-product">
                    		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <!--Product Feature-->
                                <div class="prFeatures">
                                    <div class="row">
                                        <div class="feature">
                                            <img src="{{ asset('usergueststyle/images/credit-card.png') }}" alt="Safe Payment" title="Safe Payment" />
                                            <div class="details"><h5>Safe Payment</h5>Pay with the world's most payment methods.</div>
                                        </div>
                                        <div class="feature">
                                            <img src="{{ asset('usergueststyle/images/shield.png') }}" alt="Confidence" title="Confidence" />
                                            <div class="details"><h5>Confidence</h5>Protection covers your purchase and personal data.</div>
                                        </div>
                                        <div class="feature">
                                            <img src="{{ asset('usergueststyle/images/worldwide.png') }}" alt="Worldwide Delivery" title="Worldwide Delivery" />
                                            <div class="details"><h5>Worldwide Delivery</h5>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                                        </div>
                                        <div class="feature">
                                            <img src= "{{ asset('usergueststyle/images/phone-call.png') }}" alt="Hotline" title="Hotline" />
                                            <div class="details"><h5>Hotline</h5>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Product Feature-->
                                <!--Related Product-->
                                <div class="related-product grid-products">
                                	<header class="section-header">
                                        <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                                        <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
                                    </header>
                                    <div class="grid">
                                        <div class="grid__item">
                                          <div class="mini-list-item">
                                            <div class="mini-view_image">
                                                <a class="grid-view-item__link" href="#">
                                                    <img class="grid-view-item__image" src="{{ asset('usergueststyle/images/beautifes/123.jpeg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="details">
                                            	<a class="grid-view-item__title" href="#">Cena Skirt</a>
                                              	<div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="grid__item">
                                          <div class="mini-list-item">
                                            <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{ asset('usergueststyle/images/beautifes/122.jpeg') }}" alt=""></a> </div>
                                            <div class="details"> <a class="grid-view-item__title" href="#">Block Button Up</a>
                                              <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                              <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="grid__item">
                                          <div class="mini-list-item">
                                            <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{ asset('usergueststyle/images/beautifes/125.jpeg') }}" alt=""></a> </div>
                                            <div class="details"> <a class="grid-view-item__title" href="#">Balda Button Pant</a>
                                              <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                              <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                     </div>
                                </div>
                               	<!--End Related Product-->
                            </div>
                        </div>
                        <!--Product Sidebar-->
                    </div>
                	<!--#ProductSection-product-template-->
            	</div>
            <!--MainContent-->
        </div>
    	<!--End Body Content-->
    
    <div class="hide">
      <div id="sizechart">
        <h3>WOMEN'S BODY SIZING CHART</h3>
        <table>
          <tbody>
            <tr>
              <th>Size</th>
              <th>XS</th>
              <th>S</th>
              <th>M</th>
              <th>L</th>
              <th>XL</th>
            </tr>
            <tr>
              <td>Chest</td>
              <td>31" - 33"</td>
              <td>33" - 35"</td>
              <td>35" - 37"</td>
              <td>37" - 39"</td>
              <td>39" - 42"</td>
            </tr>
            <tr>
              <td>Waist</td>
              <td>24" - 26"</td>
              <td>26" - 28"</td>
              <td>28" - 30"</td>
              <td>30" - 32"</td>
              <td>32" - 35"</td>
            </tr>
            <tr>
              <td>Hip</td>
              <td>34" - 36"</td>
              <td>36" - 38"</td>
              <td>38" - 40"</td>
              <td>40" - 42"</td>
              <td>42" - 44"</td>
            </tr>
            <tr>
              <td>Regular inseam</td>
              <td>30"</td>
              <td>30½"</td>
              <td>31"</td>
              <td>31½"</td>
              <td>32"</td>
            </tr>
            <tr>
              <td>Long (Tall) Inseam</td>
              <td>31½"</td>
              <td>32"</td>
              <td>32½"</td>
              <td>33"</td>
              <td>33½"</td>
            </tr>
          </tbody>
        </table>
        <h3>MEN'S BODY SIZING CHART</h3>
        <table>
          <tbody>
            <tr>
              <th>Size</th>
              <th>XS</th>
              <th>S</th>
              <th>M</th>
              <th>L</th>
              <th>XL</th>
              <th>XXL</th>
            </tr>
            <tr>
              <td>Chest</td>
              <td>33" - 36"</td>
              <td>36" - 39"</td>
              <td>39" - 41"</td>
              <td>41" - 43"</td>
              <td>43" - 46"</td>
              <td>46" - 49"</td>
            </tr>
            <tr>
              <td>Waist</td>
              <td>27" - 30"</td>
              <td>30" - 33"</td>
              <td>33" - 35"</td>
              <td>36" - 38"</td>
              <td>38" - 42"</td>
              <td>42" - 45"</td>
            </tr>
            <tr>
              <td>Hip</td>
              <td>33" - 36"</td>
              <td>36" - 39"</td>
              <td>39" - 41"</td>
              <td>41" - 43"</td>
              <td>43" - 46"</td>
              <td>46" - 49"</td>
            </tr>
          </tbody>
        </table>
        <div style="padding-left: 30px;"><img src="assets/images/size.jpg" alt=""></div>
      </div>
	</div>
    <div class="hide">
    	<div id="productInquiry">
        	<div class="contact-form form-vertical">
          <div class="page-title">
            <h3>Camelia Reversible Jacket</h3>
          </div>
          <form method="post" action="#" id="contact_form" class="contact-form">
            <input type="hidden" name="form_type" value="contact" />
            <input type="hidden" name="utf8" value="✓" />
            <div class="formFeilds">
              <input type="hidden"  name="contact[product name]" value="Camelia Reversible Jacket">
              <input type="hidden"  name="contact[product link]" value="/products/camelia-reversible-jacket-black-red">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  	<input type="text" id="ContactFormName" name="contact[name]" placeholder="Name"  value="" required>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <input type="email" id="ContactFormEmail" name="contact[email]" placeholder="Email"  autocapitalize="off" value="" required>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <input required type="tel" id="ContactFormPhone" name="contact[phone]" pattern="[0-9\-]*" placeholder="Phone Number"  value="">
                </div>
              </div>
              <div class="row">
              	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
              		<textarea required rows="10" id="ContactFormMessage" name="contact[body]" placeholder="Message" ></textarea>
              	</div>  
              </div>
              <div class="row">
              	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
              		<input type="submit" class="btn" value="Send Message">
                </div>
             </div>
            </div>
          </form>
        </div>
      	</div>
    </div>
                                        
    <script>                                    
        $(function(){
            var $pswp = $('.pswp')[0],
                image = [],
                getItems = function() {
                    var items = [];
                    $('.lightboximages a').each(function() {
                        var $href   = $(this).attr('href'),
                            $size   = $(this).data('size').split('x'),
                            item = {
                                src : $href,
                                w: $size[0],
                                h: $size[1]
                            }
                            items.push(item);
                    });
                    return items;
                }
            var items = getItems();
        
            $.each(items, function(index, value) {
                image[index]     = new Image();
                image[index].src = value['src'];
            });
            $('.prlightbox').on('click', function (event) {
                event.preventDefault();
              
                var $index = $(".active-thumb").parent().attr('data-slick-index');
                $index++;
                $index = $index-1;
        
                var options = {
                    index: $index,
                    bgOpacity: 0.9,
                    showHideOpacity: true
                }
                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });
        </script>
    </div>
    </div>

	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        	<div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button><button class="pswp__button pswp__button--share" title="Share"></button><button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button><button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button><button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button><div class="pswp__caption"><div class="pswp__caption__center"></div></div></div></div></div>



@endsection