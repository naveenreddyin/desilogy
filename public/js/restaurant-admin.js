$( document ).ready(function() {
initializers();
admin_validators();

});

function initializers(){

    $('.clockpicker1').clockpicker();
    $('.clockpicker2').clockpicker();
    
}

function admin_validators(){
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
            firstname: "Please enter First Name.",
            lastname: "Please enter Last Name.",
            address: "Please enter your address.",


        }
    });
}
