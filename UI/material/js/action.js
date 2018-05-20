$('#form_register').on('shown.bs.collapse', function () {
  // do something…
    $('#form_login').collapse('hide');
  });
$('#form_login').on('shown.bs.collapse', function () {
  // do something…
    $('#form_register').collapse('hide');
});
$('#dashboard').on('shown.bs.collapse', function () {
    $('#profile').collapse('hide');

});
$('#profile').on('shown.bs.collapse', function () {
    $('#dashboard').collapse('hide');

});

let home_page = document.querySelector("#home_page");
let main_page = document.querySelector('#main_page');
function login(){
if (home_page.classList.contains('d-none')){
  home_page.classList.remove('d-none');
  main_page.classList.add('d-none');
}
if (main_page.classList.contains('d-none')){
  home_page.classList.add('d-none');
  main_page.classList.remove('d-none');

}}

function logout(){
  if (home_page.classList.contains('d-none')){
    main_page.classList.add('d-none');
    home_page.classList.remove('d-none');
  }
}
