<?php /* Template Name: Top Casino Sites */ ?>
<?php get_header(); ?>
<?php global $country_code; ?>

    <div class="page-container">
        <div class="page-content">
            <div class="casino-container">
                <div class="left-casino-container">
                    <?php $intro = get_field('intro_block'); ?>
                    <div class="general-title">
                        <div class="title page-top-casino-sites">
                            <h1><?php echo $intro['title']; ?></h1>
                        </div>
                        <p><?php echo $intro['description']; ?></p>
                    </div>
                    <div class="list-container">
                        <div class="companies-category-names-container">
                            <h6 class="rank">N°</h6>
                            <h6 class="casino">Casino</h6>
                            <h6 class="bonus">Bonus</h6>
                            <h6 class="rating">Rating</h6>
                            <h6 class="claim">Claim</h6>
                        </div>
                        <?php $companies = get_field('companies'); ?>
                        <?php foreach ($companies as $key => $company) : ?>
                            <div class="list-paragraf">
                                <div class="list">
                                    <div class="rank-number">
                                        <h5><?php echo $key + 1; ?></h5>
                                    </div>
                                    <div class="four-items">
                                        <div class="logo">
                                            <a href="<?php echo get_field($country_code . '_affiliate_link', $company->ID) != '' ? get_field($country_code . '_affiliate_link', $company->ID) : get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                                <img src="<?php echo get_field($country_code . '_logo', $company->ID) != '' ? get_field($country_code . '_logo', $company->ID) : get_field('logo', $company->ID); ?>" alt="list-logo">
                                            </a>
                                        </div>
                                        <div class="bonus-container">
                                            <h3><?php echo get_field($country_code . '_bonus_type', $company->ID) != '' ? get_field($country_code . '_bonus_type', $company->ID) : get_field('bonus_type', $company->ID); ?></h3>
                                            <a href="<?php echo get_field($country_code . '_affiliate_link', $company->ID) != '' ? get_field($country_code . '_affiliate_link', $company->ID) : get_field('affiliate_link', $company->ID);?>" target="_blank">
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
                    </div>
                    <div class="large-paragraf">
                        <?php $description = get_field('description_block'); ?>
                        <?php echo $description; ?>
                   </div>
                    <div class="list-paragraf-one">
                        <?php $companies = get_field('companies_block_bottom');?>
                        <?php foreach ($companies as $company) : ?>
                            <div class="list">
                                <div class="four-items">
                                    <div class="logo">
                                        <a href="<?php echo get_field($country_code . '_affiliate_link', $company->ID) != '' ? get_field($country_code . '_affiliate_link', $company->ID) : get_field('affiliate_link', $company->ID); ?>" target="_blank">
                                            <img src="<?php echo get_field($country_code . '_logo', $company->ID) != '' ? get_field($country_code . '_logo', $company->ID) : get_field('logo', $company->ID); ?>" alt="list-logo">
                                        </a>
                                    </div>
                                    <div class="bonus-container">
                                        <h3><?php echo get_field($country_code . '_bonus_type', $company->ID) != '' ? get_field($country_code . '_bonus_type', $company->ID) : get_field('bonus_type', $company->ID); ?></h3>
                                        <a href="<?php echo get_field($country_code . '_affiliate_link', $company->ID) != '' ? get_field($country_code . '_affiliate_link', $company->ID) : get_field('affiliate_link', $company->ID);?>" target="_blank">
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
                        <?php endforeach; ?>
                    </div>
                    <div class="large-paragraf">
                        <?php $description = get_field('description_block_bottom');?>
                        <?php echo $description; ?>
                    </div>
                </div>
                <div class="right-casino-container">
                    <?php $companies_block_mini = get_field('companies_block_mini');?>
                    <div class="casino-block">
                        <div class="title">
                            <h2><?php echo $companies_block_mini ['title']; ?></h2>
                        </div>
                        <div class="casino">
                            <?php foreach ($companies_block_mini ['companies'] as $key => $company): ?>
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
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>