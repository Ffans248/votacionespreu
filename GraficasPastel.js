document.addEventListener('DOMContentLoaded', function() {
    // Obtener los datos del servidor
    fetch('datos_graficas.php')
    .then(response => response.json())
    .then(data => {
        // Datos para la gráfica tipo Doughnut de Mister
        var dataDoughnutMister = {
            labels: data.mister.etiquetas,
            datasets: [{
                data: data.mister.datos,
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
            labels: data.miss.etiquetas,
            datasets: [{
                data: data.miss.datos,
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
    })
    .catch(error => {
        console.error('Error al obtener los datos del servidor:', error);
    });
});
