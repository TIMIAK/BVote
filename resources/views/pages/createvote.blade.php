@extends('layouts.app')
@section('content')
    <script>
        var Name_of_Contestant = [];
        var Number_of_Contestant = 0;
        var Email_Of_Voters = [];
        var Number_Of_Voters = 0;
        function Add_Name_of_Contestant(){

            var name = document.getElementById('Name_of_Contestant').value;
            Name_of_Contestant.push(name)
            Number_of_Contestant = Name_of_Contestant.length;
            document.getElementById('Number_of_Contestant').innerHTML = Number_of_Contestant;
            document.getElementById('Name_of_Contestant').value = '';

        }
        function Add_Email_of_Voters(){
            var name = document.getElementById('Email_Of_Voters').value;
            Email_Of_Voters.push(name)
            Number_Of_Voters = Email_Of_Voters.length;
            document.getElementById('Number_Of_Voters').innerHTML = Number_Of_Voters;
            document.getElementById('Email_Of_Voters').value = '';
        }
    </script>
        <div class="row justify-content-center">
            <div class="col-9 insidecontainer justify-content-center">
                <form action="{{action('PostController@store')}}" method="PUT">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="votetitle" class="text-danger">Title</label>
                                <input type="text" name="Vote_Title" class="form-control" id="votetitle" placeholder="Enter Title" required>
                            </div>
                            <div class="col-6">
                                <label for="votetitle" class="text-danger">Name of Contestant</label>
                                <div class="input-group">
                                    <input type="text" id="Name_of_Contestant" name="Name_of_Contestant" class="form-control" placeholder="Name of Contestant" required>
                                    <div class="input-group-append">

                                    <button class="btn btn-outline-secondary" type="button" onclick="Add_Name_of_Contestant()">ADD <span id="Number_of_Contestant"></span></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                           <div class="col">
                                <label for="votetitle" class="text-danger">Email of Voters</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="Email_Of_Voters" name="Email_Of_Voters" placeholder="Email Address of Voters" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" onclick="Add_Email_of_Voters()">ADD <span id="Number_Of_Voters"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <label for="votetitle" class="text-danger">Start Date(From)</label><br>
                                <input type="date" name="Start_Date" class="form-control" id="votetitle" placeholder="Enter Title" required>
                            </div>
                            <div class="col-6">
                                <label for="votetitle" class="text-danger">Stop Date(To)</label><br>
                                <input type="date" name="End_Date" class="form-control" id="votetitle" placeholder="Enter Title" required>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <label for="votetitle" class="text-danger">Start Time</label><br>
                                <input type="time" name="Start_Time" class="form-control" id="votetitle" placeholder="Enter Title" required>
                            </div>
                            <div class="col-6">
                                <label for="votetitle" class="text-danger">End Time</label><br>
                                <input type="time" name="End_Time" class="form-control" id="votetitle" placeholder="Enter Title" required>
                            </div>
                        </div>

                        <hr>
                        <div>
                            <button type="submit" name="Submit" class="btn btn-outline-secondary">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

@endsection
