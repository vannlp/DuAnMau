window.addEventListener("load", function () {
  $.get("../thongke/ajax.php", { name: "chart" }, function (data) {
    var arr = [];
    data = JSON.parse(data);
    arr = data;
    // console.log(arr);
    var tenChart = [];
    arr.forEach(function (data, index) {
      tenChart.push(data[1]);
    });
    console.log(arr);
    var backgr = [];
    var duLieu = [];
    arr.forEach(function (data) {
      var i = Math.round(Math.random()*255);
      var y = Math.round(Math.random()*255);
      var z = Math.round(Math.random()*255);
      
      backgr.push("rgba("+ z +", "+ y +", " + i + ", 0.2)");
      duLieu.push(data[2]);
    });
    // console.log(duLieu)
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "pie",
      data: {
        labels: tenChart,
        datasets: [
          {
            label: "# of Votes",
            data: duLieu,
            backgroundColor: backgr,
            borderColor: backgr,
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });
  });
});
