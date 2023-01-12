<!DOCTYPE html>
@extends('layouts.mainlayout')

@section('title','Academic Employee Details')

@section('content')
<div class="container">
    <div class="row">

        <div class="container" id="faccontainer">

            <h1>Employee Leave Type Update</h1>
            <div class="row">
                <div class="col-md-12">

                    <form action="/saveleaveUpdate" method="POST" Class="was-validated">
                        {{csrf_field()}}

                        <br> </br>
                        <div class="form-group form-row">

                            <div class="col-sm-9">
                                <div class="form-group form-row">
                                    <label class="col-sm-3" for="input-doc">Leave Types</label>
                                    <div class="col-sm-9">
                                        <input value="{{$leaveTypesup->id}}" class="form-control" type="text" name="id"  required="required" id="input-doc" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-sm-3" for="input-doc">Leave Types</label>
                                    <div class="col-sm-9">
                                        <input value="{{$leaveTypesup->leavetypes}}" class="form-control" type="text" name="leatype" placeholder="Enter Leave Types" required="required" id="input-doc">
                                    </div>
                                </div>
                                </br>

                                <input type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')"  value="UPDATE">
                                <input type="button" class="btn btn-warning" value="CLEAR">
                                </br> </br>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

        <style>
            #faccontainer {
                text-align: left;
                /* margin-top: 100px;
    margin-bottom: 80px; */
            }

            h1 {
                text-align: center;
            }
        </style>
        @endsection