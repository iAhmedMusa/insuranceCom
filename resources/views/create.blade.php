@extends('app')
@section('section')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Versicherungsinformationen hinzufügen</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{'/add'}}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="example-url-input" class="col-form-label">Versicherungs-ID</label>
                                    <div class="input-group">
                                        <input class="form-control" name="insID" type="text" placeholder="XXXXXXX" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="example-url-input" class="col-form-label">Name</label>
                                    <div class="input-group">
                                        <input class="form-control" name="name" type="text" placeholder="Name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="example-url-input" class="col-form-label">Adresse</label>
                                    <div class="input-group">
                                        <input class="form-control" name="address" type="text" placeholder="Address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="example-url-input" class="col-form-label">Postleitzahl</label>
                                    <div class="input-group">
                                        <input class="form-control" name="postCode" type="text" placeholder="XXXXX" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       <div class="row">
                           <div class="col">
                            <div class="form-group">
                            <label for="example-url-input" class="col-form-label">Stadt</label>
                            <div class="input-group">
                                <input class="form-control" name="city" type="text" placeholder="Stadt" required>
                            </div>
                        </div>
                       
                           </div>
                           <div class="col">
                            <div class="form-group">
                                <label for="example-url-input" class="col-form-label">Telefonnummer</label>
                                <div class="input-group">
                                    <input class="form-control" name="conNumber" id="conNumber" type="text" placeholder="xxxxxxxxxx" required>
                                </div>
                            </div>
                           </div>
                       </div>
                       
                        
                       


                        <button type="submit" class="btn btn-primary btn-lg btn-block saveButton">Daten speichern
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')
    <script>
    $(document).ready(function(){
        $('.saveButton').prop('disabled',true);
        $('#conNumber').keyup(function(){
            $('.saveButton').prop('disabled', this.value == "" ? true : false);     
        })
    }); 
    </script>
@endsection