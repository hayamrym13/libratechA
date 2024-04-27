@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp


<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a >
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{asset('backend/images/logoo.png')}}" alt="Logo"
                             style="width: 115px; height: 50px;">
                    </div>
                </a>
            </div>
        </div>
        <!-- sidebar menu-->
       @if($user->role=='admin')
        <ul class="sidebar-menu" data-widget="tree">
             <li class="treeview">
                <a href="#">
                    <i data-feather="user"></i>
                    <span>Gestion des utilisateurs</span>
                </a>
                <ul class="treeview-menu">
                <li class="{{ ($route =='user.view')?'active':'' }}"><a href="{{ route('user.view',$user->id) }}"><i class="ti-more"></i>list des utilisateurs</a></li>
                <li class="{{ ($route =='user.add')?'active':'' }}"><a a href="{{ route('user.add',$user->id) }}"><i class="ti-more"></i>Ajouter utilisateur</a></li>
                <li class="{{ ($route == 'user.inv')?'active':'' }}"><a href="{{ route('user.inv',$user->id) }}"> <i class="ti-more"></i> invitations</a> </li>
                </ul>
            </li>
             
                 
            <li class="treeview">
                <a href="#">
                    <i data-feather="folder"></i>
                    <span>Gestion des documents</span>
                </a>
                <ul class="treeview-menu">
                <li class="{{ ($route =='document.view')?'active':'' }}"><a href="{{ route('document.view') }}"><i class="ti-more"></i>list des documents</a></li>
                <li class="{{ ($route =='document.add')?'active':'' }}"><a a href="{{ route('document.add') }}"><i class="ti-more"></i>Ajouter document</a></li>
                </ul>
                
            </li>
            
        </ul>
        @endif
      
    </section>

</aside>
{{-- <li class=""><a a href=""><i class="ti-comment-alt"></i>messages</a></li> --}}

