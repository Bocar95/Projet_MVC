// Fonction qui permet de supprimer une chambre
const BASE_URL="http://localhost/Projet_BB"

$(document).on('click','#supprimer',function () {
    if (confirm("Do you want to delete?")){ // demande une confirmation de suppression
        $(this).parents("tr").remove(); // récupère le div parent à supprimer
        let id= $(this).parents('tr').find('td').eq(0).html(); // supprime le td du tr parent selectionné comportant l'id
        $.ajax({
            type:"POST",
            url: "deleteChambre",
            dataType:'text',
            data:{
                id_chambre: id
            },
            success:function (data) {
                if (data==="ok"){
                    alert('suppression réussi');
                }
            }
        });
    }
});