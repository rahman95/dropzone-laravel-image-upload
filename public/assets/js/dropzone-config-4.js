var photo_counter = 0;
Dropzone.options.realDropzone = {

    uploadMultiple: true,
    parallelUploads: 100,
    maxFilesize: 8,
    autoProcessQueue: false,
    previewsContainer: '#dropzonePreview',
    previewTemplate: document.querySelector('#preview-template').innerHTML,
    addRemoveLinks: true,
    dictRemoveFile: 'Remove',
    dictFileTooBig: 'Image is bigger than 8MB',

    // The setting up of the dropzone
    init:function() {

      var myDropzone = this;

      $('#submitfiles').on("click", function (e) {

        e.preventDefault();
        e.stopPropagation();

        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var gender = $('#gender').val();

        if(fname.trim() == '' || lname.trim() == '' || gender.trim() ==''){
          alert("Fill in all fields");
        }else{
          if(myDropzone.getQueuedFiles().length > 0){
            myDropzone.processQueue();
          }else{
            alert('No Files to upload!');
          }
        }







      });

    }
}
