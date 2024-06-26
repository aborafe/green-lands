const ctx = document.getElementById('barchart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['الربع الاول', 'الربع الثاني', 'الربع الثالث', 'الربع الرابع'],
    datasets: [{
      label: 'الاستثمار السنوي',
      data: [12, 19, 10, 7],
      backgroundColor:[
        'blue',
        'grey',
        'darkgray',
        'black'
      ],
      borderColor:[
        'black'
      ],
    
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