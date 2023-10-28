<?php
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                $comments_number = get_comments_number();
                if ( '1' === $comments_number ) {
                    printf( esc_html__( '1 Comment', 'your-theme-textdomain' ) );
                } else {
                    printf(
                        esc_html( _nx( '%1$s Comments', '%1$s Comments', $comments_number, 'comments title', 'your-theme-textdomain' ) ),
                        number_format_i18n( $comments_number )
                    );
                }
            ?>
        </h2>

        <ul class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ul',
                    'short_ping'  => true,
                    'avatar_size' => 60,
                ) );
            ?>
        </ul>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav id="comment-nav-below" class="comment-navigation" role="navigation">
                <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'your-theme-textdomain' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'your-theme-textdomain' ) ); ?></div>
            </nav>
        <?php endif; ?>
    <?php endif; ?>

    <?php
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="no-comments">
            <?php esc_html_e( 'Comments are closed.', 'your-theme-textdomain' ); ?>
        </p>
    <?php endif; ?>

    <?php
        $comment_form_args = array(
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'title_reply_after'  => '</h2>',
        );

        comment_form( $comment_form_args );
    ?>
</div>
