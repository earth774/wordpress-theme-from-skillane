<?php

class WordpressThemeCourse_Walker_Comment extends Walker_Comment {

    /**
     * Outputs a single comment.
     *
     * @since 3.6.0
     *
     * @see wp_list_comments()
     *
     * @param WP_Comment $comment Comment to display.
     * @param int        $depth   Depth of the current comment.
     * @param array      $args    An array of arguments.
     */
    protected function comment( $comment, $depth, $args ) {
        if ( 'div' === $args['style'] ) {
            $tag       = 'div';
            $add_below = 'comment';
        } else {
            $tag       = 'li';
            $add_below = 'div-comment';
        }

        $commenter          = wp_get_current_commenter();
        $show_pending_links = isset( $commenter['comment_author'] ) && $commenter['comment_author'];

        if ( $commenter['comment_author_email'] ) {
            $moderation_note = __( 'Your comment is awaiting moderation.' );
        } else {
            $moderation_note = __( 'Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.' );
        }
        ?>

        <<?php echo $tag; ?> <?php comment_class( $this->has_children ? 'parent' : '', $comment ); ?> id="comment-<?php comment_ID(); ?>">
        <?php if ( 'div' !== $args['style'] ) : ?>
            <div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
        <?php endif; ?>

        <div class="comment">
            <div class="userpic d-none d-sm-block">
                <?php
                if ( 0 != $args['avatar_size'] ) {
                    echo get_avatar( $comment, $args['avatar_size'] );
                }else{
                    echo '<span class="icon icon-user"></span>';
                }
                ?>
            </div>
            <div class="text">
                <div class="meta">
                    <a href="#" class="meta-author"><b><?php echo get_comment_author( $comment ); ?></b></a>
                    <span class="meta-date"><i class="icon icon-clock3"></i><?php echo get_comment_date( 'd M, Y', $comment ); ?></span>
                </div>
                <?php
                comment_text(
                    $comment,
                    array_merge(
                        $args,
                        array(
                            'add_below' => $add_below,
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth'],
                        )
                    )
                );
                ?>



                <?php
                $reply = get_comment_reply_link(
                    array_merge(
                        $args,
                        array(
                            'add_below' => $add_below,
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth'],
                            'before'    => '',
                            'after'     => '',
                            'reply_text'     => '<i class="icon-reply-black"></i>Reply',

                        )
                    )
                );

                $reply = str_replace('comment-reply-link', 'reply comment-reply-link', $reply);
                echo $reply;
                ?>
            </div>
        </div>

        <?php if ( 'div' !== $args['style'] ) : ?>
            </div>
        <?php endif; ?>
        <?php
    }

}
    