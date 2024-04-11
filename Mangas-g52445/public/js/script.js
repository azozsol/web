function showDetails() {

    $('#a').click(async function (event) {
        event.preventDefault()
        var id = $(this).data('link')
        let url = "/api/serie/" + id + "/charcters";


        let promis = await fetch(url)
            .then((response) => response.json())
        
        Object.entries(promis).forEach(([key, value]) => {
           console.log(id);
            $('#div+'.id).append($("<p>" + value.description + "</p>"))
        });
    });


}

$(document).ready(() => {
    showDetails();

})
