@extends('back.app')

@section('css')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
    <style>
        input, th span {
            cursor: pointer;
        }
    </style>
@endsection

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <strong>@lang('Roles') :</strong> &nbsp;
                    <input type="radio" name="role" value="all" checked> @lang('All')&nbsp;
                    <input type="radio" name="role" value="admin"> @lang('Administrator')&nbsp;
                    <input type="radio" name="role" value="redac"> @lang('Redactor')&nbsp;
                    <input type="radio" name="role" value="user"> @lang('User')&nbsp;<br>
                    <strong>@lang('Status') :</strong> &nbsp;
                    <input type="checkbox" name="new" @if(request()->new) checked @endif> @lang('New')&nbsp;
                    <input type="checkbox" name="valid"> @lang('Valid')&nbsp;
                    <input type="checkbox" name="confirmed"> @lang('Confirmed')
                    <div id="spinner" class="text-center"></div>
                </div>
                <div class="box-body table-responsive">
                    <table id="users" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('Name')<span id="name" class="fa fa-sort pull-right"
                                                   aria-hidden="true"></span></th>
                            <th>@lang('Email')<span id="email" class="fa fa-sort pull-right"
                                                    aria-hidden="true"></span></th>
                            <th>@lang('Role')<span id="role" class="fa fa-sort pull-right"
                                                   aria-hidden="true"></span></th>
                            <th>@lang('New')</th>
                            <th>@lang('Valid')</th>
                            <th>@lang('Confirmed')</th>
                            <th>@lang('Creation')<span id="created_at" class="fa fa-sort-desc pull-right"
                                                       aria-hidden="true"></span></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>@lang('Name')</th>
                            <th>@lang('Email')</th>
                            <th>@lang('Role')</th>
                            <th>@lang('New')</th>
                            <th>@lang('Valid')</th>
                            <th>@lang('Confirmed')</th>
                            <th>@lang('Creation')</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody id="pannel">
                        @include('back.users.table', compact('users'))
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div id="pagination" class="box-footer">
{{--                    TODO: Add pagination--}}
{{--                    {{ $links }}--}}
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection

@section('js')
    <script>
        var user = (function () {
            var onReady = function () {
                $('#pannel').on('click', 'td a.btn-danger', function (event) {
                    const rowId = $(this).closest('tr').attr('id');
                    const userId = rowId.replace('user_', '');
                    const url = "{{ route('users.destroy', ':userId') }}".replace(':userId', userId);
                    $.ajax({
                        url: url,
                        type:'DELETE',
                        data: {_token:'{{ csrf_token() }}', user:userId},
                        success: function(data){
                            $('#pannel').html(data);
                        },
                        error: function (xhr, status, error) {
                            console.error("AJAX error: " + error);
                        }
                    });
                })
            }

            return {
                onReady: onReady
            }

        })()

        $(document).ready(user.onReady)
    </script>
@endsection
