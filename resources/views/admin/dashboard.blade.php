@extends('layouts.admin')
@section('title')
    {{('Admin Dashboard')}}
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content">                
            <!-- Top Statistics -->
            <div class="row">
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                  <div class="card-header">
                    <h2>$18,699</h2>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="sub-title">
                      <span class="mr-1">Sales of this year</span> |
                      <span class="mx-1">45%</span>
                      <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-wrapper">
                      <div>
                        <div id="spline-area-1"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                  <div class="card-header">
                    <h2>$14,500</h2>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="sub-title">
                      <span class="mr-1">Expense of this year</span> |
                      <span class="mx-1">50%</span>
                      <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-wrapper">
                      <div>
                        <div id="spline-area-2"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                  <div class="card-header">
                    <h2>$4199</h2>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="sub-title">
                      <span class="mr-1">Profit of this year</span> |
                      <span class="mx-1">20%</span>
                      <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-wrapper">
                      <div>
                        <div id="spline-area-3"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                  <div class="card-header">
                    <h2>$20,199</h2>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="sub-title">
                      <span class="mr-1">Revenue of this year</span> |
                      <span class="mx-1">35%</span>
                      <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-wrapper">
                      <div>
                        <div id="spline-area-4"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          <div class="row">
            <div class="col-xl-8">
              
              <!-- Income and Express -->
              <div class="card card-default">
                <div class="card-header">
                  <h2>Income And Expenses</h2>
                  <div class="dropdown">
                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false" data-display="static">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>

                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                    <div id="mixed-chart-1"></div>
                  </div>
                </div>

              </div>


            </div>
            <div class="col-xl-4">
              <!-- Current Users  -->
              <div class="card card-default">
                <div class="card-header">
                  <h2>Current Users</h2>
                  <span>Realtime</span>
                </div>
                <div class="card-body">
                  <div id="barchartlg2"></div>
                </div>
                <div class="card-footer bg-white py-4">
                  <a href="#" class="text-uppercase">Current Users Overview</a>
                </div>
              </div>
            </div>
          </div>


          
          <!-- Table Product -->
          <div class="row">
            <div class="col-12">
              <div class="card card-default">
                <div class="card-header">
                  <h2>Products Inventory</h2>
                  <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"> Yearly Chart
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table id="productsTable" class="table table-hover table-product" style="width:100%">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Product Name</th>
                        <th>ID</th>
                        <th>Qty</th>
                        <th>Variants</th>
                        <th>Committed</th>
                        <th>Daily Sale</th>
                        <th>Sold</th>
                        <th>In Stock</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-01.jpg')}}" alt="Product Image">
                        </td>
                        <td>Coach Swagger</td>
                        <td>24541</td>
                        <td>27</td>
                        <td>1</td>
                        <td>2</td>
                        <td>
                          <div id="tbl-chart-01"></div>
                        </td>
                        <td>4</td>
                        <td>18</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-02.jpg')}}" alt="Product Image">
                        </td>
                        <td>Toddler Shoes, Gucci Watch</td>
                        <td>24542</td>
                        <td>18</td>
                        <td>7</td>
                        <td>5</td>
                        <td>
                          <div id="tbl-chart-02"></div>
                        </td>
                        <td>1</td>
                        <td>14</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-03.jpg')}}" alt="Product Image">
                        </td>
                        <td>Hat Black Suits</td>
                        <td>24543</td>
                        <td>20</td>
                        <td>3</td>
                        <td>7</td>
                        <td>
                          <div id="tbl-chart-03"></div>
                        </td>
                        <td>6</td>
                        <td>26</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-04.jpg')}}" alt="Product Image">
                        </td>
                        <td>Backpack Gents</td>
                        <td>24544</td>
                        <td>37</td>
                        <td>8</td>
                        <td>3</td>
                        <td>
                          <div id="tbl-chart-04"></div>
                        </td>
                        <td>6</td>
                        <td>7</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-05.jpg')}}" alt="Product Image">
                        </td>
                        <td>Speed 500 Ignite</td>
                        <td>24545</td>
                        <td>8</td>
                        <td>3</td>
                        <td>4</td>
                        <td>
                          <div id="tbl-chart-05"></div>
                        </td>
                        <td>8</td>
                        <td>42</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-06.jpg')}}" alt="Product Image">
                        </td>
                        <td>Olay</td>
                        <td>24546</td>
                        <td>19</td>
                        <td>6</td>
                        <td>6</td>
                        <td>
                          <div id="tbl-chart-06"></div>
                        </td>
                        <td>79</td>
                        <td>12</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-07.jpg')}}" alt="Product Image">
                        </td>
                        <td>Ledger Nano X</td>
                        <td>24547</td>
                        <td>61</td>
                        <td>46</td>
                        <td>18</td>
                        <td>
                          <div id="tbl-chart-07"></div>
                        </td>
                        <td>76</td>
                        <td>36</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-08.jpg')}}" alt="Product Image">
                        </td>
                        <td>Surface Laptop 2</td>
                        <td>24548</td>
                        <td>33</td>
                        <td>56</td>
                        <td>89</td>
                        <td>
                          <div id="tbl-chart-08"></div>
                        </td>
                        <td>38</td>
                        <td>5</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-09.jpg')}}" alt="Product Image">
                        </td>
                        <td>TIGI Bed Head Superstar Queen</td>
                        <td>24549</td>
                        <td>3</td>
                        <td>9</td>
                        <td>15</td>
                        <td>
                          <div id="tbl-chart-09"></div>
                        </td>
                        <td>6</td>
                        <td>46</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-10.jpg')}}" alt="Product Image">
                        </td>
                        <td>Wattbike Atom</td>
                        <td>24550</td>
                        <td>61</td>
                        <td>56</td>
                        <td>68</td>
                        <td>
                          <div id="tbl-chart-10"></div>
                        </td>
                        <td>3</td>
                        <td>19</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-11.jpg')}}" alt="Product Image">
                        </td>
                        <td>Smart Watch</td>
                        <td>24551</td>
                        <td>19</td>
                        <td>76</td>
                        <td>38</td>
                        <td>
                          <div id="tbl-chart-11"></div>
                        </td>
                        <td>3</td>
                        <td>17</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-12.jpg')}}" alt="Product Image">
                        </td>
                        <td>Magic Bullet Blender</td>
                        <td>24552</td>
                        <td>12</td>
                        <td>30</td>
                        <td>14</td>
                        <td>
                          <div id="tbl-chart-12"></div>
                        </td>
                        <td>26</td>
                        <td>9</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-13.jpg')}}" alt="Product Image">
                        </td>
                        <td>Kanana rucksack</td>
                        <td>24553</td>
                        <td>14</td>
                        <td>65</td>
                        <td>39</td>
                        <td>
                          <div id="tbl-chart-13"></div>
                        </td>
                        <td>9</td>
                        <td>55</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-14.jpg')}}" alt="Product Image">
                        </td>
                        <td>Copic Opaque White</td>
                        <td>24554</td>
                        <td>43</td>
                        <td>29</td>
                        <td>75</td>
                        <td>
                          <div id="tbl-chart-14"></div>
                        </td>
                        <td>7</td>
                        <td>15</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="py-0">
                          <img src="{{asset('images/products/products-xs-15.jpg')}}" alt="Product Image">
                        </td>
                        <td>Headphones</td>
                        <td>24555</td>
                        <td>17</td>
                        <td>6</td>
                        <td>7</td>
                        <td>
                          <div id="tbl-chart-15"></div>
                        </td>
                        <td>6</td>
                        <td>98</td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>



                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-xl-4">
              <!-- Top Customers -->
              <div class="card card-default">
                <div class="card-header">
                  <h2>Top Customers</h2>
                </div>
                <div class="card-body">
                  <table class="table table-borderless table-thead-border">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th class="text-right">Income</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-dark font-weight-bold">Gunter Reich</td>
                        <td class="text-right">$2,560</td>
                      </tr>
                      <tr>
                        <td class="text-dark font-weight-bold">Anke Kirsch</td>
                        <td class="text-right">$1,720</td>
                      </tr>
                      <tr>
                        <td class="text-dark font-weight-bold">Karolina Beer</td>
                        <td class="text-right">$1,230</td>
                      </tr>
                      <tr>
                        <td class="text-dark font-weight-bold">Lucia Christ</td>
                        <td class="text-right">$875</td>
                      </tr>
                    </tbody>
                    <tfoot class="border-top">
                      <tr>
                        <td><a href="#" class="text-uppercase">See All</a></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>

            </div>
            <div class="col-xl-8">
              <div class="card card-default">
                <div class="card-header">
                  <h2>Sales by Country</h2>
                  <div id="country-sales-range" class="date-range">
                    <i class="mdi mdi-calendar"></i>&nbsp;
                    <span class="date-holder"></span>
                    <i class="mdi mdi-menu-down"></i>
                  </div>
                </div>
                <div class="card-body py-0" >
                  <div class="row pb-4">
                    <div class="col-lg-7 border-right-lg">
                      <div class="vec-map-wrapper" >
                        <div id="home-world" style="height: 100%; width: 100%;"></div>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="chart-wrapper">
                        <div id="horizontal-bar-chart"></div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

        <div class="row">
          <div class="col-xl-8">
            
              <!-- Sales by Product -->
              <div class="card card-default">
                <div class="card-header align-items-center">
                  <h2 class="">Sales by Product</h2>
                  <a href="#" class="btn btn-primary btn-pill" data-toggle="modal" data-target="#modal-stock">Add Stock</a>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <table id="product-sale" class="table table-product " style="width:100%">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Unit</th>
                          <th>Amount</th>
                          <th>%sold</th>
                          <th class="th-width-250"></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>Coach Swagger</td>
                          <td>134</td>
                          <td>$24541</td>
                          <td>35.28%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Toddler Shoes</td>
                          <td>119</td>
                          <td>$20225</td>
                          <td>27.05%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Hat Black Suits</td>
                          <td>101</td>
                          <td>$17,290</td>
                          <td>20.25%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Backpack Gents</td>
                          <td>59</td>
                          <td>$1150</td>
                          <td>12.50%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Speed 500 Ignite</td>
                          <td>25</td>
                          <td>$590</td>
                          <td>02.10%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Earphone & Headphone</td>
                          <td>23</td>
                          <td>$450</td>
                          <td>02%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8%" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Gucci Watch</td>
                          <td>32</td>
                          <td>$554</td>
                          <td>8%</td>
                          <td>
                            <div class="progress progress-md rounded-0">
                              <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8%" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

          </div>
          <div class="col-xl-4">
            
                <!-- Chat -->
                <div class="card card-default chat">
                  <div class="card-header">
                    <h2>Selena Wagner</h2>
                    <div class="dropdown dropdown-chat-state">
                      <button class="dropdown-toggle btn btn-primary btn-rounded-circle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="mdi mdi-account-alert"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <li>
                          <a href="#" class="user-link">
                            <img src="{{asset('images/user/user-sm-01.jpg')}}" alt="User Image">
                            <span class="username">anna patuary
                              <span class="badge badge-secondary">18</span>
                            </span>
                            <span class="state active">
                              <i class="mdi mdi-circle-medium"></i>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#" class="user-link">
                            <img src="{{asset('images/user/user-sm-02.jpg')}}" alt="User Image">
                            <span class="username">riman Ghose
                              <span class="badge badge-secondary">18</span>
                            </span>
                            <span class="state">
                              1hrs
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#" class="user-link">
                            <img src="{{asset('images/user/user-sm-03.jpg')}}" alt="User Image">
                            <span class="username">riman Ghose
                              <span class="badge badge-secondary">18</span>
                            </span>
                            <span class="state">
                              1hrs
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#" class="user-link">
                            <img src="{{asset('images/user/user-sm-04.jpg')}}" alt="User Image">
                            <span class="username">riman Ghose
                              <span class="badge badge-secondary">18</span>
                            </span>
                            <span class="state">
                              1hrs
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#" class="user-link">
                            <img src="{{asset('images/user/user-sm-05.jpg')}}" alt="User Image">
                            <span class="username">riman Ghose</span>
                            <span class="state">15min</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body pb-0" data-simplebar style="height: 363px;">
                    <!-- Media Chat Left -->
                    <div class="media media-chat">
                      <img src="{{asset('images/user/user-sm-01.jpg')}}" class="rounded-circle" alt="Avata Image">
                      <div class="media-body">
                        <div class="text-content">
                          <span class="message">Hello my name is anna.</span>
                          <time class="time">5 mins ago</time>
                        </div>
                      </div>
                    </div>

                    <!-- Media Chat Right -->
                    <div class="media media-chat media-chat-right">
                      <div class="media-body">
                        <div class="text-content">
                          <span class="message">Hello i am Riman.</span>
                          <time class="time">4 mins ago</time>
                        </div>
                        <div class="text-content">
                          <span class="message">I want to know about yourself</span>
                          <time class="time">3 mins ago</time>
                        </div>
                      </div>
                      <img src="{{asset('images/user/user-sm-02.jpg')}}" class="rounded-circle" alt="Avata Image">
                    </div>

                    <!-- Media Chat Left -->
                    <div class="media media-chat">
                      <img src="{{asset('images/user/user-sm-01.jpg')}}" class="rounded-circle" alt="Avata Image">
                      <div class="media-body">
                        <div class="text-content">
                          <span class="message">Its had resolving otherwise she contented therefore.</span>
                          <time class="time">1 mins ago</time>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="chat-footer">
                    <form>
                      <div class="input-group input-group-chat">
                        <div class="input-group-prepend">
                          <span class="emoticon-icon mdi mdi-emoticon-happy-outline"></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                      </div>
                    </form>
                  </div>
                </div>

          </div>
        </div>

        <!-- Stock Modal -->
        <div class="modal fade modal-stock" id="modal-stock" aria-labelledby="modal-stock" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <form action="#">
              <div class="modal-content">
                <div class="modal-header align-items-center p3 p-md-5">
                  <h2 class="modal-title" id="exampleModalGridTitle">Add Stock</h2>
                  <div>
                    <button type="button" class="btn btn-light btn-pill mr-1 mr-md-2" data-dismiss="modal"> cancel </button>
                    <button type="submit" class="btn btn-primary  btn-pill" data-dismiss="modal"> save </button>
                  </div>

                </div>
                <div class="modal-body p3 p-md-5">
                  <div class="row">
                    <div class="col-lg-8">
                      <h3 class="h5 mb-5">Product Information</h3>
                      <div class="form-group mb-5">
                        <label for="new-product">Product Title</label>
                        <input type="text" class="form-control" id="new-product" placeholder="Add Product">
                      </div>
                      <div class="form-row mb-4">
                        <div class="col">
                          <label for="price">Price</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">$</span>
                            </div>
                            <input type="text" class="form-control" id="price" placeholder="Price" aria-label="Price"
                              aria-describedby="basic-addon1">
                          </div>
                        </div>
                        <div class="col">
                          <label for="sale-price">Sale Price</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">$</span>
                            </div>
                            <input type="text" class="form-control" id="sale-price" placeholder="Sale Price" aria-label="SalePrice"
                              aria-describedby="basic-addon1">
                          </div>
                        </div>
                      </div>

                      <div class="product-type mb-3 ">
                        <label class="d-block" for="sale-price">Product Type <i class="mdi mdi-help-circle-outline"></i> </label>
                        <div>

                          <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="checked">
                            <label class="custom-control-label" for="customRadio1">Physical Good</label>
                          </div>

                          <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Digital Good</label>
                          </div>

                          <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">Service</label>
                          </div>

                        </div>
                      </div>

                      <div class="editor">
                        <label class="d-block" for="sale-price">Description <i class="mdi mdi-help-circle-outline"></i></label>
                        <div id="standalone">
                          <div id="toolbar">
                            <span class="ql-formats">
                              <select class="ql-font"></select>
                              <select class="ql-size"></select>
                            </span>
                            <span class="ql-formats">
                              <button class="ql-bold"></button>
                              <button class="ql-italic"></button>
                              <button class="ql-underline"></button>
                            </span>
                            <span class="ql-formats">
                              <select class="ql-color"></select>
                            </span>
                            <span class="ql-formats">
                              <button class="ql-blockquote"></button>
                            </span>
                            <span class="ql-formats">
                              <button class="ql-list" value="ordered"></button>
                              <button class="ql-list" value="bullet"></button>
                              <button class="ql-indent" value="-1"></button>
                              <button class="ql-indent" value="+1"></button>
                            </span>
                            <span class="ql-formats">
                              <button class="ql-direction" value="rtl"></button>
                              <select class="ql-align"></select>
                            </span>
                          </div>
                        </div>
                        <div id="editor"></div>

                        <div class="custom-control custom-checkbox d-inline-block mt-2">
                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                          <label class="custom-control-label" for="customCheck2">Hide product from published site</label>
                        </div>

                      </div>

                    </div>
                    <div class="col-lg-4">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" placeholder="please imgae here">
                        <span class="upload-image">Click here to <span class="text-primary">add product image.</span> </span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
</div>
    
@endsection