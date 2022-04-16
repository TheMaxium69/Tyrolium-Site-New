<?php include "app/app.php"; $page = 5; head($page); ?>
<body id="story" class="<?php echo $_COOKIE["color"]; ?>"> <header> <?php navbar($page); ?> </header>

<section id="storyhead" class="container">
    <br>
    <h2 style="text-align: center">Notre Histoire</h2>
    <p>Tyrolium est un projet qui a été créé il y a des années.
        En hommage à tous ces moments importants de notre histoire, nous avons réalisé cette page pour nos souvenirs personnels et pour vous montrer tout les grands moments qui nous ont amené où nous sommes aujourd'hui.</p>
    <br>
    <hr style="background: rgb(161, 161, 161);">
    <br>
</section>
<main id="story">
    <section class="timeline">
        <div class="container">

            <?php  $nbStory = count($env_story);

            for ($i = 0; $i <= $nbStory-1; $i++) { ?>

                <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <?php if (!empty($env_story[$i]['picture'])) { ?>
                    <div class="timeline-content timeline-card">
                        <div class="timeline-img-header" id="st<?php echo $i; ?>">
                        </div>
                        <h2 style="padding: 0 20px; max-width: 100%"><?php echo $env_story[$i]['title']; ?></h2>
                    <?php } else {?>
                    <div class="timeline-content">
                        <h2><?php echo $env_story[$i]['title']; ?></h2>
                    <?php } ?>
                        <div class="date"><?php echo $env_story[$i]['date']; ?></div>
                        <p><?php echo $env_story[$i]['content']; ?></p>
                        <?php if (!empty($env_story[$i]['btn'])){ ?>
                            <a class="btn-more" href="<?php echo $env_story[$i]['btn']['url']; ?>"><?php echo $env_story[$i]['btn']['text']; ?></a>
                        <?php } ?>
                    </div>
                </div>

            <?php }?>

        </div>
    </section>

    <style>
        <?php for ($i = 0; $i <= $nbStory-1; $i++) { ?>

            <?php if (!empty($env_story[$i]['picture'])) { ?>

                #st<?php echo $i; ?>{
                    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.55)), url("<?php echo $env_story[$i]['picture']; ?>") center center no-repeat;
                }

            <?php }
        }?>
    </style>

</main>

<?php footer(); require "extension/JQuery.phtml"; require "extension/ScrollReveal.phtml"?>
<script src="javascript/story.js"></script> </body> </html>
