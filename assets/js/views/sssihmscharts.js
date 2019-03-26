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

function setAverageOutPatients(obj){
    var Data = [];
    var Labels = [];
    var Total = 0;
    var numMonths = 12;
    $.each(obj.outpatients, function(key, data){
        Data.push(data.total);
        Labels.push(data.month);
        Total = Number(Total) + Number(data.total);
        
    });         
    if(Total == 0){
        $(".out-patients").html(0);
    }
    else{
        $(".out-patients").html(Math.floor(Total/numMonths));
        
    }
    // Prepare Json data End

    // Prepare Chart Start
    var config = {
        type: 'bar',
        data: {
                datasets: [
                  {
                      type: 'line',
                      label: 'OutPatients/Month',
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
    var ChartOutPatients = $('#LineOutPatients').get(0).getContext('2d');
    if(typeof chartOutPatients != 'undefined' ){
        chartOutPatients.destroy();
    }
    chartOutPatients = new Chart(ChartOutPatients, config);
    // Prepare Chart End
}
function setYearlyTrend(obj){
    var Data = [];
    var Labels = [];
    $.each(obj.yearlycount, function(key,data){
        Data.push(data.total);
        Labels.push(data.year);
    });

      // Prepare Chart Start
      var yearlychartOptions = {
        maintainAspectRatio  : false,
        legend: {
            display: true,
            position: 'bottom',
            fontSize: 18,
            boxWidth: 20
        },
        title: {
            display: true,
            text: 'Total Patients Yearly '
        },
        chartArea: {
            backgroundColor: 'rgba(0, 0, 0, 1)'
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
                      type: 'line',
                      label: 'TotalPatients',
                      backgroundColor: 'rgba(255,255,255,1)',
                      borderColor: 'rgba(0,0,255,0.55)',
                      pointBackgroundColor: 'rgba(0,0,255,1)',
                      data: Data,
                      fill: false,
                      borderWidth: 1
                  }
                ],
                labels:Labels
            },
        options: yearlychartOptions
    };
    var ChartYealyTrend = $('#YearlyTrend').get(0).getContext('2d');
    if(typeof chartYealyTrend != 'undefined' ){
        chartYealyTrend.destroy();
    }
    chartYealyTrend = new Chart(ChartYealyTrend, config);
}
function setAverageIntPatients(obj){
    var Data = [];
    var Labels = [];
    var Total = 0;
    var numMonths = 12;
    $.each(obj.inpatients, function(key, data){
        Data.push(data.total);
        Labels.push(data.month);
        Total = Number(Total) + Number(data.total);
        
    });         
    if(Total == 0){
        $(".in-patients").html(0);
    }
    else{
        $(".in-patients").html(Math.floor(Total/numMonths));
        
    }
    
    // Prepare Json data End

    // Prepare Chart Start
    var config = {
        type: 'bar',
        data: {
                datasets: [
                  {
                      type: 'line',
                      label: 'InPatients/Month',
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
    var ChartInPatients = $('#LineInPatients').get(0).getContext('2d');
    if(typeof chartInPatients != 'undefined' ){
        chartInPatients.destroy();
    }
    chartInPatients = new Chart(ChartInPatients, config);
    // Prepare Chart End
}

function setPatientsByMonth(obj){
    var DataOutPatients = [];
    var DataInPatients = [];
    var LabelsOutPatients = [];
    var LabelsInPatients = [];
    $.each(obj.outpatients, function(key, data){
        DataOutPatients.push(data.total);
        LabelsOutPatients.push(data.month);
    });        
    $.each(obj.inpatients, function(key, data){
        DataInPatients.push(data.total);
        LabelsInPatients.push(data.month);
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
    var configOutPatients = {
        type: 'bar',
        data: {
                datasets: [
                  {
                      type: 'bar',
                      label: 'Number of Patients',
                      backgroundColor: $.brandInfo,
                      borderColor: $.brandInfo,
                      pointBackgroundColor: $.brandInfo,
                      data: DataOutPatients,
                      fill: false,
                      borderWidth: 1
                  }
                ],
                labels:LabelsOutPatients
            },
        options: chartOptions
    };

    var configInPatients = {
        type: 'bar',
        data: {
                datasets: [
                  {
                      type: 'bar',
                      label: 'Number of Patients',
                      backgroundColor: "rgba(255,102,0,0.6)",
                      borderColor: "rgba(255,102,0,0.6)",
                      data: DataInPatients
                  }
                ],
                labels:LabelsInPatients
            },
        options: chartOptions
    };
    var ChartOutPatientsMain = $('#BarOutPatientsYearly').get(0).getContext('2d');
    if(typeof chartOutPatientsMain != 'undefined' ){
        chartOutPatientsMain.destroy();
    }
    chartOutPatientsMain = new Chart(ChartOutPatientsMain, configOutPatients);

    chartOptions['title']['text'] = 'In Patients by Month';
    var ChartInPatientsMain = $('#BarInPatientsYearly').get(0).getContext('2d');
    if(typeof chartInPatientsMain != 'undefined' ){
        chartInPatientsMain.destroy();
    }
    chartInPatientsMain = new Chart(ChartInPatientsMain, configInPatients);
    // Prepare Chart End
}

