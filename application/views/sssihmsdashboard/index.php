<div class="animated fadeIn">
    <div class="row">
        <div class="col-sm-12 col-lg-12 mb-4">
            <div class="row">
                <div class="col-lg-3">
                    <?=form_label($form['Year']['placeholder']);?>
                    <div class="input-group">
                        <?php 
                            echo form_input($form['Year']);
                            echo form_error('year','<div class="note">','</div>'); 
                        ?>
                        <select name="Month", id = "month">
    <option value='1' selected="selected">Janaury</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
    <option value='7'>July</option>
    <option value='8'>August</option>
    <option value='9'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>

    </select>

                        <select name="Department", id = "dept">
<option value="Cardiology" selected="selected">Cardiology</option>
<option value="Opthomology">Opthomology</option>
<option value="Gastro Entrology">Gastro Entrology</option>

</select>
<span class="input-group-btn">
                            <button class="btn btn-primary btn-preview">
                                Show
                            </button>
                        </span>
                    </div>      
                </div>
                
            </div>
        </div>
        
        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-info">
            <div class="card-body pb-0">
              <button type="button" class="btn btn-transparent p-0 float-right">
                <i class="fa fa-male"></i>
              </button>
              <h4 class="mb-0 male-employees">0</h4>
              <p>Average Patients Per Month</p>
            </div>
            <div class="chart-wrapper px-3" style="height:70px;">
              <canvas id="LineMaleEmployees" class="chart" height="70"></canvas>
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
                    <div class="col-lg-9">
                        <div class="col-lg-12">
                          <div class="chart-wrapper" style="height:250px;">
                            <canvas id="LineMaleFemaleMain" class="chart" height="250"></canvas>
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
    $(function () {
      getPatientStats();
        $(".btn-preview").click(function(){
            getPatientStats();
        });
    });
    // Employees Chart Start
    function getPatientStats(){
        var year = document.getElementById("year").value;
        var department = document.getElementById("dept");
        var dept_value = department.options[department.selectedIndex].value
        console.log(dept_value)

        $.ajax({
            type: "POST",
            url: "<?=site_url('sssihmsdashboard/getAllStats');?>",
            data: {"key":"SSSIHMS!"
                    ,"year":year
                    , "department": dept_value},
            beforeSend: function(){
                $(".btn-preview").attr("disabled",true);
            },
            success: function(resp){  
                // Prepare Json data Start
                var obj = jQuery.parseJSON(resp);
                
                setAveragePatients(obj);
                setPatientsByMonth(obj);
                $(".btn-preview").attr("disabled",false);
            },
            error:function(event, textStatus, errorThrown) {
                $(".btn-preview").attr("disabled",false);
                console.log("Error !", 'Error Message: ' + textStatus + ' , HTTP Error: ' + errorThrown, "error");
            }
      });
    }
    // Employees Chart End
</script>