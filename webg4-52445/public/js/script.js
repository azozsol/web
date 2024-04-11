function showDetails() {

    $('a').click(async function (event) {
        event.preventDefault()
        var id = $(this).data('link')
        let url = "api/repository/" + id


        let promis = await fetch(url)
            .then((response) => response.json())

        console.log(promis[0].name)
        $('#details').append($("<h3> Nom du Dépôt:</h3> <p>" + promis[0].name + "</p>" +
            "<h3> Nom de l'utilisateur:</h3> <p>" + promis[0].contr + "</p>" +
            "<h3> List des commits:</h3>"))
        Object.entries(promis).forEach(([key, value]) => {
            $('#details').append($("<ul><li>" + value.date + " " + value.message + "</li>"))

        });

    });


}

$(document).ready(() => {
    showDetails();

})
