<?php get_header(); ?>
    <div class="page-container">
        <div class="page-content">
          <div class="casino-container">
              <div class="left-casino-container">
                  <div class="list-paragraf-one">
                      <?php $companies = get_field('companies_block_bottom', 363);?>
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
                      <div class="title">
                        <h1><?php echo $post->post_title; ?></h1>
                      </div>
                      <?php echo $post->post_content; ?>
                  </div>
              </div>
              <div class="right-casino-container">
                  <?php $companies_block_mini_right = get_field('companies_block_mini_right', 363); ?>
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
                  <div class="about-us">
                      <?php $about_us_right = get_field('about_us_right', 363); ?>
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
