document.addEventListener('DOMContentLoaded', function() {
    // Datos para la gráfica tipo Doughnut de Mister
    var dataDoughnutMister = {
        labels: ['Martín Antonio Sanches Thomae', 'Lizardo Andrés Cacao Winter', 'Germán Enrique Contreras Ruiz', 'Hector Smailyn Izaguirre Alvarado', 'Jan Alessandro Vielman López', 'Henrry Alexander Alvarado Tzi'],
        datasets: [{
            data: [15, 25, 20, 10, 30],
            backgroundColor: ['#0059b3', '#0099ff', '#00ccff', '#80e5ff', '#b3ecff']
        }]
    };

    // Opciones para la gráfica tipo Doughnut de Mister
    var optionsDoughnutMister = {
        responsive: true,
        title: {
            display: true,
            text: 'Votos de Mister'
        },
        legend: {
            display: true,
            position: 'bottom'
        }
    };

    // Crear la gráfica tipo Doughnut de Mister
    var ctxDoughnutMister = document.getElementById('doughnutChartMister').getContext('2d');
    new Chart(ctxDoughnutMister, {
        type: 'doughnut',
        data: dataDoughnutMister,
        options: optionsDoughnutMister
    });

    // Datos para la gráfica tipo Doughnut de Miss
    var dataDoughnutMiss = {
        labels: ['Suceily Minely Caal Prado', 'Meredith Dayanara Gonzáles Mendoza', 'Mayri Estefanía López Hércules', 'Andrea Mishell Orrego Granados', 'Anggie Maryann Yat Román', 'Nancy Vanessa Chavarría Cano'],
        datasets: [{
            data: [10, 20, 15, 5, 30],
            backgroundColor: ['#ff66cc', '#ff99e6', '#ffccff', '#ff99ff', '#cc66cc']
        }]
    };

    // Opciones para la gráfica tipo Doughnut de Miss
    var optionsDoughnutMiss = {
        responsive: true,
        title: {
            display: true,
            text: 'Votos de Miss'
        },
        legend: {
            display: true,
            position: 'bottom'
        }
    };

    // Crear la gráfica tipo Doughnut de Miss
    var ctxDoughnutMiss = document.getElementById('doughnutChartMiss').getContext('2d');
    new Chart(ctxDoughnutMiss, {
        type: 'doughnut',
        data: dataDoughnutMiss,
        options: optionsDoughnutMiss
    });
});
