<div class="row">
    <div class="col-md-4 p-3">
        <div class="p-0 pt-4 chart card card-body">
            <p class="title">Posts</p>
            <div class="content" id="chart-dashboard-1"></div>
        </div>
    </div>
    <div class="col-md-4 p-3">
        <div class="p-0 pt-4 chart card card-body">
            <p class="title">Usuarios</p>
            <div class="content" id="chart-dashboard-2"></div>
        </div>
    </div>
    <div class="col-md-4 p-3">
        <div class="p-0 pt-4 chart card card-body">
            <p class="title">Acessos</p>
            <div class="content" id="chart-dashboard-3"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card mt-4">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



<script>
    $(document).ready(function () {
        var chart1 = {
            chart: {
                id: 'sparkline1',
                group: 'sparklines',
                type: 'area',
                height: 100,
                sparkline: {
                    enabled: true
                },
            },
            series: [{
                name: 'posts',
                data: [12, 10, 28, 51, 69, 109, 200]
            }],
            stroke: {
                curve: 'straight'
            },
            fill: {
                opacity: 1,
            },
            yaxis: {
                min: 0
            },
            xaxis: {
                type: 'integer',
            },
            colors: ['#00b38b'],
        };
        var chart2 = {
            chart: {
                id: 'sparkline1',
                group: 'sparklines',
                type: 'area',
                height: 100,
                sparkline: {
                    enabled: true
                },
            },
            series: [{
                name: 'usuarios',
                data: [12, 8, 4, 19, 19, 22, 5]
            }],
            stroke: {
                curve: 'straight'
            },
            fill: {
                opacity: 1,
            },
            yaxis: {
                min: 0,
            },
            xaxis: {
                type: 'integer',
            },
            colors: ['#00b38b'],
        };
        var chart3 = {
            chart: {
                id: 'sparkline1',
                group: 'sparklines',
                type: 'area',
                height: 100,
                sparkline: {
                    enabled: true
                },
            },
            series: [{
                name: 'acessos',
                data: [51, 30, 18, 51, 129, 69, 30]
            }],
            stroke: {
                curve: 'straight'
            },
            fill: {
                opacity: 1,
            },
            yaxis: {
                min: 0
            },
            xaxis: {
                type: 'integer',
            },
            colors: ['#00b38b'],
        };

        var chartp = new ApexCharts(document.querySelector("#chart-dashboard-1"), chart1);
        var chartu = new ApexCharts(document.querySelector("#chart-dashboard-2"), chart2);
        var charta = new ApexCharts(document.querySelector("#chart-dashboard-3"), chart3);
        chartp.render();
        chartu.render();
        charta.render();

    });


</script>
