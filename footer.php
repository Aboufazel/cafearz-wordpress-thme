
<!-- mask search -->

<div id="mask_search" class="mask-search">
    <div class="container">
        <div class="form-search">
            <div class="close">
                <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="50px" height="50px"><path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"/></svg>
            </div>
            <strong class="title">  <i class="fa fa-search"></i>  جستجو   </strong>

            <form class="search-form clearfix" action="<?php echo home_url(); ?>">
                <input name="s"  autofocus placeholder="عبارت خورد را وارد کنید و اینتر بزنید"  type="text" >
                <input type="hidden" value="submit" />
            </form>
        </div>
    </div>

</div>
<!-- telegram button -->

<footer class="app-footer mt-5"><div class="app-container">
            <div class="copyright">
                © 2021 | کليه حقوق محصولات و محتوای اين سایت متعلق به کافه ارز می باشد.

            </div>
    </div>
</footer>

<script defer src="<?php bloginfo('template_url'); ?>/js/jquery-3.6.0.min.js"></script>
<script defer src="https://cafearz.s3.ir-thr-at1.arvanstorage.com/theia-sticky-sidebar.min.js"></script>
<script defer src="https://cafearz.s3.ir-thr-at1.arvanstorage.com/ResizeSensor.min.js"></script>
<script defer src="<?php bloginfo('template_url'); ?>/js/website.js?v=2"></script>


<?php wp_footer(); ?>

</body>
</html>
