<?php 
    global $fr_options;
?>
<?php get_header() ?>
	<main id="content">
		<!-- Content Business Activities -->
		<section class="content-business_activities">
			<div class="content-business_activities__top">
				<?php if(class_exists('Polylang')){
	                if(pll_current_language()){
	                    if(pll_current_language() == 'en'){ ?>
	                        <form method="get" action="<?= home_url()?>/" class="search-form">
	                            <fieldset>
	                                <h1 class="search-form-heading">Enter keyword</h1>
	                                <div class="group">
	                                    <label class="search-form-intro" for="search-field">Press button "Search" to begin your search</label>
	                                    <input type="text" onfocus="if (this.value == '') {this.value = '';}" onblur="if (this.value == '')  {this.value = '';}" id="s" name="s" class="search search-form-input" value="<?= get_search_query()?>"> 
	                                </div>
	                                <input type="hidden" name="post_type" value="products">
	                                <input class="btn btn-primary btn-search" type="submit" value="Search">    
	                            </fieldset>
	                        </form>
	                    <?php } elseif(pll_current_language() == 'vi') { ?>
	                        <form method="get" action="<?= $fr_options['url']?>/" class="search-form">
	                            <fieldset>
	                                <h1 class="search-form-heading">Nhập từ khóa</h1>
	                                <div class="group">
	                                    <label class="search-form-intro" for="search-field">Nhấn nút "Tìm kiếm" để bắt đầu tìm kiếm của bạn</label>
	                                    <input type="text" onfocus="if (this.value == '') {this.value = '';}" onblur="if (this.value == '')  {this.value = '';}" id="s" name="s" class="search search-form-input" value="<?= get_search_query()?>"> 
	                                </div>
	                                <input type="hidden" name="post_type" value="products">
	                                <input class="btn btn-primary btn-search" type="submit" value="Tìm kiếm">    
	                            </fieldset>
	                        </form>
	                    <?php }}} ?>  
			</div>
			<div class="content-business_activities__bottom">
				<div class="container">
					<div class="bottom__content">						
						<div class="tab-content">
						    <div role="tabpanel" class="tab-pane active" id="tab-1">
						    	<div class="categories__contents">
                                    <div class="contents__items">
									<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							    		<div class="contents__item">
							    			<a href="<?=get_permalink() ?>" class="item__box">
								    			<div class="item__img">
								    				<img src="<?=get_featured_img($post->ID)?>" alt="">
								    			</div>
								    			<div class="item__name"><?php the_title() ?></div>
							    			</a>
							    		</div>		
					                <?php endwhile; else : ?>		
					                    <div class="no-results td-pb-padding-side">
					                    	<h4><center>
					                    		<?php if(class_exists('Polylang')){
									                if(pll_current_language()){
									                    if(pll_current_language() == 'en'){ ?>
					                    					No search results found.
									                    <?php } elseif(pll_current_language() == 'vi') { ?>
					                    					Không tìm thấy kết quả.
									                    <?php }}} ?>  
					                    	</center></h4>
					                    </div>
					                <?php endif; ?>  	
					                </div>    		
						    	</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- /Content Business Activities -->
	</main>

<?php get_footer() ?>