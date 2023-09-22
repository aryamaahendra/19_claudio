import "preline";
import "choices.js/public/assets/styles/choices.min.css";

import Choices from "choices.js";
import Swal from "sweetalert2";

const formatter = new Intl.NumberFormat("id-ID", {
    style: "currency",
    currency: "IDR",
    minimumFractionDigits: 0, // Minimum number of decimal places
});

document.addEventListener("DOMContentLoaded", () => {
    const flashMsgError = document.getElementById("flash-message-error");
    const flashMsgMessage = document.getElementById("flash-message-message");

    if (flashMsgError && flashMsgMessage) {
        Swal.fire({
            icon: flashMsgError.value ? "error" : "success",
            title: flashMsgError.value ? "error" : "success",
            text: flashMsgMessage.value,
            showConfirmButton: false,
            timer: 1500,
        });
    }

    Alpine.start();
});

const confirmDeleteModal = () => ({
    async showModal() {
        const result = await Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        });

        if (result.isConfirmed) {
            this.$root.submit();
        }
    },
});

const setupChoice = () => ({
    init() {
        const choice = new Choices(this.$el);
    },
});

const restocked = () => ({
    change() {
        const qty = parseInt(this.$refs.quantity.value ?? 0);
        const price = parseInt(this.$refs.price.value ?? 0);

        this.$refs.total.textContent = `${formatter.format(qty * price ?? 0)}`;
    },
});

document.addEventListener("alpine:init", () => {
    Alpine.data("confirmDeleteModal", confirmDeleteModal);
    Alpine.data("setupChoice", setupChoice);
    Alpine.data("restocked", restocked);
});
