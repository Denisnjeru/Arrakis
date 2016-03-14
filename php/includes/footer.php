    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-footer col-md-3 col-xs-6">
                    <h3>Latest Product</h3>
                    <div class="latest-product-item">
                        <div class="latest-product-image">
                            <a href="product-pepperberries.html"><img src="<?=IMAGE_URL?>products/pepperberries.jpg" alt="Product Name"></a>
                        </div>
                    </div>
                </div>
                <div class="col-footer col-md-3 col-xs-6">
                    <h3>Navigate</h3>
                    <ul class="no-list-style footer-navigate-section">
                        <li><a href="<?= PROJECT_URL ?>about">About</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="<?= PROJECT_URL ?>faq">FAQ</a></li>
                        <li><a href="<?= PROJECT_URL ?>policy">Terms & Privacy</a></li>
                        <li><a href="<?= PROJECT_URL ?>contacts">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-footer col-md-3 col-xs-6">
                    <h3>Stay Connected</h3>
                    <ul class="footer-stay-connected no-list-style">
                        <li><a href="http://www.facebook.com/susanna.zanatta" target="blank" class="facebook"></a></li>
                    </ul>
                </div>
           
                <div class="col-footer col-md-3 col-xs-6 footer-paypal">
                    <h3>Secure payments</h3>
                    <a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_payments_by_pp_2line.png" border="0" alt="Payments by PayPal">
                    </a>
                    <div style="text-align:center"><a href="https://www.paypal.com/webapps/mpp/how-paypal-works">
                        </a>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-copyright">&copy; 2015 Arrakis. All rights reserved.</div>
                </div>
            </div>
        </div>
    </div>
<!-- END Footer -->
    <!-- Javascripts -->
    
    <script type="text/javascript">
                // header search field
                $(document).ready(function()
                {
                    $('#search-field').on('change',function(event)
                    {
                        search = this.value.trim();
                        location.replace('<?= PROJECT_URL ?>search/' + search);
                    }    
                ); 

                   $('#search-form').on('submit',function(event)
                    {
                        event.preventDefault();
                        search = $('#search-field').val().trim();
                        location.replace('<?= PROJECT_URL ?>search/' + search);
                    }    
                ); 
             
                });
                // end header search field
                
                // aside search field
                $(document).ready(function()
                {
                    $('#aside-search-field').on('change',function(event)
                    {
                        search = this.value.trim();
                        location.replace('<?= PROJECT_URL ?>search/' + search);
                    }    
                ); 

                   $('#aside-search-form').on('submit',function(event)
                    {
                        event.preventDefault();
                        search = $('#aside-search-field').val().trim();
                        location.replace('<?= PROJECT_URL ?>search/' + search);
                    }    
                ); 
             
                });
                // end aside search field
    </script>
            
    <script>window.jQuery || document.write('<script src="<?= JS_URL?>jquery-1.9.1.min.js"><\/script>');</script>
    <script src="<?= JS_URL?>bootstrap.min.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
    <script src="<?= JS_URL?>jquery.fitvids.js"></script>
    <script src="<?= JS_URL?>jquery.sequence-min.js"></script>
    <script src="<?= JS_URL?>jquery.tablesorter.min.js"></script>
    <script src="<?= JS_URL?>jquery.bxslider.js"></script>
    <script src="<?= JS_URL?>main-menu.js"></script>
    <script src="<?= JS_URL?>template.js"></script>

</body>
</html>