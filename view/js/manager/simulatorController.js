let divSeason = document.getElementById('body')
let selectSeasons = document.getElementById('seasons')

selectSeasons.onchange = () => {
  let choose = selectSeasons.value
  $.ajax({
    data: {idSeason:choose},
    url: 'simulatorController.php',
    type: 'GET',
    success: function (res) {
      let jsonRes = JSON.parse(res)

      if (jsonRes.success) {
        alert('esta temporada requiere de ' + jsonRes['number-sellers'] + ' vendedores')
        let contentSeason = ''
        let distribution = parseInt(jsonRes['number-sellers'])/jsonRes.coordinators.length
        let counter = 0
        for (var i = 0; i < jsonRes.coordinators.length; i++) {
          contentSeason += '<div class="coordinator">'
          contentSeason += `<h3>Coordinador ${jsonRes.coordinators[i].name}</h3>`
            for (var j = 0; j < distribution; j++) {
              contentSeason += '<div class="seller">'
              contentSeason += `<label for="seller[${i}][${j}]"></label>`
              contentSeason += `<select class="select-seller form-control form-control-sm" name="seller[${i}][${j}]">`
              contentSeason += `<option disabled selected>Selecciona una opción</option>`
              for (var k = 0; k < jsonRes.sellers.length; k++) {
                contentSeason += `<option value="${jsonRes.sellers[k].id}">${jsonRes.sellers[k].name}</option>`
              }
              contentSeason += '</select>'
              contentSeason += '</div>'
            }
            contentSeason += '</div>'
            if (i >= jsonRes.coordinators.length - 1) {
              distribution = parseInt(jsonRes['number-sellers']) - counter
            }else{
              counter += distribution
            }
        }
        divSeason.innerHTML = contentSeason
      }else {
        alert("error en los datos")
      }
    }
  })
}
