<?php include "app/app.php"; $page = 5; head($page); ?>
<body id="story"> <header> <?php navbar($page); ?> </header>

<main id="story">

    <section class="timeline">
        <div class="container">
            <div class="timeline-item">
                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInLeft">
                    <h2>Title</h2>
                    <div class="date">1 MAY 2016</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                    <a class="bnt-more" href="javascript:void(0)">More</a>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content timeline-card js--fadeInRight">
                    <div class="timeline-img-header">
                        <h2>Card Title</h2>
                    </div>
                    <div class="date">25 MAY 2016</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                    <a class="bnt-more" href="javascript:void(0)">More</a>
                </div>

            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInLeft">
                    <div class="date">3 JUN 2016</div>
                    <h2>Quote</h2>
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInRight">
                    <h2>Title</h2>
                    <div class="date">22 JUN 2016</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                    <a class="bnt-more" href="javascript:void(0)">More</a>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content timeline-card js--fadeInLeft">
                    <div class="timeline-img-header">
                        <h2>Card Title</h2>
                    </div>
                    <div class="date">10 JULY 2016</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                    <a class="bnt-more" href="javascript:void(0)">More</a>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content timeline-card js--fadeInRight">
                    <div class="timeline-img-header">
                        <h2>Card Title</h2>
                    </div>
                    <div class="date">30 JULY 2016</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                    <a class="bnt-more" href="javascript:void(0)">More</a>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInLeft">
                    <div class="date">5 AUG 2016</div>
                    <h2>Quote</h2>
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content timeline-card js--fadeInRight">
                    <div class="timeline-img-header">
                        <h2>Card Title</h2>
                    </div>
                    <div class="date">19 AUG 2016</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                    <a class="bnt-more" href="javascript:void(0)">More</a>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInLeft">
                    <div class="date">1 SEP 2016</div>
                    <h2>Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                    <a class="bnt-more" href="javascript:void(0)">More</a>
                </div>
            </div>



        </div>
    </section>







</main>

<?php footer(); require "extension/JQuery.phtml"; require "extension/ScrollReveal.phtml"?>
<script src="javascript/story.js"></script> </body> </html>
