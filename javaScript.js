<script>
// Hàm để thu gọn hoặc mở rộng thanh menu
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('open');
}


    // Hàm cuộn trang mượt mà đến phần tử được chỉ định
    function smoothScroll(target) {
        // Tìm phần tử mục tiêu (target) dựa trên ID
        const element = document.querySelector(target);
        // Sử dụng scrollIntoView để cuộn đến phần tử đó với hiệu ứng mượt mà
        element.scrollIntoView({ behavior: 'smooth' });
    }

    // Lắng nghe các sự kiện click vào các liên kết trong menu
    const menuLinks = document.querySelectorAll('.sidebar a');
    menuLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            // Ngừng hành động mặc định (chuyển hướng)
            event.preventDefault();
            
            // Lấy href của liên kết, nó sẽ là ID của phần tử trong trang
            const target = this.getAttribute('href');
            
            // Gọi hàm cuộn mượt mà đến phần tử
            smoothScroll(target);
        });
    });
</script>
