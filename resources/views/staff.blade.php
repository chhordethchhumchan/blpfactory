@extends('layouts.app')

@section('content')
<div class="container">
        <form action="/insert" method="post" class="">
            <label class="control-label">FirstName</label>  
            <input type="text" name="firstname" class="form-control"><br/>
            <label class="control-label">MiddleName</label>  
            <input type="text" name="lastname" class="form-control"><br/>       
            <label class="control-label">LastName</label>
            <input type="text" name="lastname" class="form-control"><br/>
            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                <div class="form-group row">
                    <label for="name" class="col-md-3 control-label"><strong>កាលបរិច្ឆេទ: <span class="required" aria-required="true">* </span></strong></label>
                    <div class="col-md-7">
                        <input placeholder="កាលបរិច្ឆេទ" class="form-control" id="inputTextBox" name="dates" type="text">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                <div class="form-group row">
                    <label for="name" class="col-md-3 control-label"><strong>កាលបរិច្ឆេទ: <span class="required" aria-required="true">* </span></strong></label>
                    <div class="col-md-7">
                        <input placeholder="កាលបរិច្ឆេទ" class="form-control" id="inputTextBox" name="dates" type="text">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                <div class="form-group row">
                    <label for="name" class="col-md-3 control-label"><strong>កាលបរិច្ឆេទ: <span class="required" aria-required="true">* </span></strong></label>
                    <div class="col-md-7">
                        <input placeholder="កាលបរិច្ឆេទ" class="form-control" id="inputTextBox" name="dates" type="text">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                <div class="form-group row">
                    <label for="name" class="col-md-3 control-label"><strong>កាលបរិច្ឆេទ: <span class="required" aria-required="true">* </span></strong></label>
                    <div class="col-md-7">
                        <input placeholder="កាលបរិច្ឆេទ" class="form-control" id="inputTextBox" name="dates" type="text">
                    </div>
                </div>
            </div>
       
        </form>

</div>
@endsection
