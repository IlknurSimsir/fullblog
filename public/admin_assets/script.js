function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
document.querySelectorAll('.sidebar .item a').forEach(item => {
  item.addEventListener('click', function() {
      document.querySelector('.sidebar .item#active')?.removeAttribute('id');
      this.parentElement.setAttribute('id', 'active');
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const menuClose = document.getElementById('menu-close');
  const sideBar = document.querySelector('aside.left-section');
  const sidebarItems = document.querySelectorAll('aside.left-section .sidebar .item');

  if (menuClose && sideBar) {
    menuClose.addEventListener('click', () => {
      sideBar.style.top = '-60vh';
    });
  } else {
    console.error("menuClose or sideBar element not found");
  }

  let activeItem = sidebarItems[0];

  if (sidebarItems.length > 0) {
    sidebarItems.forEach(element => {
      element.addEventListener('click', () => {
        if (activeItem) {
          activeItem.removeAttribute('id');
        }

        element.setAttribute('id', 'active');
        activeItem = element;
      });
    });
  } else {
    console.error("sidebarItems elements not found");
  }
});
