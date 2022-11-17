/*
! Cookie Codes Area
*/
const cookieContainer = document.querySelector(".cookie-container"),
          acceptButton = document.querySelector(".accept-btn"),
          rejectButton = document.querySelector(".reject-btn");

acceptButton.addEventListener("click", () => {
        cookie();
});

rejectButton.addEventListener("click", () => {
        cookie();
});

      function cookie(){
        cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
      }



setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 1000);





/*
! Google Chart API Area
*/

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([
    ['Month', 'G-1', 'G-2', 'G-3', 'G-3', 'G-4', 'G-5','G-7','G-8','G-9','G-10','G-11'],
    ['2017/18',  165,      938,         522,             998,           450,      614.6,        222,     432,   509,    5090,   1006],
    ['2019/20',  135,      1120,        599,             1268,          288,      682,          609,    367,    3409,   2340,   3451],
    ['2021/22',  157,      1167,        587,             807,           397,      623,            345,  458,    4560,   3421,   2341],
    ['2022/22',  139,      1110,        615,             968,           215,      609.4,        456,    234,    342,    1230,   1234,],
    ['2023/24',  136,      691,         629,             1026,          366,      569.6,         345,   1234,   1234,   2350,   1450]
  ]);

  var options = {
    title : 'Future Hope International School',
    vAxis: {title: 'Cups'},
    hAxis: {title: 'Month'},
    seriesType: 'bars',
    series: {5: {type: 'line'}}
  };

  var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}