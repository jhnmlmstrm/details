<div class="comments">
	<?php $args = array(
	'walker'            => null,
	'max_depth'         => '',
	'style'             => 'ul',
	'callback'          => null,
	'end-callback'      => null,
	'type'              => 'all',
	'reply_text'        => '',
	'page'              => '',
	'per_page'          => '',
	'avatar_size'       => 0,
	'reverse_top_level' => null,
	'reverse_children'  => '',
	'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
	'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
); ?>

	<!-- struktur och kalla på kommentar -->
<?php
wp_list_comments($args, $comments);

$comments_args = array(

        'label_submit'=>'<?php _e("Skicka", "details"); ?>',
        'title_reply'=>'<?php _e("Skriv ett svar eller en kommentar", "details"); ?>',
        'comment_notes_after' => '',
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( '', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);

comment_form($comments_args);
?>
</div>