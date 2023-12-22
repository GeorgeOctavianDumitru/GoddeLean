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
                    <img src="/wp-content/uploads/2023/11/mssql-e1698937216276.png">
                </div>
                 <div class="cardTech">
                    <img src="/wp-content/uploads/2023/11/Mysql_logo.png">
                </div>

            </div>
            <div class="heading text-center">
                <h2>Our Services</h2>
                <br/>
                <p class="front-page-info">We offer you cutting edge solutions tailored to your specific needs by staying at the forefront of technological advancements. Our deep understanding of the latest digital platforms and technologies helps us drive your business forward and give you an edge over the competition.</p>
            </div>
            <div class="items-flex wrap">
                <div class="card">
                    <div class="service__Title wrap">
                        <i class="bi bi-filetype-cs"></i>
                        <h5>Custom Software Development</h5>
                    </div>
                    
                    <p class="wrap">Build tailored Software applications and solutions that meet the unique needs of your clients, providing them with efficient and reliable software solutions.</p>
                    <ul class="techList">
                        <li class="techItem">.NET 6</li>
                        <li class="techItem">.NET 7</li> 
                        <li class="techItem">.PHP</li>
                        <li class="techItem">.NET Framework</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="service__Title wrap">
                        <i class="bi bi-wordpress"></i>
                         <h5>WordPress Website Development</h5>
                    </div>
                   
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
                    <div class="service__Title wrap">
                        <i class="bi bi-plugin"></i>
                        <h5>Custom Plugin and Extension</h5>
                    </div>
                    
                    <p class="wrap">Extend the functionality of WordPress websites by creating custom plugins and extensions to meet specific business requirements</p>
                    <ul class="techList">
                        <li class="techItem">WordPress</li>
                        <li class="techItem">PHP</li>
                        <li class="techItem">SQL</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="service__Title wrap">
                        <i class="bi bi-funnel"></i>
                         <h5>Data Pipeline Development</h5>
                    </div>
                   
                    <p class="wrap">Develop data pipelines to enable the smooth and automated flow of data within organizations, ensuring data quality, consistency, and accessibility.</p>
                    <ul class="techList">
                        <li class="techItem">SQL</li>
                        <li class="techItem">SSIS</li>
                        <li class="techItem">.NET</li>
                        <li class="techItem">PowerAutomate</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="service__Title wrap">
                        <i class="bi bi-code-square"></i>
                        <h5>Database Development</h5>
                    </div>
                    
                    <p class="wrap">Design, develop, and optimize databases that are tailored to the unique needs of your business or clients. This service includes database architecture, data modeling, and implementation to ensure efficient data storage and retrieval, enhancing the performance of your applications and data-driven solutions.</p>
                    <ul class="techList">
                        <li class="techItem">MS-SQL</li>
                        <li class="techItem">MySQL</li>
                        <li class="techItem">Postrgess SQL</li>
                        <li class="techItem">Maria DB</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="service__Title wrap">
                        <i class="bi bi-bar-chart-line-fill"></i>
                        <h5>Data Analysis and Reporting</h5>
                    </div>
                    <p class="wrap">Analyse and interpret data to extract actionable insights, then design and generate reports using tools like Power BI to support data-driven decision-making.</p>
                    <ul class="techList">
                        <li class="techItem">MS-SQL</li>
                        <li class="techItem">SSAS</li>
                        <li class="techItem">Power BI</li>
                        <li class="techItem">DAX</li>
                    </ul>
                </div>
                
                
            </div>
        
    </section>
    <section class="section__ActionSection" id ="actionQuestion">
        <h2>Ready to Get Started?</h2>
        <em>Godde-Lean is your all-in-one software engineering partner, tailored to meet your freelance needs. From ideation to execution, I come equipped with the essential tools and cutting-edge technology to pave your path to success. Get in touch with me today, and let's work together to elevate your freelance career.</em>
        <br/>
        <a href="/contactus" class="no-decoration contactBtn" >Request A Free Consulatation</a>
    </section>
    <section class="section__Motivation">
        <h2>Why Should You Outsource Custom Software Engineering Services?</h2>
        <em>Engaging a third-party provider for custom software engineering services can offer significant advantages to any business. Let's explore the primary four reasons why:</em>
        <div class="reasonsContainer">
            <div class="reasons">
                <ul>
                    <li>
                        <h4>Cost Savings</h4>
                        <p>Outsourcing custom software engineering services eliminates those costs, saving money on overhead and labor expenses.<p>
                    </li>
                    <li>
                        <h4>Expertize</h4>
                        <p>Outsourcing allows you to access expertise from experienced professionals with extensive knowledge of their craft.<p>
                    </li>
                    <li>
                        <h4>Faster Development</h4>
                        <p>Outsourcing projects means you don’t have to wait for the development process to be finished before launching your product. You can outsource portions of the project, allowing it to progress faster.<p>
                    </li>
                    <li>
                        <h4>Time Savings</h4>
                        <p>By outsourcing custom software engineering services, you can free up time for other essential tasks and processes needing attention to grow your business.<p>
                    </li>
                    <li>
                        <h4>Quality Assurance</h4>
                        <p>The third-party provider will be able to test for errors and ensure it meets industry compliance requirements so that you can trust in th<p>
                    </li>
                </ul>
            </div>
            <div class="illustrations">
                <img src="/wp-content/uploads/2023/11/pexels-christina-morillo-1181472-scaled.jpg" alt="Photo by Christina Morillo: https://www.pexels.com/photo/woman-wearing-red-and-black-checkered-blouse-using-macbook-1181472/"/>
            </div>
        </div>

    </section>
    <section class="inpageElement">
        <?php get_template_part('template-parts/inpage_ContactForm'); ?>
    </section>
</main>
<?php get_template_part('template-parts/footer');?>