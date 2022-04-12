const burger = document.querySelector('.burger')
const sidebar = document.querySelector('.sidebar')
const bgSidebar = document.querySelector('.bg-sidebar')

burger.addEventListener('click', function()
{
    this.classList.toogle('change')
    sidebar.classList.toogle('change')
    bgSidebar.classList.toogle('change')
})

bgSidebar.addEventListener('click', function()
{
    this.classList.remove('change')
    sidebar.classList.remove('change')
    burger.classList.remove('change')
})