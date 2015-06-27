
<?php get_header(); ?>
<div class="row">
    <div id="main" class="col-md-8 image-preloader" role="main">
        <div class="row">
            <h1>Keep in Touch</h1>
            <p>Aenean dictum pharetra nibh, sodales luctus felis aliquet at. Nulla vulputate venenatis orci, a laoreet libero vehicula ac. Duis tempor rhoncus quam, at blandit nulla egestas vitae. Required fields are marked *</p>

            <form id="enews-contact-form" method="post" action="#">
                <label>Name</label>
                <input type="text" name="name" maxlength="80">
                <label>Email <span class="font-required">*</span></label>
                <input type="text" name="email" maxlength="225">
                <label>Subject</label>
                <input type="text" name="subject">
                <label>Message <span class="font-required">*</span></label>
                <textarea name="message"></textarea>
                <input type="submit" name="submit" value="Send Message">
                <div class="data-status"></div> <!-- data submit status -->
            </form>
        </div>
    </div>

    <div id="sidebar" class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
