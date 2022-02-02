$(document).ready(function() {
    showGraph();
});

function showGraph() {

    $.post('data.php', function(data) {
        console.log(data);
        let name = [];
        let amount = [];
        let total = [];

        for (let i in data) {
            name.push(data[i].Name);
            amount.push(data[i].Amount);
            total.push(data[i].Total);

        }

        let chartdata = {
            labels: name,
            datasets: [{
                    label: 'จำนวนที่ขาย',
                    backgroundColor: '#0bab00',
                    borderColor: '#000000',
                    hoverBackgroundColor: '#087a00',
                    hoverBorderColor: '#666666',
                    data: amount

                },
                {
                    label: 'ยอดขายทั้งหมด',
                    backgroundColor: '#76B947',
                    borderColor: '#46d6f1',
                    hoverBackgroundColor: '#94C973',
                    hoverBorderColor: '#666666',
                    data: total
                }
            ]
        };

        let graphTarget = $('#Chart');
        let barGraph = new Chart(graphTarget, {

            type: 'bar',
            data: chartdata
        })
    })

};