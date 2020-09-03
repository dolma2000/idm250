<div class="header_color"></div>


<!-- SUB NAV BAR -->
<div class="sub-nav-bar">

        <ul class="sub-nav-bar-content">

            <?php $categories =  get_categories();  ?>
            <?php foreach ($categories as $key => $category) : ?>
            <li>
                
                <a href="<?php echo get_category_link($category->term_id) ?>">
                
                    <p><?php echo $category->name; ?></p> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo $category->slug; ?>_icon.svg" alt="">

                </a>
            </li>
            <?php endforeach; ?>

        </ul>

</div>


<!-- SEARCH BAR -->
<div class="search-bar">
    <form action="/idm250/" method="get">
        <input type="text" name="s" id="searchField" placeholder="Search to explore the creative mind" value="<?php the_search_query(); ?>">
        <button type="submit"><div class="w3-jumbo"><i class="fa fa-search"></i></div></button>
    </form>
</div>
