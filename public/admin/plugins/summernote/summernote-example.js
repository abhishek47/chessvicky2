// Summernotes
// ===========
if($('.summernote-fixed-height').length) {
	$('.summernote-fixed-height').summernote({
		height: 300,
		dialogsInBody: true,
		dialogsFade: true,
		 onImageUpload: function(files, editor, welEditable) {
		 		 console.log("UPLOADING!!!");

                sendFile(files[0], editor, welEditable);
            }
	});
}

function sendFile(file, editor, welEditable) {
	        console.log(file);
            data = new FormData();
            data.append("file", file);
            $.ajax({
                data: data,
                type: "POST",
                url: "/image/upload",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                     $('#blog-body').summernote("editor.insertImage", url, 'filename');
                }
            });
        }

if($('.summernote-auto').length) {
	$('.summernote-auto').summernote({
		dialogsInBody: true,
		dialogsFade: true
	});
}

if($('.summernote-airmode').length) {
	$('.summernote-airmode').summernote({
		height: 300,
		tabsize: 2,
		airMode: true,
		dialogsInBody: true,
		dialogsFade: true
	});
}