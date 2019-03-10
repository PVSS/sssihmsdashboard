<div class="animated fadeIn">
    <div class="row">
        <div class="col-sm-12 col-lg-12 mb-4">
            <div class="row">
                <div class="col-lg-3">
                    <div class="input-group">
                        
                        <select name="Year", id = "year">
                            
                        </select>


                        <select name="Department", id = "dept">
                            <option >Select A Department</option>
                        </select>

                        <select name="Hospital", id = "hosp">
                            <option>Select A Hospital</option>
                        </select>
                    </div>      
                </div>
                
            </div>
        </div>
        
        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-info">
            <div class="card-body pb-0">
              <button type="button" class="btn btn-transparent p-0 float-right">
                <i class="fa fa-outpatients"></i>
              </button>
              <h4 class="mb-0 out-patients">0</h4>
              <p>Average Out Patients Per Month</p>
            </div>
            <div class="chart-wrapper px-3" style="height:70px;">
              <canvas id="LineOutPatients" class="chart" height="70"></canvas>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-success">
            <div class="card-body pb-0">
              <button type="button" class="btn btn-transparent p-0 float-right">
                <i class="fa fa-inpatients"></i>
              </button>
              <h4 class="mb-0 in-patients">0</h4>
              <p>Average In Patients Per Month</p>
            </div>
            <div class="chart-wrapper px-3" style="height:70px;">
              <canvas id="LineInPatients" class="chart" height="70"></canvas>
            </div>
          </div>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                  <i class="fa fa-sitemap"></i> Patient Details
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                          <div class="chart-wrapper" style="height:250px;" float-right>
                            <canvas id="BarOutPatientsYearly" class="chart" height="250"></canvas>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                          <div class="chart-wrapper" style="height:250px;" float-right>
                            <canvas id="BarInPatientsYearly" class="chart" height="250"></canvas>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            </div>
        <!--/.col-->
        </div>
        
    </div>
    <!--/.row-->
</div>

<!-- ChartJS -->
<script src="<?=base_url('assets/plugins/chartjs/Chart.bundle.js');?>"></script>
<script src="<?=base_url('assets/plugins/chartjs/utils.js');?>"></script>
<script src="<?=base_url('assets/js/views/sssihmscharts.js');?>"></script>
<script type="text/javascript">
var year = document.getElementById("year");
var hospital = document.getElementById("hosp");
var dept = document.getElementById("dept");
year.onchange = function(){
    getPatientStats();
}
hospital.onchange = function(){
    getPatientStats();
}
dept.onchange= function(){
    getPatientStats();
}
getAllDropDownOptions();


    
    // Patient Stats Chart Start
    function getPatientStats(){
        var year = document.getElementById("year").value;
        var department = document.getElementById("dept");
        var dept_value = department.options[department.selectedIndex].value
        var hosp = document.getElementById("hosp").value;
        console.log(year);

        $.ajax({
            type: "POST",
            url: "<?=site_url('sssihmsdashboard/getAllStats');?>",
            data: {"key":"SSSIHMS!"
                    ,"year":year
                    , "department": dept_value
                    , "hospital": hosp
                },
            
            success: function(resp){  
                // Prepare Json data Start
                var obj = jQuery.parseJSON(resp);
                
                setAverageOutPatients(obj);
                setAverageIntPatients(obj);
                setPatientsByMonth(obj);
                
            }
      });
    }
    // Patient Chart End

    //Populate All Years in Dropdown
    function getAllDropDownOptions()
    {
        $.ajax({
            type: "POST",
            url: "<?=site_url('sssihmsdashboard/getAllDropDownOptions');?>",
            data: {},
            success: function(resp){  
                // Prepare Json data Start
                var obj = jQuery.parseJSON(resp);
                var year = document.getElementById("year");
                var departments = document.getElementById("dept");
                var hospitals = document.getElementById("hosp");
                $.each(obj.years, function(key, data){
                    var el = document.createElement("option");
                    el.textContent = data.year;
                    el.value = data.year;
                    year.appendChild(el);
                });
                year.selectedIndex = 0;
                

                $.each(obj.depts, function(key, data){
                    var el = document.createElement("option");
                    el.textContent = data.dept;
                    el.value = data.dept;
                    departments.appendChild(el);
                });
                departments.selectedIndex = 1;

                $.each(obj.hospitals, function(key, data){
                    var el = document.createElement("option");
                    el.textContent = data.hosp;
                    el.value = data.hosp;
                    hospitals.appendChild(el);
                });
                hospitals.selectedIndex = 1;

                year.onchange();
            }


      });
    }
</script>