<?php
/*
Template Name: Services
*/
?>
<?php get_template_part('template-parts/header');?>

<main class="contentStart">
    <section class="hero__container"> 
    <div class="hero__overlay">
       <div class="hero__contentContainer">
           <div class="services__Slogan">
              <?php generateBreadcrumbs(); ?>
            <h1> Software Engineering Services</h1>
            <p>Leverage your digital capabilities to the fullest with tailor-made software and data solutions designed for your business.
               At Godde-Lean, our commitment is to assist you in optimizing your processes, boosting efficiency, and elevating customer satisfaction through personalized solutions.
            </p>
            <div class="contact__Container">
                <a href="/contactus" class="no-decoration" id = "ContactBtnTech" data-tool-tip="Book a free consultation!">
                Book a free consultation!
            </a>
            </div>
             
           </div>
       </div>
        
    </div>
    <video playsinline autoplay muted loop poster="cake.jpg">
        <source src="/wp-content/uploads/2023/11/pexels-google-deepmind-18069235-2160p.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    
    </section>
    <section class="section__Technologies" id="techAndPlatforms">
        <div class="technologiesContainer">
            <div class="row techDisplay__Container">
                <div class="cardTech">
                    <img src="/wp-content/uploads/2023/11/wordpress.png">
                </div>
                <div class="cardTech">
                    <img src="/wp-content/uploads/2023/11/dotnetLogo.png">
                </div>
                <div class="cardTech">
                    <img src="/wp-content/uploads/2023/11/Power-BI-logo.png">
                </div>
                <div class="cardTech">
                    <img src="/wp-content/uploads/2023/11/png-clipart-logo-microsoft-sql-font-design-text-logo.png">
                </div>

            </div>
            <div class="heading text-center">
                <h2>Our Services</h2>
                <br/>
                <p class="front-page-info">We offer you cutting edge solutions tailored to your specific needs by staying at the forefront of technological advancements. Our deep understanding of the latest digital platforms and technologies helps us drive your business forward and give you an edge over the competition.</p>
            </div>
            <div class="items-flex wrap">
                <div class="card">
                    <h5>Custom Software Development</h5>
                    <p class="wrap">Build tailored Software applications and solutions that meet the unique needs of your clients, providing them with efficient and reliable software solutions.</p>
                    <ul class="techList">
                        <li class="techItem">.NET 6</li>
                        <li class="techItem">.NET 7</li> 
                        <li class="techItem">.PHP</li>
                        <li class="techItem">.NET Framework</li>
                    </ul>
                </div>
                <div class="card">
                    <h5>WordPress Website Development</h5>
                    <p class="wrap">Create and customize WordPress websites to help businesses establish an online presence, with a focus on user-friendly design and functionality.</p>
                    <ul class="techList">
                        <li class="techItem">WordPress</li>
                        <li class="techItem">HTML</li> 
                        <li class="techItem">PHP</li>
                        <li class="techItem">JavaScript</li>
                        <li class="techItem">CSS</li>
                    </ul>
                </div>
                <div class="card">
                    <h5>Custom Plugin and Extension Development</h5>
                    <p class="wrap">Extend the functionality of WordPress websites by creating custom plugins and extensions to meet specific business requirements</p>
                    <ul class="techList">
                        <li class="techItem">WordPress</li>
                        <li class="techItem">PHP</li>
                        <li class="techItem">SQL</li>
                    </ul>
                </div>
                <div class="card">
                    <h5>Data Pipeline Development</h5>
                    <p class="wrap">Develop data pipelines to enable the smooth and automated flow of data within organizations, ensuring data quality, consistency, and accessibility.</p>
                    <ul class="techList">
                        <li class="techItem">SQL</li>
                        <li class="techItem">SSIS</li>
                        <li class="techItem">.NET</li>
                        <li class="techItem">PowerAutomate</li>
                    </ul>
                </div>
                
                
                
            </div>
        
    </section>
</main>
<?php get_template_part('template-parts/footer');?>