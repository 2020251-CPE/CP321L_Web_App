<!DOCTYPE html>
<html>
<head>
  <title>Progress</title>
  <style>
    html,body{
        margin: 0;
        padding: 0;
    }
    body {
      font-family: Arial, sans-serif;
      height: 100vh;
      width: 100vw;
    }
    .main{
        background-image: url("{{asset('img/bg/signupBG.jpg')}}"); /* FIX BACKGROUND, IT Scrolls up too when scrolling Up */
        background-size: cover;
        background-repeat: no-repeat;
        background-color: rgba(255, 255, 255, 0.8);
        background-position:center;
        background-attachment:fixed;
        border: 1px solid #dddddd;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        height: 100%;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 40px;
      background-color:white;
      opacity:85%;
	
    }

    h2 {
      text-align: center;
    }

    p {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

    input[type="submit"] {
      display: block;
      margin: 0 auto;
      padding: 10px 20px;
      background-color: #4caf50;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
    <?php 
    $tests = [
        'GAR' => [
            'results' => [],
            'time' => []
        ],
        'AAR' => [
            'results' => [],
            'time' => []
        ],
        'GMAR' => [
            'results' => [],
            'time' => []
        ],
        'SAR' => [
            'results' => [],
            'time' => []
        ],
        'DAR' => [
            'results' => [],
            'time' => []
        ]
    ];
    
    $testData = [
        'GAR' => $GAR,
        'AAR' => $AAR,
        'GMAR' => $GMAR,
        'SAR' => $SAR,
        'DAR' => $DAR
    ];
    
    foreach ($testData as $testName => $testResults) {
        foreach ($testResults as $item) {
            $tests[$testName]['results'][] = $item->RecordedResult;
            $tests[$testName]['time'][] = $item->DateAndTimeOfRecord;
        }
    }
    
    ?>
    <div class="main">
        <div class="container">
            <h4>Name: {{session('user');}}</h4>
            <hr>
            <h5>General Anxiety Test Results</h5>
            <canvas id="GeneralAnxietyTest" style="width:100%;max-width:600px"></canvas>
            <h5>Alcohol Addiction Test Results</h5>
            <canvas id="AlcoholAddictionTest" style="width:100%;max-width:600px"></canvas>
            <h5>Gambling Addiction Test</h5>
            <canvas id="GamblingAddictionTest" style="width:100%;max-width:600px"></canvas>
            <h5>Shopping Addiction Test Results</h5>
            <canvas id="ShoppingAddictionTest" style="width:100%;max-width:600px"></canvas>
            <h5>Drug Addiction Test Results</h5>
            <canvas id="DrugAddictionTest" style="width:100%;max-width:600px"></canvas>
        
        </div>
    </div>
    
    <script>
    const chartNames = ["GeneralAnxietyTest","AlcoholAddictionTest","GamblingAddictionTest","ShoppingAddictionTest","DrugAddictionTest"]
    const timeArrays = [
        <?php echo json_encode($tests['GAR']['time']); ?>,
        <?php echo json_encode($tests['AAR']['time']); ?>,
        <?php echo json_encode($tests['GMAR']['time']); ?>,
        <?php echo json_encode($tests['SAR']['time']); ?>,
        <?php echo json_encode($tests['DAR']['time']); ?>
    ];
    const resultArrays = [
        <?php echo json_encode($tests['GAR']['results']); ?>,
        <?php echo json_encode($tests['AAR']['results']); ?>,
        <?php echo json_encode($tests['GMAR']['results']); ?>,
        <?php echo json_encode($tests['SAR']['results']); ?>,
        <?php echo json_encode($tests['DAR']['results']); ?>
    ];
   
    //Creates the Progress Charts for each test
    for (let i = 0; i < chartNames.length; i++) {                  
        new Chart( chartNames[i], {
        type: "line",
        data: {
            labels: timeArrays[i],
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: resultArrays[i]
            }]
        },
        options: {
            legend: {display: false},
            scales: {
                yAxes: [{ticks: {min: 20, max:100}}], 
            }
        }
        });
    }
    </script>
</body>
</html>