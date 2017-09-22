@extends('layouts.app')

@section('title')
    List Of Project
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    List Of Project
                </header>
                <div class="panel-body">
                    <div class="adv-table">
                        <table class="display table table-bordered table-striped" id="example">
                            <thead>
                            <tr>
                                <th style="text-align: center">NO</th>
                                <th style="text-align: center">NAME</th>
                                <th style="text-align: center">CATEGORY</th>
                                <th style="text-align: center">STATUS</th>
                                <th style="text-align: center">LEVEL</th>
                                <th style="text-align: center">ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{++$no}}</td>
                                    <td>{{$project->name}}</td>
                                    <td>
                                        <p class="text-center">
                                            @if($project->category == 1)
                                                <span class="label label-success">MOBILE APPS</span>
                                            @elseif($project->category == 2)
                                                <span class="label label-default">WEB APPLICATION</span>
                                            @elseif($project->category == 3)
                                                <span class="label label-inverse">DESIGN / UI & UX</span>
                                            @endif
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-center">
                                            @if($project->status == 1)
                                                <span class="label label-success">ACTIVE</span>
                                            @else
                                                <span class="label label-default">INACTIVE</span>
                                            @endif
                                        </p>
                                    </td>
                                    <td class="center hidden-phone">{{$project->level}}</td>
                                    <td class="center hidden-phone">
                                        <button type="button"
                                                onclick="window.location='{{route('projects.edit', ['id' => $project->id])}}'"
                                                class="btn btn-primary"><i class="fa fa-eye"></i>
                                        </button>
                                        <form action="{{ route('projects.destroy', ['id' => $project->id]) }}"
                                              method="POST" style="display: inline;">
                                            {!! csrf_field() !!}
                                            {!! method_field('DELETE') !!}
                                            <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure want to delete this record?')">
                                                <i class="fa fa-trash-o"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('styles')
    <link href="{{url('admin/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet"/>
    <link href="{{url('admin/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{url('admin/assets/data-tables/DT_bootstrap.css')}}"/>
@endsection

@section('scripts')
    <script type="text/javascript" language="javascript"
            src="{{url('admin/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/assets/data-tables/DT_bootstrap.js')}}"></script>

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $('#example').dataTable();
        });
    </script>
@endsection