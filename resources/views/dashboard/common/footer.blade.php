<!-- Footer -->
  <footer class="site-footer">
     <div class="container-fluid">
        <div class="row">
          <div class="col-xl-4">
            <p>+00 000 000 000 <span>support@tutorsonline.com</span></p>
          </div>
          <div class="col-xl-4">
            <p class="text-center">All Rights Reserved by Tutors Online</p>
          </div>
          <div class="col-xl-4">
            <p class="text-end">Designed & Developed With Love by Coding Pro</p>
          </div>
        </div>
     </div>
  </footer>
  <!-- Footer -->

</div>


  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
  <script src="assets/dashboard_assets/js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



  <script type="text/javascript">
    // chart-2 Bar chart
  var ctx2 = document.getElementById('myChart2').getContext('2d');
  var gradient = ctx2.createLinearGradient(0, 0, 0, 400);
  gradient.addColorStop(0, 'rgba(251, 133, 0, 1)');
  gradient.addColorStop(1, 'rgba(255, 183, 3, 1)');
var myChart2 = new Chart(ctx2, {
    type: 'bar',
    fillOpacity: 1,
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [
            {
                label: "",
                backgroundColor: gradient,
                borderColor: "none",
                pointBorderColor: "#CFEECE",
                borderWidth:0,
                pointRadius: 4,
                pointHoverRadius: 4,
                pointBackgroundColor: "#FFF",
                data: [500, 1000, 500, 1000, 500, 1000, 500, 1000, 500, 1000, 500, 1000]
            }
        ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      bezierCurve: false,
      elements: {
        line: {
            tension: 0
        }
    },
        scales: {
          xAxes: [{
            gridLines: {color: "rgba(0, 0, 0, 0)"},
            categoryPercentage: 3 / 10
        }],
            yAxes: [{
              ticks: {beginAtZero: true},
              gridLines: {color: "rgba(0, 148, 68, 0.2)"}
            }]
        },

        tooltips: {
          custom: function(tooltip) {
            if (!tooltip) return;
            // disable displaying the color box;
            tooltip.displayColors = false;
          },
          callbacks: {
            // use label callback to return the desired label
            label: function(tooltipItem, data) {
              return "$" + tooltipItem.yLabel;
            },
            // remove title
            title: function(tooltipItem, data) {
              return;
            }
          },
          backgroundColor: "#FFF",
          borderColor: "rgba(0, 0, 0, 0.09)",
          borderWidth: 1,
          bodyFontColor:"rgba(0, 0, 0, 1)",
          bodyAlign: 'center',
          bodyFontSize: 14,
          bodyFontStyle: 500
        },
        legend: {
          align:'end',
          labels:{
            boxWidth: 12,
            fontColor: "#A4A7B0"
          }
        }
    }
});
// chart-2 Bar chart
  </script>
  </body>
</html>
