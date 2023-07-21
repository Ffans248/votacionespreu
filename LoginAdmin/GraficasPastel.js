document.addEventListener('DOMContentLoaded', function() {
    // Datos para la gráfica de Miss
    var dataMiss = {
        labels: ['Candidata 1', 'Candidata 2', 'Candidata 3', 'Candidata 4', 'Candidata 5', 'Candidata 6'],
        datasets: [{
            data: [30, 15, 20, 10, 5, 20],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40']
        }]
    };

    // Opciones para la gráfica de Miss
    var optionsMiss = {
        responsive: true,
        title: {
            display: true,
            text: 'Resultados Miss'
        }
    };

    // Crear la gráfica de Miss
    var ctxMiss = document.getElementById('chartMiss').getContext('2d');
    new Chart(ctxMiss, {
        type: 'pie',
        data: dataMiss,
        options: optionsMiss
    });

    // Datos para la gráfica de Mister
    var dataMister = {
        labels: ['Candidato 1', 'Candidato 2', 'Candidato 3', 'Candidato 4', 'Candidato 5', 'Candidato 6'],
        datasets: [{
            data: [10, 20, 15, 25, 5, 25],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40']
        }]
    };

    // Opciones para la gráfica de Mister
    var optionsMister = {
        responsive: true,
        title: {
            display: true,
            text: 'Resultados Mister'
        }
    };

    // Crear la gráfica de Mister
    var ctxMister = document.getElementById('chartMister').getContext('2d');
    new Chart(ctxMister, {
        type: 'pie',
        data: dataMister,
        options: optionsMister
    });
});
