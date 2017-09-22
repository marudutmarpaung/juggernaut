@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
                    Create New Project
                </header>
                <div class="panel-body">
                    <form action="{{ route('projects.store') }}" method="POST" class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-lg-3 col-sm-3 control-label">Project Name</label>
                            <div class="col-lg-9">
                                <div class="iconic-input">
                                    <i class="fa fa-briefcase"></i>
                                    <input type="text" id="project" name="project" class="form-control"
                                           placeholder="Project's Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 col-sm-3 control-label">Description</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" name="description" rows="10"></textarea>
                            </div>
                        </div>
                        <label class="col-lg-3 col-sm-3 control-label"></label>
                        <button type="submit" class="btn btn-primary">Create Project</button>

                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection