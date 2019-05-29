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
        
      }else {
        alert("error en los datos")
      }
    }
  })
}
