/* Javascript for the product details page, linked from the index page*/
$(document).ready(function (){
            $('.thumbnail_img').click(function(){
                // var src = $('#big_pic').attr('src');
                $('#big_pic').attr('src',$(this).children('img').attr('src'));
                $('.form-inline').children('div').children('#product_id').val($(this).children('.thumb_id').val());
                $('.form-inline').children('div').children('#price').val($(this).children('.thumb_price').val());

             });

            
            $(document).on('click', '.prod_thumbnails_similar', function(){
                $('#big_pic').attr('src', $(this).attr('src'));
                $('.form-inline').children('div').children('#product_id').val($(this).children('.other_id').val());
                // console.log($(this).attr('src'));

            })
            	
            	// return false;


            	
            
            });




	
