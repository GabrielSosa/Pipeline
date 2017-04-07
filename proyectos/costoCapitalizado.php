<style type="text/css">
    #costoCapitalizado {
    height: 400px; 
    min-width: 800px; 
    max-width: 800px;
    margin: 0 auto;


}

</style>
<script type="text/javascript">
$(function () {

    $(document).ready(function () {

        $('#costoCapitalizado').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Costo Capitalizado comparado con Propuesta II'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                name: 'factibilidad',
                data: [
                    ['Propuesta',   45.0],
                    ['Propuesta II', 55.0]
                ]
            }]
        });
    });

});
		</script>

<div id="costoCapitalizado"></div>

	</body>
</html>
