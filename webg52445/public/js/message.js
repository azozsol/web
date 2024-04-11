async function loadMessages() {

    $("submit").click(() => {
        console.log("button press...")
    })

    let idTh = getThreadId();
    let url = "/api/threads/" + idTh;
    let promis = await fetch(url)
        .then(response => response.json());

    Promise.all(promis).then(result => {
        result.forEach(indice => {
            let author = indice.author;
            let text = indice.text;
            $('#content').append($("<tr> <td>" + author + "</td> <td> " + text + "</td></tr>"));
        });
    })

}

$(document).ready(() => {
    loadMessages();
    //setTimeout(function () { window.location.reload(); }, 5000);
})