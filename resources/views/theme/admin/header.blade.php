<header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <div class="mdl-layout-spacer"></div>
            <!-- Search-->
            
            <!-- Notifications dropdown-->
            

            <div class="avatar-dropdown" id="icon">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                
            </div>
            <!-- Account dropdawn-->
            <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
                for="icon">
                
                <li class="list__item--border-top"></li>
                <a href="{{route('cambio_pass')}}"><li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">account_circle</i>
                        Cambiar Contraseña
                    </span>
                </li>
                </a>
                <li class="mdl-menu__item mdl-list__item">
                   

                    

                        <span class="mdl-list__item-primary-content">

                                <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        </span>
                    
                    


                </li>
                
            </ul>

            
        </div>
    </header>