<div class="mdl-layout__drawer">
    <a href='../../admin'><header>ManpaCol</header></a>
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link mdl-navigation__link--current" href="{{route('usuario')}}">
                            <i class="material-icons">people</i>
                            Usuarios
                    </a>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">view_comfy</i>
                            Gestion Material
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                                <a class="mdl-navigation__link" href="{{route('material')}}">
                                    <i class="material-icons">pages</i>
                                    Materiales    
                                </a>
                                <a class="mdl-navigation__link" href="{{route('tipomaterial')}}">
                                    <i class="material-icons">sort</i>
                                    Tipos de Material
                                </a>
                                <a class="mdl-navigation__link" href="{{route('TipoPresentacion')}}">
                                    <i class="material-icons">sort</i>
                                    Tipos de Presentacion
                                </a>
                                <a class="mdl-navigation__link" href="{{route('textura')}}">
                                    <i class="material-icons">bubble_chart</i>
                                    Textura
                                </a>
                                <a class="mdl-navigation__link" href="{{route('color')}}">
                                    <i class="material-icons">format_color_fill</i>
                                    Color
                                </a>
                                <a class="mdl-navigation__link" href="{{route('proveedor')}}">
                                    <i class="material-icons">domain</i>
                                    Proveedor
                                </a>
                                
                                
                            </div>
                    </div>
                    <div class="mdl-layout-spacer"></div>
                    <hr>
                    <a class="mdl-navigation__link" href="https://github.com/CreativeIT/getmdl-dashboard">
                        <i class="material-icons" role="presentation">link</i>
                        GitHub
                    </a>
                </nav>
            </div>
        </div>
        <div class='scroller__bar' id="scroller__bar"></div>
    </div>
</div>
