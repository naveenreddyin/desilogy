$( document ).ready(function() {
    initializers();
    restaurant_form_google_places();
    site_validators();
});


function initializers(){

    $('.clockpicker1').clockpicker();
    $('.clockpicker2').clockpicker();
}
function restaurant_form_google_places(){

// For address box on restaurant page.
google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('address'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                console.log(place);
                // var address = place.formatted_address;
                // var latitude = place.geometry.location.A;
                // var longitude = place.geometry.location.F;
                // var mesg = "Address: " + address;
                // mesg += "\nLatitude: " + latitude;
                // mesg += "\nLongitude: " + longitude;
                // alert(mesg);
                // console.log(place.geometry.location.lat());
                var city = getAddressComponent(place, 'locality');
                var postal_town = getAddressComponent(place, 'postal_town');
                var country = getAddressComponent(place, 'country');
                var postal_code = getAddressComponent(place, 'postal_code');
                var street = getAddressComponent(place, 'route');
                // console.log(postal_code);
                // console.log(getAddressComponent(place, 'locality'));
                // console.log(getAddressComponent(place, 'country'));

                if(city == '')
                    $('#city').val(postal_town);
                else
                    $('#city').val(city);

                $('#country').val(country);

                $('#field-data-restaurant-city-country-group').show();

                if(postal_code != null){
                    $('#postal-code').val(postal_code);
                    $('#street').val(street);
                    $('#field-data-restaurant-postal-street-group').show();
                }
                

            });
});
}

function getAddressComponent(place, token) {
    var arrAddress = place.address_components;
    var value = '';

// iterate through address_component array
$.each(arrAddress, function (i, address_component) {
    // console.log('address_component:'+i);

    if (address_component.types[0] == token){
        console.log(i+": "+token+":"+address_component.long_name);
        value = address_component.long_name;
    }

    
    //return false; // break the loop   
});

    return value;
}

function site_validators(){

    $('#form-restaurant-id').validate({
        rules: {
            name: "required",
            body: "required",
            firstname: "required",
            lastname: "required",
            address: "required",
            
        },
        messages: {
            name: "Please enter some name to your restaurant.",
            body: "Please enter some content, it will be useful for users to know more about your restaurant.",
            firstname: "Please enter Firtname.",
            lastname: "Please enter Lastname.",
            address: "Please enter your address.",


        }
    });

}
