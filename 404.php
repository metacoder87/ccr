<?php get_header(); ?>

<div class="container-404">
    <h2 class="page-heading">Oh no! What happened? 404?</h2>
    <img src="http://source.unsplash.com/640x480/?race-cars" alt="">

    <h3>Sorry friend, I think you're lost. Please try the following links.</h3>
    <ul>
        <li>
            <a href="<?php echo site_url('/team'); ?>">Learn about the Team</a>
        </li>
        <li>
            <a href="<?php echo site_url('/schedule'); ?>">Schedule of upcoming Races</a>
        </li>
        <li>
            <a href="<?php echo site_url('/blog'); ?>">Check out the Blog</a>
        </li>
        <li>
            <a href="<?php echo site_url('/contact'); ?>">Contact the CCR team</a>
        </li>
        <li>
            <a href="<?php echo site_url('/photos'); ?>">Photo Gallery</a>
        </li>
        <li>
            <a href="<?php echo site_url(''); ?>">Just take me Home</a>
        </li>
    </ul>
</div>

<?php get_footer(); ?>