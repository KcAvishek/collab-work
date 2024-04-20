let sidebarOpen = false;
const sidebar = document.getElementById('sidebar');
const dropDownBtn = document.querySelector(".dropdown_btn")
const dropDownBtn2 = document.querySelector(".dropdown_btn2")
const dropDownOptions = document.querySelector(".dropdown_options")
const dropDownOptions2 = document.querySelector(".dropdown_options2")

function openSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add('sidebar-responsive');
    sidebarOpen = true;
  }
}



function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove('sidebar-responsive');
    sidebarOpen = false;
  }
}



dropDownBtn.addEventListener("click",()=>{
 

   
    dropDownOptions.classList.toggle("dropdown_show")

})

dropDownBtn2.addEventListener("click",()=>{
 

   
  dropDownOptions2.classList.toggle("dropdown_show")

})