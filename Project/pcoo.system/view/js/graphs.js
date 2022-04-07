const bar = document.getElementById("barChart").getContext('2d');
const myBarChart = new Chart(bar, {
  type: 'bar',
  data: {
    labels: ["20", "25", "30", "35", "40", "45", "50", "55", "60", "65",],
    datasets: [{
      label: 'Number of Employees',
      backgroundColor: [
        "rgba(124,55,148, 0.5)",
        "rgba(71,50,143, 0.5)",
        "rgba(62,94,171, 0.5)",
        "rgba(22,148,206, 0.5)",
        "rgba(98,177,70, 0.5)",

        "rgba(242,235,59, 0.5)",
        "rgba(247,188,24, 0.5)",
        "rgba(248,154,32, 0.5)",
        "rgba(240,86,36, 0.5)",
        "rgba(167,30,74, 0.5)",
      ],
      borderColor: 'rgb(47, 128, 237, 0.5)',
      data: [107, 212, 125, 140, 141, 114, 42, 66, 36, 16,],
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
        }
      }]
    }
  },
});


const line = document.getElementById("lineChart").getContext('2d');
const myLineChart = new Chart(line, {
  type: 'line',
  data: {
    labels: ["20", "25", "30", "35", "40", "45", "50", "55", "60", "65",],
    datasets: [{
      label: 'Number of Employees',
      backgroundColor: 'rgba(43, 47, 141, .2)',
      borderColor: 'rgb(43, 47, 141, .7)',
      data: [107, 212, 125, 140, 141, 114, 42, 66, 36, 16,],

    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
        }
      }]
    }
  },
});
