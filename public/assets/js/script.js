// document.addEventListener('DOMContentLoaded', function () {
//     const viewButtons = document.querySelectorAll('.view-detail');
    
    
//     viewButtons.forEach(button => {
//         button.addEventListener('click', function (event) {
//             event.preventDefault();
            
//             // Lấy dữ liệu từ data-* attributes
//             const id = this.getAttribute('data-id');
//             const fullname = this.getAttribute('data-fullname');
//             const username = this.getAttribute('data-username');
//             const password = this.getAttribute('data-password');
//             const dayofbirth = this.getAttribute('data-dayofbirth');
//             const gender = this.getAttribute('data-gender');
//             const phonenumber = this.getAttribute('data-phonenumber');
//             const vip = this.getAttribute('data-vip');

//             // Gán dữ liệu vào modal
//             document.getElementById('modalId').textContent = id;
//             document.getElementById('modalFullname').textContent = fullname;
//             document.getElementById('modalUsername').textContent = username;
//             // document.getElementById('modalPassword').textContent = password;
//             document.getElementById('modalDayOfBirth').textContent = dayofbirth;
//             document.getElementById('modalGender').textContent = gender;
//             document.getElementById('modalPhoneNumber').textContent = phonenumber;
//             document.getElementById('modalVip').textContent = vip;
            
//             // Hiển thị modal
//             const userModal = new bootstrap.Modal(document.getElementById('userModal'));
//             userModal.show();
//         });
//     });
// });
document.addEventListener('DOMContentLoaded', function () {
    const filterHeader = document.querySelector('.filter-header'); // Tiêu đề Category
    const dropdown = document.getElementById('categoryFilter'); // Dropdown Category

    // Hiển thị dropdown khi hover vào tiêu đề
    filterHeader.addEventListener('mouseenter', function () {
        dropdown.style.display = 'block'; // Hiển thị dropdown
        const rect = filterHeader.getBoundingClientRect(); // Lấy vị trí tiêu đề
        dropdown.style.top = `${rect.bottom + 5}px`; // Vị trí dưới tiêu đề, thêm khoảng cách
        dropdown.style.right = `${window.innerWidth - rect.right}px`; // Căn phải với cột category
    });

    // Ẩn dropdown khi rời khỏi tiêu đề hoặc dropdown
    filterHeader.addEventListener('mouseleave', function () {
        setTimeout(() => {
            if (!dropdown.matches(':hover')) {
                dropdown.style.display = 'none';
            }
        }, 200);
    });

    dropdown.addEventListener('mouseleave', function () {
        dropdown.style.display = 'none'; // Ẩn dropdown
    });

    // Lọc các hàng trong bảng khi chọn giá trị từ dropdown
    dropdown.addEventListener('click', function (event) {
        const selectedValue = event.target.getAttribute('data-category'); // Lấy giá trị được chọn
        if (!selectedValue) return;

        document.querySelectorAll('tbody tr').forEach(row => {
            const rowValue = row.querySelector('td:nth-child(3)').textContent.trim().toLowerCase(); // Giá trị category
            row.style.display =
                selectedValue === 'all' || rowValue === selectedValue.toLowerCase() ? '' : 'none';
        });

        dropdown.style.display = 'none'; // Ẩn dropdown sau khi chọn
    });
});







document.addEventListener('DOMContentLoaded', function () {
    const viewButtons = document.querySelectorAll('.view-detail');

    viewButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();

            // Lấy tất cả các thuộc tính data-* từ nút
            const dataAttributes = this.dataset;

            // Gán dữ liệu vào modal
            for (const key in dataAttributes) {
                const modalElement = document.getElementById(`modal${capitalizeFirstLetter(key)}`);
                if (modalElement) {
                    modalElement.textContent = dataAttributes[key];
                }
            }

            // Hiển thị modal
            const detailModal = new bootstrap.Modal(document.getElementById('detailModal'));
            detailModal.show();
        });
    });

    // Hàm để viết hoa chữ cái đầu tiên
    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }
});

// Đóng modal khi nhấn nút Close
const closeButtons = document.querySelectorAll('[data-bs-dismiss="modal"]');
closeButtons.forEach(button => {
    button.addEventListener('click', function() {
        const modal = new bootstrap.Modal(document.getElementById('userModal'));
        modal.hide(); // Đóng modal khi nhấn nút Close
    });
});

function updateUrl(newPath) {
    const newUrl = newPath;
    window.history.pushState(null, '', newUrl);
}