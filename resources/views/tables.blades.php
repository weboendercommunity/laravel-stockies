@extends('layouts.base')

@section('customers')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">customers</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://dbdocs.io/shevaathalla/MVC_Stockies?table=Customers&schema=public&view=table_structure">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>customer_fullname</th>
                                            <th>phone_number</th>
                                            <th>email</th>
                                            <th>address</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>customer_fullname</th>
                                            <th>phone_number</th>
                                            <th>email</th>
                                            <th>address</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection


@section('products')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">customers</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://dbdocs.io/shevaathalla/MVC_Stockies?table=Customers&schema=public&view=table_structure">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>product_name</th>
                                            <th>unit_price</th>
                                            <th>supplier_id</th>
                                            <th>category_id</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>product_name</th>
                                            <th>unit_price</th>
                                            <th>supplier_id</th>
                                            <th>category_id</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection