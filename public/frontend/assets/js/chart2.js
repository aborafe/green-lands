const ctx2 = document.getElementById('doughnut');

new Chart(ctx2, {
  type: 'doughnut',
  data: {
    labels: ['الاستثمار الكلي', 'الاستثمار المحلي', 'الاستثمار الاجنبي'],
    datasets: [{
      label: 'حجم الاستثمار',
      data: [70, 35, 45],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});