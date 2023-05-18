<!-- Js file  -->
<script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script src="{{ asset('frontend/assets/js/front/custom.js') }}"></script>
<script src="{{ asset('frontend/assets/js/front/extra.js') }}"></script>
<script src="{{ asset('frontend/assets/js/front/sweat_aleart.js') }}"></script>
<script src="{{ asset('frontend/assets/js/common.js') }}"></script>
{{-- toastr --}}
<script src="{{ asset('admin/js/toastr.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script> --}}

<script>
$(document).ready(function() {
    $("[data-fancybox='gallery']").fancybox({
        maxWidth: 200, // Set the maximum width of the modal window
        maxHeight: 200, // Set the maximum height of the modal window
        fitToView: false, 
        buttons: [
            "close",
            "share",
            "slideShow",
            // "fullScreen",
            "thumbs",
            "arrowLeft",
            "arrowRight"
        ],
        loop: true,
        afterShow: function(current, instance) {
            // Automatically start the slideshow after showing the image
            instance.slideShow.start();
        }
    });
});

</script>
{{-- fancybox end  --}}

{{-- <script>
    $('#carouselExample').on('slide.bs.carousel', function(e) {

var $e = $(e.relatedTarget);
var idx = $e.index();
var itemsPerSlide = 4;
var totalItems = $('.carousel-item').length;

if (idx >= totalItems - (itemsPerSlide - 1)) {
    var it = itemsPerSlide - (totalItems - idx);
    for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
            $('.carousel-item').eq(i).appendTo('.carousel-inner');
        } else {
            $('.carousel-item').eq(0).appendTo('.carousel-inner');
        }
    }
}
});

$('#carouselExample').carousel({
interval: 2000
});

</script> --}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: '7',
        spaceBetween: 5,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // autoplay: {
        //     delay: 2000, // Change the delay value (in milliseconds) as needed
        // },
    });
</script>


<script>
    (function($) {
        "use strict";
        $(document).ready(function() {
            // Image Zoom
            $('.zoomable-image').click(function() {
                var imageSrc = $(this).attr('src');
                $('#fullscreenImage').attr('src', imageSrc);
                $('#fullscreenModal').fadeIn();
            });

            // Video Play
            $('.zoomable-video').click(function() {
                var videoSrc = $(this).find('source').attr('src');
                $('#fullscreenVideo').attr('src', videoSrc);
                $('#fullscreenModal').fadeIn();
            });

            // Close Modal
            $('.close').click(function() {
                $('#fullscreenModal').fadeOut();
                // Stop video playback when closing the modal
                $('#fullscreenVideo').get(0).pause();
            });

            // Event listener for the modal button
            $('.modal-button').click(function() {
                var storyId = $(this).data('id');

                // Make an AJAX request to fetch the story details based on the ID
                $.ajax({
                    url: '/stories/' + storyId,
                    method: 'GET',
                    success: function(response) {
                        var story = response.story;
                        var image = story.image_path;
                        var video = story.video_path;

                        // Update the modal content based on image or video path
                        $('#modal-image').attr('src', image);
                        $('#modal-video').attr('src', video);

                        // Open the modal
                        $('#myModal').modal('show');
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    })(jQuery);
</script>


<script>
    function openModal(id, type) {
        // console.log(type);
        // Make an AJAX request to fetch the story details based on the ID
        $.ajax({
            url: '/admin/today-story/datashow/' + id,

            method: 'GET',

            success: function(response) {
                // console.log(response);


                if (type === 'image') {
                    // source = '{{ asset('uploaded_files/story') }}' + "/" + response.image;
                    // $('#modal-image').attr('src', source);
                    
                    // $('#myModal').on('shown.bs.modal', function() {
                    //     $('#modal-image').show();
                    //     $('#modal-video').hide();

                     

                    // });

                    // $('#myModal').show();

                    var source ='{{ asset('uploaded_files/story') }}' + "/" + response.image;
    $('#modal-image').attr('src', source);
    $('#modal-video').hide();
    $('#modal-image').show();

    // Start autoplaying the images
    var autoplayInterval = setInterval(function() {
        // No need to change the image since there's only one
    }, 3000); // Change image every 3 seconds

    // Stop autoplay when modal is closed
    $('.close').click(function() {
        clearInterval(autoplayInterval);
    });




                    
                }

                // Update the modal content based on the image or video source
                $('#modal-image').attr('src', source);
                $('#modal-video').attr('src', source);

                // Open the modal
                $('#myModal').modal('show');
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }
</script>








@if (@$errors->any())
    <script>
        "use strict";
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    </script>
@endif
@if (env('APP_DEMO') == true)
    {{-- for sandbox sslcommerz --}}
    <script>
        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
@else
    {{-- for live sslcommerz --}}
    <script>
        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36)
                    .substring(7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
@endif
