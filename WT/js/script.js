document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (e) {
        let isValid = true;

        // Clear previous errors
        const errorFields = document.querySelectorAll('.error');
        errorFields.forEach(el => el.remove()); // Remove previous error spans

        // 1. Validate Full Name
        const name = document.getElementById('name').value.trim();
        if (name.length < 3) {
            showError('name', 'Full name must be at least 3 characters.');
            isValid = false;
        }

        // 2. Validate Date of Birth
        const dob = document.getElementById('Date_of_Birth').value.trim();
        if (!dob) {
            showError('Date_of_Birth', 'Date of Birth is required.');
            isValid = false;
        }

        // 3. Validate Gender
        const gender = document.querySelector('input[name="gender"]:checked');
        if (!gender) {
            showError('gender', 'Please select your gender.');
            isValid = false;
        }

        // 4. Validate National ID
        const national = document.getElementById('national').value.trim();
        if (!/^\d{10}$/.test(national)) {
            showError('national', 'National ID must be exactly 10 digits.');
            isValid = false;
        }

        // 5. Validate Mobile Number
        const mobile = document.getElementById('mobile').value.trim();
        if (!/^[6-9]\d{9}$/.test(mobile)) {
            showError('mobile', 'Enter a valid 10-digit mobile number.');
            isValid = false;
        }

        // 6. Validate Password Match
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        if (password !== confirmPassword) {
            showError('confirmPassword', 'Passwords do not match.');
            isValid = false;
        }

        if (!isValid) {
            e.preventDefault(); // Prevent form submission if validation fails
        }
    });

    function showError(fieldId, message) {
        let field = document.getElementById(fieldId);
        let errorSpan = document.createElement('span');
        errorSpan.className = 'error';
        errorSpan.style.color = 'red';
        errorSpan.style.fontSize = '0.9em';
        errorSpan.innerHTML = message;

        // Append the error message after the input field or label
        if (field) {
            field.parentElement.appendChild(errorSpan);
        } else {
            const genderField = document.querySelector('input[name="gender"]').parentElement;
            genderField.appendChild(errorSpan);
        }
    }
});