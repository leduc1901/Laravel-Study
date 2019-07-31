<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><span>vietpro </span>Admin</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> admin <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu"><li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Thông tin</a></li>
                    <li>
                        <a href="" class="logout-btn">
                            <svg class="glyph stroked cancel">
                                <use xlink:href="#stroked-cancel"></use>
                            </svg> Logout
                        </a>
                    </li>
                    <form id="logout-form" class="d-none" method="POST" action="/admin/logout">
                        @csrf 
                    </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>

@push('js')
    <script>
        $(document).ready(function(){
            $('.logout-btn').click(function(e){
                e.preventDefault();
                $('#logout-form').submit();
            });
        });
    </script>
@endpush