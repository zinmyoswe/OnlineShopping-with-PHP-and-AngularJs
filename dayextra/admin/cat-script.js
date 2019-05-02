$(document).ready(function(){

    // Delete 
    $('.delete').click(function(){
        var el = this;
        var id = this.id;
        var splitid = id.split("_");

        // Delete id
        var deleteid = splitid[1];
        
        // Confirm box
        bootbox.confirm("Are you sure want to delete?", function(result) {
            
            if(result){
                // AJAX Request
                $.ajax({
                    url: 'cat-ajaxfile.php',
                    type: 'POST',
                    data: { id:deleteid },
                    success: function(response){

                        // Removing row from HTML Table
                        $(el).closest('tr').css('background','tomato');
                        $(el).closest('tr').fadeOut(800, function(){      
                            $(this).remove();
                        });

                    }
                });
            }
            
        });
        
    });
});