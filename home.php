<?php
/*
Template Name: Home
*/
get_header()
?>

<main>

    <section class="about">
        <div class="container">
            <div class="about-inner">
                <?php $about_image = get_field("about_photo");
                if ($about_image):?>
                    <img src="<?= $about_image['url'] ?>" alt="<?= $about_image['alt'] ?>" class="img-about">
                <?php endif; ?>
                <div class="about-inner-text">
                    <?php $about_title = get_field("about_title");
                    if ($about_title):?>
                        <p class="header-p-mobile"><?= $about_title ?></p>
                    <?php endif; ?>
                    <?php
                    $about_text = get_field("about_info");
                    if ($about_text):
                        ?>
                        <div class="about-text-container">
                            <?= $about_text ?>
                        </div>
                    <?php endif; ?>
                    <?php
                    $about_link = get_field("telegram_url", "options");
                    if ($about_link):
                    ?>
                    <a href="<?= $about_link ?>" class="telegram-link">@Liuba_eremina</a></div>
            <?php endif; ?>
            </div>
        </div>
    </section>
    <section id="services" class="service">
        <div class="container">
            <div class="price-section-inner" id="price">
                <?php
                $services_list = get_field("services_list");
                foreach ($services_list as $services_item):
                    $name = $services_item['services_name'];
                    $list_item = $services_item['what_to_enter'];
                    $price = $services_item['price'];
                    $bonuses = $services_item['bonuses'];
                    $price_link = $services_item['pre_recording_link'];
                    ?>
                    <div class="price-section">
                        <div class=" container-mobile">
                            <h2 class="title"><?= $name ?></h2>
                            <p class="title-descr">Що входить:</p>
                            <ul class="list">
                                <?php foreach ($list_item as $item) : ?>
                                    <li><?= $item['name'] ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <?php if ($bonuses): ?>
                            <div class="present">
                                <div class=" bonuses container-mobile">

                                    <?php
                                    foreach ($bonuses as $bonus): ?>
                                        <div class="present-item">
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/present.png"
                                                 alt="present">
                                            <?= $bonus['bonus'] ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($price): ?>
                            <p class="price"> <?= $price ?></p>
                        <?php endif; ?>

                        <?php if ($price_link): ?>
                            <a class="price-link" href="<?= $price_link ?>"> Передзапис 👇🏻</a>
                        <?php endif; ?>
                    </div>


                <?php endforeach; ?>
            </div>
            <div class="service-line"></div>
            <?php
            $about_link = get_field("telegram_url", "options");
            if ($about_link):
                ?>
                <a href="<?= $about_link ?>" class="load-link">Замовити</a>

            <?php endif; ?>
    </section>
    <?php
    $faq = get_field("faq");
    if ($faq):
        ?>
        <section id="question" class="faq">
            <div class="container">
                <div class="faq-inner">
                    <?php foreach ($faq as $index => $item):
                        $ask = $item['ask'];
                        $response = $item['response'];
                        $checkbox_id = 'faq' . $index; // Уникальный идентификатор для каждого чекбокса
                        ?>
                        <div class="faq-item">
                            <input type="checkbox" id="<?= $checkbox_id ?>">
                            <label for="<?= $checkbox_id ?>"><?= $ask ?>
                                <svg stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" viewBox="0 0 24 24" class="_3YlPipnm" height="20"
                                     width="20" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </label>
                            <div class="answer">
                                <?= $response ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $reviews = get_field("reviews");
    if ($reviews):
        ?>
        <section id="reviews" class="reviews">
            <div class="container">
                <h2 class="title">Відгуки клієнтів:</h2>
                <div class="slider-container">
                    <div id="slider" class="slider">
                        <?php foreach ($reviews as $review):
                            $image = $review['review_img']; ?>
                            <img src="<?= $image['url'] ?>" alt="" class="slide">
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="controls">
                    <button id="prevButton" class="btn-slider prev">←</button>
                    <button id="nextButton" class="btn-slider next">→</button>
                </div>
            </div>
        </section>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const slider = document.getElementById('slider');
                const slides = slider.getElementsByClassName('slide');
                const prevButton = document.getElementById('prevButton');
                const nextButton = document.getElementById('nextButton');
                let currentIndex = 0;

                function updateSlider() {
                    const offset = -currentIndex * 100;
                    slider.style.transform = `translateX(${offset}%)`;
                }

                prevButton.addEventListener('click', function () {
                    if (currentIndex > 0) {
                        currentIndex--;
                    } else {
                        currentIndex = slides.length - 1;
                    }
                    updateSlider();
                });

                nextButton.addEventListener('click', function () {
                    if (currentIndex < slides.length - 1) {
                        currentIndex++;
                    } else {
                        currentIndex = 0;
                    }
                    updateSlider();
                });

                updateSlider(); // Initialize slider position
            });
        </script>
    <?php endif; ?>
    <div class="service-line"></div>
    <?php
    $about_link = get_field("telegram_url", "options");
    if ($about_link):
        ?>
        <a href="<?= $about_link ?>" class="load-link margin-load-link">Замовити</a>

    <?php endif; ?>
</main>


<?php
get_footer()
?>
