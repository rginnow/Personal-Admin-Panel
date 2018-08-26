@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div class="row">

    <nav class="left-nav col-md-1">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="#" class="nav-link current">
                    <i class="fa fa-tachometer-alt fa-2x"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-check fa-2x"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-file-alt fa-2x"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-coins fa-2x"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-heartbeat fa-2x"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-users fa-2x"></i>
                </a>
            </li>
        </ul>

        <ul class="nav-list bottom">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-cog fa-2x"></i>
                </a>
            </li>
        </ul>
    </nav>

    <div class="col-md-10">
        <section class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <nav class="card-tabs">
                        <ul>
                            <li class="card-tab selected">
                                <a href="#">To Do</a>
                            </li>
                            <li class="card-tab">
                                <a href="#">Completed</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="card-body">
                        <div class="todo">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr text-success"><i class="cr-icon fa fa-check"></i></span>
                                    <div class="todo-text">
                                        <div class="todo-title">Call lawyer about submission</div>
                                        <div class="todo-subtitle">Get New Zealand Visa</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="todo">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr text-success"><i class="cr-icon fa fa-check"></i></span>
                                    <div class="todo-text">
                                        <div class="todo-title">Send Resume to Spark Ventures</div>
                                        <div class="todo-subtitle">Find fulltime job</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="todo">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr text-success"><i class="cr-icon fa fa-check"></i></span>
                                    <div class="todo-text">
                                        <div class="todo-title">Talk to Dealership</div>
                                        <div class="todo-subtitle">Motorcycle</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="todo">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="" checked>
                                    <span class="cr text-success"><i class="cr-icon fa fa-check"></i></span>
                                    <div class="todo-text">
                                        <div class="todo-title">Find cheap tickets in July</div>
                                        <div class="todo-subtitle">Trip to Holland</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="#">
                            <span class="fa-stack mr-2">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-plus fa-stack-1x"></i>
                            </span>
                            Add New Todo
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-tabs">
                        <ul>
                            <li class="card-tab selected">
                                <a href="#">Goals</a>
                            </li>
                            <li class="card-tab">
                                <a href="#">Next</a>
                            </li>
                            <li class="card-tab">
                                <a href="#">Completed</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        You are logged in!
                    </div>

                    <div class="card-footer">
                        <a href="#">
                            <span class="fa-stack mr-2">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-plus fa-stack-1x"></i>
                            </span>
                            Add New Todo
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-tabs">
                        <ul>
                            <li class="card-tab">
                                <a href="#">Income</a>
                            </li>
                            <li class="card-tab selected">
                                <a href="#">Expenses</a>
                            </li>
                            <li class="card-tab">
                                <a href="#">Activity</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        You are logged in!
                    </div>

                    <div class="card-footer">
                        <a href="#">
                            <span class="fa-stack mr-2">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-plus fa-stack-1x"></i>
                            </span>
                            Add New Expense
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-tabs">
                        <ul>
                            <li class="card-tab selected">
                                <a href="#">People</a>
                            </li>
                            <li class="card-tab">
                                <a href="#">Completed</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        You are logged in!
                    </div>

                    <div class="card-footer">
                        <a href="#">
                            <span class="fa-stack mr-2">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-plus fa-stack-1x"></i>
                            </span>
                            Add New Contact
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="right-nav col-md-1">
        <a href="#">
            <span class="fa-stack fa-2x">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
            </span>
        </a>

        <div class="messages bottom">
            <div class="contact">
                <img src="https://api.adorable.io/avatars/50/tom.png" alt="Tom">
                <span class="badge">1</span>
            </div>
            <div class="contact">
                <img src="https://api.adorable.io/avatars/50/jerry.png" alt="Jerry">
                <span class="badge">1</span>
            </div>
            <div class="contact">
                <img src="https://api.adorable.io/avatars/50/bob.png" alt="Bob">
                <span class="badge">1</span>
            </div>
        </div>
    </div>

</div>
@endsection
