
Chart.defaults.global.defaultFontColor = 'blue';
Chart.defaults.global.tooltips.mode = 'label';
Chart.defaults.global.tooltips.backgroundColor = '#000';
Chart.defaults.global.tooltips.titleColor = '#888';
Chart.defaults.global.tooltips.bodyColor = '#888';


var data = {
    //labels: days,
    labels: ["Feb 7", "Feb 8", "Feb 9", "Feb 10", "Feb 11", "Feb 12", "Feb 13"],
    datasets: [
        {
            label: "Clicks",
            fill: true,
            backgroundColor: "rgba(250,220,220,0.2)",
            borderWidth: 2,
            borderColor: "rgba(220,220,220,1)",
            pointBorderColor: "rgba(220,220,220,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(220,220,220,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            data: [65, 59, 80, 81, 56, 55, 40],
            // data: clicks,
        },
        {
            label: "Views",
            fill: true,
            borderWidth: 2,
            borderColor: "rgba(220,220,220,1)",
            pointBorderColor: "rgba(220,220,220,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(220,220,220,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            data: [15, 49, 180, 51, 26, 95, 20],
            // data: clicks,
        }
    ]
};
var ctx = $("#weekly-clicks-chart");
var weeklyClicksChart = new Chart(ctx, {
    type: 'line',
    data: data,
    scaleFontColor: 'red',
    options: {
    		scaleFontColor: 'red',
        responsive: true,
        tooltips: {
            mode: 'single',
        },
        scales: {
            xAxes: [{ 
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
                drawBorder: false,
                ticks: {
                  fontColor: "#fff", // this here
                },
            }],
            yAxes: [{
                display: false,
                gridLines: {
                    display: false,
                },
            }],
        }
    }         
});




