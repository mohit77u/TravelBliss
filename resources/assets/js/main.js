import './bootstrap';

// custom select
import './partials/customSelect'
import './partials/customDrpdown'

// import 'flowbite'
$(function(){
  
    // input type file to show preview images
    if($('input[type="file"]').length){
        $('input[type="file"]').on('change', function(e){
            e.stopPropagation();
            var files = e.target.files
            var imageDiv = $(this).parent('.image-upload').siblings().first()
            var imageContainer = imageDiv.find('.image-container')
            var imageTag = imageContainer.find('img').first()
            imageDiv.removeClass('hidden')
            for (var i = 0; i < files.length; i++) {
                var cloneImage = imageTag.clone();
                imageTag.removeClass('hidden')
                imageTag.attr('src', URL.createObjectURL(files[i]))
                cloneImage.appendTo(imageContainer)
            }
        })
    }

    // to add and remove features fields
    if($('.destination-features').length){
        $(document).on('click', '.add-row', function(){
            var featuresDiv = $('.destination-features').find('.features-form').first()
            var cloneFeatures = featuresDiv.clone();
            console.log($('.features-form').length)
            if($('.features-form').length >= 1){
                cloneFeatures.find('.remove-row').removeClass('hidden')
            } else {
                cloneFeatures.find('.remove-row').addClass('hidden')
            }
            cloneFeatures.appendTo($('.destination-features'))
        })

        $(document).on('click', '.remove-row', function(){
            $(this).parent('.features-form').remove();
            console.log($('.features-form').length)
            // if($('.features-form').length <= 2){
            //     cloneFeatures.find('.remove-row').removeClass('hidden')
            // } else {
            //     cloneFeatures.find('.remove-row').addClass('hidden')
            // }
            // cloneFeatures.appendTo($('.destination-features'))
        })
    }

    if($('.editor').length){
        tinymce.init({
            selector: '.editor',
            statusbar: false,
            // skin: 'oxide-dark',
            height: 450,
            menubar: false,
            plugins: 'preview autolink autosave code fullscreen link codesample insertdatetime advlist lists ',
            toolbar: 'undo redo | bold italic underline | fontsize blocks | alignleft aligncenter alignright alignjustify |  numlist bullist | forecolor removeformat | fullscreen  | link anchor',
            content_style: 'body { font-family: Rubik,sans-serif; font-size:16px; } .tox-edit-area { background-color: rgb(236, 253 ,245); }'
        });
    }

})