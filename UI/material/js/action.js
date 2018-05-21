$('#driver_jumbotron').on('shown.bs.collapse', function () {
  $('#rider_jumbotron').collapse('hide');
});

$('#rider_jumbotron').on('shown.bs.collapse', function () {
  $('#driver_jumbotron').collapse('hide');
});

$('#driver_form_register').on('shown.bs.collapse', function () {
  // do something…
    $('#driver_form_login').collapse('hide');
  });
$('#driver_form_login').on('shown.bs.collapse', function () {
  // do something…
    $('#driver_form_register').collapse('hide');
});
$('#dashboard').on('shown.bs.collapse', function () {
    $('#profile').collapse('hide');

});
$('#profile').on('shown.bs.collapse', function () {
    $('#dashboard').collapse('hide');

});
$('#rider_form_register').on('shown.bs.collapse', function () {
  // do something…
    $('#rider_form_login').collapse('hide');
  });
$('#rider_form_login').on('shown.bs.collapse', function () {
  // do something…
    $('#rider_form_register').collapse('hide');
});
$('#dashboard').on('shown.bs.collapse', function () {
    $('#profile').collapse('hide');

});
$('#profile').on('shown.bs.collapse', function () {
    $('#dashboard').collapse('hide');

});
$('#rider_dashboard').on('shown.bs.collapse', function () {
  $('#rider_profile').collapse('hide');

});
$('#rider_profile').on('shown.bs.collapse', function () {
  $('#rider_dashboard').collapse('hide');

});

let home_page = document.querySelector("#home_page");
let main_page = document.querySelector('#main_page');
let rider_main_page = document.querySelector('#rider_main_page');

function driverLogin(){
  home_page.classList.add('d-none');
  if (main_page.classList.contains('d-none')){
    main_page.classList.remove('d-none');

  }}
function riderLogin(){
  home_page.classList.add('d-none');
  if(rider_main_page.classList.contains('d-none')){
    rider_main_page.classList.remove('d-none');
  }

}  

function driverLogout(){
  main_page.classList.add('d-none');
  if (home_page.classList.contains('d-none')){
    home_page.classList.remove('d-none');
  }
}
function riderLogout(){
  rider_main_page.classList.add('d-none');
  if (home_page.classList.contains('d-none')){
    home_page.classList.remove('d-none');
  }
}
