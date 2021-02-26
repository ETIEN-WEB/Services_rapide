
$(document).ready(function(){
    var gprodcatid;
    $(document).on('change','.productcategory', function(){
    var cat_id=$(this).val();
    
    //var div=$(this).parent().parent().parent().parent().parent();
    //div.css('background-color', 'red');   
    //var op= " ";

    $.ajax({
        type:'get',
        url:'{!!URL::to("findProductName")!!}', 
        data:{'id':cat_id},
        success:function(data){
            console.log(data);
            $('#productname').empty();
                        /*
                        $.each(data.subcategories[0].subcategories, function (index,subcategory){
                            $('#subcategory').append('<option value="'+subcategory.id+'">'+subcategory.nom+'</option>');
                        })
                        */           
            for(var i=0; i<data.length; i++){
                $('#productname').append('<option value="'+data[i].id+'">'+data[i].nom_sous_categorie+'</option>');
            }

        },
        error:function(){

        }
    });
});
});
