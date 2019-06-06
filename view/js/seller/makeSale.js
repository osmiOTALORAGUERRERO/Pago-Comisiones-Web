let add = document.getElementsByClassName('add')
let inpTotalSale = document.getElementById('totalSale')
let inpChosenProducts = document.getElementById('chosenProducts')
let totalSale = 0;
let chosenProducts = new Array();
let saleDetail = ''
for (var i = 0; i < add.length; i++) {
  add[i].addEventListener('click', function(e) {
    row = this.parentElement.parentElement
    cols = row.getElementsByTagName('td')
    totalSale += parseInt(cols[3].innerHTML)
    chosenProducts.push(cols[1].innerHTML)
    saleDetail += `Producto ${cols[1].innerHTML} ..... $ ${cols[3].innerHTML}`
    inpTotalSale.value = totalSale
    inpChosenProducts.value = chosenProducts.length
  });
}

$(document).ready(function () {
  $('.form').submit(function (e) {
    let products = {productos: JSON.stringify(chosenProducts)}
    let detail = {detalle : saleDetail}
    let data = $(this).serialize() + '&' + $.param(products) + '&' + $.param(detail)
    $.ajax({
      data: data,
      url: 'makeSale.php',
      type: 'POST',
      success: function (res) {
        var jsonData = JSON.parse(res)
        if (jsonData.success) {
          let info = document.getElementById('info')
          info.classList.value = 'alert alert-info'
          info.innerHTML = 'Venta realizada exitosamente'
        } else {
          let info = getElementById('info')
          info.classList.value = 'alert alert-info'
          info.innerHTML = 'No se pudo realizar el registro, pruebe de nuevo'
        }
      }
    })
    return false
  })
})
