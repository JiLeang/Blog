@extends('layouts.manage')
@section('content')
<h3>Laravel 5.4 : Upload multiple file using dropzone</h3>
<button id="submit-all">Submit all files</button>
{!! Form::open([ 'route' => [ 'dropzone.uploadfile' ], 'files' => true, 'class' => 'dropzone','id'=>"image-upload",
    'enctype' =>"multipart/form-data" ]) !!}
{!! Form::close() !!}
@endsection
@section('scripts')
    <script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize  : 2,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            // Prevents Dropzone from uploading dropped files immediately
            autoProcessQueue: false,
            parallelUploads: 10,
            maxFiles: 5,




            init: function() {
                var submitButton = document.querySelector("#submit-all")
                imageUpload = this; // closure

                submitButton.addEventListener("click", function() {
                    imageUpload.processQueue(); // Tell Dropzone to process all queued files.
                });

                // You might want to show the submit button only when
                // files are dropped here:

                this.on("addedfile", function() {
                    // Show submit button here and/or inform user to click it.
                });

            }
        };
    </script>
@endsection