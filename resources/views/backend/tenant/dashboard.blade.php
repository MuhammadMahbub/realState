@extends('backend.layouts.master')

@section('title', "Dashbord - BPS TENANT DASHBOARD")

@section('count_section')
    <div class="col-xl-3 col-sm-6">
        <div class="card chart-grd same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>Total Tenants</h6>
                        <h3>0</h3>
                    </div>
                    <div class="icon-box bg-primary-light">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card chart-grd same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>Active Tenants</h6>
                        <h3>0</h3>
                    </div>
                    <div class="icon-box bg-danger-light">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card chart-grd same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>None-Active Tenants</h6>
                        <h3>0</h3>
                    </div>
                    <div class="icon-box bg-danger-light">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card chart-grd same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>New Tenants</h6>
                        <h3>0</h3>
                    </div>
                    <div class="icon-box bg-danger-light">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>

    @push('modals')
        <!-- Add Tenants -->
        <div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
            <div class="offcanvas-header">
            <h5 class="modal-title" id="#gridSystemModal">Add Tenant</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                  <i class="fa-solid fa-xmark"></i>
              </button>
            </div>
            <div class="offcanvas-body">
              <div class="container-fluid">
                  <div>
                      <label>Profile Picture</label>
                      <div class="dz-default dlab-message upload-img mb-3">	
                          <form action="#" class="dropzone">
                              <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              <div class="fallback">
                                  <input name="file" type="file" multiple>
                                  
                              </div>
                          </form>
                      </div>	
                  </div>
                  <form>
                      <div class="row">
                          <div class="col-xl-6 mb-3">
                              <label for="exampleFormControlInput2" class="form-label">Tenant Name<span class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Enter Tenant Name">
                          </div>	
                          <div class="col-xl-6 mb-3">
                              <label for="exampleFormControlInput3" class="form-label">Tenant Email<span class="text-danger">*</span></label>
                              <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Enter Tenant Name">
                          </div>
                          <div class="col-xl-6 mb-3">
                              <label for="exampleFormControlInput4" class="form-label">Password<span class="text-danger">*</span></label>
                              <input type="password" class="form-control" id="exampleFormControlInput4" placeholder="Enter Tenant Password">
                          </div>
                          <div class="col-xl-6 mb-3">
                              <label class="form-label">Country<span class="text-danger">*</span></label>
                              <select class="default-select form-control">
                                  <option  data-display="Select">Please select</option>
                                  <option value="html">Tanzania</option>
                                  <option value="css">Kenya</option>
                                  <option value="javascript">Uganda</option>
                                  <option>Rwanda</option>
                                  <option>Burundi</option>
                                  <option>Botswana</option>
                                  <option>Namibia</option>
                              </select>
                          </div>
                          <div class="col-xl-6 mb-3">
                              <label class="form-label">City<span class="text-danger">*</span></label>
                              <select class="default-select form-control">
                                  <option  data-display="Select">Please select</option>
                                  <option value="html">Dar es salaam</option>
                                  <option value="css">Mbeya</option>
                                  <option value="javascript">Zanzibar</option>
                                  <option>Mwanza</option>
                              </select>
                          </div>
                          <div class="col-xl-6 mb-3">
                              <label for="exampleFormControlInput88" class="form-label">Mobile<span class="text-danger">*</span></label>
                              <input type="number" class="form-control" id="exampleFormControlInput88" placeholder="Enter Phone Number">
                          </div>
                          <div class="col-xl-6 mb-3">
                              <label class="form-label">Gender<span class="text-danger">*</span></label>
                              <select class="default-select form-control">
                                  <option  data-display="Select">Please select</option>
                                  <option value="html">Male</option>
                                  <option value="css">Female</option>
                                  <option value="javascript">Other</option>
                              </select>
                          </div>
                          <div class="col-xl-12 mb-3">
                              <label class="form-label">About<span class="text-danger">*</span></label>
                              <textarea rows="2" class="form-control"></textarea>
                          </div>	
                      </div>
                      <div>
                          <button class="btn btn-primary me-1">Submit</button>
                          <button class="btn btn-danger light ms-1">Cancel</button>
                      </div>
                  </form>
                </div>
            </div>
          </div>		
          <!-- Add Tenants End -->
  
          <!-- Invite New Tenants -->
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-center">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Tenant</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                      <div class="row">
                          <div class="col-xl-12">
                              <label class="form-label">Email ID<span class="text-danger">*</span></label>
                              <input type="email" class="form-control" placeholder="Enter Email">
                              <div class="row">
                                  <div class="col-xl-6">
                                      <label class="form-label mt-3">First Name<span class="text-danger">*</span></label>
                                      <div class="input-group">
                                          <input type="text" class="form-control" placeholder="Name">
                                      </div>
                                  </div>
                                  <div class="col-xl-6">
                                      <label class="form-label mt-3">Last Name<span class="text-danger">*</span></label>
                                      <div class="input-group">
                                          <input type="text" class="form-control" placeholder="Surname">
                                      </div>
                                  </div>
                              </div>
                              <div class="mt-3 invite">
                                  <label class="form-label">Send invitation email<span class="text-danger">*</span></label>
                                  <input type ="email" class="form-control " placeholder="+ invite">
                              </div>
                              
                      
                          </div>
                      </div>
                      
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Send</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Invite New Tenant End -->
    @endpush
@endsection

@section('content')
    <!-- Tenants Analytics -->
    <div class="col-lg-12">
        <div class="card overflow-hidden">
            <div class="card-header border-0 pb-0 flex-wrap">
                <h4 class="heading mb-0">Tenants Analytics</h4>
                <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation" style="margin-right:50px;">
                    <button class="nav-link" type="button"  aria-selected="false"><i class="fa fa-file"></i> Export Report</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab"  aria-selected="true">Week</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab"  aria-selected="false">Month</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab"  aria-selected="false">Year</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
                    </li>
                    <li class="nav-item" id="custom" style="margin-left:50px;">
                    <div id="tenantrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div>									  
                </li>
                </ul>
            </div>
            <div class="card-body" style="padding: 50px;">
            <canvas id="tenants" style="width:100%;max-height:400px"></canvas>
            <br/>
            <ul class="inline">
            <li><i class="fa fa-circle" style="color: red;"></i> Active Tenants</li>
            <li><i class="fa fa-circle" style="color: green;"></i> Total Tenants</li>                                
            </ul>
            </div>
        </div>
    </div>
<!-- End of Tenants -->
@endsection

@section('list_section')
    
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive active-projects style-1">
                <div class="tbl-caption">
                    <h4 class="heading mb-0">Tenants List</h4>
                    <div>
                        <a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Tenant</a>
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                  + Invite Tenant
                                </button>
                    </div>
                </div>
                    <table id="empoloyees-tblwrapper" class="table">
                        <thead>
                            <tr>
                                <th>Tenant ID</th>
                                <th>Tenant Name</th>
                                <th>Email Address</th>
                                <th>Contact Number</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span>1</span></td>
                                <td>
                                    <div class="products">
                                        <img src="{{asset('backend/assets/images')}}/contacts/pic2.jpg" class="avatar avatar-md" alt="">
                                        <div>
                                            <h6>Liam Antony</h6>
                                            <span>Tenant</span>	
                                        </div>	
                                    </div>
                                </td>
                                <td><span class="text-primary">abc@gmail.com</span></td>
                                <td>
                                    <span>+91 123 456 7890</span>
                                </td>	
                                <td>
                                    <span>Dar es salaam</span>
                                </td>
                                <td>
                                    <select>
                                        <option>Edit Tenant</option>
                                        <option>Block Tenant</option>
                                        <option>Delete Tenant</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><span>2</span></td>
                                <td>
                                    <div class="products">
                                        <img src="{{asset('backend/assets/images')}}/contacts/pic2.jpg" class="avatar avatar-md" alt="">
                                        <div>
                                            <h6>John Doe</h6>
                                            <span>Tenant</span>	
                                        </div>	
                                    </div>
                                </td>
                                <td><span class="text-primary">abc@gmail.com</span></td>
                                <td>
                                    <span>+91 123 456 7890</span>
                                </td>	
                                <td>
                                    <span>Dar es salaam</span>
                                </td>
                                <td>
                                    <select>
                                        <option>Edit Tenant</option>
                                        <option>Block Tenant</option>
                                        <option>Delete Tenant</option>
                                    </select>
                                </td>
                            </tr>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <!-- Chart Script -->
<script>
    var xValues = ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sep","Oct", "Nov", "Dec"];
    
    new Chart("tenants", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{ 
          data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
          borderColor: "red",
          fill: false
        }, { 
          data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
          borderColor: "green",
          fill: false
        }]
      },
      options: {
        legend: {display: false}
      }
    });
    </script>
    <!-- Agents Time Range -->
        <script type="text/javascript">
    $(function() {
    
        var start = moment().subtract(29, 'days');
        var end = moment();
    
        function cb(start, end) {
            $('#tenantrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    
        $('#tenantrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
    
        cb(start, end);
    
    });
    </script>
    

@endpush