</div>
</section>

<script src="<?php echo $url ?>/assets/vendor/jquery.min.js"></script>
<script src="<?php echo $url ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $url ?>/assets/js/app.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="<?php echo $url ?>/assets/vendor/way_point/jquery.waypoints.js"></script>
<script src="<?php echo $url ?>/assets/vendor/counter_up/counter_up.js"></script>
<script src="<?php echo $url ?>/assets/js/dashboard.js"></script>
<script src="<?php echo $url ?>/assets/vendor/chart_js/chart.min.js"></script>

<script>
    let dateArr=['jul 18','jul 19','jul 20','jul 21','jul 22','jul 23','jul 24','jul 24','jul 24','jul 24','jul 24'];
    let orderArr=[4,2,7,5,9,8,10,8,9,6,4];
    let viewerCountArr=[13,12,22,43,29,32,68,62,30.29,11,20];

    var ctx = document.getElementById('myChart').getContext('2d')
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dateArr,
            datasets: [{
                label: 'Order Count',
                data: orderArr,
                backgroundColor: [
                    '#0d6efd30',

                ],
                borderColor: [
                    '#0d6efd',

                ],
                borderWidth: 1,
                tension:0
            },
                {
                    label: 'Viewer Count',
                    data: viewerCountArr,
                    backgroundColor: [
                        '#ffc10730',

                    ],
                    borderColor: [
                        '#ffc107',

                    ],
                    borderWidth: 1,
                    tension:0
                }
            ]
        },

        options: {
            scales: {
                yAxes:[ {
                    display:false,
                    // ticks: {
                    //     display: false
                    // }
                }],
                xAxes:[ {
                    display:false,
                    gridLines:[
                        {
                            display:false,
                        }
                    ]

                }]
            },
            legend:{
                display:true,
                shape:"circular",
                position:'top',
                labels: {
                    fontColor:"#333",
                    usePointStyle:true,
                }

            }
        }
    });

    let orderFromPlace=[5,15,18,9,7,11];
    let places=["Mdy","Bgo","Ygn","Tggyi","Mgw"];

    var ctx = document.getElementById('op').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: places,
            datasets: [{
                label: '# of Votes',
                data: orderFromPlace,
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
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            legend:{
                display:true,
                shape:"circular",
                position:'bottom',
                labels: {
                    fontColor:"#333",
                    usePointStyle:true,
                }

            }
        }
    });
</script>
<script>
    let currentPage=location.href;
    $(".menu-item-link").each(
        function(){
            let links=$(this).attr("href");
            if(currentPage==links){
                $(this).addClass('active');
            }
        }
    );
</script>
</body>
</html>


