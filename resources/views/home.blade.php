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
                                        <div class="todo-title font-weight-bold">Call lawyer about submission</div>
                                        <div class="todo-subtitle">Get New Zealand Visa</div>
                                    </div>
                                </label>
                                <div class="attachment">
                                    <img src="https://api.adorable.io/avatars/40/tom.png" alt="Tom">
                                </div>
                            </div>
                        </div>

                        <div class="todo">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr text-success"><i class="cr-icon fa fa-check"></i></span>
                                    <div class="todo-text">
                                        <div class="todo-title font-weight-bold">Send Resume to Spark Ventures</div>
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
                                        <div class="todo-title font-weight-bold">Talk to Dealership</div>
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
                                        <div class="todo-title font-weight-bold">Find cheap tickets in July</div>
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
                        <ol class="goals">
                            <li class="goal clearfix">
                                <div class="goal-text">
                                    <div class="goal-title font-weight-bold">Find cheap tickets in July</div>
                                    <div class="goal-subtitle">Trip to Holland</div>
                                </div>
                                <div class="goal-progress progress-info">
                                    <span class="progress-text text-info font-weight-bold" >2 / 8</span>
                                </div>
                            </li>

                            <li class="goal clearfix">
                                <div class="goal-text">
                                    <div class="goal-title font-weight-bold">Motorcycle</div>
                                    <div class="goal-subtitle">Save $5,000</div>
                                </div>
                                <div class="goal-progress progress-info">
                                    <span class="goal-bg" role="progressbar" style="width:45%"></span>
                                    <span class="progress-text text-info font-weight-bold" >$1,500</span>
                                </div>
                            </li>

                            <li class="goal clearfix">
                                <div class="goal-text">
                                    <div class="goal-title font-weight-bold">Trip to Holland</div>
                                    <div class="goal-subtitle">Save $10,000</div>
                                </div>
                                <div class="goal-progress progress-success">
                                    <span class="goal-bg" role="progressbar" style="width:45%"></span>
                                    <span class="progress-text text-success font-weight-bold" >$1,500</span>
                                </div>
                            </li>

                            <li class="goal clearfix">
                                <div class="goal-text">
                                    <div class="goal-title font-weight-bold">Find Fulltime Job</div>
                                    <div class="goal-subtitle">Almost Done</div>
                                </div>
                                <div class="goal-progress progress-success">
                                    <span class="progress-text text-success font-weight-bold" >6 / 9</span>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <div class="card-footer">
                        <a href="#">
                            <span class="fa-stack mr-2">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-plus fa-stack-1x"></i>
                            </span>
                            Add New Goal
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
                        <ul class="expenses">
                            <li class="expense clearfix">
                                <div class="expense-text">
                                    <div class="expense-title font-weight-bold">Find cheap tickets in July</div>
                                    <div class="expense-subtitle">Trip to Holland</div>
                                </div>
                                <div class="expense-progress progress-danger">
                                    <span class="progress-text text-danger font-weight-bold" >29.15</span>
                                </div>
                            </li>

                            <li class="expense clearfix">
                                <div class="expense-text">
                                    <div class="expense-title font-weight-bold">Motorcycle</div>
                                    <div class="expense-subtitle">Save $5,000</div>
                                </div>
                                <div class="expense-progress progress-danger">
                                    <span class="expense-bg" role="progressbar" style="width:45%"></span>
                                    <span class="progress-text text-danger font-weight-bold" >120.99</span>
                                </div>
                            </li>

                            <li class="expense clearfix">
                                <div class="expense-text">
                                    <div class="expense-title font-weight-bold">Trip to Holland</div>
                                    <div class="expense-subtitle">Save $10,000</div>
                                </div>
                                <div class="expense-progress progress-danger">
                                    <span class="expense-bg" role="progressbar" style="width:45%"></span>
                                    <span class="progress-text text-danger font-weight-bold" >15.99</span>
                                </div>
                            </li>

                            <li class="expense clearfix">
                                <div class="expense-text">
                                    <div class="expense-title font-weight-bold">Find Fulltime Job</div>
                                    <div class="expense-subtitle">Almost Done</div>
                                </div>
                                <div class="expense-progress progress-danger">
                                    <span class="progress-text text-danger font-weight-bold" >12.72</span>
                                </div>
                            </li>
                        </ul>
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
                        <div class="contact">
                            <div class="contact-image">
                                <img src="https://api.adorable.io/avatars/40/tom.png" alt="Tom">
                            </div>
                            <div class="contact-text">
                                <div class="contact-title font-weight-bold">Tom Sanders</div>
                                <div class="contact-subtitle">Friend</div>
                            </div>
                        </div>

                        <div class="contact">
                            <div class="contact-image">
                                <img src="https://api.adorable.io/avatars/40/jerry.png" alt="Jerry">
                            </div>
                            <div class="contact-text">
                                <div class="contact-title font-weight-bold">Spongebob Squarepants</div>
                                <div class="contact-subtitle">Cartoon Character</div>
                            </div>
                        </div>

                        <div class="contact">
                            <div class="contact-image">
                                <img src="https://api.adorable.io/avatars/40/bob.png" alt="Bob">
                            </div>
                            <div class="contact-text">
                                <div class="contact-title font-weight-bold">Bob Saget</div>
                                <div class="contact-subtitle">Celebrity</div>
                            </div>
                        </div>

                        <div class="contact">
                            <div class="contact-image">
                                <img src="https://api.adorable.io/avatars/40/sam.png" alt="Sam">
                            </div>
                            <div class="contact-text">
                                <div class="contact-title font-weight-bold">Jerry Mouse</div>
                                <div class="contact-subtitle">Cartoon Character</div>
                            </div>
                        </div>
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
            <div class="quick-contact">
                <img src="https://api.adorable.io/avatars/50/tom.png" alt="Tom">
                <span class="badge">1</span>
            </div>
            <div class="quick-contact">
                <img src="https://api.adorable.io/avatars/50/jerry.png" alt="Jerry">
                <span class="badge">1</span>
            </div>
            <div class="quick-contact">
                <img src="https://api.adorable.io/avatars/50/bob.png" alt="Bob">
                <span class="badge">1</span>
            </div>
        </div>
    </div>

</div>
@endsection
