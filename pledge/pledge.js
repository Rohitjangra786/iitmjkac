function generateCertificate() {
    const name = document.getElementById('name').value;
    const dropdown = document.getElementById('myDropdown');
    const college = dropdown.value === 'Others'
        ? document.getElementById('otherText').value.trim() // Use trim() to remove extra spaces
        : dropdown.value;

    const email = document.getElementById('email').value;

    // Ensure all required fields are filled
    if (!name || !college || !email) {
        alert('Please fill out all fields.');
        return;
    }

    const canvas = document.createElement('canvas');
    const context = canvas.getContext('2d');
    const image = new Image();

    image.onload = () => {
        canvas.width = image.width;
        canvas.height = image.height;

        context.drawImage(image, 0, 0);

        // Coordinates for name
        const nameX = canvas.width / 2; // Horizontal center of the image
        const nameY = 450; // Vertical position

        // Coordinates for college
        const collegeX = canvas.width / 2; // Horizontal center of the image
        const collegeY = 550; // Vertical position

        // Coordinates for date
        const dateX = canvas.width / 2; // Horizontal center of the image
        const dateY = 650; // Vertical position

        // Set font styles and align center for name and college
        context.font = 'bold 40px Arial';
        context.fillStyle = '#000';
        context.textAlign = 'center';

        // Draw name
        context.fillText(name, nameX, nameY);

        // Draw college
        context.fillText(college, collegeX, collegeY);

        // Set font style and align center for date
        context.font = 'italic 24px Arial';
        context.fillText(new Date().toLocaleDateString('en-US'), dateX, dateY);

        // Create a link to download the certificate image
        const link = document.createElement('a');
        link.href = canvas.toDataURL('image/png');
        link.download = 'certificate.png';

        // Append link to body and trigger click to download
        document.body.appendChild(link);
        link.click();

        // Clean up: remove the link from the body
        document.body.removeChild(link);
    };

    // Set the source of the image
    image.src = 'YogaPledgeCert.png';
}
