<div class="comments-block mt-4 mt-lg-7">
    <h3><?php echo get_comments_number_text(); ?></h3>
    <?php
    
    wp_list_comments(
        array(
            'walker' => new WordpressThemeCourse_Walker_Comment(),
            'avatar_size' => 76,
            'style'       => 'div',
            'format' => 'xhtml',
        )
    );
    ?>
    
</div>

<div class="clearfix mt-3 mt-lg-4"></div>

<?php
comment_form(
    array(
        'logged_in_as'       => null,
        'title_reply'        => 'Leave a Reply',
        'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after'  => '</h3>',
        'fields' => array(
                'email' => '
                    <div class="mt-15 row">
                        <div class="col-md-8">
                            <label>Email*</label>
                            <input type="text" class="form-control" name="email" required="required">
                        </div>
                    </div>',
                'author' => '
                    <div class="mt-0 row">
                        <div class="col-md-8">
                            <label>Your name*</label>
                            <input type="text" class="form-control" name="author" required="required">
                        </div>
                    </div>',
        ),
        'comment_field' => '
            <div class="mt-15 row">
                <div class="col-md-10">
                    <label>Message*</label>
                    <textarea class="form-control" name="comment" rows="10" required="required"></textarea>
                </div>
            </div>',
        'submit_button' => '
            <div class="mt-3">
                <button type="submit" class="btn btn-primary %3$s" name="%1$s"><i class="icon-right-arrow"></i><span>%4$s</span><i class="icon-right-arrow"></i></button>
            </div>',
    )
);

?>
