
<?php wp_footer();?>  
        <div class="footer-container">
            <div class="footer__column">
                 <div class="logo-container">
                    <img id="LogoImage" src="/wp-content/uploads/2023/07/LogoSingle.png" alt="goddeLeanLogo"/>
                    <a href="<?php echo home_url(); ?>" class = "site-logo" aria-label="homepage">Godde Lean</a>
                 </div>
                 <div class="social__message">
                    <em>Follow us on:</em>
                 </div>
                 <div class="social__container">
                    <a href="#!" role="button">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#!" role="button">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#!" role="button">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#!" role="button">
                        <i class="bi bi-youtube"></i>
                    </a>
                 </div>
            </div>
            <div class="footer__column">
                <h5>Support</h5>
                 <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-support-menu',
                            'menu_class' => 'footer-menu'
                            )
                        );  ?>
            </div>
            <div class="footer__column">
                <h5>Support</h5>
                 <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-company-menu',
                            'menu_class' => 'footer-menu'
                            )
                        );  ?>
            </div>
            <div class="footer__column">
                <div class="sub__footer__message">
                    <i class="bi bi-envelope-plus-fill"></i>
                    <p>Stay up to date with the latest from GoddeLean:</p>
                </div>    
                <form id="newsSubscribeForm">
                    <input type="text" id="tb_email" placeholder="Enter your e-mail:"/ >
                    <input type="button" id="btnSubscribe" value="Sign-up"/>
                </form>
            </div>
            
        </div>
    </body>
</html>