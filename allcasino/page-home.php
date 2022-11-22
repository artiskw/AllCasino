<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php global $country_code; ?>
    <div class="page-container">
        <div class="page-content">
            <div class="casino-container">
                <div class="left-casino-container">
                    <?php if (get_the_ID() === 363) : ?>
                    <?php $slider = get_field('slider'); ?>
                        <div class="banner_slider_wrap">
                            <div class="banner_slider">
                                <?php foreach ($slider as $companies) : ?>
                                    <div class="slider-objects">
                                        <div class="slider-logo">
                                            <a href="<?php echo get_field($country_code . '_affiliate_link', $companies->ID) != '' ? get_field($country_code . '_affiliate_link', $companies->ID) : get_field('affiliate_link', $companies->ID); ?>" target="_blank">
                                                <img src="<?php echo get_field($country_code . '_logo', $companies->ID) != '' ? get_field($country_code . '_logo', $companies->ID) : get_field('logo', $companies->ID); ?>" alt="slider-logo">
                                            </a>
                                        </div>
                                        <div class="bonus-container">
                                                <h6><?php echo get_field($country_code . '_bonus_type', $companies->ID) != '' ? get_field($country_code . '_bonus_type', $companies->ID) : get_field('bonus_type', $companies->ID); ?></h6>
                                                <a href="<?php echo get_field($country_code . '_affiliate_link', $companies->ID) != '' ? get_field($country_code . '_affiliate_link', $companies->ID) : get_field('affiliate_link', $companies->ID); ?>" target="_blank">
                                                     <h5><?php echo get_field($country_code . '_bonus', $companies->ID) != '' ? get_field($country_code . '_bonus', $companies->ID) : get_field('bonus', $companies->ID); ?></h5>
                                                </a>
                                            </div>
                                            <div class="btn">
                                                <a href="<?php echo get_field($country_code . '_affiliate_link', $companies->ID) != '' ? get_field($country_code . '_affiliate_link', $companies->ID) : get_field('affiliate_link', $companies->ID); ?>" target="_blank">
                                                    VISIT
                                                </a>
                                            </div>
                                        <div class="slider-paragraf">
                                            <p><?php echo get_field($country_code . '_terms_text', $companies->ID) != '' ? get_field($country_code . '_terms_text', $companies->ID) : get_field('terms_text', $companies->ID); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="slider-dots"></div>
                            <div class="slick-next">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill=" #f5f5f5" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><path fill=" #f5f5f5" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                                </div>
                            <div class="slick-prev">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#f5f5f5" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php $intro = get_field('intro_block');?>
                    <div class="general-title">
                       <div class="title">
                           <h1><?php echo $intro['title']; ?></h1>
                       </div>
                        <p><?php echo $intro['description']; ?></p>
                    </div>
                    <?php $companies = get_field('companies_block'); ?>
                    <div class="list-container">
                        <div class="list-title">
                            <h2><?php echo $companies['title']; ?></h2>
                        </div>
                        <div class="companies-category-names-container">
                            <h6 class="rank">N°</h6>
                            <h6 class="casino">Casino</h6>
                            <h6 class="bonus">Bonus</h6>
                            <h6 class="rating">Rating</h6>
                            <h6 class="claim">Claim</h6>
                        </div>
                        <?php foreach ($companies['companies'] as $key => $companies) : ?>
                            <div class="list-paragraf">
                                <div class="list">
                                    <div class="rank-number">
                                        <h5><?php echo $key + 1; ?></h5>
                                    </div>
                                    <div class="four-items">
                                        <div class="logo">
                                            <a href="<?php echo get_field($country_code . '_affiliate_link', $companies->ID) != '' ? get_field($country_code . '_affiliate_link', $companies->ID) : get_field('affiliate_link', $companies->ID); ?>" target="_blank">
                                                <img src="<?php echo get_field($country_code . '_logo', $companies->ID) != '' ? get_field($country_code . '_logo', $companies->ID) : get_field('logo', $companies->ID); ?>" alt="list-logo">
                                            </a>
                                        </div>
                                        <div class="bonus-container">
                                            <h3><?php echo get_field($country_code . '_bonus_type', $companies->ID) != '' ? get_field($country_code . '_bonus_type', $companies->ID) : get_field('bonus_type', $companies->ID); ?></h3>
                                            <a href="<?php echo get_field($country_code . '_affiliate_link', $companies->ID) != '' ? get_field($country_code . '_affiliate_link', $companies->ID) : get_field('affiliate_link', $companies->ID);?>" target="_blank">
                                                <h2><?php echo get_field($country_code . '_bonus', $companies->ID) != '' ? get_field($country_code . '_bonus', $companies->ID) : get_field('bonus', $companies->ID); ?></h2>
                                            </a>
                                            <h4><?php echo get_field($country_code . '_company_benefit', $companies->ID) != '' ? get_field($country_code . '_company_benefit', $companies->ID) : get_field('company_benefit', $companies->ID); ?></h4>
                                        </div>
                                        <div class="star-rating-container">
                                            <div class="stars-container">
                                                <?php $rating = get_field($country_code . '_rating', $companies->ID) != '' ? get_field($country_code . '_rating', $companies->ID) : get_field('rating', $companies->ID); ?>
                                                <?php $rating_new = intval($rating); ?>
                                                <?php if ($rating_new === 5) : ?>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                <?php elseif ($rating_new === 4) : ?>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star gray"></i>
                                                <?php elseif ($rating_new === 3) : ?>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star gray"></i>
                                                    <i class="fas fa-star gray"></i>
                                                <?php elseif ($rating_new === 2) : ?>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star gray"></i>
                                                    <i class="fas fa-star gray"></i>
                                                    <i class="fas fa-star gray"></i>
                                                <?php elseif ($rating_new === 1) : ?>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star gray"></i>
                                                    <i class="fas fa-star gray"></i>
                                                    <i class="fas fa-star gray"></i>
                                                    <i class="fas fa-star gray"></i>
                                                <?php elseif ($rating_new === 0) : ?>
                                                    <i class="fas fa-star gray"></i>
                                                    <i class="fas fa-star gray"></i>
                                                    <i class="fas fa-star gray"></i>
                                                    <i class="fas fa-star gray"></i>
                                                    <i class="fas fa-star gray"></i>
                                                <?php endif; ?>
                                            </div>
                                            <p>Our Rating:
                                                <?php if($rating_new === 5): ?>
                                                    <span>Great</span>
                                                <?php elseif ($rating_new === 4) : ?>
                                                    <span>Very Good</span>
                                                <?php elseif ($rating_new === 3) : ?>
                                                    <span>Good</span>
                                                <?php elseif ($rating_new === 2) : ?>
                                                    <span>Mediocre</span>
                                                <?php elseif ($rating_new === 1) : ?>
                                                    <span>Mediocre</span>
                                                <?php elseif ($rating_new === 0) : ?>
                                                    <span>Mediocre</span>
                                                <?php endif ;?>
                                            </p>
                                        </div>
                                        <div class="btn-container">
                                            <div class="btn">
                                                <a href="<?php echo get_field($country_code . '_affiliate_link', $companies->ID) != '' ? get_field($country_code . '_affiliate_link', $companies->ID) : get_field('affiliate_link', $companies->ID);?>" target="_blank">
                                                    visit
                                                </a>
                                            </div>
                                            <div class="full-tc-apply">
                                        <a href="<?php echo get_field($country_code . '_terms_link', $companies->ID) != '' ? get_field($country_code . '_terms_link', $companies->ID) : get_field('terms_link', $companies->ID);?>" target="_blank">
                                            <p>18+. Full T&C’s apply.</p>
                                        </a>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php if (get_the_ID() === 363) : ?>
                        <div class="see-top-casino-btn">
                            <?php $see_casino = get_field('see_casino_list');?>
                            <a href="<?php echo $see_casino['url']; ?>">
                                <h3><?php echo $see_casino['title']; ?></h3>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="large-paragraf">
                      <?php $description = get_field('description_block'); ?>
                      <?php echo $description; ?>
                    </div>
                    <?php $companies = get_field('companies_block_bottom'); ?>
                    <?php foreach ($companies as $company): ?>
                        <div class="list-paragraf-one">
                            <div class="list">
                                <div class="four-items">
                                    <div class="logo">
                                            <a href="<?php echo get_field($country_code . '_affiliate_link', $company->ID) != '' ? get_field($country_code . '_affiliate_link', $company->ID) : get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                                <img src="<?php echo get_field($country_code . '_logo', $company->ID) != '' ? get_field($country_code . '_logo', $company->ID) : get_field('logo', $company->ID); ?>" alt="list-logo">
                                            </a>
                                        </div>
                                    <div class="bonus-container">
                                        <h3><?php echo get_field($country_code . '_bonus_type', $company->ID) != '' ? get_field($country_code . '_bonus_type', $company->ID) : get_field('bonus_type', $company->ID); ?></h3>
                                        <a href="<?php echo get_field($country_code . '_affiliate_link', $company->ID) != '' ? get_field($country_code . '_affiliate_link', $company->ID) : get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                            <h2><?php echo get_field($country_code . '_bonus', $company->ID) != '' ? get_field($country_code . '_bonus', $company->ID) : get_field('bonus', $company->ID); ?></h2>
                                        </a>
                                        <h4><?php echo get_field($country_code . '_company_benefit', $company->ID) != '' ? get_field($country_code . '_company_benefit', $company->ID) : get_field('company_benefit', $company->ID); ?></h4>
                                    </div>
                                    <div class="star-rating-container">
                                        <div class="stars-container">
                                            <?php $rating = get_field($country_code . '_rating', $company->ID) != '' ? get_field($country_code . '_rating', $company->ID) : get_field('rating', $company->ID); ?>
                                            <?php $rating_new = intval($rating); ?>
                                            <?php if ($rating_new === 5) : ?>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            <?php elseif ($rating_new === 4) : ?>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star gray"></i>
                                            <?php elseif ($rating_new === 3) : ?>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star gray"></i>
                                                <i class="fas fa-star gray"></i>
                                            <?php elseif ($rating_new === 2) : ?>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star gray"></i>
                                                <i class="fas fa-star gray"></i>
                                                <i class="fas fa-star gray"></i>
                                            <?php elseif ($rating_new === 1) : ?>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star gray"></i>
                                                <i class="fas fa-star gray"></i>
                                                <i class="fas fa-star gray"></i>
                                                <i class="fas fa-star gray"></i>
                                            <?php elseif ($rating_new === 0) : ?>
                                                <i class="fas fa-star gray"></i>
                                                <i class="fas fa-star gray"></i>
                                                <i class="fas fa-star gray"></i>
                                                <i class="fas fa-star gray"></i>
                                                <i class="fas fa-star gray"></i>
                                            <?php endif; ?>
                                        </div>
                                        <p>Our Rating:
                                            <?php if($rating_new === 5): ?>
                                                <span>Great</span>
                                            <?php elseif ($rating_new === 4) : ?>
                                                <span>Very Good</span>
                                            <?php elseif ($rating_new === 3) : ?>
                                                <span>Good</span>
                                            <?php elseif ($rating_new === 2) : ?>
                                                <span>Mediocre</span>
                                            <?php elseif ($rating_new === 1) : ?>
                                                <span>Mediocre</span>
                                            <?php elseif ($rating_new === 0) : ?>
                                                <span>Mediocre</span>
                                            <?php endif ;?>
                                        </p>
                                    </div>
                                    <div class="btn-container">
                                        <div class="btn">
                                            <a href="<?php echo get_field($country_code . '_affiliate_link', $company->ID) != '' ? get_field($country_code . '_affiliate_link', $company->ID) : get_field('affiliate_link', $company->ID);?>" target="_blank">
                                                visit
                                            </a>
                                        </div>
                                        <div class="full-tc-apply">
                                            <a href="<?php echo get_field($country_code . '_terms_link', $company->ID) != '' ? get_field($country_code . '_terms_link', $company->ID) : get_field('terms_link', $company->ID);?>" target="_blank">
                                                <p>18+. Full T&C’s apply.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="large-paragraf">
                        <?php $description = get_field('description_block_bottom'); ?>
                        <?php echo $description; ?>
                    </div>
                </div>
                <div class="right-casino-container">
                    <?php $companies_block_mini_right = get_field('companies_block_mini_right');?>
                    <div class="casino-block">
                       <div class="title">
                           <h2><?php echo $companies_block_mini_right['title']; ?></h2>
                       </div>
                       <div class="casino">
                           <?php foreach ($companies_block_mini_right ['companies'] as $key => $company): ?>
                               <div class="casino-inside">
                                   <div class="logo">
                                       <a href="<?php echo get_field($country_code . '_affiliate_link', $company->ID) != '' ? get_field($country_code . '_affiliate_link', $company->ID) : get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                           <img src="<?php echo get_field($country_code . '_logo', $company->ID) != '' ? get_field($country_code . '_logo', $company->ID) : get_field('logo', $company->ID); ?>" alt="list-logo">
                                       </a>
                                   </div>
                                   <div class="bonus">
                                       <h3><?php echo get_field($country_code . '_bonus_type', $company->ID) != '' ? get_field($country_code . '_bonus_type', $company->ID) : get_field('bonus_type', $company->ID); ?></h3>
                                       <a href="<?php echo get_field($country_code . '_affiliate_link', $company->ID) != '' ? get_field($country_code . '_affiliate_link', $company->ID) : get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                           <h2><?php echo get_field($country_code . '_bonus', $company->ID) != '' ? get_field($country_code . '_bonus', $company->ID) : get_field('bonus', $company->ID); ?></h2>
                                       </a>
                                       <h4><?php echo get_field($country_code . '_company_benefit', $company->ID) != '' ? get_field($country_code . '_company_benefit', $company->ID) : get_field('company_benefit', $company->ID); ?></h4>
                                   </div>
                                   <div class="btn">
                                       <a href="<?php echo get_field($country_code . '_affiliate_link', $company->ID) != '' ? get_field($country_code . '_affiliate_link', $company->ID) : get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                           visit casino
                                       </a>
                                   </div>
                                   <div class="full-tc">
                                       <a href="<?php echo get_field($country_code . '_terms_link', $company->ID) != '' ? get_field($country_code . '_terms_link', $company->ID) : get_field('terms_link', $company->ID); ?>" target="_blank">
                                       <p>18+. Full T&C’s apply.</p>
                                   </a>
                                   </div>
                               </div>
                               <div class="paragraf">
                                   <p><?php echo get_field($country_code . '_terms_text', $company->ID) != '' ? get_field($country_code . '_terms_text', $company->ID) : get_field('terms_text', $company->ID); ?></p>
                               </div>
                           <?php endforeach; ?>
                       </div>
                    </div>
                    <div class="guides-mini-block">
                        <?php $query = new WP_Query(array('posts_per_page' => 3)); ?>
                        <?php $posts = $query->posts; ?>
                        <div class="title">
                            <h2>Recent Guides</h2>
                        </div>
                        <ul>
                            <?php foreach ($posts as $post): ?>
                                <li>
                                    <a href="<?php echo get_permalink($post);?>">
                                        <?php echo $post->post_title; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                    <div class="about-us">
                        <?php $about_us_right = get_field('about_us_right'); ?>
                        <div class="title">
                            <h2><?php echo $about_us_right['title']; ?></h2>
                        </div>
                        <p><?php echo $about_us_right['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>