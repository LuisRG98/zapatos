@csrf
<style>
.required label:after {
    color: #e32;
    content: ' *';
    display:inline; 
}
</style>

<div class="field_wrapper container col-md-12">
    <div class="row">
         
        <div class="col-5">
            <label for="tipo[]">Tipo de Cuero</label>
            <input 
                class="form-control bg-light shadow-sm  @error('tipo[]') is-invalid @enderror border-1"
                type="text" 
                name="tipo[]" 
                value=""/>
                @error('tipo[]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
        </div>

        <div class="col-5">
            <label for="cantidad[]">Cantidad de Cuero.</label>
            <input 
                class="form-control bg-light shadow-sm  @error('cantidad[]') is-invalid @enderror border-1"
                type="number" 
                step="0.01" 
                name="cantidad[]" 
                value=""/>
                @error('cantidad[]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
        </div>

        <div class="col-2">
            <br>
            <a href="javascript:void(0);" class="add_button" title="Add field"><img src="/img/add-icon.png" width="20" height="20"></a>
        </div>


                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                        <script type="text/javascript">
                        $(document).ready(function(){
                            var maxField = 10; //Input fields increment limitation
                            var addButton = $('.add_button'); //Add button selector
                            var wrapper = $('.field_wrapper'); //Input field wrapper
                            var fieldHTML = '<br><div class="row"><div class="col-5"><input class="form-control bg-light shadow-sm  @error('tipo[]') is-invalid @enderror border-1" type="text" name="tipo[]" value=""/></div><div class="col-5"><input class="form-control bg-light shadow-sm  @error('cantidad[]') is-invalid @enderror border-1" type="number" name="cantidad[]" value=""/></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="/img/remove-icon.png" width="20" height="20"></a></div>'; //New input field html 
                            var x = 1; //Initial field counter is 1
                            $(addButton).click(function(){ //Once add button is clicked
                                if(x < maxField){ //Check maximum number of input fields
                                    x++; //Increment field counter
                                    $(wrapper).append(fieldHTML); // Add field html
                                }
                            });
                            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                                e.preventDefault();
                                $(this).parent('div').remove(); //Remove field html
                                x--; //Decrement field counter
                            });
                        });
                        </script>


    </div>
</div>

<br>
<button class="btn btn-primary btn-large btn-block">Guardar</button>