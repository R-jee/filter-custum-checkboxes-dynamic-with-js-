var checked_boxes = jQuery(".filter_rc_nws ul li").length;
setInterval(()=>{
    if( jQuery('.filter_rc_nws ul li input:checked').length  == 0 ){
        jQuery(".post-archive-content .filter-items-nws").css('display', 'block');
    }
},1000);
for (let index = 0; index < checked_boxes; index++) {
    var check_uniq_id = null;
    var check_uniq_id = jQuery(jQuery(".filter_rc_nws ul li")[index]).attr('data-cat');

    jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").on("click",function() {

        if (jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").is(":checked")) {
            jQuery(".post-archive-content .filter-items-nws[data-cat-"+ check_uniq_id +"='true']").css('display', 'block');
        } else if (jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").is(":not(:checked)")) {
            jQuery(".post-archive-content .filter-items-nws[data-cat-"+ check_uniq_id +"='true']").css('display', 'none');
        }
        for (let index = 0; index < checked_boxes; index++) {
            var check_uniq_id = null;
            var check_uniq_id = jQuery(jQuery(".filter_rc_nws ul li")[index]).attr('data-cat');
            if (jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").is(":checked")) {
                jQuery(".post-archive-content .filter-items-nws[data-cat-"+ check_uniq_id +"='true']").css('display', 'block');
            } else if (jQuery(".filter_rc_nws ul li[data-cat='"+ check_uniq_id +"'] input").is(":not(:checked)")) {
                jQuery(".post-archive-content .filter-items-nws[data-cat-"+ check_uniq_id +"='true']").css('display', 'none');
            }
        }
    });
}
