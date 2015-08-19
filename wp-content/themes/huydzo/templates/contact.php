<?php
    /*
        Template Name: Contact
    */
?>
<?php get_header(); ?>
    <div id="main" class="col-md-8" role="main">
        <div class="row">
            <h1>Keep in Touch</h1>
            <p>
                Aenean dictum pharetra nibh, sodales luctus felis aliquet at. Nulla vulputate venenatis orci,
                a laoreet libero vehicula ac. Duis tempor rhoncus quam, at blandit nulla egestas vitae. Required fields are marked *
            </p>

            <form id="enews-contact-form" method="post" action="#">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <label>Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="name" maxlength="80" />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-4">
                        <label>Email <span class="font-required">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="email" maxlength="225">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-4">
                        <label>Subject</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="subject">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-4">
                        <label>Message <span class="font-required">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <textarea name="message"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <input type="submit" name="submit" value="Send Message">
                </div>

                <div class="data-status"></div> <!-- data submit status -->
            </form>

        </div>
    </div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
