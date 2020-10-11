<div class="mail-side-menu mb-30">
    <div class="ibox-content mailbox-content">
        <div class="file-manager clearfix">
            <a class="btn btn-primary d-block" href="{{route('mails.create')}}">Compose</a>
            <!-- Title -->
            <div class="folder-title mt-50">
                <h6 class="mb-3 primary-color-text">Folders</h6>
            </div>
            <ul class="folder-list">
                <li class="{{Route::is('mails.index') ? 'active' : ''}}"><a href="{{route('mails.index')}}"> <i class="ti-email"></i> Inbox <span class="badge badge-pill badge-primary inbox ml-2">25</span> </a></li>
                <li class="{{Route::is('send-mail.index') ? 'active' : ''}}"><a href="{{route('send-mail.index')}}"> <i class="ti-share"></i> Send Mail</a></li>
                <li class="{{Route::is('draft-mail.index') ? 'active' : ''}}"><a href="{{route('draft-mail.index')}}"> <i class="fa fa-file-text-o"></i> Drafts
                        <span class="badge badge-pill badge-warning inbox ml-2">
                            @php $mailCount = \App\Models\Mail::draftCount() @endphp
                            {{$mailCount}}
                        </span>
                    </a>
                </li>
                <li class="{{Route::is('trash-mails.index') ? 'active' : ''}}"><a href="{{route('trash-mails.index')}}"> <i class="fa fa-trash-o"></i> Trash
                        <span class="badge badge-pill badge-danger inbox ml-2">
                                @php $trashCount = \App\Models\MailAddress::trashCount() @endphp
                                {{$trashCount}}
                        </span>
                    </a>
                </li>
            </ul>


            <div class="clearfix"></div>
        </div>
    </div>
</div>
