<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> 
                        <img src="{{asset('assets/images/users/profile.png')}}" alt="user">
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5>{{Auth::user()->name}}</h5>
                        <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
    {{ csrf_field() }}
</form>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">Gestão</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-pencil-alt"></i><span class="hide-menu">Turmas</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('turmas')}}"> Cadastro Turmas  </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu"> Alunos </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('alunos')}}">Cadastro Alunos </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-book"></i><span class="hide-menu">Disciplinas </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('disciplinas')}}"> Cadastro Disciplina </a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>