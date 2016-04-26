<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <center> </center><form action="/task" method="POST" clas="form-horizontal">
            {!! csrf_field() !!}

             <center>Fields of Research (FOR) * :<select name="FOR">
                        <option value ="Accounting Education"> Accounting Education</option>
                        <option value ="Chemometrics"> Chemometrics</option>
                        <option value ="Family Law"> Family Law</option>
            </select></center><br>

            <center>Socio-economic Objectives (SEO) :<select name="SEO">
                <option value ="Defence"> Defence</option>
                <option value ="Food Security"> Food Security</option>
                <option value ="Agricultural Chemicals"> Agricultural Chemicals</option>
            </select></center>
            <center>Comments : <input type="text" name="comments"></center>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 com-sm-6"><br><br>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Submit </button>
                        <button type="submit" class="btn-primary">
                        <i class="fa fa-plus"></i> Clear
                    </button>
                </div>
            </div>
        </form></center>
    </div>

<p><footer>
        <label>&copy Universiti Putra Malaysia. All rights reserved.</label>
    </footer></p>

@if (count($tasks) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Current Tasks
        </div>

        <div class="panel-body">
            <table class="table table-stripped task-table">

                <!-- Table Headings -->
                <thead>
                <th>Task</th>
                <th>&nbsp;</th>
                </thead>

                <!-- Table Body -->
                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text">
                            <div>{{ $task->name }}</div>
                        </td>

                        </td>
                    </tr>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
@endsection