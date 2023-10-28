<?php
/*
Template Name: Archive
*/
?>

<?php get_template_part('template-parts/header');?>
    <main class = "contentStart">
        <section class="hero__container" id="archiveHero">
            <div class="content-container">
                <h1>Lean and Digital Transformation Playbook</h1>
                <h6>Stay updated with technology insights, best practices, and ideas curated & written by experts.</h6>
            </div>
        </section>
        <section class="section__Archive">
            <div class="filtersContainer">
                <div class="formElementContainer" id="searchContainer">
                    <label for="txtSearch" id="lblSearch">Search the blog:</label>
                    <input id="txtSearch" class="textbox"/>
                </div>
                <div class="formElementContainer" id="catSelectContainer">
                    <label for="ddl_Category" id="lblCategory">Select a category:</label>
                        <select id="ddl_Category" name="category">
                            
                            <?php
                            $categories = get_categories(); // Get all categories

                            foreach ($categories as $category) {
                                echo '<option value="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</option>';
                            }
                            ?>
                        </select>
                </div>
                  
                </div>
            <div class="container">
                
                <?php get_template_part('includes/section','archive');?>
            </div>
        </section>
    </main>
<?php get_template_part('template-parts/footer');?>