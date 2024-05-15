document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Formun varsayılan davranışını engelle

        // Formdaki değerleri al
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const message = document.getElementById("message").value;

        // Basit bir doğrulama yap
        if (name.trim() === "" || email.trim() === "" || message.trim() === "") {
            alert("Lütfen tüm alanları doldurun.");
            return;
        }

        // Form verilerini gönder
        const formData = new FormData();
        formData.append("name", name);
        formData.append("email", email);
        formData.append("message", message);

        // Sunucuya formu göndermek için fetch kullan
        fetch("submit.php", {
            method: "POST",
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error("Form gönderilirken bir hata oluştu.");
            }
            return response.text();
        })
        .then(data => {
            alert(data); // Sunucudan dönen mesajı göster
            form.reset(); // Formu temizle
        })
        .catch(error => {
            console.error("Hata:", error);
            alert("Form gönderilirken bir hata oluştu. Lütfen tekrar deneyin.");
        });
    });
});
