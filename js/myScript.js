// Delete Button Work
$('.dlt-btn').on('click',function(){
    if(confirm('Are you want to delete the note?')){
        let id = $(this).data('id');
        $('#noteID').val(id);
        $('#deleteForm').submit();
    }else{
        return false;
    }
});

// Edit Button Work
$('.edit-btn').on('click',function(){
    let id = $(this).data('id');
    $('#nID').val(id);
   $('#editForm').submit();
});