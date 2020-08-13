<div id="modal_info" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Information</h3>
                <button type="button" class="close" data-dismiss="modal">&times;
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="id">Versicherungs-ID:</label>
                        <span class="id" id="val_id"></span><br>
                        <label for="name">Name: </label>
                        <span class="name" id="val_name"></span><br>
                        <label for="address">Adresse: </label>
                        <span class="address" id="val_address"></span><br>
                        <label for="pcode">Postleitzahl: </label>
                        <span class="pcode" id="val_pcode"></span><br>
                        <label for="city">Stadt: </label>
                        <span class="city" id="val_city"></span><br>
                        <label for="connumber">Telefonnummer: </label>
                        <span class="connumber" id="val_phone"></span><br>
                    </div>
                    <div class="col-md-6">
                        <div id='map' style=' height: 300px; width:100%'></div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Stornieren</button>
            </div>
        </div>
    </div>
</div>
@section('script')
<script>
    $(document).on('click', '.btn-view', function () {
        document.getElementById('val_id').innerHTML = $(this).data('ins_id');
        document.getElementById('val_name').innerHTML = $(this).data('name');
        document.getElementById('val_address').innerHTML = $(this).data('address');
        document.getElementById('val_pcode').innerHTML = $(this).data('post_code');
        document.getElementById('val_city').innerHTML = $(this).data('city');
        document.getElementById('val_phone').innerHTML = $(this).data('phone');
        

        const APIKEY = 'pk.eyJ1Ijoia25pZ2h0M3JyYW50IiwiYSI6ImNqbnB1NGJkZDI5M3Mza3M1ajEwZzhjcGUifQ.WiEd_h7Q9zsAAI90voQSjw';
        mapboxgl.accessToken = APIKEY

    const address = encodeURIComponent($(this).data('address'))
    const APIURL = `https://api.mapbox.com/geocoding/v5/mapbox.places/${address}.json?access_token=${APIKEY}&cachebuster=1597176715920&autocomplete=false&country=de`
    fetch(APIURL)
    .then(e=>e.json())
    .then(e=>{
    let center = e.features[0].center
    
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center,
    zoom: 14
    });
    
    var marker = new mapboxgl.Marker()
    .setLngLat(center)
    .addTo(map);
    
    })
});
    
</script>
@endsection