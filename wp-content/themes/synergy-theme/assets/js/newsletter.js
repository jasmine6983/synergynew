document.querySelectorAll(".button-sub").forEach((btn) => {

    btn.addEventListener("click", async function () {

        const wrapper = btn.closest("div");
        const input = wrapper.querySelector(".newsletter-email");
        const msg = wrapper.querySelector(".newsletter-msg");

        const email = input.value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        msg.textContent = "";

        if (!emailPattern.test(email)) {
            msg.textContent = "Enter valid email";
            return;
        }

        const formData = new FormData();
        formData.append("action", "save_newsletter_email");
        formData.append("email", email);

        msg.textContent = "Subscribing...";

        try {
            const res = await fetch(sn_ajax_obj.ajax_url, {
                method: "POST",
                body: formData
            });

            const data = await res.json();

            if (data.success) {
                msg.textContent = "Subscribed successfully!";
                input.value = "";
            } else {
                msg.textContent = data.data;
            }

        } catch (err) {
            msg.textContent = "Something went wrong";
        }

    });

});