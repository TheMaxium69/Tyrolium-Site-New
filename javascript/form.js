jQuery(document).ready(function($) {
    function select_changed(){
        $("div[id*='form-']").each(function(){
            $(this).removeClass('form-visible');
        });
        $("select[name='raison']").each(function(){
            var selected = $(this).val();
            $('#'+selected).addClass('form-visible');
        });
        $("select[name='prestation']").each(function(){
            var selected = $(this).val();
            $('#'+selected).addClass('form-visible');
        });
    }

    $("select[name='raison']").change(function(){
        select_changed();
    });
    $("select[name='prestation']").change(function(){
        select_changed();
    });
});