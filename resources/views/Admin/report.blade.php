
<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'vaccine');
if (!$db) {
        echo "connection failed";
    }
    $query = mysqli_query($db, "select addvaccine.id,addvaccine.time,addvaccine.period,parent1.cname,parent1.date,parent1.vname from parent1 LEFT OUTER JOIN addvaccine ON parent1.id=addvaccine.id ORDER BY id") or die( mysqli_error($db));


?>
@extends('Admin.side')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin| Allocate</title>
    <link rel='stylesheet'  href="{{ url('/css/style.css')}}">
     <style>
            #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 65%;
            top: 120px;
            left: 300px;
            position: fixed;
            }

            #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #fff;
            color: grey;
            }
            .pie{
                left: 200px;
            }
    </style>
</head>
<body>
    <div class="container45">
        <center><p style="color: black">Registered Vaccine</p></center>
        <form>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <canvas id="myCharts" class="pie"></canvas>
            <?php
                $con = new mysqli('localhost','root','','vaccine');

                $querysa =mysqli_query($con, "SELECT vname, COUNT(cname) As num  FROM vaccine_dates GROUP BY vname");

                foreach ($querysa as $rows) {
                    $montq[]=$rows['vname'];
                    $monq[]=$rows['num'];
                }//https://www.youtube.com/results?search_query=chartjs
            ?>
            <script>
                const labels = <?php echo json_encode($montq)?>;
                const data = {
                labels: labels,
                datasets: [{
                    label: 'Total Number',
                    data: <?php echo json_encode($monq)?>,
                    fill: false,
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                    ],
                    borderWidth: 1
                }]
                };
                const config = {
                type: 'bar',
                data: data,
                options: {
                    plugins:{
                        tooltip:{
                            //increasing size of imgae
                            titleFont:{
                                size:20
                            },
                            bodyFont:{
                                size:20
                            }
                        }

                    }
                }
                };
                const myChart = new Chart(
                    document.getElementById('myCharts'),
                    config
                );
            </script>
        </form>
    </div>

            <div class="container47">
                <center>
                    <p>Registered Parents Per Month</p>
                    <canvas id="mrCharts" class="pie"></canvas>
                </center>
                <form>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <?php
                        $con = new mysqli('localhost','root','','vaccine');

                        $querysa =mysqli_query($con, "SELECT MONTH(created_at) as numbers, COUNT(name) As num  FROM users GROUP BY numbers");

                        foreach ($querysa as $rows) {
                            $montq[]=$rows['num'];
                            $monq[]=$rows['numbers'];
                        }//https://www.youtube.com/results?search_query=chartjs
                    ?>
                    <script>
                        const labelt = <?php echo json_encode($monq)?>;
                        const datai = {
                        label: labelt,
                        datasets: [{
                            label: 'Total Number',
                            data: <?php echo json_encode($montq)?>,
                            fill: false,
                            backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                            ],
                            borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                            ],
                            borderWidth: 1
                        }]
                        };
                        const config2 = {
                        type: 'pie',
                        data: datai,
                        options: {

                            plugins:{
                                tooltip:{
                                    //increasing size of imgae
                                    titleFont:{
                                        size:20
                                    },
                                    bodyFont:{
                                        size:20
                                    }
                                }

                            }
                        }
                        };
                        const myChartx = new Chart(
                            document.getElementById('mrCharts'),
                            config2
                        );
                    </script>
                </form>
            </div>
            <div class="container48">
        <center><p style="color: black">Registered Children</p></center>
        <form>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <canvas id="meCharts" class="pie"></canvas>
            <?php
                $con = new mysqli('localhost','root','','vaccine');

                $querysa =mysqli_query($con, "SELECT gender, COUNT(cname) As num  FROM parent1 GROUP BY gender");

                foreach ($querysa as $rows) {
                    $monkq[]=$rows['gender'];
                    $monk[]=$rows['num'];
                }//https://www.youtube.com/results?search_query=chartjs
            ?>
            <script>
                const labelk = <?php echo json_encode($monkq)?>;
                const datab = {
                labels: labelk,
                datasets: [{
                    label: 'Total Number',
                    data: <?php echo json_encode($monk)?>,
                    fill: false,
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                    ],
                    borderWidth: 1
                }]
                };
                const config6 = {
                type: 'bar',
                data: datab,
                options: {
                    plugins:{
                        tooltip:{
                            //increasing size of imgae
                            titleFont:{
                                size:20
                            },
                            bodyFont:{
                                size:20
                            }
                        }

                    }
                }
                };
                const myChartu = new Chart(
                    document.getElementById('meCharts'),
                    config6
                );
            </script>
        </form>

    </div>

</body>
</html>
