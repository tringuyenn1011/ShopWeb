document.addEventListener('DOMContentLoaded', function () {
    const viewButtons = document.querySelectorAll('.view-user');
    
    

    viewButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            
            // Lấy dữ liệu từ data-* attributes
            const id = this.getAttribute('data-id');
            const fullname = this.getAttribute('data-fullname');
            const username = this.getAttribute('data-username');
            const password = this.getAttribute('data-password');
            const dayofbirth = this.getAttribute('data-dayofbirth');
            const gender = this.getAttribute('data-gender');
            const phonenumber = this.getAttribute('data-phonenumber');
            const vip = this.getAttribute('data-vip');

            // Gán dữ liệu vào modal
            document.getElementById('modalId').textContent = id;
            document.getElementById('modalFullname').textContent = fullname;
            document.getElementById('modalUsername').textContent = username;
            // document.getElementById('modalPassword').textContent = password;
            document.getElementById('modalDayOfBirth').textContent = dayofbirth;
            document.getElementById('modalGender').textContent = gender;
            document.getElementById('modalPhoneNumber').textContent = phonenumber;
            document.getElementById('modalVip').textContent = vip;
            
            // Hiển thị modal
            const userModal = new bootstrap.Modal(document.getElementById('userModal'));
            userModal.show();
        });
    });
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