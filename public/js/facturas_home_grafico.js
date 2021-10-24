var ctx = $('#myChart');
var myChart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: ['Enero', 'Febrero', 'Marzo', 'Abri', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		datasets: [{
			label: 'Valor Factura',
			data: [12, 19, 3, 5, 2, 3,37,18,23,12,23,12],
			backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'rgba(75, 192, 192, 0.2)',
				'rgba(153, 102, 255, 0.2)',
				'rgba(255, 159, 64, 0.2)'
			],
			borderColor: [
				'rgba(255, 99, 132, 1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
			],
			borderWidth: 2
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