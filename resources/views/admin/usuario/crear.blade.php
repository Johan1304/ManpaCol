@extends("theme.$theme.layout")
@section('titulo')
    Crear Usuarios
@endsection

@section('contenido')
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Crear Usuario</h2>
            <div class="mdl-card__subtitle"></div>
        </div>

        <div class="mdl-card__supporting-text">
            <form action="#" class="form">
                <div class="form__article">
                    <h3>Datos</h3>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="firstName" value=""/>
                            <label class="mdl-textfield__label" for="firstName">Nombres</label>
                        </div>

                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="secondName" value=""/>
                            <label class="mdl-textfield__label" for="secondName">Apellidos</label>
                        </div>
                    </div>

                    <div class="mdl-grid">

                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                            <input class="mdl-textfield__input" value="tipoDocumento" type="text" id="gender" readonly tabIndex="-1"/>

                            <label class="mdl-textfield__label" for="gender">Tipo de Documento</label>

                            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="gender">
                                <li class="mdl-menu__item">Cedula de ciudadania</li>
                                <li class="mdl-menu__item">Tarjeta de identidad</li>
                                <li class="mdl-menu__item">Cedula de extranjeria</li>
                            </ul>

                            <label for="gender">
                                <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                            </label>
                        </div>
                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="secondName" value=""/>
                            <label class="mdl-textfield__label" for="secondName">Numero de documento</label>
                        </div>
                    </div>

                    

                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="firstName" value=""/>
                        <label class="mdl-textfield__label" for="firstName">Email</label>
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="firstName" value=""/>
                            <label class="mdl-textfield__label" for="firstName">Usuario</label>
                        </div>

                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="secondName" value=""/>
                            <label class="mdl-textfield__label" for="secondName">Contraseña</label>
                        </div>
                    </div>
                    
                </div>

                



                <div class="form__action">
                    
                    <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
</div>
</body>

        
@endsection