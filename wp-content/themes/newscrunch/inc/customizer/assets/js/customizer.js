jQuery( document ).ready(function($) {
    "use strict";
    /**
     * Dropdown Select2 Custom Control
     *
     * @author Anthony Hortin <http://maddisondesigns.com>
     * @license http://www.gnu.org/licenses/gpl-2.0.html
     * @link https://github.com/maddisondesigns
     */

    jQuery('.customize-control-dropdown-select2').each(function(){
        jQuery('.customize-control-select2').select2({
            allowClear: true
        });
    });

    jQuery(".customize-control-select2").on("change", function() {
        var select2Val = jQuery(this).val();
        jQuery(this).parent().find('.customize-control-dropdown-select2').val(select2Val).trigger('change');
    });

});

(function($) {
    $( function() {

        var t=$('#hide_show_news_highlight').val();
        if(t==false){
            $("#customize-control-news_highlight_dropdown_post_title").style.display = "none";
        }
        if($("#__customize-input-newscrunch_highlight_search_option").val()=='category')
        {
            $("#customize-control-news_highlight_dropdown_category").show();
            $("#customize-control-news_highlight_num_posts").show();
            $("#customize-control-news_highlight_dropdown_post_title").hide();  
        }
        else if($("#_customize-input-newscrunch_highlight_search_option").val()=='title')
        {
            $("#customize-control-news_highlight_dropdown_category").hide();
            $("#customize-control-news_highlight_num_posts").hide();
            $("#customize-control-news_highlight_dropdown_post_title").show();
        }
        wp.customize('newscrunch_highlight_search_option', function(control) {
            control.bind(function( search_options ) {
                if(search_options=='category')
                {
                    $("#customize-control-news_highlight_dropdown_category").show();
                    $("#customize-control-news_highlight_num_posts").show();
                    $("#customize-control-news_highlight_dropdown_post_title").hide();
                }
                else if(search_options=='title')
                {
                    $("#customize-control-news_highlight_dropdown_category").hide();
                    $("#customize-control-news_highlight_num_posts").hide();
                    $("#customize-control-news_highlight_dropdown_post_title").show();
                }
                else
                {
                    $("#customize-control-news_highlight_dropdown_category").show();
                    $("#customize-control-news_highlight_num_posts").show();
                    $("#customize-control-news_highlight_dropdown_post_title").hide(); 
                }
            });
        });


         var value = $('input[name="newscrunch_logo_view"]:checked').val();
        if(value == 'desktop') {
            $('#customize-control-newscrunch_logo_length').show();
            $('#customize-control-newscrunch_logo_tablet_length').hide();
            $('#customize-control-newscrunch_logo_mobile_length').hide();
        } 
        else if(value == 'tablet') {
            $('#customize-control-newscrunch_logo_tablet_length').show();
            $('#customize-control-newscrunch_logo_length').hide();
            $('#customize-control-newscrunch_logo_mobile_length').hide();
        } 
        else if(value == 'mobile') {
            $('#customize-control-newscrunch_logo_mobile_length').show();
            $('#customize-control-newscrunch_logo_length').hide();
            $('#customize-control-newscrunch_logo_tablet_length').hide();  
        }else{
            $('#customize-control-newscrunch_logo_length').show();
            $('#customize-control-newscrunch_logo_tablet_length').hide();
            $('#customize-control-newscrunch_logo_mobile_length').hide();
        }
        
        wp.customize('newscrunch_logo_view', function(control) {
            control.bind(function( logo_view ) {
                if(logo_view=='desktop')
                {
                    $('#customize-control-newscrunch_logo_length').show();
                    $('#customize-control-newscrunch_logo_tablet_length').hide();
                    $('#customize-control-newscrunch_logo_mobile_length').hide();
                }
                else if(logo_view=='tablet')
                {
                    $('#customize-control-newscrunch_logo_length').hide();
                    $('#customize-control-newscrunch_logo_tablet_length').show();
                    $('#customize-control-newscrunch_logo_mobile_length').hide();
                }
                else if(logo_view=='mobile')
                {
                    $('#customize-control-newscrunch_logo_length').hide();
                    $('#customize-control-newscrunch_logo_tablet_length').hide();
                    $('#customize-control-newscrunch_logo_mobile_length').show();
                }
                else
                {
                    $('#customize-control-newscrunch_logo_length').show();
                    $('#customize-control-newscrunch_logo_tablet_length').hide();
                    $('#customize-control-newscrunch_logo_mobile_length').hide();  
                }
            });
        });
    });
})(jQuery)