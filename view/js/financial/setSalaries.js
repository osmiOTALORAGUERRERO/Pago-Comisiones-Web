let btnCalculateCommission = document.getElementById('calculateCommission')
let btnGeneratePDF = document.getElementById('genPDF')
let seller = document.getElementById('seller')
let baseBalance = document.getElementById('baseBalance')
let percentageCommission = document.getElementById('percentageCommission')
let info = document.getElementById('info')
btnCalculateCommission.addEventListener('click', function(e) {
  if (baseBalance.value.length !== 0 && percentageCommission.value.length !== 0) {
    if (parseInt(percentageCommission.value) >= 0 && parseInt(percentageCommission.value) <= 100) {
      let idSeller = seller.value
      let rowSeller = document.getElementById(idSeller)
      let colsSeller = rowSeller.getElementsByTagName('td')
      colsSeller[4].innerHTML = baseBalance.value
      colsSeller[5].innerHTML = commissionValue(parseFloat(percentageCommission.value), parseFloat(colsSeller[3].innerHTML))
      info.classList.value = 'alert alert-info'
      info.innerHTML = 'Commission calculated'
    } else {
      info.classList.value = 'alert alert-info'
      info.innerHTML = 'The percentage of the commission must be between 0 and 100'
    }
  } else {
    info.classList.value = 'alert alert-info'
    info.innerHTML = 'Fill in all the fields'
  }
});

btnGeneratePDF.addEventListener('click', function(e) {
  var doc = new jsPDF();
  doc.autoTable({html: '.table'});
  doc.save('reportCommissions.pdf');
});

function commissionValue(percentage, totalSales) {
  if(isNaN(totalSales)){
    totalSales = 0;
  }
  let commission = 0;
  if(percentage > 10){
    commission = ((totalSales*percentage/100) - ((totalSales*percentage/100) * 0.07));
  }else{
    commission = totalSales*percentage/100;
  }
  return commission.toFixed(2);
}
