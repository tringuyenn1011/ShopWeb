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
    const originalOrder = Array.from(document.querySelectorAll('tbody tr')).map(row => row.cloneNode(true)); // Lưu trạng thái ban đầu
    
    document.querySelectorAll('.filter-header').forEach(header => {
        const filterName = header.getAttribute('data-filter');
        const dropdown = document.getElementById(`${filterName}Filter`); // Dropdown tương ứng với filter-header

        // Hiển thị dropdown khi hover vào tiêu đề
        header.addEventListener('mouseenter', function () {
            dropdown.style.display = 'block'; // Hiển thị dropdown
            header.classList.add('open'); // Thêm lớp open để xoay mũi tên
            const rect = header.getBoundingClientRect(); // Lấy vị trí của header
            dropdown.style.top = `${rect.bottom + 5}px`; // Vị trí dưới tiêu đề
            dropdown.style.right = `${window.innerWidth - rect.right}px`; // Căn phải
        });

        // Ẩn dropdown khi rời khỏi tiêu đề hoặc dropdown
        header.addEventListener('mouseleave', function () {
            setTimeout(() => {
                if (!dropdown.matches(':hover')) {
                    dropdown.style.display = 'none';
                    header.classList.remove('open'); // Xóa lớp open
                }
            }, 200);
        });

        dropdown.addEventListener('mouseleave', function () {
            dropdown.style.display = 'none'; // Ẩn dropdown
            header.classList.remove('open'); // Xóa lớp open
        });

        // Lọc các hàng trong bảng khi chọn giá trị từ dropdown
        dropdown.addEventListener('click', function (event) {
            const selectedValue = event.target.getAttribute(`data-${filterName}`); // Lấy giá trị được chọn
            if (!selectedValue) return;

            const rows = Array.from(document.querySelectorAll('tbody tr'));
            const tbody = document.querySelector('tbody');

            if (filterName === 'category' || filterName === 'vip') {
                // Lọc các hàng theo category hoặc vip
                rows.forEach(row => {
                    let rowValue;
                    if (filterName === 'category') {
                        rowValue = row.querySelector('td:nth-child(3)').textContent.trim().toLowerCase(); // Giá trị category
                    } else if (filterName === 'vip') {
                        rowValue = row.querySelector('td:nth-child(5)').textContent.trim().toLowerCase(); // Giá trị vip
                    }
                    row.style.display =
                        selectedValue === 'all' || rowValue === selectedValue.toLowerCase() ? '' : 'none';
                });
            } else if (filterName === 'price') {
                if (selectedValue === 'default') {
                    // Khôi phục thứ tự mặc định
                    tbody.innerHTML = '';
                    originalOrder.forEach(row => tbody.appendChild(row.cloneNode(true)));
                } else {
                    // Sắp xếp theo Price
                    rows.sort((a, b) => {
                        const priceA = parseFloat(a.querySelector('td:nth-child(4)').textContent.trim()) || 0;
                        const priceB = parseFloat(b.querySelector('td:nth-child(4)').textContent.trim()) || 0;
                        return selectedValue === 'asc' ? priceA - priceB : priceB - priceA;
                    });
                    tbody.innerHTML = '';
                    rows.forEach(row => tbody.appendChild(row));
                }
            } else if (filterName === 'name') {
                if (selectedValue === 'default') {
                    // Khôi phục thứ tự mặc định
                    tbody.innerHTML = '';
                    originalOrder.forEach(row => tbody.appendChild(row.cloneNode(true)));
                } else {
                    // Sắp xếp theo Họ và Tên
                    rows.sort((a, b) => {
                        const nameA = a.querySelector('td:nth-child(2)').textContent.trim().split(' ').pop().toLowerCase();
                        const nameB = b.querySelector('td:nth-child(2)').textContent.trim().split(' ').pop().toLowerCase();
                        return selectedValue === 'asc'
                            ? nameA.localeCompare(nameB)
                            : nameB.localeCompare(nameA);
                    });
                    tbody.innerHTML = '';
                    rows.forEach(row => tbody.appendChild(row));
                }
            }

            dropdown.style.display = 'none'; // Ẩn dropdown sau khi chọn
        });
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