@extends('layouts.master')
@section('content')
<section class="section mt-2" >
<div class="container-fluid" style="background-color:#f9f9f9;">     
<h2 class="text-center">Registration</h2>

<div class="row gap-y">
<div class="col-md-3">
</div>
<div class="col-md-6">
    <div class="form-group">
        <label>Admission No.:</label>
        <input class="form-control" type="number" placeholder="Admission Number">
    </div>
    <div class="form-group">
        <label>Name:</label>
        <input class="form-control" type="text" placeholder="Name">
    </div>
    <div class="form-group">
        <label>Father Name:</label>
        <input class="form-control" type="text" placeholder="Father Name">
    </div>
    <div class="form-group">
        <label>Occupation:</label>
        <input class="form-control" type="text" placeholder="Occupation">
    </div>
    <div class="form-group">
        <label>Mother Name:</label>
        <input class="form-control" type="text" placeholder="Mother Name">
    </div>
    <div class="form-group input-group">
        <label>Aadhar No. :</label>
        <input class="form-control" type="number" placeholder="Aadhar Number">
        <label>Blood Group :</label>
        <input class="form-control" type="number" placeholder="Blood Group">
    </div>
    <div class="form-group input group">
        <label>DOB:</label>
        <input class="form-control col-6" type="date" placeholder="Date of Birth">
    
    <div class="row">
    <label for="">Gender</label>

        <div class="custom-control custom-radio pl-4">
            <input type="radio" class="custom-control-input" name="balance_type" value="from_agent" checked required>
            <label class="custom-control-label">Male</label>
        </div>
        
        <div class="custom-control custom-radio pl-6">
            <input type="radio" class="custom-control-input" name="balance_type" value="to_agent"  required>
            <label class="custom-control-label">Female</label>
        </div>
        </div>

    </div>
    
    </div>
    
    <!-- <div class="form-group">
        <label>Education:</label>
        <textarea class="form-control" placeholder="Your message" rows="7"></textarea>
    </div> -->
</div>
</div>
</div>
</div>
</section>
@endsection