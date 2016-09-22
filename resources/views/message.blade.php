@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome to your inbox
                </div>
            </div>
        </div>
    </div>
     <div class="panel-group">
        <div class="panel panel-default">
        <div class="wrapper wrapper-content">
        <div class="row">
            
            <div class="col-lg-12 animated fadeInRight">
            <div class="mail-box-header">

                <h2>Check mail and reply to sender's mail</h2>
                <div class="mail-tools tooltip-demo m-t-md">
                    <div class="btn-group pull-right">
                        

                    </div>
                    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Refresh inbox"><i class="fa fa-refresh"></i> Refresh</button>

                </div>
            </div>
                <div class="mail-box">

                <table class="table table-hover table-mail">
                <tbody>
                @foreach($readmessage as $rmsg)
                <tr class="unread">
                    <td class="check-mail">
                        <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" class="i-checks" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                    </td>
                    <td class="mail-ontact">{{ $rmsg->fname}} {{ $rmsg->lname }}</td>
                    <td class="mail-subject"><a href="#" onclick="showMessage(this)" message-id="{{$rmsg -> id }}">{{$rmsg -> subject }}</a></td>
                    <td class="text-right mail-date">{{ $rmsg -> created_at}}</td>
                    <td class="fa fa-trash-o" onclick="deleteMessage(this)" message-id = "{{$rmsg -> id}}"></td>
                </tr>
                @endforeach

                </tbody>
                </table>


                </div>
            </div>
        </div>
        </div>

        </div>

    <div id="modalCheckMsg" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 id="message-subject" class="modal-title" style="text-align: center"></h4>
                Name: &nbsp; <span id="message-sender-fname" class="modal-title" style="text-align-last: center"></span>&nbsp;
                <span id="message-sender-lname" class="modal-title" style="text-align-last: center"></span><br>
                Email:&nbsp; <span style="text-align:left" id="message-sender-email"></span>
            </div>
            <div class="modal-body">
                <p id="message-body"></p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
