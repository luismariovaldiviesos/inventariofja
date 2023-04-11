<script>
    document.addEventListener('livewire:load', function(){

        var options = {
          series: [{
          name: 'Cantidad',
          data: [
            parseFloat(@this.totalPcs),
            parseFloat(@this.totalLaptops),
            parseFloat(@this.totalMonitor),
            parseFloat(@this.totalTeclado),
            parseFloat(@this.totalMouse),
            parseFloat(@this.totalTelefono),
            parseFloat(@this.totalScanner),
            parseFloat(@this.totalImpresora)
             ]
        }],
          chart: {
          height: 350,
          type: 'bar',
        },
        plotOptions: {
          bar: {
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },

        xaxis: {
          categories: ["PCs", "LAPTOPS", "MONITOR", "TECLADO", "MOUSE", "TELEFONO", "SCANNER", "IMPRESORA", "Sep", "Oct", "Nov", "Dec"],
          position: 'top',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "";
            }
          }

        },
        title: {
          text: 'Total de equipos informáticos en inventario',
          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();




        // grafico de af por asignar

    var optionsTop5 = {
            //   AQUI SE PONE LA DATA QUE VIENE DESDE EL BACK
            series: [
            parseFloat(@this.x_asignarPcs),
            parseFloat(@this.x_asignarLap),
            parseFloat(@this.x_asignarMoni),
            parseFloat(@this.x_asignarTecla),
            parseFloat(@this.x_asignarMouse)
          ],
          chart: {
          type: 'donut',
          height:392,
        },
        labels:[
            'PCS',
            'LAPTOPS',
            'MONITORES',
            'TECLADOS',
            'RATONES'
        ],
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chartTop5 = new ApexCharts(document.querySelector("#chartxasignar"), optionsTop5);
        chartTop5.render();


    })





</script>
