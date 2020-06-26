// Fonction qui permet de supprimer une chambre

$(document).on('click','#supprimer',function () {
    if (confirm("Do you want to delete?")){ // demande une confirmation de suppression
        $(this).parents("tr").remove(); // récupère le div parent à supprimer
        let id_chambre= $(this).parents('tr').find('td').eq(2).html(); // supprime le td du tr parent selectionné comportant l'id
       
        $.ajax({
            type:'post',
            url:'./libs/Router.php',
            dataType:'html',
            data:{
                id_chambre: id_chambre
            },
            success:function (data) {
                alert(data);
                if (data==="ok"){
                    alert('suppression réussi');
                }
            }
        });
    }
});