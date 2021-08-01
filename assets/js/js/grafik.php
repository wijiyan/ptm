<script>

$(window).on("load", function () {

  var $primary = '#7367F0';
  var $success = '#28C76F';
  var $danger = '#EA5455';
  var $warning = '#FF9F43';
  var $label_color = '#1E1E1E';
  var grid_line_color = '#dae1e7';
  var scatter_grid_color = '#f3f3f3';
  var $scatter_point_light = '#D1D4DB';
  var $scatter_point_dark = '#5175E0';
  var $white = '#fff';
  var $black = '#000';

  var themeColors = [$primary, $success, $danger, $warning, $label_color, $warning, $primary, $success, $danger, $warning, $label_color, $warning, $primary, $success, $danger, $warning, $label_color, $warning, $primary, $success, $danger, $warning, $label_color, $warning, $primary, $success, $danger, $warning, $label_color, $warning, $primary, $success, $danger, $warning, $label_color, $warning, $primary, $success, $danger, $warning, $label_color, $warning, $primary, $success, $danger, $warning, $label_color, $warning];
// Bar Chart
  // ------------------------------------------

  //Get the context of the Chart canvas element we want to select
  var barChartctx = $("#bar-chart");

  // Chart Options
  var barchartOptions = {
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each bar to be 2px wide
    elements: {
      rectangle: {
        borderWidth: 2,
        borderSkipped: 'left'
      }
    },
    responsive: true,
    maintainAspectRatio: false,
    responsiveAnimationDuration: 500,
    legend: { display: false },
    scales: {
      xAxes: [{
        display: true,
        gridLines: {
          color: grid_line_color,
        },
        scaleLabel: {
          display: true,
        }
      }],
      yAxes: [{
        display: true,
        gridLines: {
          color: grid_line_color,
        },
        scaleLabel: {
          display: true,
        },
        ticks: {
          stepSize: 10
        },
      }],
    },
    title: {
      display: true,
      text: 'Grafik Kunjungan Mingguan'
    },

  };

  // Chart Data
  var barchartData = {
    labels: [
    <?php for ($i = 1; $i <= 48; $i++) {
      echo $i.', ';
    } ?>
    ],
    //labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli','Agustus', 'September', 'Oktober', 'November', 'Desember'],
    datasets: [{
      label: "Grafik Kunjungan Mingguan",
      data: [
      <?php 

			for ($i=1; $i <= 48; $i++) { 

				$total = $this->db->query(' SELECT * FROM tbl_pemeriksaan
					WHERE
					WEEK(tgl_pemeriksaan) = '.$i.' AND YEAR(tgl_pemeriksaan)');

				echo $total->num_rows()." ,";
			}?>
      ],
      backgroundColor: themeColors,
      borderColor: "transparent"
    }]
  };

  var barChartconfig = {
    type: 'bar',

    // Chart Options
    options: barchartOptions,

    data: barchartData
  };

  // Create the chart
  var barChart = new Chart(barChartctx, barChartconfig);
  });
</script>