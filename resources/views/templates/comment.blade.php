<div class="comment">
	<div class="comment__header">
		<label class="comment__header_name">{{ $comment->author }}</label>
		<label class="comment__header_datetime">{{ $comment->created_at->timezone('Europe/Moscow') }}</label>
	</div>
	<p class="comment__text">{{ $comment->text }}</p>
</div>