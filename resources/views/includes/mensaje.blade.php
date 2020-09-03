@if (session("mensaje"))
    <div class="alert alert-success">
        <h4><div class="itemBox"><i class="material-icons">done</i>
            <div class="caption">Mensaje sistema</div>
            <ul>
                <li>{{session("mensaje")}}</li>
            </ul>
        </div>
    </div>
    
@endif