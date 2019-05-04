 @if (session('dangerMsg'))
                     <div class="alert alert-danger" role="alert">
                        <strong>Very Bad! </strong>{{session('dangerMsg')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif