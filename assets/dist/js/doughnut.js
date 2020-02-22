$(function(){

    //get the doughnut chart canvas
    var ctx1 = $("#doughnut");
  
    //doughnut chart data
    var data1 = {
      labels: ["Kendaraan Laik Jalan", "Kendaraan Tidak Laik Jalan"],
      datasets: [
        {
          label: "Uji Kendaraan",
          data: [100, 5],
          backgroundColor: [
            "#2ecc71",
            "#e74c3c"
          ],
          borderColor: [
            "#27ae60",
            "#c0392b"
          ],
          borderWidth: [1, 1]
        }
      ]
    };
  
    //options
    var options = {
      responsive: true,
      title: {
        display: true,
        position: "top",
        text: "Doughnut Chart",
        fontSize: 16,
        fontColor: "#111"
      },
      legend: {
        display: true,
        position: "bottom",
        labels: {
          fontColor: "#333",
          fontSize: 16
        }
      }
    };
  
    //create Chart class object
    var chart1 = new Chart(ctx1, {
      type: "doughnut",
      data: data1,
      options: options
    });
  
});