function loadProg() {

    $('#prog').change(async function () {
        var selectedOption = $(this).val();
        let url = "/api/pae/student/" + selectedOption;

        let promis = await fetch(url)
            .then((response) => response.json());


        let $tableBody = $('#content').find('tbody');
        $tableBody.empty();

        $('#content').append($("<tr> <th> Sigle </th> <th> Cours </th> <th> Crédits </th></tr>"))

        Object.entries(promis).forEach(([key, value]) => {
           let token = $('meta[name="csrf-token"]').attr('content')
            let chemin = '/pae/student/delete/' + value.id
            $('#content').append($("<tr> <td>" + value.id + "</td> <td> " + value.title + "</td><td>" + value.credits +
                "</td> <td> <form action=" + chemin + " method='POST'> <input type='hidden' name='_token' value='"+ token+"'> <input type ='hidden' name='_method' value='delete'> <button> supprimer </button> </form> </td> </tr>"));

        });
    })
};

$(document).ready(() => {
    loadProg();
})
