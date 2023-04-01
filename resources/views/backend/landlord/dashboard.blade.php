
@extends('backend.layouts.master')

@section('title','test')

@section('content')
     <!-- White Box -->
     <div class="white-box">
        <h5>All Landlords</h5>
        <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
            <select class="form-select shadow-none row border-top">
                <option>View All</option>
                <option>Function 1</option>
                <option>Function 2</option>
                <option>Function 3</option>
            </select>
        </div>
        <br/>
        <!-- Table with the list of all Tenants -->  
        <div id="agents">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Units</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Price Paid</th>
                        <th>Restrictions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Dar es salaam, Tanzania</td>
                        <td>12</td>
                        <td>P.o.box 1245</td>
                        <td>john@gmail.com</td>
                        <td>+255745156165</td>
                        <td>Tsh 256,122</td>
                        <td>
                            <select class="form-select shadow-none row border-top">
                                <option>--- Restrict Service Provider ---</option>
                                <option>Block</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Aisha Doe</td>
                        <td>Kawe, Tanzania</td>
                        <td>24</td>
                        <td>P.o.box 756</td>
                        <td>john@gmail.com</td>
                        <td>+25571452642</td>
                        <td>Tsh 1,569,145</td>
                        <td>
                        <select class="form-select shadow-none row border-top">
                            <option>--- Restrict Service Provider ---</option>
                            <option>Block</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Doe</td>
                        <td>Arusha, Tanzania</td>
                        <td>36</td>
                        <td>P.o.box 456</td>
                        <td>jane@gmail.com</td>
                        <td>+2557652120</td>
                        <td>Tsh 45,256,122</td>
                        <td>
                        <select class="form-select shadow-none row border-top">
                            <option>--- Restrict Service Provider ---</option>
                            <option>Block</option>
                        </select>
                        </td>
                    </tr>
                </tbody>
            </table> 
        </div>
    </div>
    <!-- End of white box -->

    
@endsection