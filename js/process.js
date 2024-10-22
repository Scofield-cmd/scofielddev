$(document).ready(function () {
    
  ShowUser() ;
  function ShowUser() {
    $.ajax({
      type: "post",
      url: "process.php",
      data: {action: "view"},
      success: function (response) {
        $("#orderTable").html(response);
          new DataTable('#example', {
              responsive: true
          
        });
      }
    });
  }

  // suppression
  $('body').on('click' , '.DeleteBtn' , function(e){
    e.preventDefault();
    var tr = $(this).closest('tr');
    del_id = $(this).attr('id');
  
      Swal.fire({
        title: "Vous etes sur de supprimer ce locataire ? " ,
        text: "Cette action est irreversible !",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Annuler",
        confirmButtonText: "Oui j'en suis sur !"
      }).then((result) => {
        if (result.isConfirmed) {
                $.ajax({
          type: "post",
          url: "process.php",
          data: {del_id: del_id},
          success: function (response) {
            Swal.fire({
              title: "Suppression !",
              text: "Suppression effectuées avec succés !",
              icon: "success"
            });
            ShowUser();
        }
      });
    
    }
   });
});


});