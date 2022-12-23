import './bootstrap';

// custom select
import './partials/customSelect'
import './partials/customDrpdown'
import Trix from "trix"


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
            if($('.features-form').length >= 1){
                cloneFeatures.find('.remove-row').removeClass('hidden')
            } else {
                cloneFeatures.find('.remove-row').addClass('hidden')
            }
            cloneFeatures.find('input').val('')
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

    if($('.collapse-btn').length){
        $(document).on('click', '.collapse-btn', function(){
            $('#admin').toggleClass('collapse-sidebar')
        })
    }

    if($('.editor').length){
        var element = document.querySelector("trix-editor")
        element.editor

        var HOST = "/api/v1/image-upload"

        addEventListener("trix-attachment-add", function(event) {
            if (event.attachment.file) {
                uploadFileAttachment(event.attachment)
            }
            // var attachement = event.attachment.file
            // console.log(attachement)
            // for(let i=0; i<attachement.lenght; i++){
            //     console.log(attachement.file)
            // }
        })

        function uploadFileAttachment(attachment) {
            uploadFile(attachment.file, setProgress, setAttributes)

            function setProgress(progress) {
                attachment.setUploadProgress(progress)
            }

            function setAttributes(attributes) {
                attachment.setAttributes(attributes)
            }
        }

        function uploadFile(file, progressCallback, successCallback) {
            var key = createStorageKey(file)
            var formData = createFormData(key, file)
            var xhr = new XMLHttpRequest()

            xhr.open("POST", HOST, true)

            xhr.upload.addEventListener("progress", function(event) {
                var progress = event.loaded / event.total * 100
                progressCallback(progress)
            })

            xhr.addEventListener("load", function(event) {
            if (xhr.status == 200) {
                    var attributes = {
                        url:  xhr.response,
                        href: xhr.response
                    }
                    successCallback(attributes)
                }
            })

            xhr.send(formData)
        }

        function createStorageKey(file) {
            var date = new Date()
            var day = date.toISOString().slice(0,10)
            var name = date.getTime() + "-" + file.name
            return [ "tmp", day, name ].join("/")
        }

        function createFormData(key, file) {
            var data = new FormData()
            data.append("key", key)
            data.append("Content-Type", file.type)
            data.append("file", file)
            return data
        }
    }

})