@if (session("error"))
    <div class="alert alert-success">
      
            
            <ul>
                <li>{{session("mensaje")}}</li>
            </ul>
        </div>
    </div>
    
@endif