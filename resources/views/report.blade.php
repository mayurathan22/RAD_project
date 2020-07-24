<!DOCTYPE html>
<html>
 <head>
  <title>Laravel - How to Generate Dynamic PDF from HTML using DomPDF</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Laravel - How to Generate Dynamic PDF from HTML using DomPDF</h3><br />
   
   <div class="row">
    <div class="col-md-7" align="right">
     <h4>Customer Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('report/pdf_customer') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
        <th>ID</th>
       <th>Name</th>
       <th>E-Mail</th>
      </tr>
     </thead>
     <tbody>
     @foreach($data['customer'] as $customer)
      <tr>
       <td>{{ $customer->id }}</td>
       <td>{{ $customer->name }}</td>
       <td>{{ $customer->email }}</td>
      </tr>
     @endforeach
     </tbody>
    </table>
    <br>
    <br>
    <br>
    <div class="row">
    <div class="col-md-7" align="right">
     <h4>Employee Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('report/pdf_employee') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
        <th>ID</th>
       <th>Name</th>
       <th>E-Mail</th>
      </tr>
     </thead>
     <tbody>
     @foreach($data['employee'] as $employee)
      <tr>
       <td>{{ $employee->id }}</td>
       <td>{{ $employee->name }}</td>
       <td>{{ $employee->email }}</td>
      </tr>
     @endforeach
     </tbody>
    </table>
    <br>
    <br>
    <br>
    <div class="row">
    <div class="col-md-7" align="right">
     <h4>Product Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('report/pdf_product') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
        <th>ID</th>
       <th>Name</th>
       <th>E-Mail</th>
      </tr>
     </thead>
     <tbody>
     @foreach($data['product'] as $product)
      <tr>
       <td>{{ $product->id }}</td>
       <td>{{ $product->name }}</td>
       <td>{{ $product->description }}</td>
       <td>{{ $product->price }}</td>
      </tr>
     @endforeach
     </tbody>
    </table>
    <br>
    <br>
    <br>
    <div class="row">
    <div class="col-md-7" align="right">
     <h4>Contract Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('report/pdf_contract') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
        <th>ID</th>
       <th>Customer ID</th>
       <th>Customer Name</th>
       <th>Address</th>
       <th>Phone</th>
       <th>Income</th>
       <th>Outcome</th>
      </tr>
     </thead>
     <tbody>
     @foreach($data['contract'] as $contract)
      <tr>
       <td>{{ $contract->id }}</td>
       <td>{{ $contract->customer_id }}</td>
       <td>{{ $contract->customer_name }}</td>
       <td>{{ $contract->address }}</td>
       <td>{{ $contract->phone }}</td>
       <td>{{ $contract->income }}</td>
       <td>{{ $contract->outcome }}</td>
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>