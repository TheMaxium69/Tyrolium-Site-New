<?php include "app/app.php"; $page = 2; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>
    <section id="projet">
        <br>
        <h2>lorem title</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla .</p>
        <br>
    </section>
    <section class="service-page">
        <div class="background">
            <div class="container container-serv">
                <div class="panel pricing-table">

                    <div class="pricing-plan">
                        <img src="https://s22.postimg.cc/8mv5gn7w1/paper-plane.png" alt="" class="pricing-img">
                        <h2 class="pricing-header">Personal</h2>
                        <ul class="pricing-features">
                            <li class="pricing-features-item">Lorem ipsum dolor sit amet</li>
                            <li class="pricing-features-item">Lorem ipsum dolor sit amet</li>
                        </ul>
                        <span class="pricing-price">$000</span>
                        <a href="#" class="pricing-button">Not free trial</a>
                    </div>

                    <div class="pricing-plan">
                        <img src="https://s28.postimg.cc/ju5bnc3x9/plane.png" alt="" class="pricing-img">
                        <h2 class="pricing-header">Small team</h2>
                        <ul class="pricing-features">
                            <li class="pricing-features-item">Lorem ipsum dolor sit amet</li>
                            <li class="pricing-features-item">Lorem ipsum dolor sit amet</li>
                        </ul>
                        <span class="pricing-price">$000</span>
                        <a href="#" class="pricing-button is-featured">Not free trial</a>
                    </div>

                    <div class="pricing-plan">
                        <img src="https://s21.postimg.cc/tpm0cge4n/space-ship.png" alt="" class="pricing-img">
                        <h2 class="pricing-header">Enterprise</h2>
                        <ul class="pricing-features">
                            <li class="pricing-features-item">Lorem ipsum dolor sit amet</li>
                            <li class="pricing-features-item">Lorem ipsum dolor sit amet</li>
                        </ul>
                        <span class="pricing-price">$000</span>
                        <a href="#" class="pricing-button">Not free trial</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <br>
    <hr style="background: rgb(161, 161, 161);" class="container">
    <br>






</main>

<?php footer(); ?> </body> </html>
