(function() {
	$(function() {
		var editor, mobileToolbar, toolbar;
		toolbar = ['title', 'bold', 'italic', 'underline', 'strikethrough', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'hr', '|', 'indent', 'outdent', 'emoji'];

		return editor = new Simditor({
		textarea: $('#editor'),
		placeholder: 'LAMP118BBS专用^_^...',
		toolbar: toolbar,
		pasteImage: false,
		emoji: {
				imagePath: '../../public/editor/images/emoji/'
			}
		});
	});
}).call(this);
