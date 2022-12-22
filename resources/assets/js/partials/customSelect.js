// import 'flowbite'
$(function(){
    if($('.custom-dropdown').length){

        // get state and city on page load from api
        $(document).ready(function() {
            getState();
        });

        // // get state
        function getState(){
            axios.get('/api/v1/states')
            .then(function (response) {
                const data = response.data
                var li = $("#state").find('.dropdown-item').last()
                for(var i = 0; i < data.length; i++){
                    var clone = li.clone();
                    clone.attr('data-value', data[i].code)
                    clone.text(data[i].state)
                    $('#state ul').append(clone)
                }
                // get city for first state on load page
                getCity(data[0].code)
            }).catch(function (error) {
                console.error(error);
            });

             
        }
        
        // get city
        function getCity(state){
            axios.get('/api/v1/' + state + '/cities')
            .then(function (response) {
                const data = response.data
                var li = $("#cities").find('.dropdown-item').last()
                $("#cities li").not(':first').remove()
                for(var i = 0; i < data.length; i++){
                    var clone = li.clone();
                    clone.attr('data-value', data[i])
                    clone.text(data[i])
                    $('#cities ul').append(clone)
                }
            }).catch(function (error) {
                console.error(error);
            });

           
        }
        
        // handle click toggle dropdown menu
        $(document).on('click', '.custom-dropdown-btn', function(event){
            event.stopPropagation();
            var parent = $(this).parent('.custom-dropdown')
            // parent.toggleClass('show')
            $('.custom-dropdown-menu').not($(this)).slideUp();
            var dropdownMenu = parent.find('.custom-dropdown-menu')
            var visible = dropdownMenu.is(':visible')
            if(!visible){
                dropdownMenu.slideDown('slow');
                parent.addClass('show')
            } else {
                dropdownMenu.slideUp();
                parent.removeClass('show')
            }

        })

        $(document).on('click', '.dropdown-item', function(event){
            var text = $(this).text()
            var value = $(this).attr('data-value')
            var dropdownMenu = $(this).closest('.custom-dropdown-menu')
            var dropdown = dropdownMenu.parent('.custom-dropdown')
            var input = dropdown.find('input')
            input.attr('value', value)
            dropdown.find('.custom-dropdown-btn').find('span').text(text)
            dropdown.removeClass('show')
            dropdownMenu.slideUp('fastest');

            // get city of state
            if(dropdownMenu.attr('id') == 'state'){
                getCity(value)
            }
        })

        // handle click outside to close dropdown menu
        $('html').on('click', function(event){
            var dropdown = $('.custom-dropdown')
            if(dropdown.hasClass('show')){
                dropdown.removeClass('show')
                dropdown.find('.custom-dropdown-menu').slideUp('fastest')
            }
        })
           
    }
    
})