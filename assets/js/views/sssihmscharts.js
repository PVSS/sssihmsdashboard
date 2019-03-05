var cardOpt = {
  maintainAspectRatio: false,
  legend: {
    display: false
  },
  scales: {
    xAxes: [{
      gridLines: {
        color: 'transparent',
        zeroLineColor: 'transparent'
      },
      ticks: {
        fontSize: 1,
        fontColor: 'transparent'
      }

    }],
    yAxes: [{
      display: false,
      ticks: {
        display: false
      }
    }]
  },
  elements: {
    line: {
        tension: 0.00001,
        borderWidth: 1
    },
    point: {
      radius: 4,
      hitRadius: 10,
      hoverRadius: 4
    }
  }
};  

function setAveragePatients(obj){
    var Data = [];
    var Labels = [];
    var Total = 0;
    var numMonths = 0;
    $.each(obj.m_emp, function(key, data){
        Data.push(data.total);
        Labels.push(data.month);
        Total = Number(Total) + Number(data.total);
        numMonths = numMonths+1;
    });         

    $(".male-employees").html(Math.floor(Total/numMonths));
    // Prepare Json data End

    // Prepare Chart Start
    var config = {
        type: 'bar',
        data: {
                datasets: [
                  {
                      type: 'line',
                      label: 'Male Employees/Year',
                      backgroundColor: $.brandInfo,
                      borderColor: 'rgba(255,255,255,.55)',
                      pointBackgroundColor: $.brandInfo,
                      data: Data,
                      fill: false,
                      borderWidth: 1
                  }
                ],
                labels:Labels
            },
        options: cardOpt
    };
    var ChartMaleEmployees = $('#LineMaleEmployees').get(0).getContext('2d');
    if(typeof chartMaleEmployees != 'undefined' ){
        chartMaleEmployees.destroy();
    }
    chartMaleEmployees = new Chart(ChartMaleEmployees, config);
    // Prepare Chart End
}



function setPatientsByMonth(obj){
    var DataM = [];
    var DataF = [];
    var Labels = [];
    $.each(obj.m_emp, function(key, data){
        DataM.push(data.total);
        Labels.push(data.month);
    });        
    $.each(obj.f_emp, function(key, data){
        DataF.push(data.total);
    });        
    // Prepare Json data End

    // Prepare Chart Start
    var chartOptions = {
        segmentShowStroke    : true,
        segmentStrokeColor   : '#fff',
        segmentStrokeWidth   : 1,
        percentageInnerCutout: 0, 
        animationSteps       : 100,
        animationEasing      : 'easeOutBounce',
        animateRotate        : true,
        animateScale         : false,
        responsive           : true,
        maintainAspectRatio  : false,
        legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
        legend: {
            display: true,
            position: 'bottom',
            fontSize: 18,
            boxWidth: 20
        },
        title: {
            display: true,
            text: 'Out Patients by Month '
        },
        chartArea: {
            backgroundColor: 'rgba(255, 255, 255, 1)'
        },
          scales: {
              xAxes: [{
                  ticks: {
                      fontSize: 12
                  }
              }]
          }
    };    
    var config = {
        type: 'bar',
        data: {
                datasets: [
                  {
                      type: 'bar',
                      label: 'Number of Patients',
                      backgroundColor: $.brandInfo,
                      borderColor: $.brandInfo,
                      pointBackgroundColor: $.brandInfo,
                      data: DataM,
                      fill: false,
                      borderWidth: 1
                  }
                ],
                labels:Labels
            },
        options: chartOptions
    };
    var ChartMaleFemaleMain = $('#LineMaleFemaleMain').get(0).getContext('2d');
    if(typeof chartMaleFemaleMain != 'undefined' ){
        chartMaleFemaleMain.destroy();
    }
    chartMaleFemaleMain = new Chart(ChartMaleFemaleMain, config);
    // Prepare Chart End
}

