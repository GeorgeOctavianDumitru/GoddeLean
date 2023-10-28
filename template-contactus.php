<?php
/*
Template Name: Contact Us
*/
?>
<?php get_template_part('template-parts/header');?>
<main class="contentStart">
    <section class="hero__container" id="contactUsHero">
       <div class="content-container">
            <div class="contact_encouragement_container">
                
                <h3>Unlock the potential of your projects today!</h3>
                <p> 
                    Whether you're looking for a free quote on customized web design and development,
                    mobile app creation, or back-end services to meet your unique requirements, we've got you covered. </p>
                <p>Don't hesitate - fill out our contact form now and take the first step 
                    toward bringing your ideas to life with the personalized attention and 
                    expertise of a one-person team dedicated to your success</p> 
            </div>
            <div class="form-container">
                <div class="encouragement__Logo">
                    <h1>Let's Talk!</h1>
                   <div class="circle__div">
                     <i class="bi bi-chat-square-dots-fill"></i>
                   </div>

                </div>
                <div class="encouragement__slogan"> 
                    <p>
                        Have a business idea? Our team of software experts can assist you 
                        in creating a customized solution to achieve your specific goals
                    </p>    
                </div>
                <form id="contactUs_Form">
                    <div class="form__inputPair">
                        <label class="form__label" id="lblName" for="txtName">Name:</label>
                        <input type="text" class="form_tb" id="txtName"/>
                        
                    </div>
                    <div class="form__inputPair">
                        <label class="form__label" id="lblName" for="txtSurname">Surname:</label>
                        <input type="text" class="form_tb" id="txtSurname"/>
                    </div>
                    <div class="form__inputPair">
                        <label class="form__label" id="lblName" for="txtPhone">Phone:</label>
                        <input type="tel" class="form_tb" id="txtPhone" name="phone" autocomplete="off"/>
                    </div>

                    <div class="form__inputPair">
                        <label class="form__label" id="lblName" for="txtEmail">E-mail:</label>
                        <input type="text" class="form_tb" id="txtEmail"/>
                    </div>
                    <div class="form__inputPair">
                        <label class="form__label" id="lblName" for="txtMessage">Message:</label>
                        <textarea rows="5" cols ="60" id="txtMessage"></textarea>
                         <input type="button" class="btn btn-success" value="Send!" id="submitButton" />
                    </div>
                    
                   
                </form>
            </div>
       </div>
    </section>
</main>


<?php get_template_part('template-parts/footer');?>