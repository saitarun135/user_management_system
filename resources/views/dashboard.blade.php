@include('header')
<!DOCTYPE html>
<html>

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .left-btn {
            float: left;
        }

        .right-btn {
            float: right;
        }

        .table-bordered {
            margin-top: 3%;
        }

        #new-form {
            border: 3px solid black;
            width: 600px;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        table {
            font-family: "Times New Roman";
            font-size: 20px;
        }

        span.circle {
            background: #ADD8E6;
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            color: #6e6e6e;
            display: inline-block;
            font-weight: bold;
            line-height: 40px;
            margin-right: 5px;
            text-align: center;
            width: 40px;
        }

        .buttons {
            width: 200px;
            margin: 0 auto;
            display: inline;
        }

        .action_btn {
            width: 200px;
            margin: 0 auto;
            display: inline;
        }

        .confirm_buttons {
            width: 60px;
        }

        .popup {
            font-size: 15px;
        }

        .file:focus,
        .file:active {
            box-shadow: none !important;
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            outline: none !important;
        }

        .glyphicon-remove {
            font-size: 20px;
            ;
        }
        .remove-btn {
            font-size: 20px;
            border: 1px solid #ddd;
            background: #dddd;
        }
        .customform{
           font-size: 60px;
           line-height: 35px;
        }
        .form-group {
            font-size: 18px !important;
        }
        .form-control {
            height: 40px !important;
            font-size: 18px !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h4 class="" style="font-size:20px;font-weight:80px;">User Records</h4>
            </div>
            <div class="col-6 text-right">
                <button type="button" style="font-size:20px;font-weight:28px;" class="btn btn-primary"
                    data-toggle="modal" data-target="#exampleModal">
                    Add New Employee
                </button>
            </div>
        </div>
        <div class="modal fade customform" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" style="font-size:20px;font-weight:28px;" id="exampleModalLabel">Add New Employee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="height: 20px; width: 20px">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body popup">
                        <form action="<?php echo url('postemployee'); ?>" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="email1">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        aria-describedby="emailHelp" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="email1">Full name</label>
                                    <input type="text" class="form-control" id="fname"
                                        aria-describedby="emailHelp" name="fname" placeholder="Enter Name">

                                </div>
                                <div class="form-group">
                                    <label for="email1">Date of joining</label>
                                    <input type="date" class="form-control" name="doj" id="doj"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="form-group">
                                    <label for="password1">Date of leaving</label>
                                    <input type="date" class="form-control" id="password1" name="dol">
                                </div>

                                <div class="form-check form-inline pl-0">
                                    <input class="form-check-input mr-2" type="checkbox" name="current_date"
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Still working?
                                    </label>
                                </div>
                                <div class="form-group form-inline">
                                    <label for="email1">Upload image</label>
                                    <input type="file" class="file" class="form-control" id="email"
                                        name="image" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary" style="width: 100px;font-size:20px;height:40px;">Save</button>
                                </div>

                            </div>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-bordered" id="table">
            <tr class="text-center">
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Experience</th>
                <th>Action</th>
            </tr>
            @foreach ($employees as $employee)
                <tr class="text-center">
                    <td >
                        @if (isset($employee['image_path']))
                            <img style="border-radius: 50%;height:40px;width:40px;"
                                src={{ URL::asset("/images/{$employee['image_path']}") }} alt="Avatar">
                        @else
                            <span class="circle">{{ ucfirst(mb_substr($employee['name'], 0, 1)) }}</span>
                        @endif
                    </td>
                    <td>{{ ucfirst($employee['name']) }}</td>
                    <td>{{ $employee['email'] }}</td>
                    <td>
                        @if ($employee['status'] != 'working')
                            @if ($employee['status'] == 'last working day')
                                <span data-toggle="tooltip" data-placement="top" title="{{$employee['joining_date']}}"
                                    style="color:rgb(32, 14, 194);font-weight:500;">Last Working Day</span>
                            @elseif ($employee['status'] == 'left')
                                <span data-toggle="tooltip" data-placement="top" title="{{$employee['joining_date']}}"
                                    style="color:rgb(250, 38, 19);font-weight:500;">Left</span>
                            @endif
                        @else
                            @if ($employee['joining_date'] == '0 Days')
                                <span data-toggle="tooltip" data-placement="top" title="Fresher"
                                    style="color:green;font-weight:500;">Joined Today</span>
                            @else
                                {{ $employee['joining_date'] }}
                            @endif
                        @endif
                        {{-- @if ($employee['joining_date'] == '0 Days')
                            <span data-toggle="tooltip" data-placement="top" title="Fresher"
                                style="color:green;font-weight:500;">Joined Today</span>
                        @else
                            {{ $employee['joining_date'] }}
                        @endif --}}
                    </td>
                    <td>
                        <button type="submit" class="btn remove-btn" data-toggle="modal" data-target="#exampleModalCenter"
                           style="background:#ADD8E6;" data-backdrop="static" data-keyboard="false" value="{{ $employee['id'] }}"
                            onclick="getID(this.value)">Remove
                        </button>

                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                    <div class="modal-body text-center">
                                        Are you sure you want to delete ?
                                        <br><br>
                                        <form action="<?php echo url('delete'); ?>" method="POST">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-primary confirm_buttons"
                                                data-toggle="modal" name="delete_id" id="delete_id_from_btn"
                                                data-target="#exampleModalCenter">Yes</button>
                                            <button type="submit" class="btn btn-secondary confirm_buttons"
                                                data-toggle="modal" data-target="#exampleModalCenter">No</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="right-btn">
    </div>



    <script type="text/javascript">
        function getID(objButton) {
            document.getElementById('delete_id_from_btn').value = objButton;
        }
    </script>
</body>

</html>
