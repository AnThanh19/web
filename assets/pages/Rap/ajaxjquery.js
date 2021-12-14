function load_ajax_xml(dc){
    $.ajax ({
        url= 'list.php',
        type:'post',
        data: {
            diachi : dc
        },
        dataType: 'xml',
        success: function(result){
            var str='';
            str='';
            $(result).find('diachi').each(function(key,val){
                str
            }
            )
        }
    }

    )
}