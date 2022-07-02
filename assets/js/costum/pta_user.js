const labels = [
    'PA MDO',
    'PA KTG',
    'PA THN',
    'PA AMG',
    'PA TDO',
    'PA BTG',
    'PA LLK',
    'PA BLU',
    'PA BRK',
    'PA TTY',
];

const data = {
    labels: labels,
    datasets: [{
        label: 'Nilai',
        backgroundColor: '#C4C4C4',
        borderColor: '#C4C4C4',
        data: [10, 10, 5, 2, 20, 30, 10, 5, 15, 10],
    }]
};

const config = {
    type: 'bar',
    data: data,
    options: {
        plugins: {
            legend: {
                display: false
            }
        }
    }
};

const myChart = new Chart(
    document.getElementById('chart_satu'),
    config
);