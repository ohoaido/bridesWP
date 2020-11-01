<?php get_header() ?>
    <main id="content">     
        <section class="inner" style="background: #fff; padding: 120px 0 150px">
            <div class="container">
                <center style="color: #666">        
                    <?php if(class_exists('Polylang')){
                            if(pll_current_language()){
                                if(pll_current_language() == 'vi'){ ?>
                                    <h2>Rất tiếc, không thể tìm thấy trang này!</h2>
                                    <p style="font-size: 18px">Trang bạn đang tìm kiếm có thể đã bị xóa, tên của trang đã thay đổi hoặc tạm thời không khả dụng.</p>
                                <?php } elseif(pll_current_language() == 'en') { ?>
                                    <h2>Oops, This Page Could Not Be Found!</h2>
                                    <p style="font-size: 18px">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                                <?php } ?>
                        <?php }} ?>         
                    <h1 style="font-size: 170px; font-weight: 900; padding-top: 50px; color: #065496">404</h1>
                </center>
            </div>
        </section>
    </main>
<?php get_footer() ?>